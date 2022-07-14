<?php
Class Model_cart extends CI_Model 
{

    public function insert_cart($data)
    {
        $date = date("Y-m-d",$data['tgl_order']);
        $sql="insert into web_order(trans_id,id_plg,tgl_order,harga,kode,qty)
        values('".$data['trans_id']."','".$data['id_plg']."','$date','".$data['harga']."','".$data['kode_brg']."','".$data['qty']."')";
        
        // $sql_detail="insert into web_order_detail(trans_id,kode_brg,harga,qty,bayar)
        // values('$data[trans_id]','$data[kode_brg]','$data[harga]','$data[qty]','$data[total_bayar]')";
        

        //insert order and order detail
        if($this->db->query($sql)) // && $this->db->query($sql_detail))
            return true;    
        else
            return false;

    }
    public function get_cart($id)
    {
        // var_dump($id);
        // exit();
        $sql="select * from web_order where id_plg='$id' order by
        trans_id desc";
        return $this->db->query($sql)->result();
    }
    public function update_cart($data)
    {
        $sql="UPDATE web_order SET qty='".$data['qty']."',harga='".$data['harga']."' WHERE kode='".$data['kode_brg']."' AND id_plg='".$data['id_plg']."' ";
        // var_dump($sql);
        // exit();
        return $this->db->query($sql);
    }
    public function delete_cart($data)
    {
        $sql="DELETE FROM web_order WHERE kode='".$data['kode_brg']."' AND id_plg='".$data['id_plg']."' ";
        return $this->db->query($sql);
    }
}