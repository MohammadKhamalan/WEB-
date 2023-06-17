<!DOCTYPE html>
<html>
<head>
    <title>INFORMATION</title>
    <h2>WALLET INFORMATION</h2>
    <style>
        table,tr,th,td
        {
            border: 1px solid #111111;
        }
        body{
            background-image: url("y.jpg");
            background-repeat: no-repeat;
            background-size: 100%;

            box-sizing: border-box;
            font-family: sans-serif;

        }
    </style>

</head>
<body>

<form action="information1.php" method="post">


<h2 class="Adress">ID</h2>
    <input class="address" type="text" name="id">
    <input type="submit" name="sub">  </input>
    <a href="walletbar.php"<button type="submit" class="tr">back</button></a>


</form>
<table>
    <tr>
        <th>wallet_id</th>
        <th>password</th>
        <th>person_name</th>
        <th>person_id</th>
        <th>m_number</th>
        <th>Amount USD</th>
        <th>Amount JOD</th>
        <th>Amount ILS</th>
    </tr>
    <?php

    if(isset($_POST['sub'])) {
        $id=$_POST['id'];




        $db = @new mysqli('localhost', 'root', '', 'ewallet');
        $sql = "SELECT * FROM `wallet` WHERE `wallet_id`=".$id.";";
        $res = $db->query($sql);

        for ($i = 0; $i < $res->num_rows; $i++) {
            $row = $res->fetch_object();


            echo "<tr>
<td>$row->wallet_id</td> 
<td>$row->password</td>
 <td>$row->person_name</td>
 <td>$row->person_id</td>
 <td>$row->m_number</td>
 <td>$row->Amount</td>
  <td>$row->amountj</td>
   <td>$row->amountil</td></tr>";


    }
    }

    ?>
</table>
</body>
</html>
