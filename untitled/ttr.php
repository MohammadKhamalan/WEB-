<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$error = '';
$idsender = '';
$idresever = '';
$email = '';
$date = '';
$message = '';
function clean_text($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
if (isset($_POST["trans"])) {
    if ($error == '') {
//     require_once "PHPMailer/SMTP.php";
//        require_once "PHPMailer/Exception.php";
//        require 'PHPMailer/PHPMailer.php';
        $mail = new PHPMailer();

        $mail->IsSMTP();        //Sets Mailer to send message using SMTP
        $mail->Mailer = "smtp";
        $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts
        //$mail->SMTPDebug = 1;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "s12042772@stu.najah.edu";
        $mail->Password = "tro@206476";
        $mail->IsHTML(true);
        $mail->AddAddress($_POST["email"]);
        $mail->SetFrom("s12042772@stu.najah.edu", "from-name");
        $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
        $content = $_POST["message"];
        $mail->MsgHTML($content);
        if ($mail->Send()) {
            $error = '<label class="text-success">Thank you for contacting us</label>';
        } else {
            $error = '<label class="text-danger">There is an Error</label>';
        }
        $idsender = '';
        $idresever = '';
        $email = '';
        $date = '';
        $message = '';
    }
}?>
<?php
if(isset($_POST['trans'])){

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "ewallet";

    $db=new mysqli('localhost','root','','ewallet');


    $idsender = $_POST['idsender'];
    $idresever= $_POST['idresever'];
    $date= $_POST['date'];
    $email= $_POST['email'];

    $usd = $_POST['amountUSD'];
    $jod = $_POST['amountJOD'];
    $ils = $_POST['amountILS'];
    $y="transfer";
    $s2="select * From wallet where wallet_id=$idsender";
    $res= $db->query($s2);
    $q="INSERT INTO `rejectedtrans`(`transtype`, `transdate`, `t-walletid`, `t-walletidsender`, `USD`, `JOD`, `ILS`) VALUES ('".$y."', '".$date."', '".$idresever."','".$idsender."', '".$usd."', '".$jod."', '".$ils."')";

    $s5= "update wallet set Amount=Amount-'" . $usd . "',amountj=amountj-'" . $jod . "',amountil=amountil-'" . $ils . "'where $idsender=wallet_id";
    $s3 = "update wallet set Amount=Amount+'" . $usd . "',amountj=amountj+'" . $jod . "',amountil=amountil+'" . $ils . "'where $idresever=wallet_id";
    $query="INSERT INTO `trans`(`transtype`, `transdate`, `t-walletid`, `t-walletidre`, `USD`, `JOD`, `ILS`) VALUES ('".$y."', '".$date."', '".$idresever."','".$idsender."', '".$usd."', '".$jod."', '".$ils."')";

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
            background-image: url("ggf.PNG");
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
            color: #111111;
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
            border-bottom: 0px solid #adadad;
            margin: 7px 0;
        }
        .txt_field input{
            width: 30%;
            padding:0 3px;
            height: 40px;
            font-size: 16px;
            color:#111111;

        }

        .txt_field span::before{
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 30%;
            height: 2px;
            background: #2691d9;
            color:#111111;
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
        .dob:focus{
            -webkit-box-shadow:0 0 2px 1px #179301;
            -moz-box-shadow:0 0 2px 1px #179301;
            box-shadow: 0 0 2px 1px #179301;
            border: 1px solid #179301;
        }

        .dob{
            width: 10%;
            padding: 14px;
            text-align: center;
            background-color: #fcfcfc;
            transition: 0.3s;
            outline: none;
            border: 1px solid #c0bfbf;
            border-radius: 3px;
        }
        .radio{
            display: inline-block;
            padding-right: 70px;
            margin-left:25px;
            margin-top:15px;

            font-size: 25px;
            color: white;

        }
        button{
            width: 10%;
            background: transparent;
            border: none;
            background: #011E93;
            color: #fff;
            padding: 15px;
            border-radius: 4px;
            font-size: 16px;
            transition: all 0.35s ;
        }
        button:hover{
            cursor: pointer;
            background: #5eb105;
        }
        .s{
            width: 50%;
            background: transparent;
            border: none;
            background: #011E93;
            color: #fff;
            padding: 15px;
            border-radius: 2px;
            font-size: 16px;
            transition: all 0.35s ;
            top:90%;
        }
    </style>
</head>
<body>
<div class="sign"><h1> Transfer Form </h1></div>
<div class="creat">
    <form action="ttr.php" method="post">
        <div id="name">
            <h4> Transfer Details</h4>
            <div class="txt_field">
                <input type="text" required name="idsender">
                <span></span>
                <label> ID sender</label>
                <i class="fa fa-users icon"></i>

            </div>
            <div class="txt_field">
                <input type="text" required name="idresever">
                <span></span>

                <label>ID receiver</label>
                <i class="fa fa-users icon"></i>
            </div>
            <div class="txt_field">
                <input type="text" required name="date">
                <span></span>

                <label>Date</label>
                <i class="fa fa-calendar" aria-hidden="true"></i>
            </div>

            <div class="txt_field">
                <input type="text" required name="email">
                <span></span>

                <label>Email receiver</label>
                <i class="fa fa-envelope"></i>


            </div>
            <div class="txt_field">
                <input type="text" required name="message">
                <span></span>

                <label>message</label>
                <i class="fa fa-commenting-o" aria-hidden="true"></i>



            </div>

            <h4> Amount</h4>

            <h2 class="pass">ILS</h2>
            <input class="pss" type=text" name="amountILS"><br>
            <h2 class="pass">JOD</h2>
            <input class="pss" type=text" name="amountJOD"><br>
            <h2 class="pass">USD</h2>
            <input class="pss" type=text" name="amountUSD"><br>


            <a class="inputg">
                <a class="inputb"></a>
                    <button type=submit" name="trans">Trans!</button>






                    <!--    <div class="inputg">
                         <div class="inputb">
                             <h4> Date of transfer</h4>
                             <input type="text" placeholder="DD" required class="dob">
                             <input type="text" placeholder="MM" required class="dob">
                             <input type="text" placeholder="YY" required class="dob">
                         </div>
                         <div class="txt_field">
                             <input type="text" required>
                             <span></span>
                             <label> Amount</label>
                         </div>
                         <div class="inputb">
                          <h4> Currency</h4>
                             <input type="radio" id="D1" name=" currency" checked class="radio">
                             <label for="D1">ILS</label>
                             <input type="radio" id="D2" name=" currency"  class="radio">
                             <label for="D2">USD</label>
                             <input type="radio" id="D3" name=" currency"  class="radio">
                             <label for="D3">JOD</label>
                             <div class="inputg">
                                 <div class="inputb">-->
                    <a href="walletbar.php"<button type="submit" class="s">Back </button></a>
    </form>
</div>
</body>
</html>
