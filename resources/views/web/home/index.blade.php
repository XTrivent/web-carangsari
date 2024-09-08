@extends('web._layout.app')
@section('content')

@push('styles')
<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
    }

    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }

    #hero {
        width: 100%;
        height: 100vh;
        background: url("../landing/assets/img/20240902_134146.jpg") top center no-repeat;
        background-size: cover;
        position: relative;
        padding-top: 82px;
    }
</style>
@endpush

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-xl-6">
                <h1>Puri Agung Carangsari</h1>
                <h2>Objek Wisata Bersejarah</h2>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kontak</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Alamat Kami</h3>
                            <p>Jl. I.GST.NGR Rai, Desa Carangsari, Kecamatan Petang, Kabupaten Badung</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Kami</h3>
                            <p>agungsuta02@gmail.com<br>bagussuarmandala@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Hubungi Kami</h3>
                            <p>+62 813 3875 6501<br>+62 819 9988 9930</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.5141399042386!2d115.21931552579265!3d-8.44927749159071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd223fa438090c3%3A0x32c21dfde749ffdc!2sPuri%20Agung%20Carangsari!5e0!3m2!1sid!2sid!4v1725011072701!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Contact Section -->
@endsection
