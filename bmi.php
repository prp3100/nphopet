<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณดัชนีมวลกาย (BMI)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label, input, button {
            margin: 10px 0;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>คำนวณดัชนีมวลกาย (BMI)</h1>

    <!-- ฟอร์มสำหรับกรอกน้ำหนักและส่วนสูง -->
    <form method="POST" action="">
        <label for="weight">น้ำหนัก (กิโลกรัม):</label>
        <input type="number" id="weight" name="weight" step="0.1" required>
        <br>
        <label for="height">ส่วนสูง (เมตร):</label>
        <input type="number" id="height" name="height" step="0.01" required>
        <br>
        <button type="submit">คำนวณ BMI</button>
    </form>

    <?php
   
    function calculateBMI($weight, $height) {
        return $weight / ($height * $height);
    }

    
    function getBMICategory($bmi) {
        if ($bmi < 18.5) {
            return "น้ำหนักน้อยเกินไป";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            return "น้ำหนักปกติ";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            return "น้ำหนักเกิน";
        } else {
            return "อ้วน";
        }
    }

   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        
        $bmi = calculateBMI($weight, $height);

        echo "<h2>ผลลัพธ์</h2>";
        echo "BMI: " . round($bmi, 2) . "<br>"; 
        echo "ประเภท BMI: " . getBMICategory($bmi);  
    }
    ?>
</body>
</html>
