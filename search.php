<?php require('dbconnect.php'); ?>
<?php
    $bloodgroup = $_POST['searchblood'];
    $sql = "select * from praveen.users where bloodgroup='$bloodgroup'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $i = 1;
        while($row = $result->fetch_assoc()){ 
            echo "<tr>
                    <td>".$i."</td>
                    <td>".$row["username"]."</td>
                    <td>".$row["studentid"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["emailid"]."</td>
                    <td>".$row["bloodgroup"]."</td> 
                    <td>".$row["gender"]."</td>
                    <td>".$row["address"]."</td>
                </tr>";
            $i++;
        }
	}
?>

$bookid=$_GET['id1'];
$userid=$_GET['id2'];
<div class='tableactions'>
	<a href=\"accept.php?id1=".$row['Bookid']."&id2=".$row['Userid']."\" class='editbtn'>Accept</a>
	<a href='' class='decline'>Decline</a>
</div>