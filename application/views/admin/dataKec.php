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
                                <h4><b> Tabel 1 / Data Kecamatan</b></h4>
                            </center>

                        </div>
                        <div class="card-body ">
                            <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahKec">
                                <i class="nav-icon  fas fa-plus"></i> Tambah Data
                            </a>

                            <?php $this->load->view('admin/modal/TambahKec'); ?>

                            <hr>
                            <table id="example" class="table table-bordered table-hover " style="font-size:14px; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th>Kelurahan</th>
                                        <th>Luas</th>
                                        <th>Dusun</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Tanggal</th>
                                        <th align="center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($GetDataKec->result() as $row) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->namaKec; ?></td>
                                            <td><?php echo $row->jumdesa; ?></td>
                                            <td><?php echo $row->jumkel; ?></td>
                                            <td><?php echo $row->luas; ?></td>
                                            <td><?php echo $row->jumdusun; ?></td>
                                            <td><?php echo $row->jumrt; ?></td>
                                            <td><?php echo $row->jumrw; ?></td>
                                            <?php setlocale(LC_TIME, 'id_ID'); ?>
                                            <td><?php echo date('d F Y', strtotime($row->tgl)); ?></td>
                                            <td align="center">
                                                <a href="adminpanel/DataKec/HapusData/<?php echo $row->idKec; ?>" Onclick="return confirm('apakah yakin ingin di Hapus ?');" class="btn btn-warning btn-sm elevation-1">
                                                    <i class="nav-icon  fas fa-trash"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#editDataUser" data-id='<?php echo $row->idKec; ?>'>
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