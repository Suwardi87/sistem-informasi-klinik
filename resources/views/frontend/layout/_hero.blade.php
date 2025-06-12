 <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{ asset('assets/frontend') }}/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="container">
            <h2>Transaksi Pendaftaran Pasien</h2>
            <p>Menu untuk mendaftarkan pasien baru ke sistem. Pastikan bisa input data pasien, pilih jenis kunjungan, dan menyimpan data riwayat kunjungan.</p>
            @auth
                <a href="{{ route('backend.kunjungan.index') }}" class="btn-get-started">Arahkan ke Kunjungan</a>
            @else
                <a href="{{ route('register') }}" class="btn-get-started">Daftar Pasien</a>
            @endauth
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('assets/frontend') }}/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="container">
            <h2>Input Data Pasien</h2>
            <p>Formulir untuk menginput data pasien, termasuk nama, alamat, tanggal lahir, dan jenis kelamin.</p>
            <a href="{{ route('register') }}" class="btn-get-started">Arahkan ke Register</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('assets/frontend') }}/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="container">
            <h2>Pilih Jenis Kunjungan</h2>
            <p>Formulir untuk memilih jenis kunjungan pasien, apakah kunjungan pertama atau berikutnya.</p>
            <a href="{{ route('register') }}" class="btn-get-started">Daftar Pasien</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section>

