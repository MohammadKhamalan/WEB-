<?php


if(isset($_POST['trans']))
{

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "ewallet";

    $db=new mysqli('localhost','root','','ewallet');


    $idsender = $_POST['senderid'];
    $merchant= $_POST['merchantid'];
    $date= $_POST['date'];
    $email= $_POST['mail'];

    $usd = $_POST['USDtxt'];
    $jod = $_POST['JODtxt'];
    $ils = $_POST['ILStxt'];
    $y="By from merchant";
    $s2="select * From wallet where wallet_id=$idsender";
    $res= $db->query($s2);
    $s5= "update wallet set Amount=Amount-'" . $usd . "',amountj=amountj-'" . $jod . "',amountil=amountil-'" . $ils . "'where $idsender=wallet_id";
    $s3 = "update wallet set Amount=Amount+'" . $usd . "',amountj=amountj+'" . $jod . "',amountil=amountil+'" . $ils . "'where  $merchant=wallet_id";
    $query="INSERT INTO `trans`(`transtype`, `transdate`, `t-walletid`, `t-walletidre`, `USD`, `JOD`, `ILS`) VALUES ('".$y."', '".$date."', '".$merchant."','".$idsender."', '".$usd."', '".$jod."', '".$ils."')";
    $q="INSERT INTO `rejectedtrans`(`transtype`, `transdate`, `t-walletid`, `t-walletidsender`, `USD`, `JOD`, `ILS`) VALUES ('".$y."', '".$date."', '".$merchant."','".$idsender."', '".$usd."', '".$jod."', '".$ils."')";


    $row=$res->fetch_object();

    if( $row->Amount<$usd||$row->amountj<$jod||$row->amountil<$ils){
        echo '<script type="text/javascript">

            window.onload = function () { alert("You have not enough money to pay !!"); }
            </script>';
        $result4 = mysqli_query($db, $q);

    }
    else {
        $result1 = mysqli_query($db, $s5);

        $result1 = mysqli_query($db, $s3);

        $result = mysqli_query($db, $query);
    }
    if($query&&$s3&&$s5&&$q)
    {
    }else{
    }
    mysqli_close($db);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Buy from merchant</title>
    <style type="text/css">
        *
        {
            padding: 0;
            margin: 0;

        }
        body{
            background-image: url("vc.PNG");
            background-position:center;
            background-size:cover;
            font-family: sans-serif;
            margin-top:100px;

        }
        form{
            padding:-10px;
        }
        #name{
            width:100%;
            height:100px;
        }
        .name{
            margin-left:30px;
            margin-top:-70px;
            width:125px;
            font-size: 18px;
            color: #111111;
            font-weight: 700;
        }
        .namme{
            position: relative;
            top: -27px;
            left: 130px;
            padding: 0 60px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;

        }
        .Adress{
            margin-left:20px;
            margin-top:40px;
            width:125px;
            font-size: 18px;
            color: #111111;
            font-weight: 700;

        }
        .address{
            position: relative;
            top: -37px;
            left: 130px;
            padding: 0 60px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .email{
            margin-left:40px;
            margin-top:25px;
            width:130px;
            font-size: 18px;
            color: #111111;
            font-weight: 700;
        }
        .em{
            position: relative;
            top: -37px;
            left: 130px;
            padding: 0 60px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .birth{
            margin-left:38px;
            margin-top:20px;
            width:125px;
            font-size: 18px;
            color: #111111;
            font-weight: 700;
        }
        .bir {
            position: relative;
            top: -37px;
            left: 130px;
            padding: 0 60px;
            border-radius: 6px;
            font-size: 16px;
            line-height: 40px;
        }
        .pass{
            margin-left:34px;
            margin-top:20px;
            width:125px;
            font-size: 18px;
            color: #111111;
            font-weight: 700;
        }
        .pss{
            position: relative;
            top: -37px;
            left: 130px;
            padding: 0 60px;
            border-radius: 6px;
            font-size: 16px;
            line-height: 40px;
        }
        .inputb{
            margin-left:34px;

        }
        .radio{
            display: inline-block;
            padding-right: 70px;
            margin-left:75px;
            margin-top:15px;

            font-size: 25px;
            color: white;

        }
        .t{
            background-color: #3baf9f;
            display:block;
            color: white;
            padding: 24px 40px;
            border-radius:12px;
            text-align:center;
            outline:none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;
            cursor: pointer;
            transition: 0.5s;
            position:absolute;
            left:0%;
            top:75%;
        }
        button{
            background-color: #3baf9f;
            display:block;
            color: white;
            padding: 24px 40px;
            border-radius:12px;
            text-align:center;
            outline:none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;
            cursor: pointer;
            transition: 0.5s;
            position:absolute;
            left:15%;
            top:75%;

        }
    </style>
</head>
<body>
<form action="buy.php" method="post">
    <div  >
    </div>
    <h2 class="name">wallet id</h2>

    <input class="namme" type=text" name="senderid">

    <h2 class="Adress">Merchant ID</h2>
    <input class="address" type=text" name="merchantid">
    <h2 class="email">Date</h2>
    <input class="em" type="text" name="date"><br>
    <h2 class="birth">Email</h2>
    <input class="bir" type=email" name="mail"><br>

    <div id="name">
        <div class="inputb">

            <h3 class="">Amount</h3>
            <h2 class="USD">USD</h2>
            <input class="USDD" type=text" name="USDtxt"><br>
            <h2 class="jod">JOD</h2>
            <input class="jodd" type=text" name="JODtxt"><br>
            <h2 class="ils">NIS</h2>
            <input class="ilss" type=text" name="ILStxt"><br>            <div class="inputg">
                <div class="inputb">
                    <a href="walletbar.php" <button type=submit" class="t">Back</button></a>
                    <button type=submit" name="trans">Buy!</button>
                    </div>
</form>
</div>
</body>
</html>