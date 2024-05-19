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
                            <a href="adminpanel/DataSigaAdmin" class="btn btn-success btn-sm elevation-1">
                                <i class="nav-icon  fas fa-reply"></i>
                            </a>
                            <center>
                                <h4><b>Judul Data Siga</b></h4>
                                <?php echo $GetDataIdUnit->namaUnit ?>
                            </center>
                        </div>
                        <div class="card-body ">

                            <table id="example" class="table table-bordered table-hover " style="font-size:14px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetJudulSigaIdunit->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->judul; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <?php setlocale(LC_TIME, 'id_ID'); ?>
                                            <td><?php echo date('d F Y', strtotime($row->tgl)); ?></td>
                                            <td align="center">
                                                <a href="adminpanel/DataSigaAdmin/Data/<?php echo $row->idUnitKerja; ?>/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>/<?php echo str_replace(' ', '-', $row->judul); ?>" class="btn btn-success btn-sm elevation-1">
                                                    <i class="nav-icon fas fa-plus"></i> Data Siga
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

    <?php $this->load->view('admin/tools/js_footer'); ?>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#editDataJudulSiga').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>adminpanel/JudulDataSiga/GetDataIdJudul",
            data: {
                id: id
            },
            success: function(data) {
                $('.isiEditDataSiga').html(data);
            }
        });
    });
</script>

</html>