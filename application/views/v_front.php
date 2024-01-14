<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Google font merubah tampilan text -->
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Ultra&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . "asset_front/style.css"; ?>" />

  <title>My Portfolio | Vinto Rizalfi</title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-weight: bold; color: lightcyan;">
        <?php echo $current_user->nama_aplikasi; ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->

  <section class="jumbotron text-center">
    <img src="<?php echo base_url() . "asset_front/img/vinto.jpg"; ?>" alt="Vinto Rizalfi" width="200"
      class="rounded-circle img-thumbnail" /><br><br>
    <h1 class="name">
      <?php echo $current_user->nama; ?>
    </h1>
    <p class="profesi">
      <?php echo $current_user->pekerjaan; ?> |
      <?php echo $current_user->hobi; ?>
    </p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,128L80,122.7C160,117,320,107,480,128C640,149,800,203,960,192C1120,181,1280,107,1360,69.3L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-left">
        <div class="col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <?php foreach ($organisasi as $row): ?>
            <ul>
              <li>
                <?= $row->nama_organisasi; ?> | Tahun:
                <?= $row->tahun_organisasi; ?> | Jabatan:
                <?= $row->jabatan_organisasi; ?>
              </li>
            </ul>
          <?php endforeach; ?>
          <!-- <ol>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit</li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
          </ol> -->
        </div>
        <div class="col-md-4" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine"
          data-aos-delay="200">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum adipisci non quam quos maiores
            sapiente veritatis dicta impedit iste eum!</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1"
        d="M0,96L48,101.3C96,107,192,117,288,144C384,171,480,213,576,208C672,203,768,149,864,128C960,107,1056,117,1152,144C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir About -->

  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Project</h2>
        </div>
      </div>
      <div class="row">
        <?php foreach($project as $row) : ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="<?php echo base_url("asset_front/img/projects/$row->gambar_project"); ?>" class="card-img-top"
              alt="projects 1" height="260px" width="100px" />
            <div class="card-body">
              <p class="card-text"><?php echo $row->deskripsi_project; ?></p>
            </div>
          </div>
        </div>
          <?php endforeach; ?>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,96L48,106.7C96,117,192,139,288,170.7C384,203,480,245,576,234.7C672,224,768,160,864,149.3C960,139,1056,181,1152,170.7C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Projects -->

  <!-- Contact -->
  <section id="contact">
    <div class="">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="  name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>

              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-info">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#6c757d" fill-opacity="1"
        d="M0,0L9.6,42.7C19.2,85,38,171,58,218.7C76.8,267,96,277,115,234.7C134.4,192,154,96,173,53.3C192,11,211,21,230,74.7C249.6,128,269,224,288,240C307.2,256,326,192,346,154.7C364.8,117,384,107,403,90.7C422.4,75,442,53,461,74.7C480,96,499,160,518,154.7C537.6,149,557,75,576,58.7C595.2,43,614,85,634,133.3C652.8,181,672,235,691,218.7C710.4,203,730,117,749,101.3C768,85,787,139,806,154.7C825.6,171,845,149,864,165.3C883.2,181,902,235,922,256C940.8,277,960,267,979,240C998.4,213,1018,171,1037,165.3C1056,160,1075,192,1094,170.7C1113.6,149,1133,75,1152,69.3C1171.2,64,1190,128,1210,138.7C1228.8,149,1248,107,1267,74.7C1286.4,43,1306,21,1325,58.7C1344,96,1363,192,1382,208C1401.6,224,1421,160,1430,128L1440,96L1440,320L1430.4,320C1420.8,320,1402,320,1382,320C1363.2,320,1344,320,1325,320C1305.6,320,1286,320,1267,320C1248,320,1229,320,1210,320C1190.4,320,1171,320,1152,320C1132.8,320,1114,320,1094,320C1075.2,320,1056,320,1037,320C1017.6,320,998,320,979,320C960,320,941,320,922,320C902.4,320,883,320,864,320C844.8,320,826,320,806,320C787.2,320,768,320,749,320C729.6,320,710,320,691,320C672,320,653,320,634,320C614.4,320,595,320,576,320C556.8,320,538,320,518,320C499.2,320,480,320,461,320C441.6,320,422,320,403,320C384,320,365,320,346,320C326.4,320,307,320,288,320C268.8,320,250,320,230,320C211.2,320,192,320,173,320C153.6,320,134,320,115,320C96,320,77,320,58,320C38.4,320,19,320,10,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Contact -->

  <!-- Footer -->
  <footer class="bg-secondary text-white text-center pb-5">
    <p>Follow Me <i class="bi bi-instagram text-"></i> <a href="https://www.instagram.com/vin.zalfi/"
        class="text-white fw-bold">Vinto Rizalfi</a></p>
  </footer>
  <!-- Akhir Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>