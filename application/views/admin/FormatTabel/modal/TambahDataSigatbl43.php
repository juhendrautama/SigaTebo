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
                            <label class="col-form-label">Jenis :</label>
                            <select required name="jenisData" id="jenisData" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Jenis...</option>
                                <option value="Rumah Tahanan">Rumah Tahanan</option>
                                <option value="Lembaga Pemasyarakatan">Lembaga Pemasyarakatan</option>
                                <option value="Lembaga Pembinaan Khusus Anak (LPKA)">Lembaga Pembinaan Khusus Anak
                                    (LPKA)</option>

                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Jenis Kasus :</label>
                            <select required name="jenisKasus" id="jenisKasus" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Jenis...</option>
                                <option value="pembunuhan">Pembunuhan</option>
                                <option value="pencurian">Pencurian</option>
                                <option value="pemerkosaan">Pemerkosaan</option>
                                <option value="asusila">Asusila</option>
                                <option value="napza">NAPZA</option>
                                <option value="kdrt">KDRT</option>
                                <option value="korupsi">Korupsi</option>
                                <option value="Lainnya">Lainnya</option>
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
    $('#jenisData').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Jenis..."
    });

    $('#jenisKasus').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Jenis..."
    });


    $('#tahun').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Tahun..."
    });
</script>