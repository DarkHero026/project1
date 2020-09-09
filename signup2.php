<?php
if($_POST["pass"] === $_POST["rPass"]){
    if(isset($_POST["submit"])) {
        $fName = $_POST["fName"];
        $mName = $_POST["mName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $uName = $_POST["userName"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["rPass"];

        echo "<h2>Thank you for signing up</h2>"."<br>";
        echo "<h4>Account data</h4>";
        echo "Name: ".$fName."<br>";

        if(empty($_POST["mName"])){
            echo "Middle name: Optional*"."<br>";
        }else{
            echo "Middle name: ".$mName."<br>";
        }

    }
        echo "Last name: ".$lName."<br>";
        echo "E-mail: ".$email."<br>";
        echo "Username: ".$email."<br>";
        echo "Password: ".$pass."<br>";
}else{
    echo "Task Failed."." Please confirm password again.";
}



 ?>
