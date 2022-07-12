<div class="cart-table-area section-padding-100">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-8">
<div class="checkout_details_area mt-50 clearfix">
<div class="cart-title">
<h2>Profile</h2>
</div>
<? //print_r($pelanggan); ?>
<form action="<?php echo site_url().'/Customer/edit' ?>" method="post">
<div class="row">
<div class="col-md-12 mb-3">
<label class="custom-control-label" for="txtnama">Nama Pelanggan</label>
<input type="text" class="form-control" id="txtnama" name="txtnama" value="<?php echo $pelanggan->nama; ?>" placeholder="" required>
</div>
<div class="col-6 mb-3">
<label class="custom-control-label" for="txtemail">Email</label>
<input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="" value="<?php echo $pelanggan->email; ?>">
</div>
<div class="col-6 mb-3">
<label class="custom-control-label" for="">Telp</label>
<input type="text" class="form-control" id="txttelp" name="txttelp" placeholder="" value="<?php echo $pelanggan->telp; ?>">
</div>
<div class="col-12 mb-3">
<label class="custom-control-label" for="">Provinsi</label>
<input type="text" class="form-control" id="txtprovinsi" name="txtprovinsi" placeholder="" value="<?php echo $pelanggan->provinsi; ?>">
</div>
<div class="col-12 mb-3">
<label class="custom-control-label" for="">Kota/Kab</label>
<input type="text" class="form-control" id="txtkota" name="txtkota" placeholder="" value="<?php echo $pelanggan->kota; ?>">
</div>
<div class="col-12 mb-3">
<label class="custom-control-label" for="txtalamat">AlamatPengiiman</label>
<input type="text" class="form-control" id="txtalamat" name="txtalamat" placeholder="" value="<?php echo $pelanggan->alamat;?>">
</div>
<div class="col-8 mb-3">
<label class="custom-control-label" for="">Kode Pos</label>
<input type="text" class="form-control" id="txtkodepos" name="txtkodepos" placeholder="" value="<?php echo $pelanggan->kodepos; ?>">
</div>
<div class="col-6 mb-3">
<input type="submit" class="btn amado-btn w-100" value="Simpan">
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div