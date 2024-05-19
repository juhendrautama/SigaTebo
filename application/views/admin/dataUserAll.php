<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/tools/head'); ?>
    <link rel="stylesheet" href="AdminLTE/select2/css/select2.min.css">
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
                            <a href="adminpanel/Home" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-tachometer-alt"></i>
                            </a>
                            <center>
                                <h5><b>Data User</b></h5>
                            </center>
                        </div>
                        <div class="card-body table-responsive">
                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahUserAll">
                                <i class="nav-icon  fas fa-plus"></i> Tambah User
                            </a>
                            <?php $this->load->view('admin/modal/TambahUserAll');
                            ?>
                            <hr>
                            <table id="dataTable" class="table table-bordered table-hover" style="font-size:14px; width:100%;">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Unit Kerja</td>
                                        <td>Nama</td>
                                        <td>User</td>
                                        <td>Satus</td>
                                        <td>Tanggal</td>
                                        <td align="center">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetUserAll->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->namaUnit; ?></td>
                                            <td><?php echo $row->nama_admin; ?></td>
                                            <td><?php echo $row->user; ?></td>
                                            <td><?php if ($row->KodeLogin == '1') {
                                                    echo "Aktip";
                                                } else {
                                                    echo "Tidak Aktip";
                                                } ?>
                                            </td>
                                            <?php setlocale(LC_TIME, 'id_ID'); ?>
                                            <td><?php echo date('d F Y', strtotime($row->tgl)); ?>
                                            </td>
                                            <td align="center">
                                                <?php if ($row->level == '1') {
                                                } else { ?>
                                                    <a href="adminpanel/Users/HapusData/<?php echo $row->id_admin; ?>" Onclick="return confirm('apakah yakin ingin di Hapus ?');" class="btn btn-warning btn-sm elevation-1">
                                                        <i class="nav-icon  fas fa-trash"></i>
                                                    </a>
                                                <?php } ?>
                                                <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#editDataUser" data-id='<?php echo $row->id_admin; ?>'>
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
    <div class="modal fade " id="editDataUser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <form action="adminpanel/Users/SimpanUbahUser" method="POST">
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
    $('#unit').select2({
        dropdownParent: $('#TambahUserAll'),
        placeholder: "Pilih unit..."
    });
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    $('#editDataUser').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/Users/GetDataIdUser",
            data: {
                id: id
            },
            success: function(data) {
                $('.isiEditUser').html(data);
            }
        });
    });
</script>

</html>