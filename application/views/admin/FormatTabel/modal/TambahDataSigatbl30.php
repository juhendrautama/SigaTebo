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
                                <option value="I/A (Juru Muda)">I/A (Juru Muda)</option>
                                <option value="I/B (Juru Muda Tk.I)">I/B (Juru Muda Tk.I)</option>
                                <option value="I/C (Juru)">I/C (Juru)</option>
                                <option value="I/D (Juru Tk.I)">I/D (Juru Tk.I)</option>
                                <option value="Golongan I">Golongan I</option>
                                <option value="II/A (Pengatur Muda)">II/A (Pengatur Muda)</option>
                                <option value="II/B (Pengantur Muda Tk.I)">II/B (Pengantur Muda Tk.I)</option>
                                <option value="II/C (Pengatur)">II/C (Pengatur)</option>
                                <option value="II/D (Pengatur Tk.I)">II/D (Pengatur Tk.I)</option>
                                <option value="Golongan II">Golongan II</option>
                                <option value="III/A (Penata Muda)">III/A (Penata Muda)</option>
                                <option value="III/B (Penata Muda Tk.I)">III/B (Penata Muda Tk.I)</option>
                                <option value="III/C (Penata)">III/C (Penata)</option>
                                <option value="III/D (Penata Tk.I)">III/D (Penata Tk.I)</option>
                                <option value="Golongan III">Golongan III</option>
                                <option value="IV/A (Pembina)">IV/A (Pembina)</option>
                                <option value="IV/B (Pembina Tk.I)">IV/B (Pembina Tk.I)</option>
                                <option value="IV/C (Pembina Utama Muda)">IV/C (Pembina Utama Muda)</option>
                                <option value="IV/D (Pembina Madya Muda)">IV/D (Pembina Madya Muda)</option>
                                <option value="IV/E (Pembina Utama)">IV/E (Pembina Utama)</option>
                                <option value="Golongan IV">Golongan IV</option>
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