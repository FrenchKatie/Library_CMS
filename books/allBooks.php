<?php
    require '../templates/header.php';

    $sql = "SELECT `id`, `book_name`, `image_name` FROM `books` WHERE 1";
    $result = mysqli_query($dbc, $sql);
    if ($result) {
        $allBooks = mysqli_fetch_all($result, MYSQLI_ASSOC); //what do you want to fetch? The result. And what language do you want this to be?
    } else {
        die("ERROR! Something went wrong, cannot get the books");
    }
 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>All Books</h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <a class="btn btn-outline-primary" href="./books/add.php">Add new Book</a>
         </div>
     </div>

     <div class="row">
        <?php if($allBooks): ?>
            <?php foreach($allBooks as $singleBook): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="./books/images/uploads/thumbnails/<?= $singleBook['image_name'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?= $singleBook['book_name'] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="book.php" class="btn btn-sm btn-outline-info">View</a>
                                    <a href="update.php" class="btn btn-sm btn-outline-secondary">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col">
                <p>Sorry, there aren't any books in the library at the moment.</p>
            </div>
        <?php endif; ?>



 </div>


<?php require '../templates/footer.php' ?>
