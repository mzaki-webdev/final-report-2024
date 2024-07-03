<?php
    // Variable to Exclude navbar from the page;
    // $navbar = true;
    $pageTitle = 'Home';

    // Including init file
    include "init.php";

?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5" style="width: 18rem;">
              <img src="layout/images/student.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

        </div>
        <div class="col">
            <div class="card mt-5" style="width: 18rem;">
                <img src="layout/images/teacher.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            
        </div>
        <div class="col">
            <div class="card mt-5" style="width: 18rem;">
                    <img src="layout/images/employee.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>

            </div>

    </div>
</div>



<?php include $template__path . "footer.php";?>