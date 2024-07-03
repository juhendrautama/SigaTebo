<a href="#" class="btn btn-success btn-sm elevation-1" data-toggle="modal" data-target="#TambahDataSigatbl<?= $GetDataIdJudul->formatTabel ?>">
    <i class="nav-icon  fas fa-plus"></i>Tambah Data
</a>
<?php $this->load->view('admin/FormatTabel/modal/TambahDataSigatbl49');
?>
<hr>
<table id="tbl<?= $GetDataIdJudul->formatTabel ?>" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Jumlah Anak</th>
            <th>Memiliki Akta</th>
            <th>Presentase</th>
            <th>Tahun</th>
            <th>
                <center>Aksi</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        function hitungPersentase($bagian, $total)
        {
            if ($total == 0) {
                return 0; // Menghindari pembagian dengan nol
            }
            $persentase = ($bagian / $total) * 100;
            return number_format($persentase, 2, ',', '.');
            // Menghasilkan persentase dengan 2 angka di belakang koma
        }
        foreach ($tampilsiga->result() as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row->namaKec; ?></td>
                <td><?php echo $jumlahAnak = $row->JumlahAnak; ?></td>
                <td><?php echo $memilikiAkta = $row->MemilikiAkta; ?></td>
                <td>
                    <?php

                    echo $persentase = hitungPersentase($memilikiAkta, $jumlahAnak);
                    ?>
                    %
                </td>
                <td><?php echo $row->tahun; ?></td>
                <td>
                    <center>
                        <a href="adminpanel/DataSigaAdmin/HapusDataSiga/<?php echo $row->idSiga49; ?>/<?php echo $row->idUnitKerja; ?>/<?php echo $row->idKategoriData; ?>/<?php echo $row->idJudulData; ?>" class="btn btn-warning btn-sm elevation-1">
                            <i class="nav-icon fas fa-trash"></i>
                        </a>
                        <!-- <a href="#" class="btn btn-primary btn-sm elevation-1" data-toggle="modal" data-target="#editDataKetegori" data-id='<?php echo $row->idSiga49; ?>'>
                            <i class="nav-icon fas fa-edit"></i>
                        </a> -->
                    </center>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>
<?php $this->load->view('admin/tools/js_footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl<?= $GetDataIdJudul->formatTabel ?>').DataTable();
    });
</script>