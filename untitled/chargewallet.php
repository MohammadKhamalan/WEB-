<?php
if(isset($_POST['tr'])) {

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "ewallet";

    $db = new mysqli('localhost', 'root', '', 'ewallet');


    $idcard = $_POST['carded'];
    $idwallet = $_POST['walletid'];
    $pass = $_POST['pass'];
    $date = $_POST['date1'];
    $email = $_POST['mail'];

    $usd = $_POST['usdtxt'];
    $jod = $_POST['jodtxt'];
    $ils = $_POST['ilstxt'];
    $y = "Charge wallet";
    $s2 = "select * From wallet where wallet_id=$idwallet";
    $res = $db->query($s2);

    $row = $res->fetch_assoc();


    $s10 = "select * From wallet where wallet_id=  $idwallet";

    $s3 = "UPDATE `wallet` SET  Amount=Amount+'" . $usd . "',amountj=amountj+'" . $jod . "',amountil=amountil+'" . $ils . "'where $idwallet=wallet_id";
    $result1 = mysqli_query($db, $s3);

    $s5 = "UPDATE `card` SET Amount=Amount-'" . $usd . "',amountj=amountj-'" . $jod . "',amountil=amountil-'" . $ils . "'where $idcard=card-id";
    $result1 = mysqli_query($db, $s5);


    $query = "INSERT INTO `trans` (`transtype`, `transdate`, `t-walletid`) VALUES ('" . $y . "', '" . $date . "', '" . $idwallet . "')";
    $result = mysqli_query($db, $query);

    if ($result && $s3 && $s5 && $s10) {
        echo 'Data Updated';
    } else {
        echo 'Data Not Updated';
    }
    mysqli_close($db);

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ChargeWallet</title>
    <style type="text/css">
        *
        {
            padding: 0;
            margin: 0;

        }
        body{
            background-image: url("chargewallet.jpg");
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
        .password{
            margin-left:25px;
            margin-top:3px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        ;

        }
        .pass{
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

        .tr{
            background-color: #3baf9f;
            display:block;
            color: white;
            padding: 10px 40px;
            border-radius:8px;
            text-align:center;
            outline:none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;
            cursor: pointer;
            transition: 0.5s;
            position:absolute;
            left:25%;
            top:103%;
        }
        .tra{
            background-color: #3baf9f;
            display:block;
            color: white;
            padding: 10px 40px;
            border-radius:8px;
            text-align:center;
            outline:none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;
            cursor: pointer;
            transition: 0.5s;
            position:absolute;
            left:65%;
            top:103%;

        }
        h3{
            color: white;
        }
    </style>
</head>
<body>
<div class="payment"><h1> Charge Wallet </h1></div>
<div class="creat">
    <form action="chargewallet.php" method="post">
        <div id="name">
            <h2 class="name">Wallet id</h2>
            <input class="wid" type=text" name="walletid">

        </div>

        <h2 class="password">Password</h2>
        <input class="pass" type="password" name="pass">
        <h2 class="trans">Card number</h2>
        <input class="transco" type=text name="carded"><br>
        <h2 class="Date">Date</h2>
        <input class="datee" type=date" name="date1"><br>
        <h2 class="password">Email</h2>
        <input class="pass" type="text" name="mail">
        <h3 class="">Balance</h3>
        <h2 class="USD">USD</h2>
        <input class="USDD" type=text" name="usdtxt"><br>
        <h2 class="jod">JOD</h2>
        <input class="jodd" type=text" name="jodtxt"><br>
        <h2 class="ils">NIS</h2>
        <input class="ilss" type=text" name="ilstxt"><br>
        <a href="walletbar.php"<button type="submit" class="tr">back</button></a>
        <button type="submit" class="tra" name="tr">Charge</button>
    </form>
</div>
</body>
</html>