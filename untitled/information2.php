<!DOCTYPE html>
<html>
<head>
    <title>INFORMATION</title>
    <h2>TRANS INFORMATION</h2>
    <style>
        table,tr,th,td
        {
            border: 1px solid black;
        }
        body{
            background-image: url("s.jpg");
            background-repeat: repeat;

            background-size: 100%;

            box-sizing: border-box;
            font-family: sans-serif;

        }
    </style>

</head>
<body>

<form action="information2.php" method="post">
    <h2 class="Adress">ID</h2>
    <input class="address" type="text" name="id">
    <input type="submit" name="sub">  </input>
    <a href="walletbar.php"<button type="submit" class="tr">back</button></a>


</form>
<table>
    <tr>
        <th>wallet_id</th>
        <th>transdate</th>
        <th>transetype</th>

    </tr>
    <?php

    if(isset($_POST['id'])) {
        $id=$_POST['id'];




        $db = @new mysqli('localhost', 'root', '', 'ewallet');
        $sql = "SELECT * FROM `trans` WHERE `t-walletid`=".$id.";";
        $res = $db->query($sql);

        for ($i = 0; $i < $res->num_rows; $i++) {
            $row = $res->fetch_object();


            echo "<tr>
<td>$id</td> 
<td>$row->transdate</td>
 <td>$row->transtype</td></tr>";


        }
    }

    ?>
</table>
</body>
  </html>