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
                            <a href="adminpanel/Home" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-tachometer-alt"></i>
                            </a>
                            <center>
                                <h3><b>Pillih Unit Kerja</b></h3>
                            </center>
                        </div>

                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered  table-hover" style="font-size:14px; width:100%;">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Unit</td>
                                        <td align="center">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetDataunit->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->namaUnit; ?></td>
                                            <td align="center">
                                                <a href="adminpanel/DataSigaAdmin/Kategori/<?php echo $row->idUnitKerja; ?>" class="btn btn-primary btn-sm elevation-1" title="Data User">
                                                    <i class="nav-icon  fas fa-eye"></i> Lihat Data
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
    <div class="modal fade " id="editDataUnit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <form action="adminpanel/Unit/SimpanUbahUnit" method="POST">
                    <div class="modal-body isiEditUnit">
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
    $('#editDataUnit').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/Unit/GetDataIdUnit",
            data: {
                id: id
            },
            success: function(data) {
                $('.isiEditUnit').html(data);
            }
        });
    });
</script>

</html>