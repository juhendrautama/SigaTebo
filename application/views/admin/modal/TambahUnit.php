<div class="modal fade " id="TambahUnit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data Unit
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adminpanel/Unit/SimpanData" method="POST" enctype="multipart/form-data">
                <div class="modal-body ">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Nama :</label>
                            <input class="form-control" type="text" value="" name="namaUnit" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Alamat :</label>
                            <input class="form-control" type="text" value="" name="alamat" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Lat :</label>
                            <input class="form-control" type="text" value="" name="lat" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label"> Long :</label>
                            <input class="form-control" type="text" value="" name="long" required>
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