<?php


class ACCOUNT_ACCESS {


 function SIGNUP() {

    require "userdb_config.php";


    try {
        $connection = new PDO($dsn, $username, $password, $options); 
        


        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "site_users", //no idea what this all does
        implode(", ", array_keys($new_account)),
        ":" . implode(", :", array_keys($new_account)));
        $statement = $connection->prepare($sql);
        $statement->execute($new_account);

        
    } 
        catch(PDOException $error) { //error handler
        echo $sql . "<br>" . $error->getMessage();
        }
        header('Location:index.php');

        $_SESSION['Username'] = $_POST["username"];  //please remember the capitalisation, 
        $_SESSION['Active'] = true;
        die;


 }

 function LOGIN() {
    require "userdb_config.php"; //FIX LATER ON!!!


    $connection = new PDO($dsn,$username,$password,$options); //establishing a new PDO connection

    $sql = "SELECT username, password, email from site_users where username = :username";
    $statement = $connection->prepare($sql);
    $temp = ($_POST["username"]);
    $statement->bindParam(":username",$temp,PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row => $rows)
    {
        $user_db = $rows["username"];
        $pwd_db = $rows["password"];
        $email_db = $rows["email"];

            if( $_POST['username'] == $user_db && $_POST["password"] == $pwd_db && $email_db == $_POST["email"]) {

                $_SESSION['Username'] = $_POST["username"]; 
                $_SESSION['Active'] = true;
                header("location:index.php");
                exit;
                
            }

    }

//else
echo 'Incorrect Username or Password';
$_SESSION['Active'] = false;

 }

 function LOGOUT() {
    require_once 'session/session.php';
$session = new session();
$session->forgetSession();
 }






}