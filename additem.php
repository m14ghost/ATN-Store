<?php
require_once 'menuadmin.php';
require_once 'functions.php';
//getting the data
$msg = "";
if (isset($_POST['add'])) { //adding
    $iId = $_POST['iId'];
    $iName = $_POST['iName'];
    $iDescription = $_POST['iDescription'];
    $iPrice = $_POST['iPrice'];   
    $iImage = "";
    $extension = "";
    //Process the uploaded image
    if (isset($_FILES['iImage']) && $_FILES['iImage']['size'] != 0) {
        $temp_name = $_FILES['iImage']['tmp_name'];
        $name = $_FILES['iImage']['name'];
        $parts = explode(".", $name);
        $lastIndex = count($parts) - 1;
        $extension = $parts[$lastIndex];
        $iImage = "$name.$extension";
        $destination = "./images/$iImage";
        //Move the file from temp loc => to our image folder
        move_uploaded_file($temp_name, $destination);
    }
    //TODO: Do the PHP validation here to protect your server
    //Add the student
    $query = "INSERT INTO item values ('$iId','$iName','$iDescription','$iPrice','$iImage')";
    $result = queryMysql($query);
  
    // $result = $pdo->prepare($query);
    if (!$result) {
        $msg = "Can't add Item, please try again";
    } else {
        $msg = "Added $iName successfully!";
    }
}
?>
    <br>
    <br>
    <body id="LoginForm">
    <div class="container">
    <div class="login-form">
    <div class="main-div">
    <div class="panel">
    <form action="additem.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <fieldset class="fitContent">
            <legend>Add Item</legend>

            ID:
            <br>
            <input type="text" class="form-control" name="iId" size="15" maxlength="15" placeholder="(e.g., atn1)" required pattern="^atn\d{1}$" />
            <br> Name:
            <br>
            <input type="text" class="form-control" name="iName" maxlength="100" required/>
            <br> Desciption:
            <br>
            <textarea maxlength="200" class="form-control" name="iDescription"></textarea>
            <br> Price:
            <br>
            <input type="text" class="form-control" name="iPrice" maxlength="30" />
            <br>
            <br> Image:
            <br>
            <input type="file" class="form-control" name="iImage" />
            <br>
            <input type="submit" class="btn btn-primary" value="Add" name="add" />
        </fieldset>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </body>

    </html>