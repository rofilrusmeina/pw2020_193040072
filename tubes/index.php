<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marcellus+SC|Rock+Salt&display=swap" rel="stylesheet">

    <title>Portofolio</title>
    <style>
      html {
  scroll-behavior: smooth;
}

/* Mobile Version */
 
 /* Navbar */
 .navbar-brand, .nav-link {
 color: orange !important;
 text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
 }


 .navbar-toggler-icon {
     color: orange !important;
 }


 .navbar {
     background-color: black;
     color: orange !important;
 }


 .navbar-brand {
     font-family: 'rock salt';
 }


 .navbar .nav-item {
     border: 1px solid orange;
     border-radius: 4px;
     text-align: center;
 }


 .navbar .nav-link {
     margin-bottom: 5px;
 }






 /* Jumbotron */
 .jumbotron1 {
     background-image: url(../assets/img/header.jpg);
     background-repeat: no-repeat;
     background-size: cover;
     height: 350px;
 }

 .jumbotron1 img {
     width: 200px;
     margin-bottom: -400px;
     z-index: 999;
 }



 /* Info Panel */
 .info-panel {
     box-shadow: 0 3px 20px rgba(0,0,0,0.5);
     margin-top: -200px;
     background-color: white;
     padding: 30px;
     height: 320px;
 }

 .info-panel .profil {
     width: 150px;
     margin-top: -100px;
 }

 .info-panel h6 {
     color: orange;
 }

 .info-panel span {
     font-weight: bold;
 }

 .info-panel p {
     font-size: 14px;
 }


 /* Portofolio */
 .portofolio h2 {
     margin-top: 50px;
     border-top: 7px solid orange;
     width: 70px;
 }


 /* Aboubt Me */
 .about h2 {
     margin-top: 70px;
     border-top: 7px solid orange;
     width: 70px;
 }

 .about p {
     font-size: 14px;
     margin-top: 70px;
 }


 /* Skill */
 .skill h2 {
     margin-top: 30px;	
 }

 .progress {
     margin-top: 30px;
     height: 10px;
 }


 /* Contact */
 .jumbotron3 {
     background-image: url(../aset/img/lampu.jpg);
     background-size: cover;
     background-repeat: no-repeat;
     margin-bottom: -50px;
     margin-top: 100px;
 }


 .map-container {
     box-shadow: 0 3px 20px rgba(0,0,0,0.5);
     height: 220px;
     margin-bottom: 30px;
 }


 .map-container iframe {
     width: 453px;
 }


 h3 {
     text-align: center;
 }


 .form-group {
     text-align: center;
 }



 /* Footer */
 .footer {
     color: orange !important;
     text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
     background: rgba(0,0,0,1);
     font-size: 12px;
 }











