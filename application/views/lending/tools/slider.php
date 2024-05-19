<section id="hero" style="
background: url('img/Kutama/bg/p1180847.webp'); 
background-size: 100% auto; 
position: relative;
padding: 100px 0 0 0;
background-repeat: no-repeat;
position: relative;
background-position: center;
background-size: cover;
">
    <div class="container p-3">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-1 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <div class="container">
                        <h1>
                            <span>SIGA - Sistem Informasi Gender dan Anak</span>
                        </h1>
                        <h2>
                            Temukan informasi terkait data gender dan anak disini
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="" method="get">
                                <div class=" bg-light rounded rounded-pill shadow-sm mb-4">
                                    <div class="input-group p-1">
                                        <input type="search" name="judul" id="isiCari" placeholder="Temukan data..." aria-describedby="button-addon1" class="form-control border-0 bg-light rounded-start-5">
                                        <div class="input-group-append">
                                            <button type="button" class="btn bg-danger text-white rounded-5" id="myModal" onclick="showModal();">
                                                <i class="bi bi-search"></i>
                                                Cari Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img " data-aos="zoom-out" data-aos-delay="300">
                <img src="img/Kutama/depan/data4.png" class="img-fluid animated" alt="" style="">
            </div>
        </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>
</section>

<!-- Modal -->
<div class="modal fade" id="HasilCari" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hasil Pencarian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body isiCariHtml">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<script src="tmpDepan/bootstrap5/js/jquery-3.6.0.min.js"></script>

<script>
    function showModal(params) {
        var isiCari_ = $('#isiCari').val()
        //$('.isiCariHtml').text(isiCari_);
        $.ajax({
            type: 'post',
            url: "<?php echo base_url(); ?>Halaman_utama/DataCari",
            data: {
                isicari: isiCari_
            },
            success: function(data) {
                $('.isiCariHtml').html(data);
            }
        });

        $("#HasilCari").modal('show');
    }
</script>