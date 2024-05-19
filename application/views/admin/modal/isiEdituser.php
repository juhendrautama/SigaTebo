<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Nama :</label>
        <input hidden type="text" name="id" value="<?php echo $GetDataIdUser->id_admin ?>">
        <input hidden type="text" name="idUnitKerja" value="<?php echo $GetDataIdUser->idUnitKerja ?>">
        <input class="form-control" type="text" value="<?php echo $GetDataIdUser->nama_admin ?>" name="nama_admin"
            required>
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
<?php if ($GetDataIdUser->level == '1'){}else{ ?>
<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Status : </label>
        <select name="KodeLogin" class="form-control">
            <?php if ($GetDataIdUser->KodeLogin == '1') { ?>
            <option selected value="1">Aktip</option>
            <option value="2">Tidak Aktip</option>
            <?php } else { ?>
            <option value="1">Aktip</option>
            <option selected value="2">Tidak Aktip</option>
            <?php } ?>
        </select>
    </div>
</div>
<?php } ?>

<input hidden type="text" name="level" value="<?php echo $GetDataIdUser->level ?>">