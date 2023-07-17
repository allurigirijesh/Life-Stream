
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Donate.css'>
    <link rel="icon" href='./Images/25357-removebg-preview.png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <nav>
    <div class="header-logo"><img src="./Images/25357-removebg-preview.png"></div>
    <div class="header-list">
        <ul>
            <li><a href="help.php">Connect With Us</li></a>
            <li><a href="Receive.php">Receive</li></a>
            <li><a href="index.php">Home</li></a>
            </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo">
        <img src="./Images/regphoto.png">
    </div>
    <div class="user-form">
        <h1>Start Saving Lives</h1>
        <form method="post" action="data.php">
            <input type="text" name="name" id="name" placeholder="Name">
            <p id="nameErrMsg" class="error-message"></p>

            <input type="number" name="mobile" id="mobile" placeholder="Mobile">
            <p id="mobileErrMsg" class="error-message"></p>

            <input type="email" name="email" id="email" placeholder="Email">
            <p id="emailErrMsg" class="error-message"></p>

            <input type="number" name="age" id="age" placeholder="Age">
            <p id="ageErrMsg" class="error-message"></p>
            
            <div class="perion100">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="Default">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
            <p id="genderErrMsg" class="error-message"></p>

            <input type="text" name="address" id="address" placeholder="Address">
            <p id="addressErrMsg" class="error-message"></p>

            <input type="number" name="pincode" id="pincode" placeholder="Pincode">
            <p id="pincodeErrMsg" class="error-message"></p>

            <div class="perion100">
            <label for="Blood Group">Choose your Blood group:</label>
            <select name="bloodgroup" id="blood group">
                <option value="Default">Select</option>
                <option value="O+">O +</option>
                <option value="O-">O -</option>
                <option value="A+">A +</option>
                <option value="A-">A -</option>
                <option value="B+">B +</option>
                <option value="B-">B -</option>
                <option value="AB+">AB +</option>
                <option value="AB-">AB -</option>
            </select>
        </div>
            <div class="action-btn">
                <input class="btn" type="submit" name="submit" value="Donate">
            </div>
        </form>
    </div>
</div>
<script>
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

let ageEl = document.getElementById("age");
let ageErrMsgEl = document.getElementById("ageErrMsg");

ageEl.addEventListener("blur", function(event) {
  let res=event.target.value
  if (res === "") {
    ageErrMsgEl.textContent = "Required*";
  }
   else {
    ageErrMsgEl.textContent = "";
  }
});


let genderEl = document.getElementById("gender");
let genderErrMsgEl = document.getElementById("genderErrMsg");

genderEl.addEventListener("blur", function(event) {
  if (event.target.value === "") {
    genderErrMsgEl.textContent = "Required*";
  } else {
    genderErrMsgEl.textContent = "";
  }
});

let addressEl = document.getElementById("address");
let addressErrMsgEl = document.getElementById("addressErrMsg");

addressEl.addEventListener("blur", function(event) {
  if (event.target.value === "") {
    addressErrMsgEl.textContent = "Required*";
  } else {
    addressErrMsgEl.textContent = "";
  }
});

let pincodeEl = document.getElementById("pincode");
let pincodeErrMsgEl = document.getElementById("pincodeErrMsg");

pincodeEl.addEventListener("blur", function(event) {
  if (event.target.value === "") {
    pincodeErrMsgEl.textContent = "Required*";
  } 
  else if((event.target.value).length != 6){
    pincodeErrMsgEl.textContent ="Enter valid pincode";}
  else {
    pincodeErrMsgEl.textContent = "";
  }
});


</script>
</body>
</html>