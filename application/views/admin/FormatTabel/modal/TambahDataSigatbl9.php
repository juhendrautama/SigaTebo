<div class="modal fade " id="TambahDataSigatbl9" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <label class="col-form-label">UPT Puskesmas :</label>
                            <select required name="uptPuskesmas" id="uptPuskesmas" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih UPT Puskesmas...</option>
                                <?php foreach ($GetDatauptPuskesmas->result() as $row) { ?> ?>
                                    <option value="<?php echo $row->idPuskesmas; ?>">
                                        <?php echo $row->nama; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Jenis Data :</label>
                            <select required name="jenisData" id="jd" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Jenis...</option>
                                <option value="Jumlah Kelahiran">Jumlah Kelahiran</option>
                                <option value="Jumlah Persalinan">Jumlah Persalinan</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Bidan">Bidan</option>
                                <option value="Dukun">Dukun</option>
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
    $('#kecamatan').select2({
        dropdownParent: $('#TambahDataSigatbl9'),
        placeholder: "Pilih Kec..."
    });
    $('#jd').select2({
        dropdownParent: $('#TambahDataSigatbl9'),
        placeholder: "Pilih..."
    });

    $('#uptPuskesmas').select2({
        dropdownParent: $('#TambahDataSigatbl9'),
        placeholder: "Pilih..."
    });

    $('#tahun').select2({
        dropdownParent: $('#TambahDataSigatbl9'),
        placeholder: "Pilih Tahun..."
    });
</script>