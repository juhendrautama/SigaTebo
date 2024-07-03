<table id="example" class="table table-bordered table-hover " style="font-size:11px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="18">
                Prosentase Penyebab Kematian Ibu</th>
        </tr>

        <tr style="text-align: center; vertical-align: middle;">
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Eklamsia %</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Infeksi %</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Aburtus %</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">P. Lama/Macet %
            </th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Emboli Obstertri %
            </th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Kompi Masa
                PuePureum %
            </th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Lain Lain %</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Pendarahan %</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Jumlah</th>
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
            <td><?= $row->namaKec; ?></td>

            <td><?= $total_nilai_Ek_2022 = $row->total_nilai_Ek_2022; ?> %</td>
            <td><?= $total_nilai_Ek_2023 = $row->total_nilai_Ek_2023; ?> %</td>

            <td><?= $total_nilai_Infeksi_2022 = $row->total_nilai_Infeksi_2022; ?> %</td>
            <td><?= $total_nilai_Infeksi_2023 = $row->total_nilai_Infeksi_2023; ?> %</td>

            <td><?= $total_nilai_Aburtus_2022 = $row->total_nilai_Aburtus_2022; ?> %</td>
            <td><?= $total_nilai_Aburtus_2023 = $row->total_nilai_Aburtus_2023; ?> %</td>

            <td><?= $total_nilai_PLamaMace_2022 = $row->total_nilai_PLamaMace_2022; ?> %</td>
            <td><?= $total_nilai_PLamaMace_2023 = $row->total_nilai_PLamaMace_2023; ?> %</td>

            <td><?= $total_nilai_EmboliObstertri_2022 = $row->total_nilai_EmboliObstertri_2022; ?> %</td>
            <td><?= $total_nilai_EmboliObstertri_2023 = $row->total_nilai_EmboliObstertri_2023; ?> %</td>

            <td><?= $total_nilai_KompiMasaPuePureu_2022 = $row->total_nilai_KompiMasaPuePureu_2022; ?> %</td>
            <td><?= $total_nilai_KompiMasaPuePureu_2023 = $row->total_nilai_KompiMasaPuePureu_2023; ?> %</td>

            <td><?= $total_nilai_LainLain_2022 = $row->total_nilai_LainLain_2022; ?> %</td>
            <td><?= $total_nilai_LainLain_2023 = $row->total_nilai_LainLain_2023; ?> %</td>

            <td><?= $total_nilai_Pendarahan_2022 = $row->total_nilai_Pendarahan_2022; ?> %</td>
            <td><?= $total_nilai_Pendarahan_2023 = $row->total_nilai_Pendarahan_2023; ?> %</td>

            <td>
                <?=
                    $tot2022 = $total_nilai_Ek_2022 + $total_nilai_Infeksi_2022 + $total_nilai_Aburtus_2022 + $total_nilai_PLamaMace_2022 + $total_nilai_EmboliObstertri_2022 + $total_nilai_KompiMasaPuePureu_2022 + $total_nilai_LainLain_2022 + $total_nilai_Pendarahan_2022;  ?>
            </td>
            <td>
                <?=
                    $tot2023 = $total_nilai_Ek_2023 + $total_nilai_Infeksi_2023 + $total_nilai_Aburtus_2023 + $total_nilai_PLamaMace_2023 + $total_nilai_EmboliObstertri_2023 + $total_nilai_KompiMasaPuePureu_2023 + $total_nilai_LainLain_2023 + $total_nilai_Pendarahan_2023;  ?>
            </td>
        </tr>
        <?php $no++;
        } ?>

    </tbody>
</table>