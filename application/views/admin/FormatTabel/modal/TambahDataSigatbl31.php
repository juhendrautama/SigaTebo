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
                            <label class="col-form-label">Partai Politik :</label>
                            <select required name="partaipolitik" id="partaipolitik" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Partai Politik...</option>
                                <option value="Partai Kebangkitan Bangsa">Partai Kebangkitan Bangsa</option>
                                <option value="Partai Gerakan Indonesia Raya">Partai Gerakan Indonesia Raya</option>
                                <option value="Partai Demokrasi Indonesia Perjuangan">Partai Demokrasi Indonesia
                                    Perjuangan</option>
                                <option value="Partai Golongan Karya (Golkar)">Partai Golongan Karya (Golkar)</option>
                                <option value="Partai Nasional Demokrat (NasDem)">Partai Nasional Demokrat (NasDem)
                                </option>
                                <option value="Partai Buruh">Partai Buruh</option>
                                <option value="Partai Gelombang Rakyat Indonesia">Partai Gelombang Rakyat Indonesia
                                </option>
                                <option value="Partai Keadilan Sejahtera">Partai Keadilan Sejahtera</option>
                                <option value="Partai Kebangkitan Nusantara">Partai Kebangkitan Nusantara</option>
                                <option value="Partai Hati Nurani Rakyat">Partai Hati Nurani Rakyat</option>
                                <option value="Partai Garda Perubahan Indonesia">Partai Garda Perubahan Indonesia
                                </option>
                                <option value="Partai Amanat Nasional">Partai Amanat Nasional</option>
                                <option value="Partai Bulan Bintang">Partai Bulan Bintang</option>
                                <option value="Partai Demokrat">Partai Demokrat</option>
                                <option value="Partai Solidaritas Indonesia">Partai Solidaritas Indonesia</option>
                                <option value="Partai Persatuan Indonesia (Perindo)">Partai Persatuan Indonesia
                                    (Perindo)</option>
                                <option value="Partai Persatuan Pembangunan">Partai Persatuan Pembangunan</option>
                                <option value="Partai Nanggroe Aceh">Partai Nanggroe Aceh</option>
                                <option value="Partai Generasi Atjeh Beusaboh Tha'at Dan Taqwa">Partai Generasi Atjeh
                                    Beusaboh Tha'at Dan Taqwa</option>
                                <option value="Partai Darul Aceh">Partai Darul Aceh</option>
                                <option value="Partai Aceh">Partai Aceh</option>
                                <option value="Partai Adil Sejahtera Aceh">Partai Adil Sejahtera Aceh</option>
                                <option value="Partai Soliditas Independent Rakyat Aceh">Partai Soliditas Independent
                                    Rakyat Aceh</option>
                                <option value="Partai Ummat">Partai Ummat</option>

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
    $('#partaipolitik').select2({
        dropdownParent: $('#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>'),
        placeholder: "Pilih Partai Politik..."
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