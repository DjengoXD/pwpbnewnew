<?php
require 'fungsi.php';
$user =mysqli_fetch_assoc($hasil);
$about =mysqli_fetch_assoc($hasill);
$project = data("SELECT * FROM project");

?>
<?php
if(isset($_POST["submit"])){
  if (tambah($_POST) > 0) {
    echo " 
       <script>
         alert('data sudah terkirim')
       </script>
       ";
  }
  
    else{
      echo "gagal terkirim";
    }
  
}
?>
//🎀  𝒾𝓁𝒽𝒶𝓂 𝓃𝒽  🎀 ✔️//---


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> 
          <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>bbb
<link href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather&display=swap" rel="stylesheet">     
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body class=" 1">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgb(67, 57, 71)">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projek">projek</a>
            </li>

          
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#kontak">kontak</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./admin/index.php"><i class="bi bi-sliders"></i></a>
            </li>
          </ul>
           
          </ul>
        </div>
      </div>
    </nav>
    <section id="home">
    <div class="jumbotron text-center" >
      <img src="img/121.jpg" alt="" width="200" class="rounded-circle "data-aos="fade-up"
     data-aos-duration="2000"data-aos-offset="500">
      <h1 class="display-4"><?= $user["nama"];?>🤠 </h1>
      <p class="lead">seorang remaja desa yang sedang mencari jatidiri  </p>
      <hr class="my-4" />
      <p>👇👇👇👇baca lebih lanjut👇👇👇👇</p>
      <a class="btn btn-primary" style="background-color: rgb(123, 255, 0)"  href="https://www.youtube.com/channel/UCtHOqTBF06s2Z7nMU4XFWPg"role="button">open</a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f3f4f5"
          fill-opacity="1"
          d="M0,128L24,133.3C48,139,96,149,144,165.3C192,181,240,203,288,224C336,245,384,267,432,234.7C480,203,528,117,576,106.7C624,96,672,160,720,181.3C768,203,816,181,864,154.7C912,128,960,96,1008,106.7C1056,117,1104,171,1152,165.3C1200,160,1248,96,1296,85.3C1344,75,1392,117,1416,138.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
    </div>
    </section>

    <section id="about">
      <div class="row text-center"data-aos="zoom-in"data-aos-duration="1500">
        <h2>about</h2>
      </div>

      <div class="row justify-content-center fs-5"></div>
      <div class="container">
        <div class="row justify-content-center ">
        <div class="col-sm-4"data-aos="fade-right"
     data-aos-anchor="#example-anchor"
     data-aos-offset="1000"
     data-aos-duration="1500">
          <p><?= $about["coloumn1"];?>

          </p>
        </div>
        <div class="col-sm-4" data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="1000"
     data-aos-duration="1500">
          <p>
          <?= $about["coloumn2"];?>

          </p>
        </div>
      </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f3f4f5"
          fill-opacity="1"
          d="M0,128L24,133.3C48,139,96,149,144,165.3C192,181,240,203,288,224C336,245,384,267,432,234.7C480,203,528,117,576,106.7C624,96,672,160,720,181.3C768,203,816,181,864,154.7C912,128,960,96,1008,106.7C1056,117,1104,171,1152,165.3C1200,160,1248,96,1296,85.3C1344,75,1392,117,1416,138.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
      </section>
      <section id="projek">
        <div class="container">
          <div class="row text-center"data-aos="zoom-in"data-aos-duration="1500">
            <h2>projek</h2>
          </div> 
          <div class="row justify-content-center ">

            <?php foreach ($project as $pro) { ?>

            <div class="col-sm-4 ">
              <div class="card text-white bg-dark mb-3"  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">>
                <img src="img/<?= $pro["foto"];?>" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $pro["nama_p"];?></h5>
                  <p class="card-text"><?= $pro["keterangan"];?></p>
                  <a href="#home" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <?php  } ?>
          </div>
          </div>
        </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f3f4f5"
          fill-opacity="1"
          d="M0,128L24,133.3C48,139,96,149,144,165.3C192,181,240,203,288,224C336,245,384,267,432,234.7C480,203,528,117,576,106.7C624,96,672,160,720,181.3C768,203,816,181,864,154.7C912,128,960,96,1008,106.7C1056,117,1104,171,1152,165.3C1200,160,1248,96,1296,85.3C1344,75,1392,117,1416,138.7L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"
        ></path>
      </svg>
    </section>

    <section id="contact">
      <div class="container pt-5">
        <div class="row text-center">
          <h2>kontak</h2>
        </div>
        <form action="" method="POST" >
          <div class="mb-3" data-aos="fade-up"
     data-aos-anchor="#example-anchor"
     data-aos-offset="1000"
     data-aos-duration="1500">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required/>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3" data-aos="fade-up"
     data-aos-anchor="#example-anchor"
     data-aos-offset="1000"
     data-aos-duration="1500">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama_k" id="nama"  required/>
          </div>
          <div class="form-floating"data-aos="fade-up-left">
            <textarea for="pesan" class="form-control" placeholder="Leave a comment here" name="pesan" id="pesan" style="height: 100px"required></textarea>
            <label for="floatingTextarea2">tulis pesan....</label>
          </div>

          <button type="submit" name="submit" class="btn btn-primary">kirim</button>
        </form>
      </div>
    </section> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,154.7C274.3,139,343,149,411,128C480,107,549,53,617,42.7C685.7,32,754,64,823,96C891.4,128,960,160,1029,181.3C1097.1,203,1166,213,1234,197.3C1302.9,181,1371,139,1406,117.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    <footer class="text-center pb-5">
      <p>dibuat oleh pt <i class=" bi-youtube "> <a href="https://www.youtube.com/channel/UCtHOqTBF06s2Z7nMU4XFWPg">jengo</a></p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>