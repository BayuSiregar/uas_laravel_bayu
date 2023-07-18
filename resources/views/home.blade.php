@extends('layouts.app')

<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@section('content')
<style>
  body{
    background-image: none;
  }
</style>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<section id="hero" style="margin-top: -24px!important;">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://s3.ap-southeast-1.amazonaws.com/cdn.orbit/wp-content/uploads/2022/01/17115537/sman-1-medan-580x408.jpg)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(https://s3.ap-southeast-1.amazonaws.com/cdn.orbit/wp-content/uploads/2022/01/17115537/sman-1-medan-580x408.jpg)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang SMAN 1 MEDAN</h2>
          <p> <b>SMA Negeri 1 Medan </b>, atau Smansa Medan, terletak di Jalan Teuku Cik Dik Tiro No. 1, Medan, Sumatra Utara. Berdiri sejak tahun 1950, SMA Negeri 1 Medan melahirkan banyak pemimpin sipil dan militer di tingkat regional maupun nasional. Berdiri di jantung pusat kota yang kosmopolitan, Smansa Medan mendidik siswa dengan disiplin ketat demi mengabdikan ilmu untuk kepentingan bangsa dan negara. Selama masa Orde Lama dan Orde Baru, Smansa Medan terkenal dengan reputasi guru-gurunya yang tegas dan berkualitas. Banyak alumni Smansa Medan dikenal umum sebagai pelayan publik yang berhasil.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="https://s3.ap-southeast-1.amazonaws.com/cdn.orbit/wp-content/uploads/2021/10/13160312/SMAN-1-MEDAN-LARIS-MANIS-2-580x408.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>SARANA PRASARANA SMAN 1 MEDAN</h3>
            <p>
            Berbagai sarana prasarana dimiliki SMAN 1 Medan untuk menunjang aktivitas yang dipekerjakan belajar mengajar. Sarana prasarana tersebut selang lain:
            <li>Kelas</li>
            <li>Wifi</li>
            <li>Perpustakaan</li>
            <li>Laboratorium Biologi</li>
            <li>Laboratorium Fisika</li>
            <li>Laboratorium Kimia</li>
            <li>Laboratorium Komputer</li>
            <li>Laboratorium Bahasa</li>
            <li>Masjid</li>
            <li>Aula</li>
            <li>UKS</li>
            <li>Ruang Kesenian</li>
            <li>Lapangan Futsal</li>
            <li>Lapangan Basket</li>
            <li>Lapangan Voli</li>
            <li>Lapangan Badminton</li>
            <li>Ruang Osis</li>
            <li>Foodcourt</li>
            <li>Lobby Sekolah</li>
            </p>
            <h3>JAM PEMBELAJARAN DI SMAN 1 MEDAN</h3>
            <p>Pembelajaran di SMAN 1 MEDAN dilakukan pada Pagi. Dalam seminggu, pembelajaran dilakukan selama 6 hari.</p>
            <h3>AKREDITASI</h3>
            <p>SMAN 1 MEDAN memiliki akreditasi A. Berdasarkan no. SK : 740/BAP-SM/LL/XI/2016</p>
          </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
            <ul>
              <h3>Identitas Satuan Pendidikan</h3>
              <li><i class="bi bi-check-circle"></i>Nama    : SMAN 1 MEDAN</li>
              <li><i class="bi bi-check-circle"></i>NPSN    : 10210873</li>
              <li><i class="bi bi-check-circle"></i>Alamat  :	JL. TEUKU CIK DITIRO NO. 1 MEDAN</li>
              <li><i class="bi bi-check-circle"></i>Kode Pos : 20152</li>
              <li><i class="bi bi-check-circle"></i>Kelurahan : MADRAS HULU</li>
              <li><i class="bi bi-check-circle"></i>Kecamatan / Kota (LN)	: Kec. Medan Polonia</li>
              <li><i class="bi bi-check-circle"></i>Kab : Kota Medan</li>
              <li><i class="bi bi-check-circle"></i>Provinsi : Sumatera Utara</li>
              <li><i class="bi bi-check-circle"></i>Status Sekolah : Negeri</li>
              <li><i class="bi bi-check-circle"></i>Jenjang Pendidikan : SMA</li>
            </ul>
          </div>
        </div>
      </div>
      </section><!-- End Counts Section -->
        <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-person-circle"></i>
              <span style="font-size:30px !important;">125</span>
              <br> <br>
              <strong>Siswa</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-person-circle"></i>
              <span style="font-size:30px !important;">95</span>
              <br> <br>
              <strong>Siswi</strong> 
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-mortarboard-fill"></i>
              <span style="font-size:30px !important;">450</span>
              <br> <br>
              <strong>Alumni</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-award-fill"></i>
              <span style="font-size:30px !important;">A</span>
              <br> <br>
              <strong>Akreditasi</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
      <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Fax. 0614511765 <br>
          Email. smansamedan@yahoo.com <br>  
          Website. http://www.smansamedan.sch.id/
          </p>
        </div>

      </div>

      <div>
      <iframe style="border:0; width: 100%; height: 350px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0264995301613!2d98.66742031426003!3d3.581386997393777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131d2c7472b07%3A0xabf9ef2e3dc0640b!2sSekolah%20Menengah%20Atas%20Negeri%201%20Medan!5e0!3m2!1sid!2sid!4v1581321687014!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>JL. TEUKU CIK DITIRO NO. 1 MEDAN</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>smansamedan@yahoo.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telepon</h3>
                  <p>0614511765</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    
  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="container">
  <div class="copyright"  style="margin-top:1% !important;">
    &copy; Copyright <strong><span>Bayu Febriansyah Sir</span></strong>
     
      
      </div>
      </div>
      </footer>
      @endsection

<script src="{{ asset('js/main.js') }}"></script> 
<script src="{{ asset('js/apps.js') }}"></script> 
<script src="{{ asset('js/bootstrap.js') }}"></script> 