@section('home')
    active
@endsection



<body>
        @include('layouts.header')
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('img/background.jpg');">
                <div class="container" data-aos="fade-up">
                    <h2>Welcome to <span>Medicio</span></h2>
                    <p>Kami disini hadir untuk membantu kalian semua untuk menjaga kesehatan mental kalian. Ingin tahu
                        kesehatan mental kamu saat ini ?</p>
                    <a href="/tes-mental" class="btn-get-started scrollto">Lakukan Test</a>
                </div>
            </div>
        </section><!-- End Hero -->
         <!-- ======= About Us Section ======= -->
         <section id="about" class="about-section">
                <div class="about-container row" data-aos="fade-up">
                    <div class="header-about container">
                        <p>Get to know with us</p>
                        <h2>Giving you the best solution <br> for your mental health</h2>
                        
                        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                    </div>
                    <div class="about-parent">
                        <div class="about-left" data-aos="fade-right">
                            <img src="{{asset('img/about.jpg')}}" class="responsive"  alt="">
                        </div>
                        <div class="content-wrapper about-right" data-aos="fade-left">
                            <h1>ABOUT US</h1>
                            <p>{!! $landingPages->about !!}. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorum quidem quae, quas similique vero! Amet soluta itaque officiis at.</p>
                            <!-- <div class="about-us-content">
                                <div class="about-us-child-wrapper">
                                    <h4>Visi</h4>
                                    <p class="font-italic">{!! $landingPages->visi !!}</p>
                                </div>
                                <div class="about-us-child-wrapper">
                                    <h4>Misi</h4>
                                    <p class="font-italic">{!! $landingPages->misi !!}</p>
                                </div>
                                <div class="about-us-child-wrapper">
                                    <h4>Tujuan</h4>
                                    <p class="font-italic">{!! $landingPages->direct !!}</p>
                                </div>
                                <div class="about-us-child-wrapper">
                                    <h4>Pencapaian</h4>
                                    <p class="font-italic">{!! $landingPages->pencapaian !!}</p>
                                </div>

                                <!-- <a href="#about" class="btn btn-primary btn-lg" tabindex="-1" role="button">Primary link</a> -->
                            </div> -->
                        </div>
                    </div>
                </div>
            </section><!-- End About Us Section -->
        <div class="content-wrapper">
        <main id="main">
           
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">

                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fas fa-user-md"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$totalPsikolog}}" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Jumlah Psikolog</strong></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="far fa-hospital"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$totalKonsultasi}}" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Total layanan konsultasi</strong> </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fas fa-flask"></i>
                                <span data-purecounter-start="0" data-purecounter-end="{{$totalTes}}" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Total yang sudah mengisi tes</strong></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fas fa-award"></i>
                                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Counts Section -->

            <!-- ======= Departments Section ======= -->
            <section id="departments" class="departments">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Jenis Layanan</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <ul class="nav nav-tabs flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                        <h4>Konseling</h4>
                                        <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                                    </a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                        <h4>Peer-Konseling</h4>
                                        <p>Voluptas vel esse repudiandae quo excepturi.</p>
                                    </a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                        <h4>Mentoring</h4>
                                        <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                                    </a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                        <h4>Tracking</h4>
                                        <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-1">
                                    <h3>Konseling</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                        sonata raqer a videna mareta paulona marka</p>
                                    <img src="{{asset('img/departments-1.jpg')}}" alt="" class="img-fluid">
                                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                        ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                        eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                        accusamus nostrum rem vero</p>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <h3>Peer-Konseling</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                        sonata raqer a videna mareta paulona marka</p>
                                    <img src="{{asset('img/departments-2.jpg')}}" alt="" class="img-fluid">
                                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                        ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                        eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                        accusamus nostrum rem vero</p>
                                </div>
                                <div class="tab-pane" id="tab-3">
                                    <h3>Mentoring</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                        sonata raqer a videna mareta paulona marka</p>
                                    <img src="{{asset('img/departments-3.jpg')}}" alt="" class="img-fluid">
                                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                        ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                        eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                        accusamus nostrum rem vero</p>
                                </div>
                                <div class="tab-pane" id="tab-4">
                                    <h3>Tracking</h3>
                                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                        sonata raqer a videna mareta paulona marka</p>
                                    <img src="{{asset('img/departments-4.jpg')}}" alt="" class="img-fluid">
                                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                        ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                        eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                        accusamus nostrum rem vero</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Departments Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Testimonials</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            @foreach($testimoni as $testimoni)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{$testimoni->testimoni}}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img"
                                        alt="">
                                    <h3>{{$testimoni->user->name}}</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Team Section ======= -->
            <section id="psikolog" class="team section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Team</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">

                        @foreach ($psikolog as  $psikolog)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <a href="/appointment/{{$psikolog->slug}}">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="{{asset('img/doctors/doctors-1.jpg')}}" class="img-fluid" alt="">
                                        <div class="social">
                                            Klik Untuk Konsultasi
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{$psikolog->user->name}}</h4>
                                </div>
                            </div>
                            </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End team Section -->


        </main><!-- End #main -->
    </div>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FeelsBox</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
                Designed by <a>Team Freak</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/boostrap.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
