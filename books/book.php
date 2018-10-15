<?php
    require '../templates/header.php';
    $id = $_GET["id"];

    $sql = "SELECT * FROM `books` WHERE id = $id"; //select query which will filter out the books
    $result = mysqli_query($dbc, $sql);
    if ($result && mysqli_affected_rows($dbc) > 0) { //an empty result will still count - so if there are books more than 0
        $singleBook = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } elseif ($result && mysqli_affected_rows($dbc) == 0) { //if there are books but book id cant be found
        die("ERROR! 404");
        // header("Location: ../errors/404.php")
    } else {
        die("ERROR! Cannot get the data requested"); //if there are no books
    }

 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1><?= $singleBook["book_name"]; ?></h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <a class="btn btn-outline-primary" href="update.php">Edit</a>
             <a class="btn btn-outline-danger" href="confirm_delete.php">Delete</a>
         </div>
     </div>

     <div class="row mb-2">
        <div class="col-xs-12 col-sm-4 align-self-center">
            <img class="img-fluid" src="./books/images/uploads/<?= $singleBook["image_name"]; ?>" alt="Card image cap">
        </div>
        <div class="col-xs-12 col-sm-8 align-self-center">
            <h3><?= $singleBook["book_name"]; ?></h3>
            <h4><?= $singleBook["author"]; ?></h4>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <p>
                <?= $singleBook["description"]; ?>
            </p>
        </div>
    </div>


 </div>


<?php require '../templates/footer.php' ?>
