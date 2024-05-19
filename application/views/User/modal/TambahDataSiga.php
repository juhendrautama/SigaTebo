<div class="modal fade " id="TambahDataSiga" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data Siga
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adminpanel/DataSigaUser/SimpanDataSiga" method="POST" enctype="multipart/form-data">
                <div class="modal-body ">
                    <input hidden type="text" name="idUnitKerja"
                        value="<?php echo $this->session->userdata('idUnitKerja'); ?>">

                    <input hidden type="text" name="idKategoriData"
                        value="<?php echo $GetDataIdJudul->idKategoriData ?>">

                    <input hidden type="text" name="idJudulData" value="<?php echo $GetDataIdJudul->idJudulData ?>">

                    <div class="row">
                        <div class="form-group col-md-8">
                            <label class="col-form-label">Elemen Data :</label>
                            <select required name="idElemenData" id="unit" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih Elemen Data...</option>

                                <?php foreach ($GetElemenData->result() as $row) { ?>
                                <option value="<?= $row->idElemenData; ?>"><?= $row->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label"> Nilai Data :</label>
                            <input class="form-control" type="number" value="" name="nilaiData" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Satuan :</label>
                            <input class="form-control" type="text" value="" name="satuan" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Tanggal :</label>
                            <input class="form-control" type="date" value="" name="tgl" required>
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