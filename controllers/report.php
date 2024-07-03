
<?php
    $navbar = true;
    $pageTitle = 'Report';
    require "../init.php";
    $views = [
        'Primary 1'=> $views__path . '/lower.view.php',
        'Primary 2'=> $views__path . '/lower.view.php',
        'Primary 3'=> $views__path . '/lower.view.php',
        'Primary 4'=> $views__path . '/upper.view.php',
        'Primary 5'=> $views__path . '/upper.view.php',
        'Primary 6'=> $views__path . '/upper.view.php',
        'Preparatory 1'=> $views__path . '/prep.view.php',
        'Preparatory 2'=> $views__path . '/prep.view.php',
        'Secondary 1'=> $views__path . '/sec.view.php',
        'Secondary 2'=> $views__path . '/sec.view.php'
    ];

    function getQueryByStudentId($id, $table, $conn){
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res; // Assoc array contains student's data upon student national ID
    }
    
    // check if user comming from get request
    if($_SERVER['REQUEST_METHOD'] == 'POST'):
        // Store incoming student id through http POST request
        $id = $_POST['student__id'];
        $student__id = (int)filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $grade = $_POST['grade'];

        if($grade == "Primary 1" || $grade == "Primary 2" || $grade == "Primary 3"):
            $res = getQueryByStudentId($student__id, "lower_primary_t2_2024", $conn);
        elseif($grade == "Primary 4" || $grade == "Primary 5" || $grade == "Primary 6"):
            $res = getQueryByStudentId($student__id, "upper_primary_t2_2024", $conn);
        elseif($grade == "Preparatory 1" || $grade == "Preparatory 2"):
            $res = getQueryByStudentId($student__id, "prep_t2_2024", $conn);
        elseif($grade == "Secondary 1" || $grade == "Secondary 2"):
            $res = getQueryByStudentId($student__id, "secondary_t2_2024", $conn);
        else:
            header('Location: ../msg.php'); // path is wrong
            exit();
        endif;

        // Route to the target view according to grade
        require array_key_exists($grade, $views) ? 
        $views[$grade] : header('Location: ../msg.php'); 
        exit();
 
    else:
        header('Location: index.php');
        exit();
    endif;