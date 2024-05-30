<div class="modal fade " id="TambahKec" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    <i class="nav-icon fa fa-edit"></i> Tambah Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adminpanel/DataKec/SimpanData" method="POST" enctype="multipart/form-data">
                <div class="modal-body ">

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-form-label"> Nama Kecamatan :</label>
                            <input class="form-control" type="text" value="" name="namaKec" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label"> Desa :</label>
                            <input class="form-control" type="number" value="" name="jumdesa" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label"> Kelurahan :</label>
                            <input class="form-control" type="number" value="" name="jumkel" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label"> Luas :</label>
                            <input class="form-control" type="text" value="" name="luas" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label"> Dusun :</label>
                            <input class="form-control" type="number" value="" name="jumdusun" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label"> RT :</label>
                            <input class="form-control" type="number" value="" name="jumrt" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label"> RW :</label>
                            <input class="form-control" type="number" value="" name="jumrw" required>
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