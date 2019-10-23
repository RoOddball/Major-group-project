<?php
/**
 * Created by PhpStorm.
 * User: denas
 * Date: 16/03/2019
 * Time: 17:23
 */

class User
{

    private $username = "username";
    private $password = "password";



    public function setUsername($username)
    {
        $this.$username -> $username = $username;
    }

    public function getUsername()
    {
        return $this ->usernme;
    }

    public function setPassword($password)
    {
        $this.$password -> $password = $password;
    }

    public function getPassword()
    {
        return $this ->password;
    }

    public function Register()
    {
        if(isset($_POST['username']) && isset($_POST['password']))
        {

            //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);   // encrypt the password


            include "../config/DatabaseConfig.php";
            $Myusername = mysqli_real_escape_string($conn,$_POST['username']);
            $Mypassword = mysqli_real_escape_string($conn,$_POST['password']);

            //check if user exists
            $sql2 = "SELECT * FROM `user` WHERE username = '$Myusername' and password = '$Mypassword' ";
            $qryResult2 = mysqli_query($conn, $sql2);

            $count = mysqli_num_rows($qryResult2);


            //if user exists show error
            if ($count > 0)
            {
                echo "User already exists!";
            }

            else if ($count < 1)
                //user doesn't exist, add to database
            {


                $user = new User();
                $user -> username = $Myusername;
                $user ->password = $Mypassword;

                $sql = "INSERT INTO user
         VALUES ('$Myusername','$Mypassword',false)";

                $qryResult = mysqli_query($conn, $sql);

                echo "You have registered successfully!";
                sleep(2);
                //header("Location: LoginScreen.php");
                require_once __DIR__ . '/../templates/LoginScreen.php';
            }

            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>";
            }

        }

    }

    public function Login()
    {

        if(isset($_POST['username']) && isset($_POST['password']))
        {
            //session_start();
            $_SESSION["usernameEntered"] = $_POST['username'];
            $_SESSION["passwordEntered"] = $_POST['password'];


            //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);   // encrypt the password



            include "../config/DatabaseConfig.php";
            $Myusername = mysqli_real_escape_string($conn,$_POST['username']);
            $Mypassword = mysqli_real_escape_string($conn,$_POST['password']);

            //regular user login
            $sql = "SELECT * FROM `user` WHERE username = '$Myusername' and password = '$Mypassword' and IsAdmin = false ";
            $qryResult = mysqli_query($conn, $sql);


            $count = mysqli_num_rows($qryResult);


            //admin login
            $sql2 = "SELECT * FROM `user` WHERE username = '$Myusername' and password = '$Mypassword' and IsAdmin = true ";
            $qryResult2 = mysqli_query($conn, $sql2);


            $count2 = mysqli_num_rows($qryResult2);


            if ($count == 1)
            {
                $_SESSION["regularUser"] = true;

                //header("Location: HomePage.php");
                require_once __DIR__ . '/../templates/HomePage.php';
            }else if ($count2 == 1) {

                $_SESSION["adminUser"] = true;
                header("Location: AdminTool.php");
            }
            else {
                echo "User does not exist!";
            }


        }
    }
    public function Logout()
    {
        Session_destroy();
    }

}