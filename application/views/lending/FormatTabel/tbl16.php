<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">Kabupaten</th>
            <th style="text-align: center; vertical-align: middle;" colspan="6">7 - 12</th>
            <th style="text-align: center; vertical-align: middle;" colspan="6">13 - 15</th>
            <th style="text-align: center; vertical-align: middle;" colspan="6">16 - 18</th>
        </tr>

        <tr style="text-align: center; vertical-align: middle; font-size:10px;">
            <th colspan="2">Laki-Laki</th>
            <th colspan="2">Perempuan</th>

            <th colspan="2">Laki-Laki+Perempuan</th>

            <th colspan="2">Laki-Laki</th>
            <th colspan="2">Perempuan</th>
            <th colspan="2">Laki-Laki+Perempuan</th>

            <th colspan="2">Laki-Laki</th>
            <th colspan="2">Perempuan</th>
            <th colspan="2">Laki-Laki+Perempuan</th>


        </tr>
        <tr>
            <th>2022</th>
            <th>2023</th>

            <th>2022</th>
            <th>2023</th>

            <th>2022</th>
            <th>2023</th>



            <th>2022</th>
            <th>2023</th>

            <th>2022</th>
            <th>2023</th>

            <th>2022</th>
            <th>2023</th>



            <th>2022</th>
            <th>2023</th>

            <th>2022</th>
            <th>2023</th>

            <th>2022</th>
            <th>2023</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td>Tebo</td>

            <td><?= $total_nilai_usia_7_13_2022_L = $row->total_nilai_usia_7_13_2022_L; ?></td>
            <td><?= $total_nilai_usia_7_13_2023_L = $row->total_nilai_usia_7_13_2023_L; ?></td>

            <td><?= $total_nilai_usia_7_13_2022_P = $row->total_nilai_usia_7_13_2022_P; ?></td>
            <td><?= $total_nilai_usia_7_13_2023_P = $row->total_nilai_usia_7_13_2023_P; ?></td>

            <td><?= $jum7_13_2022 = $total_nilai_usia_7_13_2022_L + $total_nilai_usia_7_13_2022_P; ?></td>
            <!-- total l -->
            <td><?= $jum7_13_2023 = $total_nilai_usia_7_13_2023_L + $total_nilai_usia_7_13_2023_P; ?></td>
            <!-- total p -->

            <td><?= $total_nilai_usia_13_15_2022_L = $row->total_nilai_usia_13_15_2022_L; ?></td>
            <td><?= $total_nilai_usia_13_15_2023_L = $row->total_nilai_usia_13_15_2023_L; ?></td>

            <td><?= $total_nilai_usia_13_15_2022_P = $row->total_nilai_usia_13_15_2022_P; ?></td>
            <td><?= $total_nilai_usia_13_15_2023_P = $row->total_nilai_usia_13_15_2023_P; ?></td>

            <td><?= $jum13_15_2022 = $total_nilai_usia_13_15_2022_L + $total_nilai_usia_13_15_2022_P; ?></td>
            <!-- total l -->
            <td><?= $jum13_15_2023 = $total_nilai_usia_13_15_2023_L + $total_nilai_usia_13_15_2023_P; ?></td>
            <!-- total p -->

            <td><?= $total_nilai_usia_16_18_2022_L = $row->total_nilai_usia_16_18_2022_L; ?></td>
            <td><?= $total_nilai_usia_16_18_2023_L = $row->total_nilai_usia_16_18_2023_L; ?></td>

            <td><?= $total_nilai_usia_16_18_2022_P = $row->total_nilai_usia_16_18_2022_P; ?></td>
            <td><?= $total_nilai_usia_16_18_2023_P = $row->total_nilai_usia_16_18_2023_P; ?></td>

            <td><?= $jum16_18_2022 = $total_nilai_usia_16_18_2022_L + $total_nilai_usia_16_18_2022_P; ?></td>
            <!-- total l -->
            <td><?= $jum16_18_2023 = $total_nilai_usia_16_18_2023_L + $total_nilai_usia_16_18_2023_P; ?></td>
            <!-- total p -->



        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>