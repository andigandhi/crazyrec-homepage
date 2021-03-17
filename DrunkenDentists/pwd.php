<?php
$pass = $_POST['pass'];

if($pass == "bunteraffe")
{
        include("epk.html");
}
else
{
    if(isset($_POST))
    {?><head>
				<meta charset="utf-8">
				<link rel="stylesheet" href="style.css">
				<title>The Drunken Dentists</title>
			</head>

			
			<style>
				input[type=password], select {
				  width: 100%;
				  padding: 12px 20px;
				  margin: 8px 0;
				  display: inline-block;
				  border: 1px solid #ccc;
				  border-radius: 4px;
				  box-sizing: border-box;
				}

				input[type=submit] {
				  background-color: #497d90;
				  color: white;
				  padding: 14px 20px;
				  margin: 8px 0;
				  border: none;
				  border-radius: 4px;
				  cursor: pointer;
				}

				input[type=submit]:hover {
				  background-color: #2B4A55;
				}
			</style>

			<body>
				<div style="height: 200px"></div>
				<div align="center">
					<p>Bitte Passwort eingeben, um diesen Bereich zu sehen:</p>
					<form method="POST" action="pwd.php">
						<p><input type="password" name="pass" style="width: 20%"></input>
						<input type="submit" name="submit" value="Weiter"></input></p>
					</form>
				</div>
			</body>
    <?}
}
?>