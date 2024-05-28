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
        <div class="content-wrapper t-4">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header">
                            <a href="adminpanel/Home" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-tachometer-alt"></i>
                            </a>
                            <center>
                                <h5><b>Data Publikasi </b></h5>
                            </center>
                        </div>

                        <div class="card-body ">
                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahPublikasi">
                                <i class="nav-icon  fas fa-plus"></i> Tambah Data
                            </a>

                            <?php $this->load->view('admin/modal/TambahPublikasi'); ?>

                            <hr>
                            <table id="example" class="table table-bordered table-hover display" style="font-size:14px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetDataPublikasi->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->judul; ?></td>
                                            <?php setlocale(LC_TIME, 'id_ID'); ?>
                                            <td><?php echo date('d F Y', strtotime($row->tgl)); ?></td>
                                            <td align="center">
                                                <a href="adminpanel/DataPublikasi/HapusData/<?php echo $row->id_publikasi; ?>" onclick="return confirm('Apakah yakin ingin dihapus?');" class="btn btn-warning btn-sm elevation-1">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                </a>
                                                <!-- <a href="#" class="btn btn-primary btn-sm elevation-1" data-toggle="modal" data-target="#editDataKetegori" data-id='<?php echo $row->id_publikasi; ?>'>
                                                    <i class="nav-icon fas fa-edit"></i>
                                                </a> -->
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
    <div class="modal fade " id="editDataKetegori" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <i class="nav-icon fa fa-edit"></i> Ubah Data
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="adminpanel/KategoriData/SimpanUbahK" method="POST">
                    <div class="modal-body isiEditKetegori">
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
        $('#example').DataTable();
    });
    $('#editDataKetegori').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/KategoriData/GetDataIdKategori",
            data: {
                id: id
            },
            success: function(data) {
                $('.isiEditKetegori').html(data);
            }
        });
    });
</script>

</html>