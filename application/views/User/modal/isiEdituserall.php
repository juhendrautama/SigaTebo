<?php if ($GetDataIdUser->level == '1') {
} else { ?>
    <div class="row">
        <div class="form-group col-md-12">
            <label class="col-form-label"> Unit Kerja :</label>
            <select required name="idUnitKerja" id="unitedit" class="form-control" style="width:100%;">
                <option value="<?= $GetDataIdUser->idUnitKerja; ?>">Pillih Unit</option>
                <?php foreach ($GetDataunit->result() as $row) { ?>
                    <option value="<?= $row->idUnitKerja; ?>"><?= $row->namaUnit; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
<?php } ?>

<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Nama :</label>
        <input hidden type="text" name="id" value="<?php echo $GetDataIdUser->id_admin ?>">
        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->nama_admin ?>" name="nama_admin" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label class="col-form-label"> User :</label>
        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->user ?>" name="user" required>
    </div>
    <div class="form-group col-md-6">
        <label class="col-form-label"> Password :</label>
        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->pass_samaran ?>" name="pass" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> No Telpon :</label>
        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->no_tlpn ?>" name="no_tlpn" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Alamat :</label>
        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->alamat ?>" name="alamat" required>
    </div>
</div>

<input hidden type="text" name="level" value="<?php echo $GetDataIdUser->level ?>">
<script>
    $('#unitedit').select2({
        dropdownParent: $('#editDataUser'),
        placeholder: "Pilih unit..."
    });
</script>