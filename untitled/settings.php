<?php


if(isset($_POST['sub']))
{

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "ewallet";

    $db=new mysqli('localhost','root','','ewallet');


    $id = $_POST['id'];
    $old= $_POST['old'];
    $new = $_POST['new'];
    $con = $_POST['con'];


    $s2="select * From person where person_id=$id";
    $res= $db->query($s2);


    $s3 = "update person set password=SHA1('" . $new . "')where $id=person_id";

    $result1 = mysqli_query($db, $s3);

    if($s3)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($db);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        *
        {
            padding: 0;
            margin: 0;

        }
        body{
            background-image: url("set.jpg");
            background-position:center;
            background-size:cover;
            font-family: sans-serif;
            margin-top:40px;

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
        .lname{
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

        }
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

        }
        .s{

            background-color: #3baf9f;
            display: block;
            color: white;
            padding: 14px 10px;
            border-radius: 12px;
            text-align: center;
            outline: none;
            margin: 20px 0px 0px 20px;
            border: 2px solid #366473;


        }
    </style>
</head>
<body>
<div class="sign"><h1> Edit </h1></div>
<div class="creat">
    <form action="settings.php" method="post">
        <h2 class="Adress">ID</h2>
        <input class="address" type="text" name="id">
        <h2 class="Adress">old password</h2>
        <input class="address" type="password" name="old">
        <h2 class="email">new passsword</h2>
        <input class="em" type="password" name="new"><br>
        <h2 class="birth">confirm password</h2>
        <input class="bir" type="password" name="con"><br>


        <button type="submit" name="sub"> Save </button>
    </form>
    <a href="loginperson.php"><button type="submit" class="s">back</button></a>
</div>
</body>
</html>

</head>
<body>

</body>
</html>