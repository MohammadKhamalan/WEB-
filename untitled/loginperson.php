<?php
if(isset($_POST['txtlogin'])&&isset($_POST['userpasstext'])){
    $username=$_POST['txtlogin'];
    $upassword=$_POST['userpasstext'];
    try{
        $db=new mysqli('localhost','root','','ewallet');
        $qyrstr="select * from person";
        $res= $db->query($qyrstr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if(   $row->name==$username&&sha1($upassword)==$row->password){
                header('Location:para.php');
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
<html >
<head>

    <title>E-wallet</title>
    <link rel="stylesheet" href="first.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function myfunc(){



        }
    </script>
</head>
<body>
<!--<div class="menu-bar">
    <ul>

    <li class="active"> <a href="#" ><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
    <li><a href="#" ><i class="fa fa-user" aria-hidden="true"></i>About Us</a></li>
  <li><a href="#" ><i class="fa fa-id-card" aria-hidden="true"></i>Wallet</a>
       <div class="sub-menu-1">
           <ul>
               <li><a href="wallet1.html" >Log-in to wallet</a></li>
               <li><a href="#" > Creat new wallet</a></li>


          </ul>

    </div>




   </li>
   <li><a href="#" ><i class="fa fa-users" aria-hidden="true"></i>Clients</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="#" > New user</a></li>
            <li><a href="#" > Customer</a></li>
            <li><a href="#" > Merchant</a></li>


        </ul>

    </div>

    </li>


    <li><a href="#" ><i class="fa fa-money" aria-hidden="true">Currency</i></a></li>

    <li><a href="#" ><i class="fa fa-cog" aria-hidden="true"></i>Settings</a></li>
    <li><a href="#" ><i class="fa fa-exchange" aria-hidden="true"></i></i>Authorization</a>


        <div class="sub-menu-1">
            <ul>

                <li><a href="payment.html" > Payment</a></li>
                <li><a href="chargewallet.html" > Charge wallet</a></li>
                <li><a href="#" > buy from merchent</a></li>


            </ul>

        </div>






    </li>





</ul>
</div>
-->
<div class="center">
    <h1>Login</h1>
    <form action="loginperson.php" method="post" name="myform">
        <div class="txt_field">
            <input type="text" name="txtlogin">
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password" name="userpasstext">
            <span></span>

            <label>Password</label>
        </div>
        <header>
            <input type="submit" value="Login" >
        </header>
        <div class="signup_link">

            Not a member? <a href="signuppers.php">Sign up</a>

        </div>


    </form>
</div>
</body>
</html>