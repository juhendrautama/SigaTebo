<table id="example" class="table table-bordered table-hover" style="font-size: 10px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="4">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="4">Wilayah</th>
            <th style="text-align: center; vertical-align: middle" colspan="12">Jenis Jabatan Jaksa</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tahun <?= $tahunAwal ?></th>
            <th style="text-align: center; vertical-align: middle" colspan="6">Tahun <?= $tahunAkhir ?></th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="2">Struktural</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Fungsional</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Jumlah</th>

            <th style="text-align: center; vertical-align: middle" colspan="2">Struktural</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Fungsional</th>
            <th style="text-align: center; vertical-align: middle" colspan="2">Jumlah</th>
        </tr>

        <tr>
            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>



            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>

            <th style="text-align: center; vertical-align: middle">Laki-Laki</th>
            <th style="text-align: center; vertical-align: middle">Perempuan</th>




        </tr>

    </thead>
    <tbody>
        <?php
        $no = 1;

        $jumtotal_nilai_Struktural_awal_L = 0;
        $jumtotal_nilai_Struktural_awal_P = 0;

        $jumtotal_nilai_Fungsional_awal_L = 0;
        $jumtotal_nilai_Fungsional_awal_P = 0;


        $jumtotal_nilai_Struktural_akhir_L = 0;
        $jumtotal_nilai_Struktural_akhir_P = 0;

        $jumtotal_nilai_Fungsional_akhir_L = 0;
        $jumtotal_nilai_Fungsional_akhir_P = 0;

        foreach ($tampildatasiga->result() as $row) {
            $jumtotal_nilai_Struktural_awal_L +=  $row->total_nilai_awal_Struktural_L;
            $jumtotal_nilai_Struktural_awal_P +=  $row->total_nilai_awal_Struktural_P;

            $jumtotal_nilai_Fungsional_awal_L += $row->total_nilai_awal_Fungsional_L;
            $jumtotal_nilai_Fungsional_awal_P += $row->total_nilai_awal_Fungsional_P;


            $jumtotal_nilai_Struktural_akhir_L +=  $row->total_nilai_akhir_Struktural_L;
            $jumtotal_nilai_Struktural_akhir_P +=  $row->total_nilai_akhir_Struktural_P;

            $jumtotal_nilai_Fungsional_akhir_L += $row->total_nilai_akhir_Fungsional_L;
            $jumtotal_nilai_Fungsional_akhir_P += $row->total_nilai_akhir_Fungsional_P;


        ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row->wilayahUnit; ?></td>

            <td><?= $total_nilai_awal_Struktural_L = $row->total_nilai_awal_Struktural_L; ?></td>
            <td><?= $total_nilai_awal_Struktural_P = $row->total_nilai_awal_Struktural_P; ?></td>

            <td><?= $total_nilai_awal_Fungsional_L = $row->total_nilai_awal_Fungsional_L; ?></td>
            <td><?= $total_nilai_awal_Fungsional_P = $row->total_nilai_awal_Fungsional_P; ?></td>

            <td><?= $jumL_thnAwal_L = $total_nilai_awal_Struktural_L + $total_nilai_awal_Fungsional_L; ?></td>
            <td><?= $jumL_thnAwal_P = $total_nilai_awal_Struktural_P + $total_nilai_awal_Fungsional_P; ?></td>




            <td><?= $total_nilai_akhir_Struktural_L = $row->total_nilai_akhir_Struktural_L; ?></td>
            <td><?= $total_nilai_akhir_Struktural_P = $row->total_nilai_akhir_Struktural_P; ?></td>

            <td><?= $total_nilai_akhir_Fungsional_L = $row->total_nilai_akhir_Fungsional_L; ?></td>
            <td><?= $total_nilai_akhir_Fungsional_P = $row->total_nilai_akhir_Fungsional_P; ?></td>

            <td><?= $jumL_thnAkhir_L = $total_nilai_akhir_Struktural_L + $total_nilai_akhir_Fungsional_L; ?></td>
            <td><?= $jumL_thnAkhir_P = $total_nilai_akhir_Struktural_P + $total_nilai_akhir_Fungsional_P; ?></td>
        </tr>

        <?php
            $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">JUMLAH</td>
            <td><?= $jumtotal_nilai_Struktural_awal_L; ?></td>
            <td><?= $jumtotal_nilai_Struktural_awal_P; ?></td>

            <td><?= $jumtotal_nilai_Fungsional_awal_L; ?></td>
            <td><?= $jumtotal_nilai_Fungsional_awal_P; ?></td>

            <td>
                <?= $jumTotalAwal_L = $jumtotal_nilai_Struktural_awal_L + $jumtotal_nilai_Fungsional_awal_L; ?>
            </td>
            <td>
                <?= $jumTotalAwal_P = $jumtotal_nilai_Struktural_awal_P + $jumtotal_nilai_Fungsional_awal_P; ?>
            </td>


            <td><?= $jumtotal_nilai_Struktural_akhir_L; ?></td>
            <td><?= $jumtotal_nilai_Struktural_akhir_P; ?></td>

            <td><?= $jumtotal_nilai_Fungsional_akhir_L; ?></td>
            <td><?= $jumtotal_nilai_Fungsional_akhir_P; ?></td>

            <td>
                <?= $jumTotalAkhir_L = $jumtotal_nilai_Struktural_akhir_L + $jumtotal_nilai_Fungsional_akhir_L; ?>
            </td>
            <td>
                <?= $jumTotalAkhir_P = $jumtotal_nilai_Struktural_akhir_P + $jumtotal_nilai_Fungsional_akhir_P; ?>
            </td>
        </tr>
    </tfoot>
</table>