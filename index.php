<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Website SIK</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:red;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
        <img src="LOGO-UPI.png" alt="" width="50" height="50" class="d-inline-block align-text-middle" /> 
        Sistem Informasi Kelautan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar navbar-expand-sm" id="navbarNavDropdown">
            <ul class="navbar-nav text-light">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akademik
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="kurikulum.php">Kurikulum</a></li>
                <li><a class="dropdown-item" href="lab.php">Laboratorium</a></li>
              </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                  <li><a class="dropdown-item" href="visimisi.php">Visi dan Misi</a></li>
                  <li><a class="dropdown-item" href="organisasi.php">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="dosen.php">Pimpinan, Dosen & Staf</a></li>
                  <li><a class="dropdown-item" href="akreditasi.php">Akreditasi</a></li>
                  <li><a class="dropdown-item" href="#">Direktorat UPI Serang</a></li>
                </ul>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dowmload
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="https://drive.google.com/file/d/1QzVIjXXNbZxCYD2rnOdaMWR_7k83amyw/view?usp=sharing">SK Syarat Peringkat Akreditasi</a></li>
                    <li><a class="dropdown-item" href="https://docs.google.com/document/d/1CijlD1g5NZH2Jkwvf90TXoUYX3rdcYp9/edit?usp=sharing&ouid=114860766929166772258&rtpof=true&sd=true">Struktur Kurikulum</a></li>
                    <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/12tzM1qZQ9NG99olZvmA_syL-TH44oXh2?usp=sharinghttps://drive.google.com/drive/folders/12tzM1qZQ9NG99olZvmA_syL-TH44oXh2?usp=sharing">Rencana Pembelajaran Semester (RPS)</a></li>
                    <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/1ZlC8ZQWGvVBEEoRyfmFhJ83XofXxtgrY?usp=sharing">Nilai Perkuliahan</a></li>
                  </ul>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="kontak.php">Kontak</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="upiserang.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Tentang Kampus</h3>
              <p>Universitas Pendidikan Indonesia Kampus Daerah serang Program Studi Sistem Informasi Kelautan.
                Satu-satunya program studi yang mengkolaborasikan antara sistem informasi dan ilmu kelautan.
              </p>
              <button type="button" class="btn btn-outline-primary mt-3">Selengkapnya</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="diving.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Kegiatan Mahasiswa</h3>
              <p>Diving merupakan salah satu kegiatan praktikum yang nantinya akan dipelajari oleh Mahasiswa Sistem Informasi Kelautan.
                Dimana kegiatan diatas bersifat secara sukarela dan diperuntukan kepada siapa saja yang ingin mengikuti kegiatan tersebut.
              </p>
              <button class="btn btn-outline-primary mt-3">Selengkapnya</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="himataska.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Himataska</h3>
              <p>Himataska merupakan himpunan mahasiswa sistem informasi kelautan yang dimana ini merupakan sebuah wadah organisasi 
              bagi mahasiwa prodi SIK untuk mengembangkan kemampuan dalam berorganisasi.
              </p>
              <button class="btn btn-outline-primary mt-3">Selengkapnya</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
      <br>
      <br>
      <br>

      <div class="container-fluid py-5">
        <div class="container">
          <h2 class="text-center">Papan Informasi</h2>
         <br> <br> <br>
          <div class="row">
            <div class="col-4">
              <div class="card">
                <img src="mataka3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mataka Bulan Agustus</h5>
                  <p class="card-text">Mataka atau Mata Himataska pada bulan agustus mengusung tema Sosialisasi kurikulum MBKM dan konsep UAS program studi Sistem Informasi Kelautan.</p>
                  <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
          <div class="col-4">
            <div class="card">
              <img src="mataka.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mataka Bulan September</h5>
                <p class="card-text">Mataka atau Mata Himataska pada bulan september mengusung tema Aktualisasi diri mahasiswa dalam hubungan sosial akademik sekian dan terimakasih.</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="mataka2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mataka Bulan Oktober</h5>
                <p class="card-text">Mataka atau Mata Himataska pada bulan september mengusung tema Pemanfaatan model dinamika spasial sebagai solusi pengendalian pesisir padat penduduk</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <br> <br>

      <div class="container-fluid">
        <div class="container">
          <h2 class="text-center">Mahasiswa Dengan Nilai Tinggi Sistem Informasi Kelautan</h2>
          <div class="col-lg-6 col-md-8 d-block mx-auto mt-5">
            <img src="haha.jpg" class="img-fluid img-thumbnail" alt="">
          </div>
        </div>
      </div>
      <br> <br>

      <div class="container-fluid py-5">
        <div class="container">
          <h2 class="text-center">Informasi Beasiswa </h2>
         <br> <br> <br>
          <div class="row">
            <div class="col-4">
              <div class="card">
                <img src="jfl.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Beasiswa Jabar Feature Leaders Scholarship</h5>
                  <p class="card-text">Beasiswa yang dapat diikuti oleh mahasiswa Universitas Pendidikan Indonesia yang berdomisili Jawa Barat dan sekitarnya.</p>
                  <a href="https://beasiswa-jfl.disdik.jabarprov.go.id/" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
            </div>
          <div class="col-4">
            <div class="card">
              <img src="kjmu.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Beasiswa Kartu Mahasiswa Jakarta Unggul</h5>
                <p class="card-text">Beasiswa yang dapat diikuti oleh mahasiswa Universitas Pendidikan Indonesia yang berdomisili Jakarta dan sekitaarnya.</p>
                <a href="https://jakarta.go.id/kjmu" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="beasiswa.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Beasiswa-id.et Beasiswa semua jenjang Pendidikan</h5>
                <p class="card-text">Beasiswa yang dapat diikuti oleh seuluruh mahasiswa Universitas Pendidikan Indonesia tanpa adanya batasan domisili wilayah.</p>
                <a href="https://beasiswa-id.net/category/beasiswa-s1/" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="accordion my-5 container" id="accordionExample">
        <h2 class="text-center mb-3">Apa Itu SIK?</h2>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Apa itu prodi SIK?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              SIK atau Sistem Informasi Kelautan adalah salah satu program studi di Universitas Pendidikan Indonesia dan juga satu-atunya prodi yang memadukan 
              Ilmu Kelautan dan Sistem Informasi. Prodi yang memadukan antara Ilmu kelautan dengan kemajuan teknologi yang tentunya diharapkan bahwasannya dengan
              adanya program studi ini dapat membawa kemajuan pada sektor maritim Indonesia.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              SIK dari sudut pandang mahasiwa
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              SIK itu sejujurnya jurusannya bagus banget, seru, apalagi kalau yang suka sama sesuatu yg 'unik'. Karena belajar laut itu yaa semenyenangkan itu, 
              terus yaa memang masalah sistem informasi yang emang bikin pusing banget itu, tapi bikin kepo kalau ga dikerjain. Nah kyk kalau lu suka sesuatu yg menantang, 
              yaa SIK tuh cocok bangett, soalnya kyk yg segalanya di pelajarin dah. Udah mah karna output kita juga scintisc jadi kayak masalah kepenulisan itu jadi sesuatu yang harus banget di kuasai oleh kita, 
              misalny nulis jurnal lah, nulis segala macem pokoknya.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Bidang keilmuan apa saja sih yang dipelajari?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            Bidang keilmuan yang dipelajari pada program studi Sistem Informasi Kelautan ada banyak sekali dan cakupannya luas seperti pemrograman, sistem informasi, basis data, kecerdasan buatan dan masih banyak lagi.
            Nah yang tadi itu dari bidang Sistem Informasi yaa kalau dari Ilmu Kelautannya kita belajar Sistem Informasi Geografi, Oseanografi, Dinamika Populasi, Biologi Laut, dan masih banyak lagi yang dapat dipelajari.
            Dan tentunya hal tersebut membuat SIK berebda dari program studi lainnya.
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">

        <div class="card" style="width: 28rem;">
          <div class="card-body">
            <h3 class="card-title"><b>Tanyakan Sesuatu</b></h3>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <a href="#" class="btn btn-primary active" aria-current="page">Kirim</a>
          </div>
        </div>
  
        <div class="card" style="width: 50rem;">
          <div class="container">
            <div class="embed-responsive embed-responsive-21by9"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7934.0740051766625!2d106.14228583488767!3d-6.125722999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418adaa4f7f563%3A0x950ec58123df8596!2sUniversitas%20Pendidikan%20Indonesia%20(UPI)%20Kampus%20Serang!5e0!3m2!1sen!2sus!4v1633655102015!5m2!1sen!2sus" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        </div>


      <div class="footer-top my-5">
        <div class="container" style="background-color: beige;">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-links">
               <h4>FAKULTAS</h4>
                <ul>
                <li class="fa fa-external-link"> <a href="http://fip.upi.edu/" target="_blank">FIP</a></li>
                <li class="fa fa-external-link"> <a href="http://fpips.upi.edu/" target="_blank">FPIPS</a></li>
                <li class="fa fa-external-link"> <a href="http://fpbs.upi.edu/" target="_blank">FPBS</a></li>
                <li class="fa fa-external-link"> <a href="http://fpmipa.upi.edu/" target="_blank">FPMIPA</a></li>
                <li class="fa fa-external-link"> <a href="http://fptk.upi.edu/" target="_blank">FPTK</a></li>
                <li class="fa fa-external-link"> <a href="http://fpok.upi.edu/" target="_blank">FPOK</a></li>
                <li class="fa fa-external-link"> <a href="http://fpeb.upi.edu/" target="_blank">FPEB</a></li>
                <li class="fa fa-external-link"> <a href="http://sps.upi.edu/" target="_blank">SPs</a></li>
                </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>AKADEMIK</h4>
              <ul>
                <li class="fa fa-external-link"> <a href="http://spot.upi.edu/" target="_blank" alt="E-Learning | Learning Management System | Sistem Pembelajaran Online Terpadu">SPOT</a></li>
                <li class="fa fa-external-link"> <a href="http://mrs.upi.edu/" target="_blank" alt="Multimedia Resource Sharing">M R S</a></li>
                <li class="fa fa-external-link"> <a href="http://sino.upi.edu/" target="_blank" alt="Sistem Informasi Nilai Online">S I N O</a> </li>
                <li class="fa fa-external-link"> <a href="https://siak.upi.edu/sinndo/" target="_blank" title="Sistem Input Nilai Dosen">S I N N D O</a></li>
                <li class="fa fa-external-link"> <a href="http://evaluasi-pbm.upi.edu/" target="_blank">Evaluasi PBM</a></li>
                <li class="fa fa-external-link"> <a href="http://silabus.upi.edu/" target="_blank" alt="Silabus Perkuliahan">Silabus Online</a></li>
                <li class="fa fa-external-link"> <a href="http://file.upi.edu/" target="_blank" alt="Direktori File">Direktori File</a></li>
  
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>RISET</h4>
              <ul>
                <li class="fa fa-external-link"> <a href="http://jurnal.upi.edu/" target="_blank">Portal Jurnal</a></li>
                <li class="fa fa-external-link"> <a href="http://bangdos.upi.edu/" target="_blank">Bangdos</a></li>
                <li class="fa fa-external-link"><a href="http://penelitian.lppm.upi.edu/" target="_blank">Data Penelitian</a></li>
                <li class="fa fa-external-link"> <a href="http://repository.upi.edu/" target="_blank">Repository</a></li>
                <li class="fa fa-external-link"><a href="http://digilib.upi.edu/" target="_blank" alt="Digital Library">Digital Library</a></li>
              </ul>
            </div>
  
           <div class="col-lg-3 col-md-6 footer-links">
              <h4>WEB LINK</h4>
                <ul>
                  <li class="fa fa-external-link"><a href="http://kd-cibiru.upi.edu" target="_blank" alt="Kampus Cibiru"> Kampus Cibiru</a></li>
                  <li class="fa fa-external-link"><a href="http://kd-tasikmalaya.upi.edu" target="_blank" alt="Kampus Tasikmalaya"> Kampus Tasikmalaya</a></li>
                  <li class="fa fa-external-link"><a href="http://kd-sumedang.upi.edu" target="_blank" alt="Kampus Sumedang"> Kampus Sumedang</a></li>
                  <li class="fa fa-external-link"><a href="http://kd-purwakarta.upi.edu" target="_blank" alt="Kampus Purwakarta"> Kampus Purwakarta</a></li>
                  <li class="fa fa-external-link"><a href="http://www.upi.edu" target="_blank" alt="Universitas"> Universitas</a></li>
                </ul> 
            </div>
  
          </div>
        </div>
      </div>
      
      <footer>
        &copy; 2021 Abdillah Aditama Sujana (2000163)
        </footer>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>