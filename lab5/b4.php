
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
       <input type="number" name="month"/>
       <button>Submit</button>
    </form>

    <?php 
    if(isset($_GET['month'])){
        $month = $_GET['month'];
        $currentYear = date('Y');
        $numberOfDays = cal_days_in_month(CAL_GREGORIAN,$month,$currentYear);
        echo "Tháng $month năm $currentYear có $numberOfDays ngày";
    }
    ?>
</body>
</html>