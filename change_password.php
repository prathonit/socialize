<?php 
    $dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    $handle=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()){
        die("There was an error connecting please try again");
    }else{
        session_start();
        function validate($data){
            $data=htmlspecialchars($data);
            $data=stripslashes($data);
            $data=trim($data);
            return $data;
        }
        $oldpassword=md5(validate($_POST['oldpassword']));
        $password=md5(validate($_POST['password']));
        $cpassword=md5(validate($_POST['cpassword']));

        $query="SELECT `password` FROM `php` WHERE `username`='".$_SESSION['username']."'";
        if ($result=mysqli_query($handle,$query)){
            $row=mysqli_fetch_array($result);
            if ($row['password']==$oldpassword){
                if ($password==$cpassword){
                    $query="UPDATE `php` SET `password`=$password WHERE `username`='".$_SESSION["username"]."' ";
                    mysqli_query($handle,$query);
                    header("Location:profile.php");
                }   
                else{
                    die("The passwords do not match please try again");
                }
            }
            else{
                die("Please enter the correct password to continue");
            }

        }else{
            die("There was an error please try again later");
        }
    }


?>