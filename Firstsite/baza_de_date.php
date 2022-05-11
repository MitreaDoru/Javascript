<?php
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
$result = mysqli_query($conn, "SELECT * FROM informatii");
$all_property = array();
echo '<table class="data-table">
     <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    $all_property[] = $property->name;  //save those to array
}
echo '</tr>'; //end tr tag
  
//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>