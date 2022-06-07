<?php


function cekLogin($username, $password){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    if ($username == 'admin' && $password == 'mimin'){
        header("Location: https://zii99.github.io/");
    } else { 
        $msg
         ="<script'>alert('Username atau Password Salah !!').history.go(-1)</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
</head>
<body>
    <div class="container">
        <h3>Login</h3>
            <ul>
                <form action="" method="post">
                <table>
                <?php if(isset($msg)){?>
    <tr>
      <td><?php echo $msg;?></td>
    </tr>
    <?php } ?>
                    <tr>
                        <td><label for="username">Username</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" id="username"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password : </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" onclick="<?php cekLogin($username,$password) ?>" name="sign-in" value="Sign-in" /></td>
                    </tr>
                </table>
                </form>
            </ul>
    </div>
</body>
</html>