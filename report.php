<?php
    $navbar = true;
    $pageTitle = 'Report';
    include "init.php";
    
    // check if user comming from get request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Store incoming student id through http POST request
        $id = $_POST['student__id'];
        $student__id  = (int)filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $grade = $_POST['grade'];

        if($grade == "Primary 1" || $grade == "Primary 2" || $grade == "Primary 3"):
            // check if student ID exist or not
            $sql = "SELECT * FROM `lower_primary_t2_2024` WHERE id = $student__id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
        elseif($grade == "Primary 4" || $grade == "Primary 5" || $grade == "Primary 6"):
            // check if student ID exist or not
            $sql = "SELECT * FROM `upper_primary_t2_2024` WHERE id = $student__id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
        elseif($grade == "Preparatory 1" || $grade == "Preparatory 2"):
            // check if student ID exist or not
            $sql = "SELECT * FROM `prep_t2_2024` WHERE id = $student__id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
        elseif($grade == "Secondary 1" || $grade == "Secondary 2"):
            // check if student ID exist or not
            $sql = "SELECT * FROM `secondary_t2_2024` WHERE id = $student__id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
        endif;

        if($count > 0 && $res['payments'] == 0 && $res['failed'] == 0){
            //$grade = $res['grade'];
            ?>
        

<!-- ============================================================================================= -->
<!-- ===================================== LOWER PRIMARY START =================================== -->
<!-- ============================================================================================= -->

            <?php
            if($grade == "Primary 1" || $grade == "Primary 2" || $grade == "Primary 3"):  
            ?>
            
            <!--Lower primary page-->
            
                <!-- Student Data Start-->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">

                            <div class="card mt-1">
                                <div class="card-header text-center">
                                    <h3>Student's Progress Report Card</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-borderless m-0">
                                        <tbody class="fs-5">
                                            <tr>
                                                <th scope="row"> Name</th>
                                                <td colspan="2"><?php echo $res['name'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Grade</th>
                                                <td colspan="2">Primary <?php echo $res['grade'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Year</th>
                                                <td colspan="2"><?php echo $res['year'] - 1 ;?> - <?php echo $res['year'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Data End-->
                <!-- Student Report Start { Lower Primary } -->    
        
            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-sm-12 mx-auto table-responsive">
                        <table class="table table-sm table-bordered text-center align-middle tw-fixed">
                            <thead>
                                <tr class = "table-dark">
                                    <th class="w-25 fs-5">Subject</th>
                                    <th class="w-25 fs-5">Mark</th>
                                    <th class="w-25 fs-5">Grade</th>
                                </tr>
                            </thead>
                            <tbody  class="fw-bold">
                                <tr class="table-group-divider fw-bold">
                                    <th scope="row">Arabic</th>
                                    <td><?php echo $res['m_ar'];?></td>
                                    <td><?php echo $res['g_ar'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Mathematics</th>
                                    <td><?php echo $res['m_math'];?></td>
                                    <td><?php echo $res['g_math'];?></td>
                                </tr>
                             
                                <tr>
                                    <th scope="row">Connect</th>
                                    <td><?php echo $res['m_connect'];?></td>
                                    <td><?php echo $res['g_connect'];?></td>
                                </tr>
                                   <tr>
                                    <th scope="row">Religion</th>
                                    <td><?php echo $res['m_rel'];?></td>
                                    <td><?php echo $res['g_rel'];?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Connect Plus</th>
                                    <td><?php echo $res['m_conn_p'];?></td>
                                    <td><?php echo $res['g_conn_p'];?></td>
                                </tr>
                                
                            </tbody>
                        </table>

                        <!-- Grades Start --> 
                        <div class="row">
    
                            <div class="col-sm-12 mx-auto">
                                <table class="table table-sm table-bordered text-center">
                                    <thead class="table-secondary align-middle">
                                        <tr>
                                            <th scope ="col">Above Expectations</th>
                                            <th scope ="col">Meets Expectations</th>
                                            <th scope ="col">Meets Expectations Somtimes</th>
                                            <th scope ="col">Below Expectations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>3.5 or above</td>
                                        <td>2.5 to 3.5</td>
                                        <td>1.5 to 2.5</td>
                                        <td>Less than 1.5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>   
                        <!-- Grades End -->

                    <div class="row">
                        <div class="col-sm-12 mx-auto table-responsive">
                            <table class="table table-sm table-bordered text-center align-middle tw-fixed">
                                <thead>
                                    <tr class = "table-dark">
                                        <th class="w-25 fs-5">Subject</th>
                                        <th class="w-25 fs-5">Mark</th>
                                        <th class="w-25 fs-5">Maximum</th>
                                    </tr>
                                </thead>
                                <tbody  class="fw-bold">
                                    <tr>
                                        <th scope="row">Advanced English Skills</th>
                                        <td><?php echo $res['m_eal'];?></td>
                                        <td>30</td>
                                    </tr>
                                </tbody>
                            </table>
                        <div>
                    </div>
                       <!-- Report Footer -->
                       <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                <h5>General Director</h5>
                                <h6>Mrs. Nesreen El-Sarky</h6>    
                            </div>
        
                            <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                <h5>Principal</h5>
                                <h6>Mrs. Lobna Ibrahim</h6>    
                            </div>
                            
                            <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                <h5>Chairman</h5>
                                <h6>Mr. Adel El-Shiekh</h6>
                            </div>

                        </div>
                        <!-- Report Footer End -->
                    </div>
                </div>
            </div>    
            <!-- Student Report End-->    

<!-- ============================================================================================= -->
<!-- ===================================== UPPER PRIMARY START =================================== -->
<!-- ============================================================================================= -->

            <?php    
            elseif($grade == "Primary 4" || $grade == "Primary 5" || $grade == "Primary 6"):
            ?>
            <!--Upper primary page-->
            
                <!-- Student Data Start-->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">

                            <div class="card mt-1">
                                <div class="card-header text-center">
                                    <h3>Student's Progress Report Card</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-borderless m-0">
                                        <tbody class="fs-5">
                                            <tr>
                                                <th scope="row"> Name</th>
                                                <td colspan="2"><?php echo $res['name'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Grade</th>
                                                <td colspan="2">Primary <?php echo $res['grade'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Year</th>
                                                <td colspan="2"><?php echo $res['year'] - 1 ;?> - <?php echo $res['year'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Data End-->
                <!-- Student Report Start { Upper Primary } -->
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto table-responsive">
                            <table class="table table-sm table-bordered text-center align-middle tw-fixed">
                                <thead class ="table-dark">
                                    <tr>
                                        <th scope ="col" class="fs-5 w-25">Subject</th>
                                        <th scope ="col" class="fs-5 w-25">Mark</th>
                                        <th scope ="col" class="fs-5 w-25">Grade</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider fw-bold">
                                    <tr>
                                        <th scope="row">Arabic</th>
                                        <td><?php echo $res['m_ar'];?></td>
                                        <td><?php echo $res['g_ar'];?></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Religion</th>
                                        <td><?php echo $res['m_rel'];?></td>
                                        <td><?php echo $res['g_rel'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mathematics</th>
                                        <td><?php echo $res['m_math'];?></td>
                                        <td><?php echo $res['g_math'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Science</th>
                                        <td><?php echo $res['m_sci'];?></td>
                                        <td><?php echo $res['g_sci'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Connect</th>
                                        <td><?php echo $res['m_connect'];?></td>
                                        <td><?php echo $res['g_connect'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Social Studies</th>
                                        <td><?php echo $res['m_soc'];?></td>
                                        <td><?php echo $res['g_soc'];?></td>
                                    </tr>    
                                    <tr>
                                        <th scope="row">Information Technology</th>
                                        <td><?php echo $res['m_ict'];?></td>
                                        <td><?php echo $res['g_ict'];?></td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Professional Skills</th>
                                        <td><?php echo $res['m_skills'];?></td>
                                        <td><?php echo $res['g_skills'];?></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Total</th>
                                        <td><?php echo $res['m_tot'];?></td>
                                        <td><?php echo $res['g_tot'];?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Connect Plus</th>
                                        <td><?php echo $res['m_conn_p'];?></td>
                                        <td><?php echo $res['g_conn_p'];?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row">Advanced English</th>
                                        <td><?php echo $res['m_eal'];?></td>
                                        <td><?php echo $res['g_eal'];?></td>
                                    </tr>
                                    <!--
                                    <tr>
                                        <th scope="row">English Listening</th>
                                        <td><?php echo $res['m_list'];?></td>
                                        <td><?php echo $res['g_list'];?></td>
                                    </tr>
                                    -->
                                    <tr>
                                        <th scope="row">French</th>
                                        <td><?php echo $res['m_fr'];?></td>
                                        <td><?php echo $res['g_fr'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">German</th>
                                        <td><?php echo $res['m_gr'];?></td>
                                        <td><?php echo $res['g_gr'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Art</th>
                                        <td>100</td>
                                        <td>Excellent</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">PE</th>
                                        <td>100</td>
                                        <td>Excellent</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tokkatsu</th>
                                        <td>100</td>
                                        <td>Excellent</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ethics</th>
                                        <td>100</td>
                                        <td>Excellent</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            <!-- Grades Start --> 
                            <div class="row">
    
                                <div class="col-sm-12 mx-auto">
                                    <table class="table table-sm table-bordered text-center">
                                            <thead class="table-secondary align-middle">
                                                <tr>
                                                    <th scope ="col">Excellent</th>
                                                    <th scope ="col">V.Good</th>
                                                    <th scope ="col">Good</th>
                                                    <th scope ="col">Below Average</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <tr>
                                                <td>85% or above</td>
                                                <td>65% to 85%</td>
                                                <td>50% to 65%</td>
                                                <td>Less than 50%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>   
                                <!-- Grades End -->


                            <!-- Report Footer -->
                       <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                <h5>General Director</h5>
                                <h6>Mrs. Nesreen El-Sarky</h6>    
                            </div>    
                            <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                <h5>Principal</h5>
                                <h6>Mrs. Lobna Ibrahim</h6>    
                            </div>
                        
        
                            <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                <h5>Chairman</h5>
                                <h6>Mr. Adel El-Shiekh</h6>
                            </div>

                        </div>
                        <!-- Report Footer End -->
                        </div>
                    </div>
                </div>    
                <!-- Student Report End { Upper Primary } -->
            
<!-- ============================================================================================= -->
<!-- =========================================== PREP START ====================================== -->
<!-- ============================================================================================= -->

            <?php
            elseif($grade == "Preparatory 1" || $grade == "Preparatory 2"):
                $int_grade = (int)filter_var($grade, FILTER_SANITIZE_NUMBER_INT);
                $res['grade'] == 7 ? $grade = "Preparatory 1": $grade = "Preparatory 2";
            ?>
            <!--Prep page-->
            
                <!-- Student Data Start-->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">

                            <div class="card mt-1">
                                <div class="card-header text-center">
                                    <h3>Student's Progress Report Card</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-borderless table-sm m-0">
                                        <tbody class="fs-5">
                                            <tr>
                                                <th scope="row"> Name</th>
                                                <td colspan="2"><?php echo $res['name'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Grade</th>
                                                <td colspan="2"><?php echo $grade;?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Year</th>
                                                <td colspan="2"><?php echo $res['year'] - 1 ;?> - <?php echo $res['year'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Data End-->
                <!-- Student Report Start { Prep. } -->
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                            <table class="table table-sm table-bordered text-center">
                                <thead class ="table-dark">
                                    <tr>
                                        <th scope ="col" class="fs-5 w-25">Subject</th>
                                        <th scope ="col" class="fs-5 w-25">Mark</th>
                                        <th scope ="col" class="fs-5 w-25">Grade</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider fw-bold">
                                    <tr>
                                        <th scope="row">Arabic</th>
                                        <td><?php echo $res['m_ar'];?></td>
                                        <td><?php echo $res['g_ar'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mathematics</th>
                                        <td><?php echo $res['m_math'];?></td>
                                        <td><?php echo $res['g_math'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Social Studies</th>
                                        <td><?php echo $res['m_soc'];?></td>
                                        <td><?php echo $res['g_soc'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Science</th>
                                        <td><?php echo $res['m_sci'];?></td>
                                        <td><?php echo $res['g_sci'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English</th>
                                        <td><?php echo $res['m_eol'];?></td>
                                        <td><?php echo $res['g_eol'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Act 1</th>
                                        <td><?php echo $res['m_act1'];?></td>
                                        <td><?php echo $res['g_act1'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Act 2</th>
                                        <td><?php echo $res['m_act2'];?></td>
                                        <td><?php echo $res['g_act2'];?></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Total</th>
                                        <td><?php echo $res['m_tot'];?></td>
                                        <td><?php echo $res['g_tot'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Religion</th>
                                        <td><?php echo $res['m_rel'];?></td>
                                        <td><?php echo $res['g_rel'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Art</th>
                                        <td><?php echo $res['m_art'];?></td>
                                        <td><?php echo $res['g_art'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Computer</th>
                                        <td><?php echo $res['m_comp'];?></td>
                                        <td><?php echo $res['g_comp'];?></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <th scope="row">English A.L</th>
                                        <td><?php echo $res['m_eal'];?></td>
                                        <td><?php echo $res['g_eal'];?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row">German / French</th>
                                        <td><?php echo $res['m_fr_gr'];?></td>
                                        <td><?php echo $res['g_fr_gr'];?></td>
                                    </tr>
                            
                                    
                                </tbody>
                            </table>

                        
                                <!-- Grades Start --> 
                                <div class="row">
    
                                    <div class="col-sm-12 mx-auto">
                                        <table class="table table-sm table-bordered text-center">
                                                <thead class="table-secondary align-middle">
                                                    <tr>
                                                        <th scope ="col">Excellent</th>
                                                        <th scope ="col">V.Good</th>
                                                        <th scope ="col">Good</th>
                                                        <th scope ="col">Fair</th>
                                                        <th scope ="col">Below Average</th>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                                <tr>
                                                    <td>85% or above</td>
                                                    <td>75% to 85%</td>
                                                    <td>65% to 75%</td>
                                                    <td>50% to 65%</td>
                                                    <td>Less than 50%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>   
                                <!-- Grades End -->   

    
                            <!-- Report Footer -->
                            <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>General Director</h5>
                                    <h6>Mrs. Nesreen El-Sarky</h6>    
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Principal</h5>
                                    <h6>Mrs. Samia Ismail</h6>    
                                </div>
            
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Chairman</h5>
                                    <h6>Mr. Adel El-Shiekh</h6>
                                </div>

                            </div>
                            <!-- Report Footer End -->
                            
                        </div>
                    </div>
                </div>    
                <!-- Student Report End { Prep. } -->
                    
            <?php    
            elseif($grade == "Secondary 1"):
            ?>
            <!-- SEC 1 page-->
            
                <!-- Student Data Start-->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">

                            <div class="card mt-1">
                                <div class="card-header text-center">
                                    <h3>Student's Progress Report Card</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-borderless table-sm m-0">
                                        <tbody class="fs-5">
                                            <tr>
                                                <th scope="row"> Name</th>
                                                <td colspan="2"><?php echo $res['name'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Grade</th>
                                                <td colspan="2"><?php echo $grade;?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Year</th>
                                                <td colspan="2"><?php echo $res['year'] - 1 ;?> - <?php echo $res['year'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Data End-->
                <!-- Student Report Start { Prep. } -->
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                            <table class="table table-sm table-bordered text-center">
                                <thead class ="table-dark">
                                    <tr>
                                        <th scope ="col" class="fs-5 w-25">Subject</th>
                                        <th scope ="col" class="fs-5 w-25">Maximum</th>
                                        <th scope ="col" class="fs-5 w-25">Grade</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider fw-bold">
                                    <tr>
                                        <th scope="row">Arabic</th>
                                        <td>50</td>
                                        <td><?php echo $res['m_ar'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English (O.L)</th>
                                        <td>40</td>
                                        <td><?php echo $res['m_eol'];?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">German / French</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_fr_gr'];?></td>
                                    </tr>
                                    
                                    <tr>
                                    <th scope="row">Mathematics</th>
                                        <td>40</td>
                                        <td><?php echo $res['m_math'];?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Physics</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_physics'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Chemistry</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_chemistry'];?></td>
                                    </tr>
                                 
                                        <th scope="row">Biology</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_biology'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Geography</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_geography'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">History</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_history'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Philosophy</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_philosophy'];?></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Total</th>
                                        <td>280</td>
                                        <td><?php echo $res['m_tot'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Computer</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_comp'];?></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <th scope="row">Religion</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_rel'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Civic</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_civic'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English (A.L)</th>
                                        <td>50</td>
                                        <td><?php echo $res['m_eal'];?></td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>

                            
                                <!-- Grades Start --> 
                                <!--
                                <div class="row">
    
                                    <div class="col-sm-12 mx-auto">
                                        <table class="table table-sm table-bordered text-center">
                                                <thead class="table-secondary align-middle">
                                                    <tr>
                                                        <th scope ="col">Excellent</th>
                                                        <th scope ="col">V.Good</th>
                                                        <th scope ="col">Good</th>
                                                        <th scope ="col">Fair</th>
                                                        <th scope ="col">Below Average</th>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                                <tr>
                                                    <td>85% or above</td>
                                                    <td>75% to 85%</td>
                                                    <td>65% to 75%</td>
                                                    <td>50% to 65%</td>
                                                    <td>Less than 50%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>   
                                -->
                                <!-- Grades End -->   
    
                            <!-- Report Footer -->
                            <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>General Director</h5>
                                    <h6>Mrs. Nesreen El-Sarky</h6>    
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Principal</h5>
                                    <h6>Mrs. Inji Hamdy</h6>    
                                </div>
            
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Chairman</h5>
                                    <h6>Mr. Adel El-Shiekh</h6>
                                </div>

                            </div>
                            <!-- Report Footer End -->
                            
                        </div>
                    </div>
                </div>    
                <!-- Student Report End { SEC 1. } -->
            <?php    
            // Science
            elseif($grade == "Secondary 2" && $res['division'] == 1):
            ?>
            <!-- SEC 2 Science devision-->
            
                <!-- Student Data Start-->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">

                            <div class="card mt-1">
                                <div class="card-header text-center">
                                    <h3>Student's Progress Report Card</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-borderless table-sm m-0">
                                        <tbody class="fs-5">
                                            <tr>
                                                <th scope="row"> Name</th>
                                                <td colspan="2"><?php echo $res['name'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Grade</th>
                                                <td colspan="2"><?php echo $grade;?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Year</th>
                                                <td colspan="2"><?php echo $res['year'] - 1 ;?> - <?php echo $res['year'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Data End-->
                <!-- Student Report Start { Prep. } -->
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                            <table class="table table-sm table-bordered text-center">
                                <thead class ="table-dark">
                                    <tr>
                                        <th scope ="col" class="fs-5 w-25">Subject</th>
                                        <th scope ="col" class="fs-5 w-25">Maximum</th>
                                        <th scope ="col" class="fs-5 w-25">Grade</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider fw-bold">
                                    <tr>
                                        <th scope="row">Arabic</th>
                                        <td>50</td>
                                        <td><?php echo $res['m_ar'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English (O.L)</th>
                                        <td>40</td>
                                        <td><?php echo $res['m_eol'];?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">German / French</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_fr_gr'];?></td>
                                    </tr>
                                    
                                    <tr>
                                    <th scope="row">Mathematics</th>
                                        <td>40</td>
                                        <td><?php echo $res['m_math'];?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Physics</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_physics'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Chemistry</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_chemistry'];?></td>
                                    </tr>
                                 
                                        <th scope="row">Biology</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_biology'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mechanics</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_mechanics'];?></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Total</th>
                                        <td>280</td>
                                        <td><?php echo $res['m_tot'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Computer</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_comp'];?></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <th scope="row">Religion</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_rel'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Civic</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_civic'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English (A.L)</th>
                                        <td>50</td>
                                        <td><?php echo $res['m_eal'];?></td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>

                            
                                <!-- Grades Start --> 
                                <!--
                                <div class="row">
    
                                    <div class="col-sm-12 mx-auto">
                                        <table class="table table-sm table-bordered text-center">
                                                <thead class="table-secondary align-middle">
                                                    <tr>
                                                        <th scope ="col">Excellent</th>
                                                        <th scope ="col">V.Good</th>
                                                        <th scope ="col">Good</th>
                                                        <th scope ="col">Fair</th>
                                                        <th scope ="col">Below Average</th>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                                <tr>
                                                    <td>85% or above</td>
                                                    <td>75% to 85%</td>
                                                    <td>65% to 75%</td>
                                                    <td>50% to 65%</td>
                                                    <td>Less than 50%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>   
                                -->
                                <!-- Grades End -->   
    
                            <!-- Report Footer -->
                            <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>General Director</h5>
                                    <h6>Mrs. Nesreen El-Sarky</h6>    
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Principal</h5>
                                    <h6>Mrs. Inji Hamdy</h6>    
                                </div>
            
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Chairman</h5>
                                    <h6>Mr. Adel El-Shiekh</h6>
                                </div>

                            </div>
                            <!-- Report Footer End -->
                            
                        </div>
                    </div>
                </div>    
                <!-- Student Report End { SEC 2 Science devision. } -->

            <?php
            // Arts    
            elseif($grade == "Secondary 2" && $res['division'] == 2):
            ?>
            <!-- SEC 2 Arts devision-->
            
                <!-- Student Data Start-->
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">

                            <div class="card mt-1">
                                <div class="card-header text-center">
                                    <h3>Student's Progress Report Card</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-borderless table-sm m-0">
                                        <tbody class="fs-5">
                                            <tr>
                                                <th scope="row"> Name</th>
                                                <td colspan="2"><?php echo $res['name'];?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Grade</th>
                                                <td colspan="2"><?php echo $grade;?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Year</th>
                                                <td colspan="2"><?php echo $res['year'] - 1 ;?> - <?php echo $res['year'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Data End-->
                <!-- Student Report Start { Prep. } -->
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                            <table class="table table-sm table-bordered text-center">
                                <thead class ="table-dark">
                                    <tr>
                                        <th scope ="col" class="fs-5 w-25">Subject</th>
                                        <th scope ="col" class="fs-5 w-25">Maximum</th>
                                        <th scope ="col" class="fs-5 w-25">Grade</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider fw-bold">
                                    <tr>
                                        <th scope="row">Arabic</th>
                                        <td>50</td>
                                        <td><?php echo $res['m_ar'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English (O.L)</th>
                                        <td>40</td>
                                        <td><?php echo $res['m_eol'];?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">German / French</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_fr_gr'];?></td>
                                    </tr>
                                    
                                    <tr>
                                    <th scope="row">Mathematics</th>
                                        <td>40</td>
                                        <td><?php echo $res['m_math'];?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">History</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_history'];?></td>
                                    </tr>
                                
                                    <tr>
                                        <th scope="row">Geography</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_geography'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Philosophy</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_philosophy'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Psychology</th>
                                        <td>30</td>
                                        <td><?php echo $res['m_psychology'];?></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Total</th>
                                        <td>280</td>
                                        <td><?php echo $res['m_tot'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Computer</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_comp'];?></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <th scope="row">Religion</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_rel'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Civic</th>
                                        <td>20</td>
                                        <td><?php echo $res['m_civic'];?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">English (A.L)</th>
                                        <td>50</td>
                                        <td><?php echo $res['m_eal'];?></td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>

                            
                                <!-- Grades Start --> 
                                <!--
                                <div class="row">
    
                                    <div class="col-sm-12 mx-auto">
                                        <table class="table table-sm table-bordered text-center">
                                                <thead class="table-secondary align-middle">
                                                    <tr>
                                                        <th scope ="col">Excellent</th>
                                                        <th scope ="col">V.Good</th>
                                                        <th scope ="col">Good</th>
                                                        <th scope ="col">Fair</th>
                                                        <th scope ="col">Below Average</th>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                                <tr>
                                                    <td>85% or above</td>
                                                    <td>75% to 85%</td>
                                                    <td>65% to 75%</td>
                                                    <td>50% to 65%</td>
                                                    <td>Less than 50%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>   
                                -->
                                <!-- Grades End -->   
    
                            <!-- Report Footer -->
                            <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>General Director</h5>
                                    <h6>Mrs. Nesreen El-Sarky</h6>    
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Principal</h5>
                                    <h6>Mrs. Inji Hamdy</h6>    
                                </div>
            
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center mt-1 mt-sm-2">
                                    <h5>Chairman</h5>
                                    <h6>Mr. Adel El-Shiekh</h6>
                                </div>

                            </div>
                            <!-- Report Footer End -->
                            
                        </div>
                    </div>
                </div>    
                <!-- Student Report End { SEC 2 Arts devision. } -->
                
            <?php        
            endif;    
            ?>
        
            
            
        <?php }else{
                    header('Location: msg.php');
                    exit();
                    }
    }else{
        header('Location: index.php');
        exit();

    }
        
?>




<?php include $template__path . "footer.php";?>