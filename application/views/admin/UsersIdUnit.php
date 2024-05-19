<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/tools/head'); ?>
</head>

<body class="hold-transition sidebar-mini">


    <div class="wrapper">
        <!-- MENU ATAS -->
        <?php $this->load->view('admin/tools/menu_atas'); ?>
        <!-- MENU ATAS-->

        <!-- MENU SAMPING -->
        <?php $this->load->view('admin/tools/menu_samping'); ?>
        <!-- MENU SAMPING -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header">
                            <a href="adminpanel/Unit" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>
                            <center>
                                <h5><b>Data User <?php echo $GetDataIdUnit->namaUnit ?></b></h5>
                            </center>
                        </div>
                        <div class="card-body table-responsive">
                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal"
                                data-target="#TambahUserUnit">
                                <i class="nav-icon  fas fa-plus"></i> Tambah User
                            </a>
                            <?php $this->load->view('admin/modal/TambahUserUnit'); ?>
                            <hr>
                            <table id="dataTable" class="table table-bordered table-hover"
                                style="font-size:14px; width:100%;">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama</td>
                                        <td>User</td>
                                        <td>Tanggal</td>
                                        <td>
                                            <center>Aksi</center>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetUserIdUnit->result() as $row) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->nama_admin; ?></td>
                                        <td><?php echo $row->user; ?></td>
                                        <?php setlocale(LC_TIME, 'id_ID'); ?>
                                        <td><?php echo date('d F Y', strtotime($row->tgl)); ?>
                                        </td>
                                        <td align="center">
                                            <?php if ($row->level == '1') {
                                                } else { ?>
                                            <a href="adminpanel/Unit/HapusDataUser/<?php echo $row->id_admin; ?>/<?php echo $row->idUnitKerja; ?>"
                                                Onclick="return confirm('apakah yakin ingin di Hapus ?');"
                                                class="btn btn-warning btn-sm elevation-1">
                                                <i class="nav-icon  fas fa-trash"></i>
                                            </a>
                                            <?php } ?>

                                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal"
                                                data-target="#editDataUser" data-id='<?php echo $row->id_admin; ?>'>
                                                <i class="nav-icon  fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->load->view('admin/tools/footer'); ?>
    </div>
    <!-- Modal data -->
    <div class="modal fade " id="editDataUser" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-edit"></i> Ubah Data User
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="adminpanel/Unit/SimpanUbahUser" method="POST">
                    <div class="modal-body isiEditUser">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm" name="proses">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal data -->
    <?php $this->load->view('admin/tools/js_footer'); ?>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#dataTable').DataTable();
});
$('#editDataUser').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    var idUnit = $(e.relatedTarget).data('idUnit');
    $.ajax({
        type: 'post',
        url: "<?php echo base_url(); ?>adminpanel/Unit/GetDataIdUser",
        data: {
            id: id,
            idUnit: idUnit
        },
        success: function(data) {
            $('.isiEditUser').html(data);
        }
    });
});
</script>

</html>