<?php
if(isset($_POST['wal'])&&isset($_POST['wall'])){
    $username=$_POST['wal'];
    $upassword=$_POST['wall'];
    try{
        $db=new mysqli('localhost','root','','ewallet');
        $qyrstr="select * from wallet";
        $res= $db->query($qyrstr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if(   $row->wallet_id==$username&&sha1($upassword)==$row->password){
                header('Location:walletbar.php');
            }

            else {
                echo '<script type="text/javascript">

            window.onload = function () { alert("Wrong username and/or password !!"); }

</script>';        }

        }

        $db->close();
    }
    catch (  Exception $e){

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wallet log-in</title>
    <link rel="stylesheet" href="wallet1.css">
</head>
<body>

<div class="center">
    <h1>Login</h1>
    <form  action="wallet1.php" method="post" name="myform">
        <div class="txt_field">
            <input type="text" required name="wal">
            <span></span>
            <label>Wallet-id</label>
        </div>
        <div class="txt_field">
            <input type="password" required name="wall">
            <span></span>

            <label>Password</label>
        </div>
        <input type="submit" value="Login">
      <a href="para.php"<button type="submit" class="bb">back</button>

      </a>
    </form>
</div>
</body>
</html>