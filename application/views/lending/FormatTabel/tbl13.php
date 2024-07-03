<table id="example" class="table table-bordered table-hover " style="font-size:11px; width: 100%;">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">Kecamatan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="14">
                Peserta KB Perempuan</th>
            <th style="text-align: center; vertical-align: middle;" colspan="6">
                Peserta KB Laki-Laki</th>

            <th style="text-align: center; vertical-align: middle;" rowspan="3">Total</th>
        </tr>

        <tr style="text-align: center; vertical-align: middle;">
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Suntik</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Pil</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Implan</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">UID</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Tubektomi</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Mal</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Jumlah</th>



            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Kondom</th>
            <th style="text-align: center; vertical-align: middle; fount-size:10px;" colspan="2">Vasektomi</th>
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

                <td><?= $total_nilai_Suntik_2022_P = $row->total_nilai_Suntik_2022_P ?></td>
                <td><?= $total_nilai_Suntik_2023_P = $row->total_nilai_Suntik_2023_P ?></td>

                <td><?= $total_nilai_Pil_2022_P = $row->total_nilai_Pil_2022_P ?></td>
                <td><?= $total_nilai_Pil_2023_P = $row->total_nilai_Pil_2023_P ?></td>

                <td><?= $total_nilai_Implan_2022_P = $row->total_nilai_Implan_2022_P ?></td>
                <td><?= $total_nilai_Implan_2023_P = $row->total_nilai_Implan_2023_P ?></td>

                <td><?= $total_nilai_IUD_2022_P = $row->total_nilai_IUD_2022_P ?></td>
                <td><?= $total_nilai_IUD_2023_P = $row->total_nilai_IUD_2023_P ?></td>

                <td><?= $total_nilai_Tubektomi_2022_P = $row->total_nilai_Tubektomi_2022_P ?></td>
                <td><?= $total_nilai_Tubektomi_2023_P = $row->total_nilai_Tubektomi_2023_P ?></td>

                <td><?= $total_nilai_Mal_2022_P = $row->total_nilai_Mal_2022_P ?></td>
                <td><?= $total_nilai_Mal_2023_P = $row->total_nilai_Mal_2023_P ?></td>

                <td>
                    <?= $data2022jum = $total_nilai_Suntik_2022_P + $total_nilai_Pil_2022_P + $total_nilai_Implan_2022_P + $total_nilai_IUD_2022_P + $total_nilai_Tubektomi_2022_P + $total_nilai_Mal_2022_P; ?>
                </td>
                <td>
                    <?= $data2023jum = $total_nilai_Suntik_2023_P + $total_nilai_Pil_2023_P + $total_nilai_Implan_2023_P + $total_nilai_IUD_2023_P + $total_nilai_Tubektomi_2023_P + $total_nilai_Mal_2023_P; ?>
                </td>





                <td><?= $total_nilai_Kondom_2022_L = $row->total_nilai_Kondom_2022_L; ?></td>
                <td><?= $total_nilai_Kondom_2023_L = $row->total_nilai_Kondom_2023_L; ?></td>

                <td><?= $total_nilai_Vasektomi_2022_L = $row->total_nilai_Vasektomi_2022_L; ?></td>
                <td><?= $total_nilai_Vasektomi_2023_L = $row->total_nilai_Vasektomi_2023_L; ?></td>

                <td>
                    <?= $data_l2022 = $total_nilai_Vasektomi_2022_L + $total_nilai_Kondom_2022_L; ?>
                </td>
                <td>
                    <?= $data_l2023 = $total_nilai_Vasektomi_2023_L + $total_nilai_Kondom_2023_L; ?>
                </td>

                <td>
                    <?= $totaldata = $data2022jum + $data2023jum + $data_l2022 + $data_l2023; ?>
                </td>




            </tr>
        <?php $no++;
        } ?>

    </tbody>
</table>