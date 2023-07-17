

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="help.css" />
    <link
      rel="icon"
      href="./Images/25357-removebg-preview.png"
      type="image/png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <title>Contact with us</title>

  <body>
    <header>
      <nav>
        <div class="header-logo">
          <img
            style="height: 150px; width: 150px"
            src="./Images/25357-removebg-preview.png"
          />
        </div>
        <div class="header-list">
          <ul>
            <li><a href="Receive.php">Receive</a></li>
            <li><a href="Donate.php">Donate</a></li>
            <li><a href="index.php">Home</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>Connect with us</h2>
            <form method="post" action='helpdata.php'>
            <input type="text" class="field" name='name' id="name" placeholder="Your Name" />
            <p id="nameErrMsg" class="error-message"></p>

            <input type="text" class="field" name='email' id="email" placeholder="Your Email" />
            <p id="emailErrMsg" class="error-message"></p>

            <input type="number" class="field" name='phone' id="mobille"placeholder="Phone" />
            <p id="mobileErrMsg" class="error-message"></p>

            <textarea placeholder="Message" name='message' class="field"></textarea>
            <button onclick="myFunction()" class="btn">Send</button>
</form>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="footer-content">
        <h3>Donate Red</h3>
        <p>
          Life Stream is purely campus oriented.Get the required blood group
          with in less time.One can use this application in order to get donar
          to receiver direct interaction.So join hands and save lifes of our
          friends.
        </p>
        <div class="socials">
          <ul class="sci">
            <li>
              <a href="https://twitter.com/" target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
            </li>
            <li>
              <a href="https://facebook.com/" target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
            </li>
            <li>
              <a href="https://instagram.com/" target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <script>
      function myFunction() {
        alert("Thank you for approaching Us.We will connect you soon.");
      }


let nameEl = document.getElementById("name");
let nameErrMsgEl = document.getElementById("nameErrMsg");

nameEl.addEventListener("blur", function(event) {
  if (event.target.value === "") {
    nameErrMsgEl.textContent = "Required*";
  } else {
    nameErrMsgEl.textContent = "";
  }
});


let mobileEl = document.getElementById("mobile");
let mobileErrMsgEl = document.getElementById("mobileErrMsg");

mobileEl.addEventListener("blur", function(event) {
  if (event.target.value === "") {
    mobileErrMsgEl.textContent = "Required*";
  }
  else if((event.target.value).length != 10){
    mobileErrMsgEl.textContent ="Enter valid mobile number";
    }
  else {
    mobileErrMsgEl.textContent = "";
  }
});

let emailEl = document.getElementById("email");
let emailErrMsgEl = document.getElementById("emailErrMsg");

emailEl.addEventListener("blur", function(event) {

    let res=event.target.value
  if (res === "") {
    emailErrMsgEl.textContent = "Required*";
  } 
  else if (!(res).endsWith("@gmail.com")){
    emailErrMsgEl.textContent = "Enter valid email";
  }
  else {
    emailErrMsgEl.textContent = "";
  }
});


    </script>
  </body>
</html>
