<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2 data-aos="fade-up" data-aos-duration="1600">Tentang POC</h2>
                <div data-aos="fade-up" data-aos-duration="1800" class="page_link">
                    <a href="<?= base_url('welcome') ?>">Beranda</a>
                    <a href="">Tentang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================About Area =================-->
<section class="about_area p_60">
    <div class="container">
        <div class="main_title">
            <h2 data-aos="fade-up" data-aos-duration="1600" style="font-size: 33px !important;">Tentang POC - Web Edukasi Open Source</h2>
            <p data-aos="fade-up" data-aos-duration="1800">POC adalah Web Edukasi Open-Source yang dibuat oleh <a href="https://github.com/chandraspt">Kelompok Kami.</a> Website
                pembelajaran dimana para siswa dapat belajar dimana saja dan kapan saja.
                Guru dapat mengupload video dirinya sendiri sedang mengajar, sehingga tanpa takut adanya jam
                kosong atau pun keadaan yang tidak terduga apapun karena POC dapat diakses dimana saja dan
                kapan saja.
            </p>
        </div>
        <div class="row about_inner">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Visi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Menyediakan sarana dan sumber daya manusia yang profesional dalam mendampingi para peserta didik secara intensif, khususnya dalam proses konsultasi dan duplikasi ilmu pembelajaran materi SMA.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Misi
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              <p> 1.Menjadikan POC sebagai pusat kursus berbasis teknologi informasi komunikasi.</p>
                              <p> 2.membantu dalam mencapai target kurikulum yang berlaku disekolah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tujuan
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                untuk meningkatkan daya serap para siswa dan materi yang diajarkan ,meningkatkan partisipasi aktif dari para siswa dan kemampuan belajar mandiri.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Manfaat
                                <i class="lnr lnr-chevron-down"></i>
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                                memberikan fleksibelitas dalam memilih waktu dan tempat untuk mengakses materi dari mana saja.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video_area" id="video">
                    <img class="img-fluid" src="<?= base_url('assets/') ?>img/video-1.jpg" alt="" />
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=79ll7CFUHO0">
                        <img src="<?= base_url('assets/') ?>img/icon/video-icon-1.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <div class="about_details" data-aos="fade-up" data-aos-duration="1600">
            <p>
                Kami mengharapkan dengan adanya platform belajar online ini dapat mempermudah segala kegiatan proses belajar.
            </p>
        </div>
    </div>
</section>
<!--================End About Area =================-->

<!--================Team Area =================-->
<section class="team_area p_20">
    <div class="container">
        <div class="main_title">
            <h2 data-aos="fade-up" data-aos-duration="1800">Testimonial Para Siswa POC</h2>
            <p data-aos="fade-up" data-aos-duration="2000">ini adalah testimoni dari beberapa siswa yang pernah menggunakan platform kami.</p>
        </div>
        <section class="testimonials_area p_20">
            <div class="container">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-3.png" alt="">
                            <h4>M Reihan Fitriansyah</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>platform ini keren banget , bisa mempermudah saya untuk mempelajari materi materi baru.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-2.png" alt="">
                            <h4>M Reza Fitriansyah</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>alhamdulillah saya keterima di PTN negri impian saya yuhuuuu....</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="<?= base_url('assets/') ?>img/testimonials/testi-1.png" alt="">
                            <h4>Saparni purwanto</h4>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <p>Easy To use , mantap keren wawasan saya jadi bertambah makasih Private online Course.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!--================End Team Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2 data-aos="fade-up" data-aos-duration="1800">LOGIN SEBAGAI GURU DAN UPLOAD MATERI & VIDEO SEKARANG</h2>
            <p data-aos="fade-up" data-aos-duration="2000">Jika anda adalah seorang guru, anda dapat mendaftar dan masuk mengajar para siswa di POC ini.
            </p>
            <a data-aos="fade-up" data-aos-duration="2200" class="main_btn" href="<?= base_url('welcome/guru') ?>">Login Sebagai Guru <span class="lnr lnr-arrow-right text-black"></span></a>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->