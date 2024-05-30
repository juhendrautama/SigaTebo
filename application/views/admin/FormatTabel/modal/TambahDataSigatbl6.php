<div class="modal fade " id="TambahDataSigatbl6" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data Siga Tabel 6
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
                        <div class="form-group col-md-12">
                            <label class="col-form-label">Kabupaten :</label>
                            <select required name="kabupaten" id="kabupaten" class="  form-control" style="width:100%;">
                                <option value="Tebo" selected>Tebo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="col-form-label"> Nilai IPM :</label>
                            <input class="form-control" type="number" value="" name="ipm" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="col-form-label"> Nilai IPG :</label>
                            <input class="form-control" type="number" value="" name="ipg" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="col-form-label"> Nilai IDG :</label>
                            <input class="form-control" type="number" value="" name="idg" required>
                        </div>
                        <div class="form-group col-md-3">
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
$('#kabupaten').select2({
    dropdownParent: $('#TambahDataSigatbl6'),
    placeholder: "Pilih Keb..."
});
$('#jeniskelamin').select2({
    dropdownParent: $('#TambahDataSigatbl6'),
    placeholder: "Pilih..."
});

$('#tahun').select2({
    dropdownParent: $('#TambahDataSigatbl6'),
    placeholder: "Pilih Tahun..."
});
</script>