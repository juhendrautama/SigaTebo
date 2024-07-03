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
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Pangkat/Golongan/Ruang :</label>
                            <select required name="pGolonganR" id="pGolonganR" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Pangkat/Golongan/Ruang...</option>
                                <option value="Eselon I">Eselon I</option>
                                <option value="Eselon II">Eselon II</option>
                                <option value="Eselon III">Eselon III</option>
                                <option value="Eselon IV">Eselon IV</option>
                                <option value="Eselon V">Eselon V</option>
                                <option value="Fungsional Umum">Fungsional Umum</option>
                                <option value="Fungsional Tertentu">Fungsional Tertentu</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
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
    $('#pGolonganR').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Pangkat/Golongan/Ruang..."
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