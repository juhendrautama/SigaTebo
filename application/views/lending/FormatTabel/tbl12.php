<table id="example" class="table table-bordered table-hover " style=" font-size:10px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" rowspan="3">Kecamatan</th>

            <th style="text-align: center; vertical-align: middle; font-size:10px;" rowspan="3">Jumlah Perkawinan</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="8">Usia Pernikahan Tahun
                2022 </th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" rowspan="3">Jumlah Perkawinan</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="8">Usia Pernikahan Tahun
                2023 </th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="4">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="4">Perempuan</th>

            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="4">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="4">Perempuan</th>
        </tr>
        <tr style="text-align: center; vertical-align: middle; font-size:10px;">
            <td>
                < 19</td>
            <td>19 - 21</td>
            <td>21 - 30</td>
            <td>30+</td>

            <td>
                < 19</th>
            <td>19 - 21</td>
            <td>21 - 30</td>
            <td>30+</td>



            <td>
                < 19</td>
            <td>19 - 21</td>
            <td>21 - 30</td>
            <td>30+</td>

            <td>
                < 19</th>
            <td>19 - 21</td>
            <td>21 - 30</td>
            <td>30+</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->namaKec ?></td>

            <td>
                <?php
                    $total_nilai_under_9_2022_L = $row->total_nilai_under_9_2022_L;
                    $total_nilai_19_21_2022_L = $row->total_nilai_19_21_2022_L;
                    $total_nilai_21_30_2022_L = $row->total_nilai_21_30_2022_L;
                    $total_nilai_above_30_2022_L = $row->total_nilai_above_30_2022_L;
                    $total_nilai_under_9_2022_P = $row->total_nilai_under_9_2022_P;
                    $total_nilai_19_21_2022_P = $row->total_nilai_19_21_2022_P;
                    $total_nilai_21_30_2022_P = $row->total_nilai_21_30_2022_P;
                    $total_nilai_above_30_2022_P = $row->total_nilai_above_30_2022_P;
                    ?>
                <?= $data2022 = $total_nilai_under_9_2022_L + $total_nilai_19_21_2022_L + $total_nilai_21_30_2022_L + $total_nilai_above_30_2022_L + $total_nilai_under_9_2022_P + $total_nilai_19_21_2022_P + $total_nilai_21_30_2022_P + $total_nilai_above_30_2022_P ?>
            </td>

            <td><?=   $row->total_nilai_under_9_2022_L; ?></td>
            <td><?=   $row->total_nilai_19_21_2022_L; ?></td>
            <td><?=   $row->total_nilai_21_30_2022_L; ?></td>
            <td><?=   $row->total_nilai_above_30_2022_L; ?></td>

            <td><?=   $row->total_nilai_under_9_2022_P; ?></td>
            <td><?=   $row->total_nilai_19_21_2022_P; ?></td>
            <td><?=   $row->total_nilai_21_30_2022_P; ?></td>
            <td><?=   $row->total_nilai_above_30_2022_P; ?></td>


            <td>
                <?php
                    $total_nilai_under_9_2023_L = $row->total_nilai_under_9_2023_L;
                    $total_nilai_19_21_2023_L = $row->total_nilai_19_21_2023_L;
                    $total_nilai_21_30_2023_L = $row->total_nilai_21_30_2023_L;
                    $total_nilai_above_30_2023_L = $row->total_nilai_above_30_2023_L;
                    $total_nilai_under_9_2023_P = $row->total_nilai_under_9_2023_P;
                    $total_nilai_19_21_2023_P = $row->total_nilai_19_21_2023_P;
                    $total_nilai_21_30_2023_P = $row->total_nilai_21_30_2023_P;
                    $total_nilai_above_30_2023_P = $row->total_nilai_above_30_2023_P;
                    ?>
                <?= $data2023 = $total_nilai_under_9_2023_L + $total_nilai_19_21_2023_L + $total_nilai_21_30_2023_L + $total_nilai_above_30_2023_L + $total_nilai_under_9_2023_P + $total_nilai_19_21_2023_P + $total_nilai_21_30_2023_P + $total_nilai_above_30_2023_P ?>
            </td>

            <td><?=   $row->total_nilai_under_9_2023_L; ?></td>
            <td><?=   $row->total_nilai_19_21_2023_L; ?></td>
            <td><?=   $row->total_nilai_21_30_2023_L; ?></td>
            <td><?=   $row->total_nilai_above_30_2023_L; ?></td>

            <td><?=   $row->total_nilai_under_9_2023_P; ?></td>
            <td><?=   $row->total_nilai_19_21_2023_P; ?></td>
            <td><?=   $row->total_nilai_21_30_2023_P; ?></td>
            <td><?=   $row->total_nilai_above_30_2023_P; ?></td>

        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>