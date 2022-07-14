<?php
Class Model_shopping extends CI_Model 
{
    public function get_order_byid($id)
    {
        return $this->db->query("select p.nama,p.telp, o.*, od.kode_brg,
        od.harga_jual, od.qty, od.bayar, b.merk, b.foto
        from web_barang b, web_order o, web_order_detail od, web_pelanggan p
        where o.id_plg=p.id and b.kode=od.kode_brg and o.trans_id=od.trans_id
        and o.trans_id='$id'")->result();
    }
    public function get_order_byidpelanggan($id)
    {
        $sql="select * from web_order where id_plg='$id' order by
        trans_id desc";
        return $this->db->query($sql)->result();
    }
    public function save($data)
    {
        $sql="insert into web_order(trans_id, id_plg, tgl_order, subtotal,
        ongkir, total_bayar, alamat_kirim, kota, provinsi, kodepos,
        metodebayar)values ('".$data['transid']."',
        '".$data['checkout']['idpelanggan']."',
        '".$data['checkout']['tglorder']."','".$data['checkout']['subtotal']."
        ', '".$data['checkout']['ongkir']."',
        '".$data['checkout']['totalbayar']."',
        '".$data['checkout']['alamat']."', '".$data['checkout']['kota']."',
        '".$data['checkout']['provinsi']."',
        '".$data['checkout']['kodepos']."',
        '".$data['checkout']['metodebayar']."')";
        $this->db->query($sql);
        foreach($data['cart'] as $cart){
        $transid=$data['transid'];
        $kodebarang=$cart['id'];
        $hargajual=$cart['price'];
        $qty=$cart['qty'];
        $bayar=$cart['subtotal'];
        $sql="insert into
        web_order_detail(trans_id,kode_brg,harga_jual,qty,bayar)
        values('$transid','$kodebarang','$hargajual','$qty','$bayar')";
        $this->db->query($sql);
        } 
    } 
}
?>
