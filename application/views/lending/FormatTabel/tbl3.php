<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr style="text-align: center; vertical-align: middle;">
            <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">KECAMATAN</th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2022 (JIWA)</th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2023 (JIWA)</th>

        </tr>
        <tr>
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-laki + Perempuan</th>

            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-laki + Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->namaKec; ?></td>
                <td><?= $nilai_count_L_2022 = $row->nilai_count_L_2022; ?></td>
                <td><?= $nilai_count_P_2022 = $row->nilai_count_P_2022; ?></td>
                <td><?= $jum2022 = $nilai_count_L_2022 + $nilai_count_P_2022; ?></td>
                <td><?= $nilai_count_L_2023 = $row->nilai_count_L_2023; ?></td>
                <td><?= $nilai_count_P_2023 = $row->nilai_count_P_2023; ?></td>
                <td><?= $jum2023 = $nilai_count_L_2023 + $nilai_count_P_2023; ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>