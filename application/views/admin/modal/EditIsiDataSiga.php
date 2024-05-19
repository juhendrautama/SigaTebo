<input hidden type="text" name="id" value="<?php echo $GetDataIdSiga->idDataDasar ?>">

<input hidden type="text" name="idUnitKerja" value="<?php echo $GetDataIdSiga->idUnitKerja ?>">

<input hidden type="text" name="idKategoriData" value="<?php echo $GetDataIdSiga->idKategoriData ?>">

<input hidden type="text" name="idJudulData" value="<?php echo $GetDataIdSiga->idJudulData ?>">

<div class="row">
    <div class="form-group col-md-8">

        <label class="col-form-label">Elemen Data:</label>
        <select required name="idElemenData" id="elemendata" class="form-control" style="width:100%;">
            <option value="<?php echo $GetDataIdSiga->idElemenData ?>" selected>Pilih Elemen Data...</option>
            <?php foreach ($GetElemenData->result() as $row) { ?>
                <option value="<?= $row->idElemenData; ?>"><?= $row->nama; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label class="col-form-label"> Nilai Data :</label>
        <input class="form-control" type="number" value="<?php echo $GetDataIdSiga->nilaiData ?>" name="nilaiData" required>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label class="col-form-label"> Satuan :</label>
        <input class="form-control" type="text" value="<?php echo $GetDataIdSiga->satuan ?>" name="satuan" required>
    </div>
    <div class="form-group col-md-6">
        <label class="col-form-label"> Tanggal :</label>
        <input class="form-control" type="date" value="<?php echo $GetDataIdSiga->tgl ?>" name="tgl" required>
    </div>
</div>

<script>
    $('#elemendata').select2({
        dropdownParent: $('#editDataSiga')
    });
</script>