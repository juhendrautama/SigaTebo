<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Nama :</label>
        <input type="text" name="id" hidden value="<?= $GetDataIdUnit->idUnitKerja; ?>">
        <input class="form-control" type="text" value="<?= $GetDataIdUnit->namaUnit; ?>" name="namaUnit" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Alamat :</label>
        <input class="form-control" type="text" value="<?= $GetDataIdUnit->alamat; ?>" name="alamat" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label class="col-form-label"> Lat :</label>
        <input class="form-control" type="text" value="<?= $GetDataIdUnit->lat; ?>" name="lat" required>
    </div>
    <div class="form-group col-md-6">
        <label class="col-form-label"> Long :</label>
        <input class="form-control" type="text" value="<?= $GetDataIdUnit->long; ?>" name="long" required>
    </div>
</div>