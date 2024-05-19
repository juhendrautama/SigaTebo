<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Nama :</label>
        <input hidden type="text" name="id" value="<?= $GetDataIdKategori->idKategoriData; ?>">
        <input class="form-control" type="text" value="<?= $GetDataIdKategori->nama; ?>" name="nama" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Ket :</label>
        <textarea class="form-control" name="Ket" id=""><?= $GetDataIdKategori->Ket; ?></textarea>
    </div>
</div>