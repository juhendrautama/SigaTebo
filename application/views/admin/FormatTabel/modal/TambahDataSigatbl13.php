<div class="modal fade " id="TambahDataSigatbl13" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <label class="col-form-label">Kecamatan :</label>
                            <select required name="idKec" id="kecamatan" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Kecamatan...</option>
                                <?php foreach ($GetDataKec->result() as $row) { ?> ?>
                                    <option value="<?php echo $row->idKec; ?>">
                                        <?php echo $row->namaKec; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Jenis Kelamin :</label>
                            <select required name="jenisKelamin" id="jeniskelamin" class="form-control" style="width:100%;" onchange="cekjeniskb()">
                                <option value="">Pilih...</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <div id="jeniskb" style="display:blok;">
                                <label class="col-form-label"> Jenis KB :</label>
                                <select name="j" id="jenisdata0" class="form-control" style="width:100%;">
                                    <option value="">Pilih...</option>
                                </select>
                            </div>
                            <div id="jeniskbP" style="display:none;">
                                <label class="col-form-label"> Jenis KB Perempuan :</label>
                                <select name="jenisdataP" id="jenisdata1" class="form-control" style="width:100%;">
                                    <option value="">Pilih...</option>
                                    <option value="Suntik">Suntik</option>
                                    <option value="Pil">Pil</option>
                                    <option value="Implan">Implan</option>
                                    <option value="UID">UID</option>
                                    <option value="Tubektomi">Tubektomi</option>
                                    <option value="Mal">Mal</option>
                                </select>
                            </div>
                            <div id="jeniskbL" style="display:none;">
                                <label class="col-form-label"> Jenis KB Laki-Laki :</label>
                                <select name="jenisdataL" id="jenisdata2" class="form-control" style="width:100%;">
                                    <option value="">Pilih...</option>
                                    <option value="Kondom">Kondom</option>
                                    <option value="Vasektomi">Vasektomi</option>
                                </select>
                            </div>
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
        dropdownParent: $('#TambahDataSigatbl13'),
        placeholder: "Pilih Kec..."
    });
    $('#jeniskelamin').select2({
        dropdownParent: $('#TambahDataSigatbl13'),
        placeholder: "Pilih..."
    });

    $('#jenisdata0').select2({
        dropdownParent: $('#TambahDataSigatbl13'),

    });
    $('#jenisdata1').select2({
        dropdownParent: $('#TambahDataSigatbl13'),

    });
    $('#jenisdata2').select2({
        dropdownParent: $('#TambahDataSigatbl13'),

    });

    $('#tahun').select2({
        dropdownParent: $('#TambahDataSigatbl13'),
        placeholder: "Pilih Tahun..."
    });

    function cekjeniskb(id) {
        let jk = $('#jeniskelamin').val();


        if (jk == 'L') {
            $("#jeniskbL").css('display', 'block');
            $("#jeniskbP").css('display', 'none');
            $("#jeniskb").css('display', 'none');
        } else if (jk == 'P') {
            $("#jeniskbP").css('display', 'block');
            $("#jeniskbL").css('display', 'none');
            $("#jeniskb").css('display', 'none');
        } else {
            $("#jeniskb").css('display', 'block');
        }
    }
</script>