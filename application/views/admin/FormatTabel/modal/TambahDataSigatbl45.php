<div class="modal fade " id="TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <input hidden type="text" name="idKategoriData" value="<?php echo $GetDataIdKategori->idKategoriData ?>">
                    <input hidden type="text" name="idJudulData" value="<?php echo $GetDataIdJudul->idJudulData ?>">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Jenis Kekerasan:</label>
                            <select required name="jenisKekerasan" id="jenisKekerasan" class="form-control" style="width:100%;">
                                <option value="">Pilih...</option>
                                <option value="Fisik">Fisik</option>
                                <option value="Psikis">Psikis</option>
                                <option value="Psikis Caten">Psikis Caten</option>
                                <option value="Seksual">Seksual</option>
                                <option value="Seksual Caten">Seksual Caten</option>
                                <option value="Penelantaran">Penelantaran</option>
                                <option value="Trafficking">Trafficking</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Jenis Orang :</label>
                            <select required name="jenisOrang" id="jenisOrang" class="form-control" style="width:100%;">
                                <option value="">Pilih...</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Anak">Anak</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Jenis Kelamin :</label>
                            <select required name="jenisKelamin" id="jeniskelamin" class="form-control" style="width:100%;">
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
    $('#jenisKekerasan').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih ..."
    });
    $('#jenisOrang').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih ..."
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