<?php
    // Variable to Exclude navbar from the page;
    // $navbar = true;
    $pageTitle = 'Home';

    // Including init file
    include "init.php";

?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-sm-12 mt-5 mx-auto">
                <form class="login" action="test.php" method = "POST">
                
                <div class="text-center">
                    <img src="layout/images/logo.webp" class="logo mt-5 mb-3" alt="Logo" 
                            style="width:150px; height:150px">
                </div>
                
<!--                 <input type="text" class="form-control mt-3" name="student__id" id="studentID" placeholder="Student National ID" required/>
 -->                <label for="grade" class="fs-5">Please choose student's grade</label>
                    <select name = "grade" class="form-select mt-3" aria-label="Default select example">
                    <option selected>Choose grade</option>
                    <option value="1">Primary 1</option>
                    <option value="2">Primary 2</option>
                    <option value="3">Primary 3</option>
                    <option value="Primary 4">Primary 4</option>
                    <option value="Primary 5">Primary 5</option>
                    <option value="Primary 6">Primary 6</option>
                    <option value="Preparatory 1">Preparatory 1</option>
                    <option value="Preparatory 2">Preparatory 2</option>
                    <option value="Secondary 1">Secondary 1</option>
                    <option value="Secondary 2">Secondary 2</option>
                    </select>                
                <div>
                    <button type="submit" name="submit" class="btn btn-primary mt-3 col-12" style="font-size:1.3rem;;background-color: #FFB534; color:rgba(0,0,0,0.8);">Show Report</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php include $template__path . "footer.php";?>