<div class="row">
    <div data-aos="fade-left">
        <?php foreach ($GetJudulDataCari->result() as $row) { ?>
            <a href="Data/Detail/<?php echo $row->idKategoriData ?>/<?php echo $row->idJudulData ?>/<?php echo str_replace(' ', '-', $row->judul); ?>#Data" class="text-decoration-none text-reset">
                <div class="card  h p-3  pt-3 pb-4 pl-2 pr-2 text-black mb-8 rounded-4">
                    <p><?php echo $row->judul ?></p>
                    <?php setlocale(LC_TIME, 'id_ID'); ?>
                    <font style="font-size:11px;"><?php echo date('d F Y', strtotime($row->tgl)); ?></font>
                </div>
            </a>
            <br>
        <?php } ?>
    </div>
</div>