/* Dekstop Version */
@media (min-width: 922px) {
 /* Navbar */
 .navbar-brand, .nav-link {
 color: orange !important;
 text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
 }


 .navbar {
     background: rgba(0, 0, 0, 1);
     height: 60px;
     position: fixed;
     width: 100%;
     z-index: 2;
 }


 .nav-link {
     text-transform: uppercase;
     margin-right: 10px;
 }


 .nav-link:hover {
     color: white;
     font-size: 20px;
     margin: auto;
     padding-bottom: 2px;
     margin-bottom: 1px;
 }


 .navbar-brand {
     font-family: 'rock salt';
 }


     .navbar .nav-item {
     border: 0 solid orange;
     border-radius: 0;
     text-align: center;
 }


 .navbar .nav-link {
     margin-bottom: 0;
 }
 /* Akhir Navbar */



 /* Jumbotron */
 .jumbotron1 {
     background-image: url(assets/img/header.jpg);
     background-repeat: no-repeat;
     background-size: cover;
     height: 400px;
     background-position: 0 -170px;
     border: 1px solid black;
 }

 .jumbotron1 img {
     width: 200px;
     margin-bottom: -400px;
     z-index: 999;
 }
 /* Akhir Jumbotron */


 /* Info Panel */
 .info-panel {
     box-shadow: 0 3px 20px rgba(0,0,0,0.5);
     margin-top: -200px;
     background-color: white;
     padding: 30px;
     height: 300px;
 }

 .info-panel .profil {
     width: 200px;
     margin-top: -100px;
 }

 .info-panel span {
     font-weight: bold;
 }

 .info-panel p {
     margin-bottom: 3px;
 }

 .info-panel h6 {
     margin-top: -10px;
     color: orange;
 }

 .info-panel h4 {
     font-family: 'Marcellus';
 }

 .sosmed {
     margin-top: 15px;
 }
 /* Akhir Info Panel */



 /* Portofolio */
 .portofolio h2 {
     margin-top: 130px;
     border-top: 7px solid orange;
     width: 70px;
     margin-bottom: 40px;
 }
 /* Akhir Portofolio */



 /* About Me */
 .about h2 {
     margin-top: 100px;
     border-top: 7px solid orange;
     width: 70px;
 }


 .about p {
     margin-top: 100px;
     font-size: 17px;
     margin-bottom: 100px;
 }
 /* Akhir About Me */



 /* Skill */
 .skill h2 {
     margin-top: 7px;	
 }

 .progress {
     margin-top: 20px;
     height: 15px;
 }
 /* Akhir Skill */


 /* Contact */
 .jumbotron3 {
     background-image: url(../aset/img/lampu.jpg);
     background-size: cover;
     background-repeat: no-repeat;
     margin-bottom: -50px;
     margin-top: 100px;
 }


 .map-container {
     box-shadow: 0 3px 20px rgba(0,0,0,0.5);
     height: 220px;
 }


 .map-container iframe {
     width: 350px;
 }


 .form-group {
     text-align: left;
 }
 /* Akhir Contact */


 
}

    </style>
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
      <a class="navbar-brand" href="#">My Salad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon"><img src="aset/img/togle.png"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#portofolio">Portofolio</a>
          <a class="nav-item nav-link" href="#about">About & Skills</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
        </div>
      </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->



    <!-- Jumbotron -->
    <div class="jumbotron1 jumbotron-fluid">
      <div class="container text-center">               
      </div>
    </div>
    <!-- Akhir Jumbotron -->




    <!-- Info Panel -->
     <!-- Container -->
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-8 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="assets/img/logo.jpg" class="rounded-circle img-thumbnail profil">
              <h4>My Salad</h4>
              <?= "<h6>Salad Buah Pilihan Terbaik</h6>" ?>
              <p><span>BORN</span> : 25 Mei 2000</p>
              <p><span>EMAIL</span> : ropilll25@gmail.com</p>
              <p><span>WA</span> : 082129754810</p>
            </div>
          </div>
          <div class="row">
            <div class="col sosmed">
              <a href="https://www.facebook.com/upilhungkul"><img src="assets/img/fb.png"></a>
              <a href="https://github.com/rofilrusmeina"><img src="assets/img/gh.png"></a>
              <a href="https://www.instagram.com/ropilllll/"><img src="assets/img/ig.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Info Panel -->




    <!-- Portofolio -->
    <section class="portofolio pt-1" id="portofolio">
     <div class="container">
      <div class="row">
        <div class="col">
          <h2>Menu</h2>
        </div>
      </div>
      </div>
      <div class="">
        <div class="container">
          <div class="row">
            <div class="col">
               <div class="row mb-4">
                <div class="col-md">
                  <div class="card" style="background-color: black; color: white;">
                    <img src="aset/img/mini.jpg" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                    <p class="card-text">Miniatur mobil VW yang sangat artistik di atas pasir.</p>
                    </div>
                  </div>
                </div>

               <div class="col-md">
                  <div class="card" style="background-color: black; color: white;">
                    <img src="aset/img/3.jpg" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                    <p class="card-text">Miniatur mobil VW dengan cat Colorful membuatnya terliahat sangat menarik</p>
                    </div>
                  </div>
                </div>

               <div class="col-md">
                  <div class="card" style="background-color: black; color: white;">
                    <img src="aset/img/vw.jpg" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                    <p class="card-text">Sebuah miniatur mobil VW kodok yang sedang di perbaiki oleh karakter lego</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-4">
                <div class="col-md">
                  <div class="card" style="background-color: black; color: white;">
                    <img src="aset/img/sedan.jpg" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                    <p class="card-text">Miniatur mobil sedan yang sangat menarik dengan warna kuning mencolok</p>
                    </div>
                  </div>
                </div>

               <div class="col-md">
                  <div class="card" style="background-color: black; color: white;">
                    <img src="aset/img/lego.jpg" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                    <p class="card-text">Sepasang karakter lego yang sedang kasmaran</p>
                    </div>
                  </div>
                </div>

               <div class="col-md">
                  <div class="card" style="background-color: black; color: white;">
                    <img src="aset/img/katak.jpg" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                    <p class="card-text">Sebuah mobil VW dengan pengambilan gambar yang sangat baik membuat foto sangat menarik</p>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>     
    </section>
    <!-- Akhir Portofolio -->






    <!-- About Me -->
    <section class="about" id="about">
     <div class="container">
      <div class="row">
        <div class="col">
          <h2>AboutMe</h2>
        </div>
        <div class="col-8">
          <p>
           I am a student of Pasundan Bandung University class of 2019. I was 19 years old, I was born in Bandung precisely on May 25 in 2000. I graduated from high school Angkasa Lanud Huseinsastranegara bandung. I have expertise in the field of html & css web web programmer and web design. my hobby is eating sleep and pooping.
         </p>
        </div>
      </div>
      </div>
    </section>
    <!-- Akhir About Me -->




    <!-- Skills -->
    <section class="skill about" id="skill">
     <div class="container">
      <div class="row">               
        <div class="col">
          <h2>Best Seller</h2>
          </div>
          <div class="col-8">
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">HTML&CSS</div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Web Programmer</div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Database</div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Web Designer</div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Copy & Paste</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Skills -->


    <!-- Contact -->
    <section id="contact" class="contact mb-5">
    <div class="jumbotron3 jumbotron-fluid">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Login</h2>
        </div>  
      </div> 
    
  <div class="row justify-content-center">
    <div class="col-lg-4">
      <div class="card text-white bg-primary mb-3 text-center">
        <div class="card-body">
        <h5 class="card-title">Contact Me</h5>
        <p class="card-text">Wa : 082129754810 <br> Email : ropilll25@gmail.com</p>
        </div>
      </div>
      <h3>Location</h3>
      <div id="map-container" class="map-container">
        <div class="row">
          <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9277490740456!2d107.56257601431695!3d-6.899244669433256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5d07f3a8221%3A0xb2182bd05458f441!2sGolongan%20II%20Jl.%20Sapta%20Marga%2C%20Campaka%2C%20Kec.%20Andir%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1576435652438!5m2!1sid!2sid" width="350" height="220" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        </div>
      </div>
    </div>
    <!-- Akhir Contact -->

    <div class="col-lg-6">
    <form>
      <div class="form-group">
        <label for="nama">Name</label>
        <input type="text" class="form-control" id="nama">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="notelp">No Phone</label>
        <input type="text" class="form-control" id="notelp">
      </div>
      <div class="form-group">
        <label for="pesan">Massage</label>
        <textarea name="pesan" id="pesan" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-primary">Submit</button>
      </div> 
    </form>
    </div>
  </div>  

  </div>
  </div>  
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>Created By KobaM</p>
        </div>  
      </div>  
    </div>  
  </footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>