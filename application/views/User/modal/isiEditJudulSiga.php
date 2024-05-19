<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label">Kategori Siga :</label>
        <select required name="idKategoriData" id="kategori" class="form-control" style="width:100%;">
            <option value="<?= $GetDataIdJudul->idKategoriData; ?>" selected>Pilih Kategori...</option>
            <?php foreach ($GetKategoriAll->result() as $row) { ?>
            <option value="<?= $row->idKategoriData; ?>"><?= $row->nama; ?></option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label class="col-form-label"> Judul :</label>
        <input hidden type="text" name="id" value="<?= $GetDataIdJudul->idJudulData; ?>">
        <input class="form-control" type="text" value="<?= $GetDataIdJudul->judul; ?>" name="judul" required>
    </div>
</div>
<script>
$('#kategori').select2({
    dropdownParent: $('#editDataJudulSiga'),
    placeholder: "Pilih unit..."
});
</script>