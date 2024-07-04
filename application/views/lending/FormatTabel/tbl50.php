<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle" colspan="3">Jumlah Anak Terlantar</th>
            <th style="text-align: center; vertical-align: middle" colspan="3">Jumlah Anak Terlantar</th>
        </tr>

        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="3">Tahun <?= $tahunAwal ?></th>
            <th style="text-align: center; vertical-align: middle" colspan="3">Tahun <?= $tahunAkhir ?></th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>
            <th style="text-align: center; vertical-align: middle">Laki-laki + Perempuan</th>


            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>
            <th style="text-align: center; vertical-align: middle">Laki-laki + Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->namaKec ?></td>

            <td><?= $total_nilai_awal_L = $row->total_nilai_awal_L; ?></td>
            <td><?= $total_nilai_awal_P = $row->total_nilai_awal_P; ?></td>
            <td><?= $totalAwal = $total_nilai_awal_L + $total_nilai_awal_P; ?></td>

            <td><?= $total_nilai_akhir_L = $row->total_nilai_akhir_L; ?></td>
            <td><?= $total_nilai_akhir_P = $row->total_nilai_akhir_P; ?></td>
            <td><?= $totalAkhir = $total_nilai_akhir_L + $total_nilai_akhir_P; ?></td>
        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>