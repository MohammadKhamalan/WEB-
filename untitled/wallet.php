
<?php
if(isset($_POST['wid'])&&isset($_POST['pass'])&&isset($_POST['pname'])&&isset($_POST['pid'])&&isset($_POST['mnu'])&&isset($_POST['amm'])){
    $wid=$_POST['wid'];
    $upassword=$_POST['pass'];
    $pname=$_POST['pname'];
    $pid=$_POST['pid'];
    $m_numb=$_POST['mnu'];
    $amount=$_POST['amm'];
    $amount1=$_POST['amm1'];
    $amount2=$_POST['amm2'];
    $ugender=$_POST['customer'];
    try{
        $db=new mysqli('localhost','root','','ewallet');
        $qyrstr="INSERT INTO `wallet` (`wallet_id`, `password`, `person_name`, `person_id`, `m_number`, `Amount`, `amountj`, `amountil`) VALUES ('".$wid."',  SHA1('".$upassword."'), '".$pname."', '".$pid."', '".$m_numb."', '".$amount."', '".$amount1."','".$amount2."')";
        $rs=  $db->query($qyrstr);
        $db->commit();
        $db->close();
        if($rs==1){
            header('Location:wallet1.php');

        }
        else{
            echo '<script type="text/javascript">

            window.onload = function () { alert("wallet id is already used before !!"); }
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
  <title>Title</title>
  <style type="text/css">
    *
    {
        padding: 0;
        margin: 0;

    }
    body{
    background-image: url("man.jpg");
      background-position:center;
      background-size:cover;
      font-family: sans-serif;
      margin-top:100px;

    }
    .sign{
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
    padding:-10px;
    }
    #name{
      width:100%;
      height:100px;
    }
    .walletid{
    margin-left:25px;
      margin-top:-50px;
      width:125px;
      font-size: 18px;
      color: white;
      font-weight: 700;
    }
    .wid{
    position: relative;
    top: -37px;
      left: 200px;
      padding: 0 60px;
      border-radius:6px;
      font-size:16px;
      line-height: 40px;

    }
    .password{
    margin-left:25px;
      margin-top:10px;
      width:125px;
      font-size: 18px;
      color: white;
      font-weight: 700;
    }
    .pass{
    position: relative;
    top: -27px;
      left: 200px;
      padding: 0 60px;
      border-radius:6px;
      font-size:16px;
      line-height: 40px;

    }
    .personname{
    margin-left:25px;
      margin-top:30px;
      width:125px;
      font-size: 18px;
      color: white;
      font-weight: 700;

    }
    .pname{
    position: relative;
    top: -37px;
      left: 200px;
      padding: 0 60px;
      border-radius:6px;
      font-size:16px;
      line-height: 40px;
    }
    .personid{
    margin-left:25px;
      margin-top:30px;
      width:125px;
      font-size: 18px;
      color: white;
      font-weight: 700;
    }
    .pid{
    position: relative;
    top: -37px;
      left: 200px;
      padding: 0 60px;
      border-radius:6px;
      font-size:16px;
      line-height: 40px;
    }
    .mobile{
        margin-left:25px;
    margin-top:30px;
    width:125px;
    font-size: 18px;
    color: white;
    font-weight: 700;
    }
    .mnu{
        position: relative;
        top: -37px;
        left: 200px;
        padding: 0 60px;
        border-radius:6px;
        font-size:16px;
        line-height: 40px;
    }
    .amount{
    margin-left:25px;
      margin-top:30px;
      width:125px;
      font-size: 18px;
      color: white;
      font-weight: 700;
    }
    .am{
    position: relative;
    top: -37px;
      left: 200px;
      padding: 0 60px;
      border-radius:6px;
      font-size:16px;
      line-height: 40px;
    }
    .amount1{
        margin-left:25px;
        margin-top:30px;
        width:125px;
        font-size: 18px;
        color: white;
        font-weight: 700;
    }
    .am1{
        position: relative;
        top: -37px;
        left: 200px;
        padding: 0 60px;
        border-radius:6px;
        font-size:16px;
        line-height: 40px;
    }
    .amount2{
        margin-left:25px;
        margin-top:30px;
        width:125px;
        font-size: 18px;
        color: white;
        font-weight: 700;
    }
    .am2{
        position: relative;
        top: -37px;
        left: 200px;
        padding: 0 60px;
        border-radius:6px;
        font-size:16px;
        line-height: 40px;
    }
    .tyy{
    margin-left:25px;
      margin-top:-20px;
      width:125px;
      font-size: 18px;
      color: white;
      font-weight: 700;
    }
    .radio{
    display: inline-block;
    padding-right: 90px;
      margin-left:25px;
      margin-top:-40px;

      font-size: 25px;
      color: white;

    }
    .save{
    background-color: #3baf9f;
      display:block;
      color: white;
      padding: 14px 30px;
      border-radius:12px;
      text-align:center;
      outline:none;
      margin: 20px 0px 0px 20px;
      border: 2px solid #366473;
      cursor: pointer;
      transition: 0.5s;
      position:absolute;
      left:67%;
      top:116%;

    }
    .back{
        background-color: #3baf9f;
        display:block;
        color: white;
        padding: 14px 30px;
        border-radius:12px;
        text-align:center;
        outline:none;
        margin: 20px 0px 0px 20px;
        border: 2px solid #366473;
        cursor: pointer;
        transition: 0.5s;
        position:absolute;
        left:24%;
        top:116%;

    }
  </style>
</head>
<body>
<div class="sign"><h1> create wallet </h1></div>
<div class="creat">
  <form action="wallet.php" method="post">
    <div id="name">
    </div>
    <h2 class="walletid">wallet id</h2>

    <input class="wid" type=text" name="wid">
    <h2 class="password">password</h2>
    <input class="pass" type="password" name="pass">
    <h2 class="personname">person name</h2>
    <input class="pname" type=text" name="pname">
    <h2 class="personid">person id</h2>
    <input class="pid" type=text" name="pid"><br>
    <h2 class="mobile">m-number</h2>
    <input class="mnu" type=text" name="mnu"><br>
      <h2 class="amount">Amount USD</h2>
      <input class="am" type=text" name="amm"><br>
      <h2 class="amount1">Amount JOD</h2>
      <input class="am1" type=text" name="amm1"><br>
      <h2 class="amount2">Amount ILS</h2>
      <input class="am2" type=text" name="amm2"><br>

        <div class="butt">
          <div>
            <button type="submit" class="save"> Save </button>
            <a href="para.php" <button type="submit" class="back" > Back </button>

            </a>
          </div>
        </div>

  </form>
</div>
</body>
</html>