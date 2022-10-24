<table border="2px" >
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Action</th>
        

    </tr>
    
    

<?php
$con = mysqli_connect("localhost","root","","formhandling");
if(!$con){
    echo "No connection";

}
else{
    echo "Connection Established";
}
$query = "select *from formhandlig";
$q = mysqli_query($con,$query);
if(!$q){
    echo "query error";
}
else{
    echo "query executed";
}

while ($row = mysqli_fetch_assoc($q)){
    echo "<tr>
    <td>".$row['Name']."</td>
    <td>".$row['Address']."</td>
    <td>".$row['Age']."</td>
   
    
    <td><button>Edit</button> || <button>Delete</button></td>    
    </tr>";

}

?>    
</table>