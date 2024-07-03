<?php
    // Variable to Exclude navbar from the page;
    // $navbar = true;
    $pageTitle = 'test';

    // Including init file
    include "init.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Store incoming student id through http POST request
        // $id = $_POST['student__id'];
        // $student__id  = (int)filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $g = $_POST['grade'];

        if($g == "1"):
            // check if student ID exist or not
            $sql = "SELECT * FROM `lower_primary_t2_2024` WHERE $g = grade";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
        /* elseif($grade == "Primary 4" || $grade == "Primary 5" || $grade == "Primary 6"):
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
            $count = $stmt->rowCount(); */
        endif;


        if($count > 0){
            $filteredStudents = array_filter($res, function ($student){
                    return $student['m_list'] == 5;
                });
            }else{
                header('Location: msg.php');
                exit();
            }
        
    }
?>


<?php require "test.view.php" ;?>
<?php require $template__path . "footer.php";?>