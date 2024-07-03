<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2022 </th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">TAHUN 2023 </th>

        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;" colspan="3">Penderita HIV</th>
            <th style="text-align: center; vertical-align: middle;" colspan="3">Penderita HIV</th>
        </tr>
        <tr style="text-align: center; vertical-align: middle; font-size:10px;">
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>L+P</th>

            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>L+P</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->namaKec ?></td>

            <td><?= $sum_nilai_HIV_L_2022 = $row->sum_nilai_HIV_L_2022 ?></td>
            <td><?= $sum_nilai_HIV_P_2022 = $row->sum_nilai_HIV_P_2022 ?></td>
            <td><?= $jum2022 = $sum_nilai_HIV_L_2022 + $sum_nilai_HIV_P_2022 ?></td>

            <td><?= $sum_nilai_HIV_L_2023 = $row->sum_nilai_HIV_L_2023 ?></td>
            <td><?= $sum_nilai_HIV_P_2023 = $row->sum_nilai_HIV_P_2023 ?></td>
            <td><?= $jum2023 = $sum_nilai_HIV_L_2023 + $sum_nilai_HIV_P_2023 ?></td>
        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>