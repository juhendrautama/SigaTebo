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
                            <label class="col-form-label">Kategori Wilayah :</label>
                            <select required name="wilayah" id="wilayah" class="form-control" style="width:100%;" onchange="cekjenisData()">
                                <option value="">Pillih</option>
                                <option value="Perwira Tinggi (Pati)">Perwira Tinggi (Pati)</option>
                                <option value="Perwira Menengah (Pamen)">Perwira Menengah (Pamen)</option>
                                <option value="Perwira Pertama (Pama)">Perwira Pertama (Pama)</option>
                                <option value="Bintara">Bintara</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <div id="jenisdataTampil0" style="display:blok;">
                                <label class="col-form-label"> Jenis Data :</label>
                                <select name="j" id="jenisdata0" class="form-control" style="width:100%;">
                                    <option value="">Pilih...</option>
                                </select>
                            </div>

                            <div id="jenisdataTampil1" style="display:none;">
                                <label class="col-form-label"> Jenis Data Pati :</label>
                                <select name="jenisdata1" id="jenisdata1" class="form-control" style="width:100%;">
                                    <option value="">Pilih...</option>
                                    <option value="Brigadir Jendral Polisi">Brigadir Jendral Polisi</option>
                                </select>
                            </div>
                            <div id="jenisdataTampil2" style="display:none;">
                                <label class="col-form-label"> Jenis Data Pamen :</label>
                                <select name="jenisdata2" id="jenisdata2" class="form-control" style="width:100%;">
                                    <option value="">Pilih...</option>
                                    <option value="Komisaris Besar Polisi">Komisaris Besar Polisi</option>
                                    <option value="Ajun Komisaris Besar Polisi">Ajun Komisaris Besar Polisi</option>
                                    <option value="Komisaris Polisi">Komisaris Polisi</option>

                                </select>
                            </div>
                            <div id="jenisdataTampil3" style="display:none;">
                                <label class="col-form-label"> Jenis Data Pama :</label>
                                <select name="jenisdata3" id="jenisdata3" class="form-control" style="width:100%;">
                                    <option value="">Pilih...</option>
                                    <option value="Ajun Komisaris Polisi">Ajun Komisaris Polisi</option>
                                    <option value="Inspektur Satu Polisi">Inspektur Satu Polisi</option>
                                    <option value="Inspektur Dua Polisi">Inspektur Dua Polisi</option>
                                </select>
                            </div>
                            <div id="jenisdataTampil4" style="display:none;">
                                <label class="col-form-label"> Jenis Data Bintara :</label>
                                <select name="jenisdata4" id="jenisdata4" class="form-control" style="width:100%;">
                                    <option value="Bintara">Bintara</option>
                                </select>
                            </div>

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
    $('#wilayah').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Wilayah..."
    });

    $('#jenisdata').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Sub Wilayah..."
    });

    $('#jeniskelamin').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih..."
    });


    $('#tahun').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Tahun..."
    });

    function cekjenisData(id) {
        let wilayah = $('#wilayah').val();
        if (wilayah == 'Perwira Tinggi (Pati)') {
            $("#jenisdataTampil1").css('display', 'block');
            $("#jenisdataTampil2").css('display', 'none');
            $("#jenisdataTampil3").css('display', 'none');
            $("#jenisdataTampil4").css('display', 'none');
            $("#jenisdataTampil0").css('display', 'none');
        } else if (wilayah == 'Perwira Menengah (Pamen)') {
            $("#jenisdataTampil1").css('display', 'none');
            $("#jenisdataTampil2").css('display', 'block');
            $("#jenisdataTampil3").css('display', 'none');
            $("#jenisdataTampil4").css('display', 'none');
            $("#jenisdataTampil0").css('display', 'none');
        } else if (wilayah == 'Perwira Pertama (Pama)') {
            $("#jenisdataTampil1").css('display', 'none');
            $("#jenisdataTampil2").css('display', 'none');
            $("#jenisdataTampil3").css('display', 'block');
            $("#jenisdataTampil4").css('display', 'none');
            $("#jenisdataTampil0").css('display', 'none');
        } else if (wilayah == 'Bintara') {
            $("#jenisdataTampil1").css('display', 'none');
            $("#jenisdataTampil2").css('display', 'none');
            $("#jenisdataTampil3").css('display', 'none');
            $("#jenisdataTampil4").css('display', 'block');
            $("#jenisdataTampil0").css('display', 'none');
        } else {
            $("#jenisdataTampil0").css('display', 'block');
        }
    }
</script>