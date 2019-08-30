<?php
require_once './menuadmin.php';

$query = "SELECT iId, iName, iDescription, iPrice, iImage FROM Item";
if(isset($_POST['keyword'])){
    $keyword = sanitizeString($_POST['keyword']);
    $query = $query . " WHERE iName LIKE '%$keyword%' OR iId LIKE '%$keyword%'";
}
$result = queryMysql($query);
$error = $msg = "";
if (!$result){
    $error = "Couldn't load data, please try again.";
}
?>
<br><br>
<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
    <div>
        <form action="loaditem.php" class="form-group" method="post">
            <h4>Search Product</h4>
            <input type="search" class="form-control" name="keyword"/><br>
            <input type="submit" class="btn btn-primary" value="Go"/>
         </form>
    </div>
    </div>
</div>
</div>
</div>
<br>
<table class="tbl">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>             
        <th>Image</th> 
        <th>Options</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        $iId = $row[0];
        $iName = $row[1];
        $iDescription = $row[2];
        $iPrice = $row[3];
        $iImage = $row[4];             
        echo "<tr>";
        echo "<td>$iId</td>";
        echo "<td>$iName</td>";
        echo "<td>$iDescription</td>";
        echo "<td>$iPrice</td>";
        echo "<td><img src='./img/". $iImage . "' height='10%'></td>";
        ?>
        <td>
            <form class="frminline" action="deleteitem.php" method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="iId" value="<?php echo $row[0] ?>" />
                <input type="submit" class="btn btn-primary" value="Delete" />
            </form>
            <form class="frminline" action="updateitem.php" method="post">
                <input type="hidden" name="iId" value="<?php echo $row[0] ?>" />
                <input type="submit" class="btn btn-primary" value="Update" />
            </form>
        </td>
        <?php
        echo "</tr>";
    }
    ?>
    <script>
        function confirmDelete() {
            var r = confirm("Are you sure you would like to delete ?");
            if (r) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</table>
</body>
</html>

