<table border="2px" >
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Phono</th>
        <th>Experience</th>
        <th>Action</th>

    </tr>
    
    

<?php
$conn = mysqli_connect("localhost","root","","php_curd");
if(!$conn){
    echo "No connection";

}
else{
    echo "Connection Established";
}
$query = "select *from employee_details";
$q = mysqli_query($conn,$query);
if(!$q){
    echo "query error";
}
else{
    echo "query executed";
}

while ($row = mysqli_fetch_assoc($q)){
    echo "<tr>
    <td>".$row['Name']."</td>
    <td>".$row['Age']."</td>
    <td>".$row['Phono']."</td>
    <td>".$row['Experience']."</td>
    
    <td><button>Edit</button> || <button>Delete</button></td>    
    </tr>";

}

?>    
</table>