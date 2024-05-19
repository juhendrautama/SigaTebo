<div class="modal fade " id="TambahUserAll" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data User
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adminpanel/Users/SimpanData" method="POST" enctype="multipart/form-data">
                <div class="modal-body ">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Unit Kerja :</label>
                            <select required name="idUnitKerja" id="unit" class="form-control" style="width:100%;">
                                <option value="" disabled selected>Pilih unit...</option>
                                <?php foreach ($GetDataunit->result() as $row) { ?>
                                    <option value="<?= $row->idUnitKerja; ?>"><?= $row->namaUnit; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Nama :</label>
                            <input class="form-control" type="text" value="" name="nama_admin" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> User :</label>
                            <input class="form-control" type="text" value="" name="user" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Password :</label>
                            <input class="form-control" type="password" value="" name="pass" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> No Telpon :</label>
                            <input class="form-control" type="text" value="" name="no_tlpn" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Alamat :</label>
                            <input class="form-control" type="text" value="" name="alamat" required>
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