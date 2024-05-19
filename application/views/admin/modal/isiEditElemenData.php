<div class="row">
    <div class="form-group col-md-12">
        <input hidden type="text" name="id" value="<?php echo $GetElemenDataId->idElemenData ?>">
        <input hidden type="text" name="idUnitKerja" value="<?php echo $GetElemenDataId->idUnitKerja ?>">

        <input hidden type="text" name="idKategoriData" value="<?php echo $GetElemenDataId->idKategoriData ?>">

        <input hidden type="text" name="idJudulData" value="<?php echo $GetElemenDataId->idJudulData ?>">

        <label class="col-form-label"> Nama Elemen Data:</label>
        <input class="form-control" type="text" value="<?php echo $GetElemenDataId->nama ?>" name="nama" required>
    </div>
</div>