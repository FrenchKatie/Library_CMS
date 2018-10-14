<?php
    require '../templates/header.php';
 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>Ocean's Eight </h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <a class="btn btn-outline-primary" href="./movies/updateMovie.php">Edit</a>
             <a class="btn btn-outline-danger" href="confirm_delete.php">Delete</a>
         </div>
     </div>

     <div class="row mb-2">
        <div class="col-xs-12 col-sm-4 align-self-center">
            <img class="img-fluid" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
        </div>
        <div class="col-xs-12 col-sm-8 align-self-center">
            <h3>Ocean's Eight</h3>
            <h4>Gary Ross</h4>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <p>
                Danny Ocean's estranged sister Debbie attempts to pull off the heist of the century at New York City's star-studded annual Met Gala. Her first stop is to assemble the perfect all-female crew: Lou, Rose, Daphne Kluger, Nine Ball, Tammy, Amita, and Constance.
            </p>
        </div>
    </div>


 </div>


<?php require '../templates/footer.php' ?>
