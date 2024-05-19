 <!-- ======= PILAR SEMBARI ======= -->
 <section id="PilarSambari" class="about">
     <div class="container">
         <div class="section-title" data-aos="fade-up">
             <h2>PILAR</h2>
             <font style="font-size:35px; font-weight: bold; color:#0663C4;"><?php echo $GetdataPilar->Judul; ?></font>
         </div>
         <div class="row">
             <div class="col-lg-12 col-md-12" data-aos="fade-left">
                 <div class="card border-info p-1 ">
                     <div class="card-body"><?php echo $GetdataPilar->isi; ?></div>
                 </div>

             </div>
         </div>
     </div>
 </section>
 <!-- ======= PILAR SEMBARI ======= -->

 <!-- ======= Pricing Section ======= -->
 <section id="TimKami" class="pricing">
     <div class="container">
         <div class="section-title" data-aos="fade-up">
             <h2>Tim</h2>
             <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                 Tim Kami
             </font>
         </div>
         <div class="card p-5 border-info">
             <div class="row row-cols-1 row-cols-md-3 " data-aos="fade-left">
                 <?php foreach ($GetdataTimKami->result() as $row) { ?>
                 <div class="col p-1">
                     <div class="card rounded-5 shadow mx-auto" style="width:75%; ">
                         <div class="p-3">
                             <center>
                                 <img src=" img/Tim/TimKami/<?php echo $row->img; ?>" class="card-img-top "
                                     alt="<?php echo $row->Judul; ?>" style="width:80%; height:150px">
                             </center>
                         </div>
                         <div class="card-body  rounded-5 bg-primary bg-gradient  bg-opacity-75" style="height:200px;">
                             <center>
                                 <div class="card text-dark rounded-pill text-center" style="width:75%;">
                                     <b><?php echo $row->Judul; ?></b>
                                 </div>
                             </center>
                             <font style="font-size: 1rem; font-size:80%;" class="p-2 text-light">
                                 <?php echo $row->ket; ?>
                             </font>
                         </div>
                     </div>
                 </div>
                 <?php } ?>
             </div>
         </div>
     </div>
 </section><!-- End Pricing Section -->

 <!-- ======= Team sambari Section ======= -->
 <section id="TimSembari" class="team">
     <div class="container">
         <div class="section-title" data-aos="fade-up">
             <h2>Tim</h2>
             <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                 Tim Sambari
             </font>
         </div>

         <div class="card p-5 border-info">
             <div class="row" data-aos="fade-left">
                 <?php foreach ($GetdataTimS->result() as $row) { ?>
                 <div class="col-lg-3 col-md-4 mt-5 mt-lg-0 p-3">
                     <div class="member " data-aos="zoom-in" data-aos-delay="300">
                         <div class="pic">
                             <img src="img/Tim/TimSambari/<?php echo $row->img; ?>" class="img-fluid rounded-top-5"
                                 alt="" style="height:280px; width:100%; ">
                         </div>
                         <div class="member-info  rounded-bottom-5">
                             <h4><?php echo $row->nama; ?></h4>
                             <span><?php echo $row->jabatan; ?></span>
                             <div class="social">
                                 <?php if ($row->medsosFb == '') {
                                        } else { ?>
                                 <a href="<?= $row->medsosFb; ?>" target="_blank"><i class="bi bi-facebook"></i></a>
                                 <?php } ?>

                                 <?php if ($row->medsosTwiter == '') {
                                        } else { ?>
                                 <a href="<?= $row->medsosTwiter; ?>" target="_blank"><i class="bi bi-twitter"></i></a>
                                 <?php } ?>

                                 <?php if ($row->medsosIG == '') {
                                        } else { ?>
                                 <a href="<?= $row->medsosIG; ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                                 <?php } ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php } ?>
             </div>
         </div>
     </div>
 </section><!-- End Team Section -->



 <!-- ======= Mitra ======= -->
 <section id="MitraSembari" class="faq section-bg">
     <div class="container">
         <div class="section-title" data-aos="fade-up">
             <h2>Mitra</h2>
             <font style="font-size:35px; font-weight: bold; color:#0663C4;">Mitra Sembari</font>
         </div>
         <div class="card p-5 border-info">
             <div class="faq-list ">
                 <ul>
                     <?php foreach ($GerdataMSKate->result() as $row) { ?>
                     <li class="shadow " data-aos="fade-up" data-aos-delay="100">
                         <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                             data-bs-target="#faq-list-<?php echo $row->idKategoriMitra; ?>" class="collapsed">
                             <?php echo $row->Judul; ?>
                             <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                         <div id="faq-list-<?php echo $row->idKategoriMitra; ?>" class="collapse"
                             data-bs-parent=".faq-list">
                             <?php $id =  $row->idKategoriMitra; ?>
                             <?php $dataMitra = $this->M_crud_MS->GetDataMsIdKate($id)->result(); ?>
                             <ol style="padding-left: 45px; margin-top: 20px;">
                                 <?php foreach ($dataMitra as $row2) { ?>
                                 <li style="padding-left: 20px; margin-top: -25px; font-size:13px;">
                                     <?php echo $row2->namaMitra; ?>
                                 </li>
                                 <?php } ?>
                             </ol>
                         </div>
                     </li>
                     <?php } ?>
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <!-- Mitra -->

 <!-- Karya Sembari -->
 <?php
    $this->load->library('user_agent');
    if ($this->agent->is_mobile()) {
        $this->load->view('lending/tools/karyaSembariM');
    } else {
        $this->load->view('lending/tools/karyaSembari');
    } ?>
 <!-- Karya Sembari -->

 <!-- ======= Lokasi Kajian & Program Pemberdayaan======= -->
 <section id="LokasiKajian" class="details">
     <div class="container">
         <div class="row content">
             <div class="col-md-12" data-aos="fade-up">

                 <div class="section-title" data-aos="fade-up">
                     <h2>LOKASI</h2>
                     <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                         Lokasi Kajian & Program Pemberdayaan
                     </font>

                 </div>
                 <p class="fst-italic">
                     SEMBARI telah melakukan berbagai Kajian Penelitian dan Program Pemberdayaan
                     Masyarakat yang
                     tersebar di hampir di seluruh Indonesia.
                 </p>
                 <center>
                     <div class="card">
                         <div id="map" style="height: 600px;"></div>
                     </div>
                     <center>
             </div>
         </div>
     </div>
 </section>
 <!-- Lokasi Kajian & Program Pemberdayaan -->





 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
     <div class="container">
         <div class="section-title" data-aos="fade-up">
             <h2>Hubungi Kami</h2>
             <font style="font-size:35px; font-weight: bold; color:#0663C4;">
                 Hubungi Kami
             </font>
         </div>
         <div class="row">
             <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                 <div class="info">
                     <div class="address">
                         <i class="bi bi-geo-alt"></i>
                         <h4>Location:</h4>
                         <p>JI.KerucutnoI CondongCatur, Depok,sleman,Yogyakarta</p>
                     </div>
                     <div class="email">
                         <i class="bi bi-envelope"></i>
                         <h4>Email:</h4>
                         <p>contact@yayasansembari.org</p>
                     </div>
                     <div class="phone">
                         <i class="bi bi-phone"></i>
                         <h4>Call:</h4>
                         <p>082154983050</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                 <form action="Halaman_utama/SimpanKontak" method="post" role="form" class="php-email-form">
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name"
                                 required>
                         </div>
                         <div class="col-md-6 form-group mt-3 mt-md-0">
                             <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                 required>
                         </div>
                     </div>
                     <div class="form-group mt-3">
                         <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subject"
                             required>
                     </div>
                     <div class="form-group mt-3">
                         <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
                     </div>
                     <div class="my-3">
                         <div class="loading">Loading</div>
                         <div class="error-message"></div>
                         <div class="sent-message">Your message has been sent. Thank you!</div>
                     </div>
                     <div class="text-center"><button type="submit" name="proses" style="background-color:#E52A6F;">Send
                             Message</button></div>
                 </form>
             </div>
         </div>
     </div>
 </section>
 <!-- End Contact Section -->