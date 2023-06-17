<?php
session_start();

if(isset($_POST['pay']))
{

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "ewallet";

    $db=new mysqli('localhost','root','','ewallet');

$gov="for govermant";
    $id = $_POST['p1'];
    $date= $_POST['date'];
    $typeofpay = $_POST['paymenttype'];
    $usd = $_POST['USDtxt'];
    $jod = $_POST['JODtxt'];
    $ils = $_POST['ILStxt'];
    $y="Payment";

    $s2="select * From wallet where wallet_id=$id";
    $res= $db->query($s2);
    $s3 = "update wallet set Amount=Amount-'" . $usd . "',amountj=amountj-'" . $jod . "',amountil=amountil-'" . $ils . "'where $id=wallet_id";
    $query="INSERT INTO `trans`(`transtype`, `transdate`, `t-walletid`, `t-walletidre`, `USD`, `JOD`, `ILS`) VALUES ('".$y.' '.$typeofpay."', '".$date."', '".$id."','".$gov."', '".$usd."', '".$jod."', '".$ils."')";
    $q="INSERT INTO `rejectedtrans`(`transtype`, `transdate`, `t-walletid`, `t-walletidsender`, `USD`, `JOD`, `ILS`) VALUES ('".$y.' '.$typeofpay."', '".$date."', '".$id."','".$gov."', '".$usd."', '".$jod."', '".$ils."')";


    $row=$res->fetch_object();

    if( $row->Amount<$usd||$row->amountj<$jod||$row->amountil<$ils){
        echo '<script type="text/javascript">

            window.onload = function () { alert("You have not enough money to pay !!"); }
            </script>';
        $result4 = mysqli_query($db, $q);


    }
    else {

        $result1 = mysqli_query($db, $s3);
        $result = mysqli_query($db, $query);
    }
    if($query&&$s3&&$q)
    {

    }else{

    }
    mysqli_close($db);
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <style type="text/css">
        *
        {
            padding: 0;
            margin: 0;

        }
        body{
            background-image: url("payment.jpg");
            background-position:center;
            background-size:cover;
            font-family: sans-serif;
            margin-top:40px;

        }
        .payment{
            width:800px;
            background-color:rgb(0,0,0,0.6);
            text-align: center;
            color: #ffffff;
            margin: auto;
            padding:10px 0px 10px 0px;
            border-radius: 15px 15px 0px 0px;

        }
        .creat{
            width:800px;
            background-color:rgb(0,0,0,0.5);
            margin: auto;

        }
        form{
            padding:5px;
        }
        #name{
            width:100%;
            height:100px;
        }
        .name{
            margin-left:20px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .wid{
            position: relative;
            top: -37px;
            left: 300px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }



        .trans{
            margin-left:25px;
            margin-top:3px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        ;

        }
        .transco{
            position: relative;
            top: -37px;
            left: 300px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }


        .Date{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .datee{
            position: relative;
            top: -37px;
            left: 300px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .typepay{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .typapayy{
            position: relative;
            top: -37px;
            left: 300px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .USD{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .USDD{
            position: relative;
            top: -37px;
            left: 300px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .jod{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .jodd{
            position: relative;
            top: -37px;
            left: 300px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .ils{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .ilss{
            position: relative;
            top: -37px;
            left: 300px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }


        button {
            background-color: #3baf9f;
            display: block;
            color: white;
            padding: 14px 110px;
            border-radius: 12px;
            text-align: center;
            outline: none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;
            margin-left:13px;
            margin-top:15px;
        }
        .back{
            width:3%;
            background-color: #3baf9f;
            display: block;
            color: white;
            padding: 14px 110px;
            border-radius: 12px;
            text-align: center;
            outline: none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;
            margin-left:10px;
            margin-top:5px;
        }
        h3{
            color: white;
        }
    </style>
</head>
<body>
<div class="payment"><h1> Payment </h1></div>
<div class="creat">
    <form action="payment.php" method="post">
        <div id="name">
            <h2 class="name">Wallet id</h2>
            <input class="wid" type=text" name="p1" >

        </div>

        <h2 class="Date">Date</h2>
        <input class="datee" type=date" name="date"><br>
        <h2 class="typepay">Type of payment</h2>
        <input class="typapayy" type=text" name="paymenttype"><br>
        <h3 class="">Amount</h3>
        <h2 class="USD">USD</h2>
        <input class="USDD" type=text" name="USDtxt"><br>
        <h2 class="jod">JOD</h2>
        <input class="jodd" type=text" name="JODtxt"><br>
        <h2 class="ils">NIS</h2>
        <input class="ilss" type=text" name="ILStxt"><br></>

        <a href="walletbar.php"<button type="submit" class="back">back</button></a>
        <button type="submit" name="pay">Pay</button>
    </form>
</div>
</body>
</html>