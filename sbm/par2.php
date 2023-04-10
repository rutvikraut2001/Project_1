<?php


$username = $_POST['username'];
$email = $_POST['email'];
$wardname = $_POST['wardname'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if (!empty($username) || !empty($email) || !empty($wardname) || !empty($phone) || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mysql";   /* table name - parentreg in mysql*/

    //connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error());   
    }
    else{
        $SELECT = "SELECT email From parentreg Where email = ? Limit 1";
        $INSERT = "INSERT Into parentreg (username, email, 
                    wardname, phone, password) values(?,?,?,?,?)";

         //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt-> execute();
        $stmt-> bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;


        if ($rnum == 0){
            $stmt -> close();

            $stmt = $conn-> prepare ($INSERT);
            $stmt-> bind_param("sssis",$username, $email, $wardname, $phone, $password);

            $stmt-> execute();
            echo "New record inserted sucessfully";

            // how to give link to a word 'You can now login ' to account.html SERACH

        }
        else{
            echo "Someone already register using this email";
        }
            $stmt->close();
             $conn->close();
         }



}else{
   echo "All Fields are required" ;
   die();
}



?>