<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม bootstap -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- เเทรก font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Krub", serif;
            font-weight: 200;
            font-style: normal;
            margin-top: 250;
            margin-left: 250;
            margin-bottom: 250;
            margin-right: 250;

        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม bootstrap เเละ เขียนโปรเเกรมกับเงื่อนไข</title>
</head>

<body>
    <h1>โปรเเกรมคำนวณ เเละ เงื่อนไข</h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนนกลางภาค</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputEmail3"name="score1">            
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนน</label>
        </div>

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">คะแนนปลายภาค</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3"name="score2">
        </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนน</label>
  </div>

  <button type="submit" class="btn btn-primary">คำนวณคะแนน</button>
  <button type="submit" class="btn btn-danger">ยกเลิก</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1=$_POST['score1'];
    $s2=$_POST['score2'];
    $sum=$s1+$s2;
    echo "<br><br> <h3>คุณได้คะเเนนรวมเท่ากับ ".$sum."</h3> <br><br> ";
    $t = date("H");

    if ($t < "50") {
        echo "<h1>ยินดีด้วย คุณสอบผ่าน</h1><br>";
        } else {
        echo "<h1>เสียใจด้วยด้วย คุณสอบตก</h1><br>";
        }

    echo "<div class='alert alert-success'> <strong>คำนวณเสร็จเเล้ว!</strong> ผลคะเเนนที่ได้ดังนี้ค่ะ </div>";
}
?>

</body>
    <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</html>