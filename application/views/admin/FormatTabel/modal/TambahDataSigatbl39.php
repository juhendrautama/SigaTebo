<div class="modal fade " id="TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>" data-backdrop="static"
    data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data Siga Tabel <?= $GetDataIdJudul->formatTabel ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adminpanel/DataSigaAdmin/SimpanDataSiga" method="POST" enctype="multipart/form-data">
                <div class="modal-body ">
                    <input hidden type="text" name="idUnitKerja" value="<?php echo $GetDataIdUnit->idUnitKerja ?>">
                    <input hidden type="text" name="idKategoriData"
                        value="<?php echo $GetDataIdKategori->idKategoriData ?>">
                    <input hidden type="text" name="idJudulData" value="<?php echo $GetDataIdJudul->idJudulData ?>">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Wilayah :</label>
                            <select required name="wilayah" id="wilayahUnit" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Wilayah...</option>
                                <option value="tebo">Polres Tebo</option>
                                <option value="tebo_ilir">Polsek Tebo Ilir</option>
                                <option value="tengah_ilir">Polsek Tengah Ilir</option>
                                <option value="muara_tabir">Polsek Muara Tabir</option>
                                <option value="tebo_tengah">Polsek Tebo Tengah</option>
                                <option value="sumay">Polsek Sumay</option>
                                <option value="tebo_ulu">Polsek Tebo Ulu</option>
                                <option value="vii_koto">Polsek VII Koto</option>
                                <option value="vii_koto_ilir">Polsek VII Koto Ilir</option>
                                <option value="serai_serumpun">Polsek Serai Serumpun</option>
                                <option value="rimbo_bujang">Polsek Rimbo Bujang</option>
                                <option value="rimbo_ilir">Polsek Rimbo Ilir</option>
                                <option value="rimbo_ulu">Polsek Rimbo Ulu</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-form-label">Jenis Kelamin :</label>
                            <select required name="jenisKelamin" id="jeniskelamin" class="form-control"
                                style="width:100%;">
                                <option value="">Pilih...</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Nilai Data :</label>
                            <input class="form-control" type="number" value="" name="nilai" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Tahun :</label>
                            <select required name="tahun" id="tahun" class="form-control" style="width:100%;">
                                <option value="">Pilih...</option>
                                <?php
                                $startYear = 2022;
                                $currentYear = date("Y"); // Mendapatkan tahun saat ini
                                for ($year = $startYear; $year <= $currentYear; $year++) {
                                    echo "<option value=\"$year\">$year</option>";
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm" name="proses">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('admin/tools/js_footer'); ?>
<script type="text/javascript">
$('#wilayahUnit').select2({
    dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
    placeholder: "Pilih Wilayah..."
});

$('#jeniskelamin').select2({
    dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
    placeholder: "Pilih..."
});


$('#tahun').select2({
    dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
    placeholder: "Pilih Tahun..."
});
</script>