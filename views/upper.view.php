<!-- ============================================================================================= -->
<!-- ===================================== UPPER PRIMARY START =================================== -->
<!-- ============================================================================================= -->
<?php

    if($res['grade'] == 4 || $res['grade'] == 5 || $res['grade'] == 6):
        if($res['payments'] == 0 && $res['failed'] == 0):
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
            


<?php 
    endif;
else:
    header('Location: ../msg.php'); 
        exit();
endif;

    require $template__path . "footer.php";
?>