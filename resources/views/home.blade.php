<!doctype html>
<html lang="en">
  @include('partials.head')
  <body>
    @include('partials.navbar')
    @include('partials.carousel')
    @include('partials.svg1')
    <section id="project">
      <div class="container">
        <div class="row text-center pt-4 mb-4">
          <div class="col">
            <h1>Berita</h1><br>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-4 mb-4">
            <div class="card" >
              <img src="img/berita/article1.png" class="card-img-top" style="height:300px" alt="konstan" />
              <div class="card-body">
                <p class="card-text">Universitas Pendidikan Indonesia, in collaboration with the Asia-Pacific Center of Education for International Understanding (APCEIU), under the auspices of UNESCO, holds Training of Trainers (ToT) and Global Citizenship Education (GCED)</p>
                <a href="https://berita.upi.edu/en/universitas-pendidikan-indonesia-in-collaboration-with-the-asia-pacific-center-of-education-for-international-understanding-apceiu-under-the-auspices-of-unesco-holds-training-of-trainers-tot-and-globa/#pll_switcher" class="btn btn-warning">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/berita/article2.png" class="card-img-top" style="height:300px" alt="teakops" />
              <div class="card-body">
                <p class="card-text">Program Studi Akuntansi FPEB UPI gelar Pengabdian Kepada Masyarakat Internasional dengan Fokus Meningkatkan Kemampuan Penyusunan Anggaran Keuangan</p>
                <a href="https://berita.upi.edu/program-studi-akuntansi-fpeb-upi-gelar-pengabdian-kepada-masyarakat-internasional-dengan-fokus-meningkatkan-kemampuan-penyusunan-anggaran-keuangan/" class="btn btn-warning">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/berita/article3.png" class="card-img-top" style="height:300px" alt="digitalgarage" />
              <div class="card-body">
                <p class="card-text">Kolaborasi FPEB UPI dengan Pemerintah Kota Cimahi dalam Penyusunan Dokumen Background Study RPJD Kota Cimahi 2024-2045</p>
                <a href="https://berita.upi.edu/kolaborasi-fpeb-upi-dengan-pemerintah-kota-cimahi-dalam-penyusunan-dokumen-background-study-rpjd-kota-cimahi-2024-2045/" class="btn btn-warning">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('partials.svg1')
    <section id="project">
      <div class="container">
        <div class="row text-center pt-4 mb-4">
          <div class="col">
            <h1>Galeri</h1><br>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/ziwbbgaleri.jpeg" class="card-img-top" alt="konstan" />
              <div class="card-body">
                <p class="card-text">Sosialisasi ZIWBB di lingkunga FPEB</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/berita2.jpg" class="card-img-top" alt="teakops" />
              <div class="card-body">
                <p class="card-text">Kegiatan Purnabakti Undang Edi yang dihadiri Dekan serta Wakil Dekan</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/berita3.jpg" class="card-img-top" alt="digitalgarage" />
              <div class="card-body">
                <p class="card-text">FPEB meraih Juara 1 dalam Cabang Olahraga Batminton Putri beregu di pagelaran Pordoska 2023</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/berita1.JPG" class="card-img-top" alt="rekalogi" />
              <div class="card-body">
                <p class="card-text">Keseruan Staf FPEB dalam Kegiatan Mokaku</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/berita4.jpeg" class="card-img-top" alt="techno" />
              <div class="card-body">
                <p class="card-text">Kegiatan Motivasi Pegawai 2023 ke Malang</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- Skills -->
    @include('partials.svg1')
    <section id="skill">
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2>Form Pengaduan</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputnama1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputNama1" />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                  <path
                    fill="#F4F9F9"
                    fill-opacity="1"
                    d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                  ></path>
                </svg>
                
        </section>
    @include('partials.svg')
    @include('partials.footer')
    @include('partials.scriptbootstrap')
  </body>
</html>