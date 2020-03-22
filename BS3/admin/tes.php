<select>
<?php
$con = mysqli_connect("localhost","root","","spp");

//display values in combobox/dropdown
$result = mysqli_query($con,"SELECT * FROM petugass ORDER BY id_petugas");
  while($row = mysqli_fetch_assoc($result))
   {
     echo "<option>$row[id_petugas]</option>";
    } 
?>
</select>