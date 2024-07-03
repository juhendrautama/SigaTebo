<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="2">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="5">TAHUN 2022 </th>
            <th style="text-align: center; vertical-align: middle;" colspan="5">TAHUN 2023 </th>

        </tr>
        <tr style="text-align: center; vertical-align: middle; font-size:10px;">
            <th>Jumlah Bumil</th>
            <th>Bumil Kek</th>
            <th>% Bumil Kek</th>
            <th>Bumil Risti</th>
            <th>% Bumil Risti</th>


            <th>Jumlah Bumil</th>
            <th>Bumil Kek</th>
            <th>% Bumil Kek</th>
            <th>Bumil Risti</th>
            <th>% Bumil Risti</th>

        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->namaKec ?></td>

            <td><?= $tahun2022 = $row->sum_nilai_bumil_kek_2022 + $row->sum_nilai_bumil_risti_2022; ?></td>
            <td><?= $sum_nilai_bumil_kek_2022=$row->sum_nilai_bumil_kek_2022; ?></td>
            <td><?= $hPersen_Bumil_kek2022 = ($sum_nilai_bumil_kek_2022 * 100) / 100; ?> %</td>
            <td><?= $sum_nilai_bumil_risti_2022=$row->sum_nilai_bumil_risti_2022; ?></td>
            <td> <?= $hPersen_bumil_risti2022 = ($sum_nilai_bumil_risti_2022 * 100) / 100; ?> %</td>


            <td><?= $tahun2023 = $row->sum_nilai_bumil_kek_2023 + $row->sum_nilai_bumil_risti_2023; ?></td>
            <td><?= $sum_nilai_bumil_kek_2023 = $row->sum_nilai_bumil_kek_2023; ?></td>
            <td> <?= $hPersen_Bumil_kek2023 = ($sum_nilai_bumil_kek_2023 * 100) / 100; ?> %</td>
            <td><?= $sum_nilai_bumil_risti_2023 = $row->sum_nilai_bumil_risti_2023; ?></td>
            <td> <?= $hPersen_bumil_risti2023 = ($sum_nilai_bumil_risti_2023 * 100) / 100; ?> %</td>

        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>