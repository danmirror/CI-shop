<div class="section-padding-100">
<div class="container-fluid">
<div>
<div class="col-12 col-lg-12">
<div class="cart-title mt-20">
<h2>Riwayat Pembelian</h2>
</div>
<div style="width:900px">
<table class="table table-responsive">
<thead>
<tr>
<td>No</td>
<td>Transaksi ID</td>
<td>Tgl Order</td>
<td>Total bayar</td>
<td>Metode Bayar</td>
<td>Bukti Bayar</td>
<td>Status</td>
<td>Aksi</td>
</tr>
</thead>
<tbody>
<?php
$no=1;
$metode=array('COD','Transfer');
$status=array('Belum Dibayar','Menunggu Konfirmasi','Telah
Dibayar','Pengiriman', 'Selesai');
foreach($order as $data) {
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $data->trans_id; ?></td>
<td><?php echo $data->tgl_order; ?></td>
<td><?php echo number_format($data->total_bayar,2,',','.'); ?></td>
<td><?php echo $metode[$data->metodebayar]; ?></td>
<td></td>
<td><font color=green>
<?php echo $status[$data->status]; ?>
</font>
</td>
<td>
<a href="#" class="btn amado-btn">
<img src="<?php echo
base_url().'/assets/template/'; ?>img/core-img/topupload.png" alt=""
width=24 height=24>Upload Bukti</a>
<br><br>
<a href="#" class="btn amado-btn">
<img src="<?php echo
base_url().'/assets/template/'; ?>img/core-img/topcart.jpg" alt=""
width=24 height=24>Lihat Detail</a>
</td>
</tr>
<?php
$no++;
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->
