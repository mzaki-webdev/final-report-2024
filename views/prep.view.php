<!-- ============================================================================================= -->
<!-- ===================================== PREP START =================================== -->
<!-- ============================================================================================= -->

<?php
    if($res['payments'] == 0 && $res['failed'] == 0):

    header('Location: ../msg.php'); 
        exit();
    endif;
    
    if($res['grade'] == 7 || $res['grade'] == 8):
        
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
    endif;
    
    require $template__path . "footer.php";
?>