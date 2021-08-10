<?php
    $name=$_POST['name'];
    $rollnumber=$_POST['rollnumber'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $pnumber=$_POST['pnumber'];
    $email=$_POST['email'];
    $sg1=$_POST['sg1'];
    $sg2=$_POST['sg2'];
    $sg3=$_POST['sg3'];
    $sg4=$_POST['sg4'];
    $sg5=$_POST['sg5'];
    $sg6=$_POST['sg6'];
    $sg7=$_POST['sg7'];
    $sg8=$_POST['sg8'];
    $cgpa=$_POST['cgpa'];
    $hobbies=$_POST['hobbies'];
    $rf=$_POST['rf'];
    $conn= new mysqli('localhost','root','','tests');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{
        $stmt =$conn->prepare("insert into registration(name,rollnumber,dob,address,pnumber,email,sg1,sg2,sg3,sg4,sg5,sg6,sg7,sg8,cgpa,hobbies,rf)
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssisdddddddddss",$name,$rollnumber,$dob,$address,$pnumber,$email,$sg1,$sg2,$sg3,$sg4,$sg5,$sg6,$sg7,$sg8,$cgpa,$hobbies,$rf);
        $stmt->execute();
        echo"registration sucessful...";
        $stmt->close();
        $conn->close();
    }
?>