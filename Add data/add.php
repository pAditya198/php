<?php
        if(isset($_POST['submit']))
            {
                
                $first_name=$_POST['first_name'];
		            $last_name=$_POST['last_name'];
                $email=$_POST['email'];
                $message=$_POST['message'];
                
                $link= mysql_connect("localhost", "root", "password") or die("Unable to connect");
                $con= mysql_select_db("db") or die("Invalid Database");
                 $query="INSERT INTO table ( `first_name`,`last_name`,`email`,`message`) VALUES ('$first_name','$last_name','$email','$message')";
                $operation= mysql_query($query,$link);
                
                mysql_close();
            }
        ?>
