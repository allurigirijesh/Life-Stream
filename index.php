<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="./Images/25357-removebg-preview.png"
      type="image/png"
    />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/icon/bars" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <title>Life stream</title>
  <div class="preloader">
    <img src="pre-loader.svg" alt="spinner" />
  </div>

  <body>
    <!--Scroll to top button-->
    <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>
    <!-- Home Page -->
    <header>
      <video autoplay muted loop plays-inline id="homevideo">
        <source
          src="./video/SnapSave.io-Red Cross national blood supply crisis_ Blood donors needed now!-(1080p).mp4"
          type="video/mp4"
        />
      </video>
      <div id="logo">
        <a href="index.html"
          ><img
            style="height: 150px; width: 150px"
            src="./Images/25357-removebg-preview.png"
        /></a>
      </div>
      <div id="nav">
        <div class="header-list" id="headerl">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="Donate.php">Donate</a></li>
            <li><a href="Receive.php">Receive</a></li>
            <li><a href="help.php">Connect With Us</a></li>
          </ul>
        </div>
      </div>
      <div class="text-box">
        <h1>Start</h1>
        <h1>Saving Lives</h1>
        <p>Become a donor or request for blood And help save lives</p>
        <a href="Donate.php" class="hero-btn">Register</a>
      </div>
    </header>

    <!--ABOUT US -->

    <main>
      <section id="about-us">
        <div class="about">
          <h1 class="heading">Everthing u need About us</h1>
          <br />
          <p class="head-des" class="text">
            We solve the problem of blood emergencies by connecting blood donors
            directly with people in blood need.
          </p>
          <div class="row">
            <div class="about-col">
              <div class="image">
                <img src="./Images/favicon.png" />
              </div>
              <h3>What we do ?</h3>
              <p>
                We connect blood donors with recipients, without any
                intermediary such as blood banks, for an efficient and seamless
                process.
              </p>
            </div>
            <div class="about-col">
              <div class="image">
                <img src="./Images/index.png" />
              </div>
              <br />
              <h3>Network</h3>
              <p>
                Life Stream is one of several website working together as a
                network that responds to emergencies in an efficient manner for
                our campus.
              </p>
            </div>
            <div class="about-col">
              <div class="image">
                <img src="./Images/notify.png" />
              </div>
              <h3>Get notified</h3>
              <p>
                Life Stream provide direct interaction by providing personal
                mobile number and receiver get notified whenever donar is ready.
              </p>
            </div>
            <div class="about-col">
              <div class="image">
                <img src="./Images/free.jpg" />
              </div>
              <h3>Totally Free</h3>
              <p>
                Life Stream ultimate goal is to provide an easy -to-use,
                easy-to-access, fast, efficient, and reliable way to get
                life-saving blood at totally <span>Free of cost.</span>
              </p>
            </div>
            <div class="about-col">
              <div class="image">
                <img src="./Images/save.png" />
              </div>
              <h3>Save Life</h3>
              <p>
                We are a non profit website and our main objective is to make
                sure that everything is done to protect vulnerable persons.<span
                  >Help us by giving red!!!</span
                >
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--FOOTER-->

    <footer>
      <div class="footer-content">
        <h3>DONATE RED</h3>
        <p>
          Life Stream is purely campus oriented.Get the required blood group
          with in less time.One can use this application in order to get donar
          to receiver direct interaction.So join hands and save lifes of our
          frnds.
        </p>
        <div class="socials">
          <ul class="sci">
            <li>
              <a href="https://www.twitter.com/" target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
            </li>
            <li>
              <a href="https://www.facebook.com/" target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
            </li>
            <li>
              <a href="https://www.instagram.com/" target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!--Javascript for pre-loader-->
    <script>
      const preloader = document.querySelector(".preloader");
      const fadeEffect = setInterval(() => {
        if (!preloader.style.opacity) {
          preloader.style.opacity = 1;
        }
        if (preloader.style.opacity > 0) {
          preloader.style.opacity -= 1.5;
        } else {
          clearInterval(fadeEffect);
        }
      }, 1500);
      window.addEventListener("load", fadeEffect);
    </script>
    <!--js for scroll to top-->
    <script src="up.js"></script>
    <!--JAVASCRIPT FOR TOGGLE MENU -->
    <script>
      var headerl = document.getElementById("headerl");

      function showMenu() {
        headerl.style.right = "0";
      }

      function hideMenu() {
        headerl.style.right = "-210px";
      }
    </script>
    <!--js for scroll effects-->
    <script src="scroll.js"></script>
  </body>
</html>
