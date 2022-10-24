<?php
$sal = $_POST['salary'];
$pre = $_POST['presents'];
$abs = $_POST['absents'];
$lat = $_POST['lates'];
$HD = $_POST['hd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="2px" style="width:100%";>
    <tr>
        <th>Salary</th>
        <th>Presents</th>
        <th>Absents</th>
        <th>Lates</th>
        <th>Half Days</th>
        <th>Absent Lates</th>
        <th>Half Days lates</th>
        <th>Deduction days</th>
        <th>Per Day Salary</th>
        <th>Deduction Amount</th>
        <th>Arrgrante Salary</th>
        
    </tr>
    <tr>
        <td><?php echo $sal;?></td>
        <td><?php echo $pre;?></td>
        <td><?php echo $abs;?></td>
        <td><?php echo $lat;?></td>
        <td><?php echo $HD?></td>
        <td> <?php
          if($lat >=9){
            $abslate =3;
            echo $abslate;
          }
          elseif($lat >=6){
            $abslate = 2;
            echo $abslate;
          }
          else{
            $abslate = 0;
            echo $abslate;
          }
        ?>
        </td>
        <td> <?php $absHD = $HD/2;
            echo $absHD;
        ?>
        </td>
        <td> <?php $det =($abs + $abslate + $absHD);
            echo $det;
        ?>
        </td>
        <td> <?php $perday = $sal/10;
            echo $perday;
        ?>
        </td>
        <td> <?php $detamount = $perday * $det;
            echo $detamount;
        ?>
        </td>
        <td> <?php
            echo ($sal - $detamount);
        ?>
        </td>
        
    </tr>

    </table>
    
</body>
</html>




















