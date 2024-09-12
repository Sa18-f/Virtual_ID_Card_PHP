<?php 
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course_name = $_POST['course_name'];
    $batch_no = $_POST['batch'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body class="bg-grid-line">
        
    </body>
    <div class="card">
        <header>
            <h1>Programming Hero Student ID</h1>
        </header>
        <article>
        <img src="" alt="">
        <h1><?php if(isset($name)){echo $name;} ?></h1>
        <div class="area">
            <h3>Course-<?php if(isset($course_name)){echo $course_name;} ?></h3>
            <ul>
                <li>Phone-<?php if(isset($phone)){echo $phone;} ?> </li>
                <li>Email-<?php if(isset($email)){echo $email;} ?></li>
                <li>Batch No.-<?php if(isset($batch_no)){echo $batch_no;} ?></li>
            </ul>
        </div>
        </article>
    </div>
</body>
</html>