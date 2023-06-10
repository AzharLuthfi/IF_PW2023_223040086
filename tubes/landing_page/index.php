<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travelgo</title>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet" />

  <!-- Father icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <!-- navbar start -->
  <?php require('partials/nav.php'); ?>
  <!-- navbar -->

  <!-- hero section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>
        Cari dan Booking Hotel dan tiket Penerbangan dengan Cara Yang Mudah Di
        <span>Travelgo</span>!
      </h1>
      <p>
        ingin liburanmu mudah dan terencana? <br />
        Ayo rencanakan liburanmu bersama Travelgo. Travel agen no.1 di
        indonesia
      </p>
      <a href="#kontak" class="cta">Pesan Sekarang</a>
    </main>
  </section>
  <!-- hero section end -->

  <!-- about section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/about2.jpg" alt="Tentang Kami" />
      </div>
      <div class="content">
        <h3>Kenapa Harus memilih <span>Trevelgo</span>?</h3>
        <p>
          Travelgo adalah situs travel nomor satu di indonesia. bayangkan
          dunia Yang begitu besar dalam satu aplikasi.
        </p>
        <p>
          memberikan kamu akses untuk terbang kemanapun yang kamu mau, diam
          dimanapun kamu mau, bekerja dimanapu, dan menjelajahi apapun.
          berlibur dengan lebih terencana bersama Trevelgo.
        </p>

        <span>Say GO to Travelgo!</span>
      </div>
    </div>
  </section>
  <!-- about section end-->

  <!-- Destination section start-->
  <section id="destination" class="destination">
    <h2><span>List</span> Destination</h2>

    <div class="negara">
      <div class="container">
        <div class="box-negara">
          <div class="box">
            <img src="img/bali.jpg" alt="" />
            <h3>--BALI--</h3>
            <p>
              Bali adalah salah satu destinasi wisata terbaik didunia. dengan
              keindahan alam dan keberagaman budaya. destinasi liburan no.1 di
              Indonesia
            </p>
            <p>--IDR 5.000.000--</p>
            <a href="bali_detail.php"><button>Detail</button></a>
          </div>
          <div class="box">
            <img src="img/india.jpg" alt="" />
            <h3>--INDIA--</h3>
            <p>
              India adalah salah satu destinasi wisata terbaik didunia. dengan
              aneka kuliner, keindahan alam dan keberagaman budaya!
            </p>
            <p>--IDR 5.000.000--</p>
            <a href="india_detail.php"><button>Detail</button></a>
          </div>
          <div class="box">
            <img src="img/paris.jpg" alt="" />
            <h3>--PARIS--</h3>
            <p>
              Paris adalah salah satu destinasi wisata terbaik didunia. dengan
              aneka kuliner, keindahan alam dan keberagaman budaya!
            </p>
            <p>--IDR 5.000.000--</p>
            <a href="paris_detail.php"><button>Detail</button></a>
          </div>
          <div class="box">
            <img src="img/singapura.jpg" alt="" />
            <h3>--SINGAPURA--</h3>
            <p>
              Singapura adalah salah satu destinasi wisata terbaik didunia.
              dengan aneka kuliner, keindahan alam dan keberagaman budaya!
            </p>
            <p>--IDR 5.000.000--</p>
            <a href="singapura_detail.php"><button>Detail</button></a>
          </div>
        </div>
      </div>
  </section>

  <!-- Destination section end-->

  <!-- booking Section start -->
  <section id="kontak" class="contact">
    <h2><span>Booking</span> Now.</h2>
    <p>"Pesan destinasi sesuai yang anda inginkan"</p>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1
        m12!1m3!1d253840.6563898086!2d106.66470142733603!3d-6.22937958781179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x
        2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C
        %20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1683024248848!5m2!1sid!2sid" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map">
      </iframe>

      <form action="" method="post">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama" />
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="Email" />
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no.phone" />
        </div>
        <div class="input-group">
          <i data-feather="send"></i>
          <input type="text" placeholder="Destination" />
        </div>
        <button type="submit" class="btn">Pesan Sekarang</button>
      </form>
    </div>
  </section>

  <!-- booking Section end-->

  <!-- Footer Section end-->
  <?php require('partials/footer.php'); ?>
  <!-- Footer Section end-->
  <!-- Father icons -->
  <script>
    feather.replace();
  </script>
  <!-- Ny Javascript -->
  <script src="js/script.js"></script>
</body>

</html>