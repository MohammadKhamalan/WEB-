else  if(isset($_POST['search']) and isset($_POST['search_ID'])){
$name=explode(" ",$_POST['Doctor']);
$doctorF = "";
$doctorL = "";
$db = @new mysqli('localhost', 'root', '', 'Medicare');
$qs = "SELECT * FROM appointment WHERE Date>=CURRENT_DATE;";
$res = $db->query($qs);
for ($i = 0; $i < $res->num_rows; $i++) {
$row = $res->fetch_object();
if ($row->pU == $user->Username) {
$qs = "SELECT * FROM person WHERE Username='" . $row->docU . "'";
$res2 = $db->query($qs);
$row2 = $res2->fetch_object();
$doctorF = $row2->Fname;
$doctorL= $row2->Lname;
$ID= $row->AppID;
if($ID==$_POST['ID'])
echo "<tr>
    <td>$row->AppID</td>
    <td>$doctorF $doctorL</td>
    <td>$row->Date</td>
    <td>$row->Hour</td> </tr>";
}
}
}