<?php

    // echo "<pre>POST"; print_r($_POST);  // exit;
    $con=mysqli_connect("localhost","root","","user details");
    session_start();
    if(isset($_POST))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        // echo "<pre> email=>"; echo $email; 
        // echo "<pre> password=>"; echo $password; 

        $sql="SELECT * FROM registerddetails WHERE EmailId = '$email' and Pass_word = '$password'";
        // echo "<pre> sql=>",$sql;

        $result = mysqli_query($con, $sql);
        // echo "<pre> result=>"; print_r($result);

        $row = mysqli_fetch_assoc($result);
        // echo "<pre> row"; print_r($row); exit;

        if(mysqli_num_rows($result)>0)
        {
            if($password==$row["Pass_word"])
            {
                echo "if";
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["Id"];
                header("Location: http://localhost/GUVI/Profile.html");
            }else{
                // echo "else";
                echo
                "<script> alert('Wrong Password');</script>";

            }
        }else{
            // echo "ifelse";
            echo
            "<script> alert('Incorrect Password');</script>";        
        }
    }else{
        echo "else";
    }
?>