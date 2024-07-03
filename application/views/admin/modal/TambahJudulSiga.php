<div class="modal fade " id="TambahJudulSiga" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data Judul Siga
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adminpanel/JudulDataSiga/SimpanData" method="POST" enctype="multipart/form-data">
                <div class="modal-body ">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label">Unit Kerja :</label>
                            <select required name="idUnitKerja" id="idUnitKerja" class="form-control"
                                style="width:100%;">
                                <option value="" disabled selected>Pilih Unit..</option>
                                <?php foreach ($GetUnitAll->result() as $row) { ?>
                                <option value="<?= $row->idUnitKerja; ?>"><?= $row->namaUnit; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label">Kategori Siga :</label>
                            <select required name="idKategoriData" id="kategori" class="form-control"
                                style="width:100%;">
                                <option value="" disabled selected>Pilih Kategori...</option>
                                <?php foreach ($GetKategoriAll->result() as $row) { ?>
                                <option value="<?= $row->idKategoriData; ?>"><?= $row->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label">Format Tabel :</label>
                            <select required name="formatTabel" id="idformatTabel" class="form-control"
                                style="width:100%;">
                                <option value="" disabled selected>Pilih Format Tabel..</option>
                                <?php // for ($i = 2; $i <= 52; $i++) { ?>
                                <!-- <option value="<?= $i; ?>"><?= $i; ?></option> -->
                                <?php // } ?>
                                <?php foreach ($GetAllformatTabel->result() as $row) { ?>
                                <option value="<?= $row->nilaiFormat; ?>"> Tabel <?= $row->nilaiFormat; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Judul :</label>
                            <input class="form-control" type="text" value="" name="judul" required>
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