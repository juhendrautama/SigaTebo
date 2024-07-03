<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr style="text-align: center; vertical-align: middle;">
            <th style="text-align: center; vertical-align: middle;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">KECAMATAN</th>
            <th style="text-align: center; vertical-align: middle;" colspan="10">KELOMPOK UMUR</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">
                <center>Jumlah</center>
            </th>

        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;" colspan="2">0-5 Tahun</th>
            <th style="text-align: center; vertical-align: middle;" colspan="2">6-12 Tahun</th>
            <th style="text-align: center; vertical-align: middle;" colspan="2">13-17 Tahun</th>
            <th style="text-align: center; vertical-align: middle;" colspan="2">18-50 Tahun</th>
            <th style="text-align: center; vertical-align: middle;" colspan="2">51 Tahun Keatas</th>
        </tr>

        <tr>
            <td>L</td>
            <td>P</td>

            <td>L</td>
            <td>P</td>

            <td>L</td>
            <td>P</td>

            <td>L</td>
            <td>P</td>

            <td>L</td>
            <td>P</td>
        </tr>


    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->namaKec; ?></td>

            <td><?= $umur_0_5_L = $row->total_nilai_umur_0_5_L; ?></td>
            <td><?= $umur_0_5_P = $row->total_nilai_umur_0_5_P; ?></td>

            <td><?= $umur_6_12_L = $row->total_nilai_umur_6_12_L; ?></td>
            <td><?= $umur_6_12_P = $row->total_nilai_umur_6_12_P; ?></td>

            <td><?= $umur_13_17_L = $row->total_nilai_umur_13_17_L; ?></td>
            <td><?= $umur_13_17_P = $row->total_nilai_umur_13_17_P; ?></td>

            <td><?= $umur_18_50_L = $row->total_nilai_umur_18_50_L; ?></td>
            <td><?= $umur_18_50_P = $row->total_nilai_umur_18_50_P; ?></td>

            <td><?= $umur_51_above_L = $row->total_nilai_umur_51_above_L; ?></td>
            <td><?= $umur_51_above_P = $row->total_nilai_umur_51_above_P; ?></td>

            <td>
                <?php
                    // Calculate the sum
                    $total_sum = $umur_0_5_L + $umur_0_5_P +
                        $umur_6_12_L + $umur_6_12_P +
                        $umur_13_17_L + $umur_13_17_P +
                        $umur_18_50_L + $umur_18_50_P +
                        $umur_51_above_L + $umur_51_above_P;

                    // Output the total sum
                    echo "$total_sum";
                    ?>
            </td>
        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>