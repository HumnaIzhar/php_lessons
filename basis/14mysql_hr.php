<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>
<body>
    <table id="table_id" class = "display">
        <thead>
            <tr>
            <th>FIRST_NAME</th>
            <th>HIRE_DATE</th>
            <th>SALARY</th>
            <th>COUNTRY_NAME</th>
            <th>JOB_TITLE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $con = mysqli_connect("localhost" ,"root" , "","google_hr");
            $query = "SELECT employees.FIRST_NAME,employees.HIRE_DATE,employees.SALARY,jobs.JOB_TITLE,countries.COUNTRY_NAME
            FROM employees
            JOIN jobs
            on employees.JOB_ID = jobs.JOB_ID
            JOIN departments
            on employees.DEPARTMENT_ID = departments.DEPARTMENT_ID
            JOIN job_history
            on employees.DEPARTMENT_ID = job_history.DEPARTMENT_ID
            JOIN locations
            on locations.LOCATION_ID = departments.LOCATION_ID
            JOIN countries
            on countries.COUNTRY_ID = locations.COUNTRY_ID
            JOIN regions
            on countries.REGION_ID = regions.REGION_ID";
            $q = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($q)){
                echo "<tr>
                <td>".$row['FIRST_NAME']."</td>
                <td>".$row['HIRE_DATE']."</td>
                <td>".$row['SALARY']."</td>
                <td>".$row['COUNTRY_NAME']."</td>
                <td>".$row['JOB_TITLE']."</td>
                </tr>";
              
            ?>    
            <?php } ?>
        </tbody>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script
     src="https://code.jquery.com/jquery-3.6.1.js"
     integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
     crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>
    
</body>
</html>