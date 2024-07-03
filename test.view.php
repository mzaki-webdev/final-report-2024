<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
    <?php foreach ($filteredStudents as $student) :?>
        <ul>
            <li> <?= $student['name'] ?></li>
        </ul>
    <?php endforeach; ?>



    <script src="#"></script>

</body>

</html>


    




<?php include $template__path . "footer.php";?>