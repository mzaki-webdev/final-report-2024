<!-- ============================================================================================= -->
<!-- ===================================== LOWER PRIMARY START =================================== -->
<!-- ============================================================================================= -->

<?php
        if($res['grade'] == 1 || $res['grade'] == 2 || $res['grade'] == 3):
        if($res['payments'] == 0 && $res['failed'] == 0):
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
             
            

<?php 
    endif;
        else:
            header('Location: ../msg.php'); 
            exit();
endif;

                
require $template__path . "footer.php";
?>