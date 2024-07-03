<table id="example" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kaukus Perempuan Politik</th>
            <th><?= $tahunAwal ?></th>
            <th><?= $tahunAkhir ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $total_nilai_awal = 0; // Variabel untuk menyimpan total nilai awal
        $total_nilai_akhir = 0; // Variabel untuk menyimpan total nilai akhir

        foreach ($tampildatasiga->result() as $row) {
            $total_nilai_awal += $row->total_nilai_awal; // Menambahkan nilai setiap baris ke total nilai awal
            $total_nilai_akhir += $row->total_nilai_akhir; // Menambahkan nilai setiap baris ke total nilai akhir
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?= $row->jenisData; ?></td>
                <td><?= $row->total_nilai_awal; ?></td>
                <td><?= $row->total_nilai_akhir; ?></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">Jumlah</td>
            <td><?= $total_nilai_awal; ?></td>
            <td><?= $total_nilai_akhir; ?></td>
        </tr>
    </tfoot>
</table>