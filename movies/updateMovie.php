<?php
    require '../templates/header.php';
 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>Edit Harry Potter and the Philosopher's Stone</h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <form action="update.php" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <label for="title">Book Title</label>
                   <input type="text" class="form-control"  placeholder="Enter book title" value="Ocean's Eight">
                 </div>

                 <div class="form-group">
                   <label for="author">Author</label>
                   <input type="text" class="form-control"  placeholder="Enter books author" value="Gary Ross">
                 </div>

                 <div class="form-group">
                   <label for="author">Book Description</label>
                   <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Description about the book">Danny Ocean's estranged sister Debbie attempts to pull off the heist of the century at New York City's star-studded annual Met Gala. Her first stop is to assemble the perfect all-female crew: Lou, Rose, Daphne Kluger, Nine Ball, Tammy, Amita, and Constance.</textarea>
                 </div>

                 <div class="form-group">
                     <img data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                     <label for="file">Upload an Image</label>
                     <input type="file" name="image" class="form-control-file">
                 </div>

                 <button type="submit" class="btn btn-outline-info btn-block">Submit</button>
             </form>
         </div>
     </div>

 </div>


<?php require '../templates/footer.php' ?>
