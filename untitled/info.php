<?php
if(isset($_POST['sub'])) {
    $valueToSearch = $_POST['id'];
    $connect = mysqli_connect("localhost", "root", "", "ewallet");
// function to connect and execute the query
    $query = " SELECT * FROM trans WHERE t-walletid='$_POST[id]'";
    $filter_Result = mysqli_query($connect, $query);
        echo "<tr>";
        echo "<th>";
        echo "wallet id";
        echo "</th>";
        echo "<th>";
        echo "trance type";
        echo "</th>";
        echo "<th>";
        echo "trance date";
        echo "</th>";
    for ($i = 0; $i < $filter_Result->num_rows; $i++) {
        $row = $filter_Result->fetch_object();
        if ($row->t - wallet_id == $valueToSearch) {
            $qs = "SELECT * FROM trans WHERE t-walletid='$_POST[id]'";
            $res2 = $connect->query($qs);
            $row2 = $res2->fetch_object();
            $ID= $row->t-walletid;
            if($ID==$_POST['t-walletid']){



            echo "<tr>";
        echo "<td>";
        echo $row["t-walletid"];
        echo "</td>";
        echo "<td>";
        echo $row["transtype"];
        echo "</td>";
        echo "<td>";
        echo $row["transdate"];
        echo "</td>";

        echo "</table>";
    }  }
}}
?>

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
            background-image: url("jh.jpg");
            background-repeat: no-repeat;
            background-size: 100%;

            box-sizing: border-box;
            font-family: sans-serif;

        }
    </style>
    <h2 class="Adress">ID</h2>
    <input class="address" type="text" name="id">
    <button type="submit" name="sub"> Save </button>
</head>
<body>

<form action="info.php" method="post">


    <table>
        <tr>
            <th>wallet id</th>
            <th>trans date</th>
            <th>trans type</th>

        </tr>



    </table>
</form>

</body>
</html>