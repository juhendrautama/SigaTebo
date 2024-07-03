<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="6">GURU SD/MI</th>
            <th style="text-align: center; vertical-align: middle;" colspan="6">GURU SLTP/MTS</th>
            <th style="text-align: center; vertical-align: middle;" colspan="6">GURU SMA/SMK/MA</th>
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
            <td><?= $row->namaKec ?></td>


            <td><?= $total_nilai_SD_MI_2022_L = $row->total_nilai_SD_MI_2022_L ?></td>
            <td><?= $total_nilai_SD_MI_2023_L = $row->total_nilai_SD_MI_2023_L ?></td>

            <td><?= $total_nilai_SD_MI_2022_P = $row->total_nilai_SD_MI_2022_P ?></td>
            <td><?= $total_nilai_SD_MI_2023_P = $row->total_nilai_SD_MI_2023_P ?></td>

            <td><?= $jumSD_MI_2022 = $total_nilai_SD_MI_2022_L + $total_nilai_SD_MI_2022_P ?></td>
            <!-- total l -->
            <td><?= $jumSD_MI_2023 = $total_nilai_SD_MI_2023_P + $total_nilai_SD_MI_2023_L ?></td>
            <!-- total p -->



            <td><?= $total_nilai_SLTP_MTS_2022_L = $row->total_nilai_SLTP_MTS_2022_L ?></td>
            <td><?= $total_nilai_SLTP_MTS_2023_L = $row->total_nilai_SLTP_MTS_2023_L ?></td>


            <td><?= $total_nilai_SLTP_MTS_2022_P = $row->total_nilai_SLTP_MTS_2022_P ?></td>
            <td><?= $total_nilai_SLTP_MTS_2023_P = $row->total_nilai_SLTP_MTS_2023_P ?></td>

            <td><?= $jumSLTP_MTS_2022 = $total_nilai_SLTP_MTS_2022_P + $total_nilai_SLTP_MTS_2022_L ?></td>
            <!-- total l -->
            <td><?= $jumSLTP_MTS_2023 = $total_nilai_SLTP_MTS_2023_P + $total_nilai_SLTP_MTS_2023_L ?></td>


            <td><?= $total_nilai_SMA_SMK_MA_2022_L = $row->total_nilai_SMA_SMK_MA_2022_L ?></td>
            <td><?= $total_nilai_SMA_SMK_MA_2023_L = $row->total_nilai_SMA_SMK_MA_2023_L ?></td>

            <td><?= $total_nilai_SMA_SMK_MA_2022_P = $row->total_nilai_SMA_SMK_MA_2022_P ?></td>
            <td><?= $total_nilai_SMA_SMK_MA_2023_P = $row->total_nilai_SMA_SMK_MA_2023_P ?></td>


            <td><?= $jumSMA_SMK_MA_2022 = $total_nilai_SMA_SMK_MA_2022_P + $total_nilai_SMA_SMK_MA_2022_L ?></td>
            <!-- total l -->
            <td><?= $jumSMA_SMK_MA_2023 = $total_nilai_SMA_SMK_MA_2023_P + $total_nilai_SMA_SMK_MA_2023_L ?></td>
        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>