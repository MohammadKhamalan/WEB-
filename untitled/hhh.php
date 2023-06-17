
<!DOCTYPE html>
<html>
<head>
    <title>Read Data From Database Using PHP - Demo Preview</title>
    <meta content="noindex, nofollow" name="robots">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
    <div class="divA">
        <div class="title">
            <h2>Read Data Using PHP</h2>
        </div>
        <div class="divB">
            <div class="divD">
                <p>Click On Menu</p>
                <?php
                $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
                $db = mysql_select_db("company", $connection); // Selecting Database
                //MySQL Query to read data
                $query = mysql_query("select * from employee", $connection);
                while ($row = mysql_fetch_array($query)) {
                    echo "<b><a href="readphp.php?id={$row['employee_id']}">{$row['employee_name']}</a></b>";
echo "<br />";
}
                ?>
            </div>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query1 = mysql_query("select * from employee where employee_id=$id", $connection);
                while ($row1 = mysql_fetch_array($query1)) {
                    ?>
                    <div class="form">
                        <h2>---Details---</h2>
                        <tr>
                            <td><?php echo $row['wallet_id'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['person_name'];?></td>
                            <td><?php echo $row['person_id'];?></td>
                            <td><?php echo $row['m_number'];?></td>
                            <td><?php echo $row['Amount'];?></td>
                            <td><?php echo $row['amountj'];?></td>
                            <td><?php echo $row['amountil'];?></td>


                        </tr>
                    </div>
                    <?php
                }
            }
            ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>
<?php
  if(isset($_POST['search']) and isset($_POST['search_ID'])){
   $id=$_POST['ttxt'];
    $db = @new mysqli('localhost', 'root', '', 'ewallet');
    $qs = "SELECT * FROM wallet WHERE wallet_id='" . ttxt . "'";
    $res = $db->query($qs);
    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->pU == $id->Username) {

            $ID= $row->AppID;
            if($ID==$_POST['ID'])
                echo "<tr>
                                        <td>$row->AppID</td>
                                        <td>$doctorF $doctorL</td>
                                        <td>$row->Date</td>
                                        <td>$row->Hour</td> </tr>";
        }
    }
                ?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP HTML TABLE DATA SEARCH</title>
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

</head>
<body>

<form action="information.php" method="post">


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



            <tr>
                <td><?php echo $row['wallet_id'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['person_name'];?></td>
                <td><?php echo $row['person_id'];?></td>
                <td><?php echo $row['m_number'];?></td>
                <td><?php echo $row['Amount'];?></td>
                <td><?php echo $row['amountj'];?></td>
                <td><?php echo $row['amountil'];?></td>


            </tr>
       <div class="txt">
       <input type="text" name="ttxt" placeholder="ID">
</div>
 <button type="submit" name="sub"> Search </button>
 </table>
 </form>
 </body></html>

