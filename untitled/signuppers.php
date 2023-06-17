<?php
if(isset($_POST['firstname'])&&isset($_POST['addr'])&&isset($_POST['pass'])&&isset($_POST['emm'])&&isset($_POST['date'])&&isset($_POST['id'])&&isset($_POST['gender'])&&isset($_POST['customer'])){
    $username=$_POST['firstname'];
    $uaddr=$_POST['addr'];
    $upassword=$_POST['pass'];
    $uemail=$_POST['emm'];
    $udate=$_POST['date'];
    $uid=$_POST['id'];
    $ugender=$_POST['gender'];
    $utype=$_POST['customer'];
    try{
        $db=new mysqli('localhost','root','','ewallet');
        $qyrstr="INSERT INTO `person` (`person_id`, `name`, `password`, `address`, `email`, `Birthday`, `gender`, `persontype`) VALUES  ('".$uid."', '".$username."', SHA1('".$upassword."'), '".$uaddr."', '".$uemail."', '".$udate."', '".$_POST['gender']."', '".$_POST['customer']."')";
        $rs=  $db->query($qyrstr);
        $db->commit();
        $db->close();
        if($rs==1){

            header('Location:loginperson.php');

        }
        else{
            echo '<script type="text/javascript">

            window.onload = function () { alert("Person id is already used before !!"); }
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
    <title>Sign-up</title>
    <style type="text/css">
        *
        {
            padding: 0;
            margin: 0;

        }
        body{
            background-image: url("ll.jpg");
            background-position:center;
            background-size:cover;
            font-family: sans-serif;
            margin-top:40px;

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
            padding:10px;
        }
        #name{
            width:100%;
            height:100px;
        }
        .name{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .fname{
            position: relative;
            top: -37px;
            left: 200px;
            padding: 0 22px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        /* .lname{
             position: relative;
             top: -37px;
             left: 207px;
             border-radius:6px;
             padding: 0 22px;
             font-size:16px;
             line-height: 40px;

         }
         .flable{
             position: relative;
             color:#e5e5e5;
             top: -4px;
             left:-50px;
             font-size:16px;
             text-transform: capitalize;

         }
         .llable{
             position: relative;
             color:#e5e5e5;
             top: -30px;
             left: 533px;
             font-size:16px;
             text-transform: capitalize;

         }*/
        .Adress{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;

        }
        .address{
            position: relative;
            top: -37px;
            left: 200px;
            padding: 0 190px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .email{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .em{
            position: relative;
            top: -37px;
            left: 200px;
            padding: 0 190px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .birth{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .bir{
            position: relative;
            top: -37px;
            left: 200px;
            padding: 0 190px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .agge{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .age{
            position: relative;
            top: -37px;
            left: 200px;
            padding: 0 190px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
        }
        .tyy1{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .radioo{
            display: inline-block;
            padding-right: 70px;
            margin-left:25px;
            margin-top:15px;

            font-size: 25px;
            color: white;

        }
        .tyy{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;
        }
        .pas{
            margin-left:25px;
            margin-top:30px;
            width:125px;
            font-size: 18px;
            color: white;
            font-weight: 700;


        }
        .pass{
            position: relative;
            top: -37px;
            left: 200px;
            padding: 0 190px;
            border-radius:6px;
            font-size:16px;
            line-height: 40px;
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
            background-color: #3baf9f;
            display:block;
            color: white;
            padding: 14px 110px;
            border-radius:12px;
            text-align:center;
            outline:none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;

        }
        .sub{
            width:5%;
            background-color: #3baf9f;
            display:block;
            color: white;
            padding: 4px 110px;
            border-radius:12px;
            text-align:center;
            outline:none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;
        }
    </style>
</head>
<body>
<div class="sign"><h1> Sign up </h1></div>
<div class="creat">
    <form action="signuppers.php" method="post">
        <div id="name">
            <h2 class="name">Name</h2>
            <input class="bir" type=text" name="firstname">
            <!-- <label class="flable"> first name</label>
             <input class="lname" type=text" name="last name"><br>
             <label class="llable"> last name</label>-->
        </div>
        <h2 class="Adress">Address</h2>
        <input class="address" type=text" name="addr">

        <h2 class="pas">Password</h2>
        <input class="pass" type="password" name="pass">
        <h2 class="email">Email</h2>
        <input class="em" type=text" name="emm"><br>
        <h2 class="birth">Birthday</h2>
        <input class="bir" type=date" name="date"><br>
        <h2 class="agge">Person-id</h2>
        <input class="age" type=text" name="id"><br>
        <h2 class="tyy1">gender</h2>
        <label class="radioo">
            <input class="radioo" type="radio"  name="gender" value="male">
            <span class="checkmark"></span>
            Male
            <label class="radioi">
                <input class="radioi" type="radio"  name="gender" value="female">
                <span class="checkmark"></span>
                female

                <h2 class="tyy">type of person</h2>
                <label class="radio">
                    <input class="radio" type="radio"  name="customer" value="customer">
                    <span class="checkmark"></span>
                    customer
                    <a class="radio-b">
                        <input class="radio-b" type="radio"  name="customer" value="merchant">
                        <span class="checkmark"></span>
                        Merchant

                        <button type="submit"> Save </button>
                        <a href="loginperson.php"    <button type="submit" class="sub"> back </button></a>

    </form>
</div>
</body>
</html>