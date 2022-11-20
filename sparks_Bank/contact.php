<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">The Sparks Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="probootstrap-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="https://www.thesparksfoundationsingapore.org/" target="_blank" class="nav-link">About</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <section class="probootstrap-section probootstrap-scene-1 probootstrap-bg-dark">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md text-center mb-5">
            <span class="icon-location display-4 d-block mb-5 text-primary"></span>
            <p>India, Asia,<br> Earth, Solar System</p>
          </div>
          <div class="col-md text-center mb-5">
            <span class="icon-mail display-4 d-block mb-5 text-primary"></span>
            <p>subirbam2013@gmail.com</p>
          </div>
          <div class="col-md text-center mb-5">
            <span class="icon-phone display-4 d-block mb-5 text-primary"></span>
            <p>123 456 7890</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form action="cont.php" method="post" class="probootstrap-form mb-5">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group mb-4">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="probootstrap-footer probootstrap-bg-dark">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5 order-md-2 order-1">
            <div class="probootstrap-footer-widget mb-4">
              <ul class="probootstrap-footer-social list-unstyled float-md-right float-left">
                <li><a href="https://twitter.com/SubirPatro"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.facebook.com/subir.kumar.754703"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/subir_8_20_/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-7 order-md-1 order-2">
            <p>&copy; Present 2022. All Rights Reserved. <br> Made with <span class="icon-heart"></span> by <a href="https://www.instagram.com/subir_8_20_/">SUBIR KUMAR</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- loader -->
    <div id="probootstrap-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff555f"/></svg></div>


    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/debug.addIndicators.min.js"></script>
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>