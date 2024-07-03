<table id="example" class="table table-bordered table-hover " style="font-size:12px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="4">SD/MI</th>
            <th style="text-align: center; vertical-align: middle;" colspan="4">SLTP/MTS</th>
            <th style="text-align: center; vertical-align: middle;" colspan="4">SMA/SMK/MA</th>
        </tr>

        <tr style="text-align: center; vertical-align: middle; font-size:10px;">
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="2">Negeri</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="2">Swasta</th>

            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="2">Negeri</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="2">Swasta</th>

            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="2">Negeri</th>
            <th style="text-align: center; vertical-align: middle; font-size:10px;" colspan="2">Swasta</th>
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

        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($tampildatasiga->result() as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->namaKec ?></td>

            <td><?= $row->total_nilai_SD_MI_2022_N; ?></td>
            <td><?= $row->total_nilai_SD_MI_2023_N; ?></td>

            <td><?= $row->total_nilai_SD_MI_2022_S; ?></td>
            <td><?= $row->total_nilai_SD_MI_2023_S; ?></td>

            <td><?= $row->total_nilai_SLTP_MTS_2022_N; ?></td>
            <td><?= $row->total_nilai_SLTP_MTS_2023_N; ?></td>

            <td><?= $row->total_nilai_SLTP_MTS_2022_S; ?></td>
            <td><?= $row->total_nilai_SLTP_MTS_2023_S; ?></td>

            <td><?= $row->total_nilai_SMA_SMK_MA_2022_N; ?></td>
            <td><?= $row->total_nilai_SMA_SMK_MA_2023_N; ?></td>

            <td><?= $row->total_nilai_SMA_SMK_MA_2022_S; ?></td>
            <td><?= $row->total_nilai_SMA_SMK_MA_2023_S; ?></td>

        </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>