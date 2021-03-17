<?php
$pass = $_POST['pass'];

if($pass == "bunteraffe")
{
        include("epk.html");
}
else
{
    if(isset($_POST))
    {
		include("pwd_abfrage.html");
	}
}
?>