<div class="cart-table-area section-padding-100">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-10">
<div class="checkout_details_area mt-50 clearfix">
<div class="cart-title">
<h2>Checkout Report</h2>
</div>
<div>
<p>Kepada pelanggan yang terhormat, sebelumnya kami ucapkan terima
kasih atas kepercayaan anda kepada kami atas transaksi yang telah anda
lakukan, berikut ini kami sampaikan detail report transaksi anda yang
telah anda lakukan : </p>
<?php //print_r($order); ?>
<div class="row">
<div class="col-4 mb-3">
<p>Trans ID</p>
</div>
<div class="col-4 mb-3">
<p><?php echo $order[0]->trans_id; ?></p>
</div>
</div>
<div class="row">
<div class="col-4 mb-3">
<p>ID / Nama Pelanggan</p>
</div>
<div class="col-4 mb-3">
<p><?php echo $order[0]->id_plg.' / '.$order[0]->nama;
?></p>
</div>
</div>
<div>
<p>Berikut ini detail item barang yang anda beli: </p>
</div>
<table width=100%>
<tr>
<td>No</td>
<td>Merk</td>
<td>Harga</td>
<td>qty</td>
<td>Bayar</td>
</tr>
<tbody>
<?php   
$no=1;
foreach($order as $data){
?>
<tr>
<td style="width:50px"><?php echo $no; ?></td>
<td><?php echo $data->merk; ?></td>
<td>Rp.<?php echo number_format($data->harga_jual,2,',','.');
?></td>
<td><?php echo $data->qty; ?></td>
<td>Rp.<?php echo number_format($data->bayar,2,',','.'); ?></td>
</tr>
<?php $no++; } ?>
</tbody>
</table>
<hr>
<div class="row">
<div class="col-4 mb-3">
<p>Subtotal</p>
</div>
<div class="col-4 mb-3">
<p>Rp. <?php echo number_format($order[0]->subtotal,2,',','.'); ?></p>
</div>
</div>
<div class="row">
<div class="col-4 mb-3">
<p>Ongkos Kirim</p>
</div>
<div class="col-4 mb-3">
<p><?php echo $order[0]->ongkir; ?></p>
</div>
</div>
<div class="row">
<div class="col-4 mb-3">
<p>Total Bayar</p>
</div>
<div class="col-4 mb-3">
<p>Rp. <?php echo number_format($order[0]->total_bayar,2,',','.'); ?></p>
</div>
</div>
<p>
Selanjutnya berdasarkan profile pribadi anda, maka pemesanan ini akan
kami kirimkan pada :
</p>
<div class="row">
<div class="col-4 mb-3">
<p>Alamat Pengiriman</p>
</div>
<div class="col-4 mb-3">
<p><?php echo $order[0]->alamat_kirim; ?></p>
</div>
</div>
<div class="row">
<div class="col-4 mb-3">
<p>Kota</p>
</div>
<div class="col-4 mb-3">
<p><?php echo $order[0]->kota; ?></p>
</div>
</div>
<div class="row">
<div class="col-4 mb-3">
<p>Provinsi</p>
</div>
<div class="col-4 mb-3">
<p><?php echo $order[0]->provinsi; ?></p>
</div>
</div>
<div class="row">
<div class="col-4 mb-3">
<p>Telp</p>
</div>
<div class="col-4 mb-3">
<p><?php echo $order[0]->telp; ?></p>
</div>
</div>
<p>
Jika terdapat kekeliruan pada data tersebut, silahkan perbaiki kembali
profil anda. atau silahkan kontak customer service kami. </p>
<p>Terima kasih atas partisipasinya, silahkan lakukan pembayaran
sesuai dengan total pembayaran tansaksi anda. Pembayaran dapat anda
lakukan pada :
<br>1. Bank BCA. No Rek : 88998762339, Atas Nama : Smart Picture
<br>2. Bank MANDIRI. No Rek : 786442-087-08, Atas Nama : Smart Picture
</p>
<p>
Silahkan hubungi kami pada (021)-76776232 / (021)-88998239 untuk
informasi pembayaran serta konfirmasi setelah transaksi pembayaran
dilakukan, pengiriman akan dilakukan maksimal 3 hari setelah
pembayaran.
<br><br><br>
Hormat Kami
<br><br><br>
Smart Picture
<br><br><br>
<?php
$tgl=$order[0]->tgl_order;
$tgl=date_create($tgl);
date_add($tgl,date_interval_create_from_date_string("10 days"));
?>
<b>note </b>: <i>transaksi akan dihapus pada <?php echo
"".date_format($tgl,"d/m/Y"); ?>
(10 hari setelah tanggal pemesanan) jika hingga sampai tanggal
tersebut
pembayaran tidak dilakukan.</i>
<br>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>