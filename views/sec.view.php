<!-- ============================================================================================= -->
<!-- ===================================== SECONDARY START =================================== -->
<!-- ============================================================================================= -->

<?php
    if($res['grade'] == 10 || $res['grade'] == 11):
        if($res['payments'] == 0 && $res['failed'] == 0):
            $res['grade'] == 10 ? $grade = "Secondary 1": $grade = "Secondary 2";
            if($grade == "Secondary 1"):
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
            // Science division
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
            // Arts division
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
    endif;

    else:
        header('Location: ../msg.php'); 
        exit();
    
    endif;
    
    require $template__path . "footer.php";
?>
