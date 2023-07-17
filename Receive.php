<?php require('dbconnect.php')?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Receive.css'>
    <link rel="icon" href='./Images/25357-removebg-preview.png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Life Stream </title>
<body>
<script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
<header>
    <nav>
    <div class="header-logo"><img src="./Images/25357-removebg-preview.png">
    </div>
    <div class="header-list">
        <ul>
            <li><a href="help.php">Connect With Us</li></a>
            <li><a href="Donate.php">DONATE</li></a>
            <li><a href="index.php">Home</li></a>
            </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo">
        <img src="./Images/Screenshot 2022-12-12 at 11.35.26 AM.png">
    </div>
    <div class="user-form">
        <h1>Search by Blood Group</h1>
        <form method="post">
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
        <div class="or"><h1 >OR</h1></div>
        
        <div>
        <input type="text" name="pincode" id="pincode" placeholder="Enter your Pincode">
        </div>
        <div class="action-btn" >
            <input class="btn"  type="submit" name="submit" value="Search">
        </div>
        
    </form>

    </div>
</div>

<div class="perion1">
<table id = "table1">
        <thead>
            <tr id="thead">
                <th >S.No</th>
                <th >Name</th>
                <th >Bloodgroup</th>
                <th >Age</th>
                <th >Mobile</th>
                <th >Gender</th>
                <th >Email</th>
                <th  >Address</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_POST['submit'])){
                    
                    $bloodgroup = $_POST['bloodgroup'];
                    $pincode = $_POST["pincode"];
                    if ($pincode){
                        $sql = "select * from lifestream.users where pincode='$pincode'";
                    }
                    elseif ($bloodgroup) {
                        $sql = "select * from lifestream.users where bloodgroup='$bloodgroup'";
                    }
                    elseif($bloodgroup and $pincode){
                        $sql = "select * from lifestream.users where bloodgroup='$bloodgroup' and pincode='$pincode";
                    }
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $i = 1;
                        while($row = $result->fetch_assoc()){ 
                            echo "<tr>
                                    <td>".$i."</td>
                                    <td>".$row["name"]."</td>
                                    <td>".$row["bloodgroup"]."</td>
                                    <td>".$row["age"]."</td>
                                    <td>".$row["mobile"]."</td>
                                    <td>".$row["gender"]."</td>
                                    <td>".$row["email"]."</td>
                                    <td>".$row["address"]."</td>
                                    
                                </tr>";
                            $i++;
                        }
                    }
                }
            ?> 
        </tbody>
    </table>
 </div>
</body>
</html>