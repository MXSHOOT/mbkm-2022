<?php session_start(); 
	
	/* mengecek Login form submitted */	
	if(isset($_POST['Submit'])){
		/* mendefinisikan username dan associated password array */
		$logins = array('admin' => 'mimin','username1' => 'password1','username2' => 'password2');
		
		/* mengecek dan meassign submitted Username dan Password membuat variabel baru */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* memeriksa Username and Password existence dalam array yang ditentukan */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:home.php");
			exit;
		} else {
			/*Unsuccessful attempt: akan error mengeluarkan popup dan history go*/
			$msg="<script>alert('Username dan Password tidak valid.').history.go(-1)</script>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div id="Frame0"><center>
  <h1>Form Login</h1>
  <p>Pertahtikan jika lebih space atau salah username atau password akan ada peringatan berupa username dan password salah</p>
  </center>
</div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <!-- Memanggil message alert kesalahan mengisi username atau password -->
    <?php if(isset($msg)){?>
    <tr>
      <td><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="center" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><small>Username: admin Password:mimin</small></td>
    </tr>
  </table>
</form>
</body>
</html>