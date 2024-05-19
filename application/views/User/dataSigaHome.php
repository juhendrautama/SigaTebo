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
                                <h5><b>Data Siga </b></h5>
                            </center>
                            <hr>
                            <div class="form-group col-md-12">
                                <label class="col-form-label">Pillih Kategori Siga :</label>
                                <select required name="idKategoriData" id="unit" class="form-control prosesDataJudul" style="width:100%;">
                                    <option value="" selected>Pilih Kategori...</option>
                                    <?php foreach ($GetKategoriAll->result() as $row) { ?>
                                        <option value="<?= $row->idKategoriData; ?>">
                                            <?= $row->nama; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="card-body isiDataJudulIdKategori">
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
    $('#unit').select2({
        placeholder: "Pilih Kategori..."
    });




    $(document).ready(function() {
        $('#unit').change(function() {
            var idKategoriData = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>adminpanel/DataSigaUser/GetJudulIdkategori',
                data: {
                    id: idKategoriData
                },
                success: function(data) {
                    $('.isiDataJudulIdKategori').html(data);
                }
            });
        });
    });
</script>

</html>