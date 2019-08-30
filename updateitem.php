<?php
require_once './menuadmin.php';
//Check to make sure that user is logged in first
$error = $msg = "";
if (isset($_POST['iName'])) { //updating
    $iId = sanitizeString($_POST['iId']);
    $iName = sanitizeString($_POST['iName']);
    $iDescription = sanitizeString($_POST['iDescription']);
    $iPrice = sanitizeString($_POST['iPrice']);
    
    $uId = $_SESSION['uId'];
    $query = "UPDATE Item SET iName = '$iName', iDescription = '$iDescription', iPrice = '$iPrice' WHERE iId = '$iId'";
    $result = queryMysql($query);
    if (!$result) {
        $error = "Couldn't update item $iName, please try again";
    } else {
        $msg = "Updated $iName successfully";
    }
}
//for loading the data to the form
if (isset($_POST['iId'])) {
    $iId = sanitizeString($_POST['iId']);
    //Load the current data to that batch
    $query = "SELECT iName, iDescription, iPrice FROM Item WHERE iId = '$iId'";
    $result = queryMysql($query);
    $row = mysqli_fetch_array($result);
    if ($row) {
        $iName = $row[0];
        $iDescription = $row[1];
        $iPrice = $row[2];
    }
}
?>
<br><br>
<form action="updateitem.php" method="POST">
    <fieldset>
        <legend>Update Item</legend>
        <div class="error"><?php echo $error; ?></div>
        <input type="hidden" value="<?php echo $iId; ?>" name="iId"/>
        Name: <br>
        <input type="text" id="iName" name="iName" required value="<?php echo $iName; ?>"/><br>
        Description: <br>
        <input type="text" id="iDescription" name="iDescription" required value="<?php echo $iDescription; ?>"/><br>
        Price: <br>
        <input type="text"  name="iPrice" required value="<?php echo $iPrice; ?>"/><br>
        <input type="submit" value="Update"/>
        <div><?php echo $msg; ?></div>
    </fieldset>
</form>
</body>
</html>
