<button class="btn btn-success btn-md" onclick="exportTableToExcel('table', 'table_data')">Excel</button>
<button class="btn btn-success btn-md" onclick="exportTableToPDF()">PDF</button>
<button class="btn btn-success btn-md" onclick="printTable()">Print</button>
<br>
<hr>
<table id="table" class="table table-bordered table-hover" style="font-size: 12px; width: 100%">
    <thead>
        <tr>
            <th style="text-align: center; vertical-align: middle" rowspan="3">No</th>
            <th style="text-align: center; vertical-align: middle" rowspan="3">Wilayah</th>
            <th style="text-align: center; vertical-align: middle" colspan="6">Jenis Jabatan Jaksa</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle" colspan="3">Tahun <?= $tahunAwal ?></th>
            <th style="text-align: center; vertical-align: middle" colspan="3">Tahun <?= $tahunAkhir ?></th>
        </tr>
        <tr style="text-align: center; vertical-align: middle">
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-Laki + Perempuan</th>

            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Laki-Laki + Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $noA = 1;
        $prevWilayah = null; // variabel untuk menyimpan wilayah sebelumnya
        $alphabet = range('A', 'Z'); // array untuk menyimpan abjad
        $index = 0; // indeks untuk abjad

        foreach ($tampildatasiga->result() as $row) {
        ?>
        <?php if ($row->wilayah != $prevWilayah) : ?>
        <tr>
            <td style="text-align: center; vertical-align: middle"><?= $noA; ?></td>
            <th><?= $row->wilayah; ?></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php $noA++; ?>
        </tr>
        <?php $index = 0; // reset indeks abjad setiap kali wilayah berubah 
                ?>
        <?php $prevWilayah = $row->wilayah; ?>
        <?php endif; ?>
        <tr>
            <td style="text-align: center; vertical-align: middle"><?= $alphabet[$index]; ?></td>
            <td><?= $row->jenisData; ?></td>

            <td style="text-align: center; vertical-align: middle"><?= $awal_l = $row->total_nilai_awal_L; ?></td>
            <td style="text-align: center; vertical-align: middle"><?= $awal_p = $row->total_nilai_awal_P; ?></td>
            <td style="text-align: center; vertical-align: middle"><?= $total_awal = $awal_l + $awal_p; ?></td>

            <td style="text-align: center; vertical-align: middle"><?= $akhir_l = $row->total_nilai_akhir_L; ?></td>
            <td style="text-align: center; vertical-align: middle"><?= $akhir_p = $row->total_nilai_akhir_P; ?></td>
            <td style="text-align: center; vertical-align: middle"><?= $total_akhir = $akhir_l + $akhir_p; ?></td>
        </tr>
        <?php $index++; // increment indeks abjad  
            ?>
        <?php } ?>
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>

<script>
function exportTableToExcel(tableID, filename = '') {
    var table = document.getElementById(tableID);
    var workbook = XLSX.utils.table_to_book(table, {
        sheet: "Sheet1"
    });
    XLSX.writeFile(workbook, filename ? filename + '.xlsx' : 'excel_data.xlsx');
}

function exportTableToPDF() {
    const {
        jsPDF
    } = window.jspdf;
    var doc = new jsPDF('p', 'pt', 'a4');
    doc.autoTable({
        html: '#table'
    });
    doc.save('table_data.pdf');
}

function printTable() {
    var divToPrint = document.getElementById('table');
    var newWin = window.open('');
    newWin.document.write('<html><head><title>Print</title></head><body>');
    newWin.document.write(
        '<style>table { font-size: 12px; width: 100%; } table, th, td { border: 1px solid black; border-collapse: collapse; text-align: center; vertical-align: middle; }</style>'
    );
    newWin.document.write(divToPrint.outerHTML);
    newWin.document.write('</body></html>');
    newWin.document.close();
    newWin.print();
}
</script>