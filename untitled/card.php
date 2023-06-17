<?php
if(isset($_POST['namme'])&&isset($_POST['cardid'])&&isset($_POST['pass'])&&isset($_POST['walletid'])&&isset($_POST['amountUSD'])&&isset($_POST['amountJOD'])&&isset($_POST['amountILS'])){
    $username=$_POST['namme'];
    $ucardid=$_POST['cardid'];
    $upassword=$_POST['pass'];
    $wid=$_POST['walletid'];
    $USD=$_POST['amountUSD'];
    $JOD=$_POST['amountJOD'];
    $ILS=$_POST['amountILS'];
    $y=$_POST['Charge wallet'];


    try{
        $db=new mysqli('localhost','root','','ewallet');
        $qyrstr="INSERT INTO `card` (`name`, `password`, `card-id`, `wallet-id`, `USD`, `JOD`, `ILS`) VALUES ('".$username."',  SHA1('".$upassword."'), '".$ucardid."', '".$wid."', '".$USD."', '".$JOD."', '".$ILS."')";
        $rs=  $db->query($qyrstr);
        $db->commit();
        $db->close();
        if($rs==1){

            header('Location:walletbar.php');

        }
        else{
            echo '<script type="text/javascript">

            window.onload = function () { alert("Card id is already used before !!"); }
            </script>';
        }
    }


    catch (  Exception $e){

    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="first.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Transfer</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url("crd.jpg");
            background-repeat: no-repeat;
            background-size: 100%;

            box-sizing: border-box;
            font-family: sans-serif;

        }
        .sign{

            width: 400px;
            padding: 25px;
            margin: 25px auto 0;

        }
        h4{
            padding-bottom: 40px;
            color: #ffffff;
        }
        h2{
            padding-bottom: 40px;
            color: #ffffff;
        }
        .sign h2{
            background-color: #fcfcfc;
            color: #179301;
            font-size: 24px;
            padding: 10px;
            margin-bottom: 60px;
            text-align: left;
        }
        .inputb{
            width: 100%;
            margin-right: 12px;
            position: relative;
        }
        form .txt_field{
            position: relative;
            border-bottom: 0px solid #179301;
            margin: 7px 0;
        }
        .txt_field input{
            width: 30%;
            padding:0 3px;
            height: 40px;
            font-size: 16px;
            color: rgb(255, 255, 255);

        }

        .txt_field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 30%;
            height: 2px;
            background: #2691d9;
            color:#1111;
        }
        .txt_field input:focus~label,
        .txt_field input:valid~label{
            top:-5px;
            color: #ffff;

        }

        .txt_field input:focus~span::before,
        .txt_field input:valid~span::before{
            width: 30%;

        }


       .back {
            width: 10%;
            background: transparent;
            border: none;
            background: #011E93;
            color: #fff;
            padding: 5px;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.35s ;
        }
        button{
            width: 5%;
            background: transparent;
            border: none;
            background: #011E93;
            color: #fff;
            padding: 5px;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.35s ;
        }
        button:hover{
            cursor: pointer;
            background: #5eb105;
        }
    </style>
</head>
<body>
<div class="sign"><h1> Card Form </h1></div>
<div class="creat">
    <form action="card.php" method="post">

            <div class="txt_field">
                <input type="text" required name="cardid">
                <span></span>
                <label> card id  <i class="fa fa-credit-card-alt"></i></label>


            </div>
            <div class="txt_field">
                <input type="text" required name="pass">
                <span></span>

                <label>password <i class="fa fa-lock" aria-hidden="true"></i></label>

            </div>

            <div class="txt_field">
                <input type="text" required name="namme">
                <span></span>

                <label>name <i class="fa fa-user"></i></label>


            </div>

            <div class="txt_field">
                <input type="text" required name="walletid">
                <span></span>

                <label>wallet  id   <i class="fa fa-id-card" ></i></label>



            </div>


            </div>
            <h4> Amount</h4>
        </div>
<h2 class="pass">ILS</h2>
<input class="pss" type=text" name="amountILS"><br>
<h2 class="pass">JOD</h2>
<input class="pss" type=text" name="amountJOD"><br>
<h2 class="pass">USD</h2>
<input class="pss" type=text" name="amountUSD"><br>


<div class="inputg">
    <a class="inputb">
<a href="para.php"
        <button type=submit" class="back">Back</button></a></a>
        <button type=submit">Trans!</button>
        </form>
    </div>
</body>
</html>