<?php
include "conn.inc.php";

$query  ="SELECT * FROM users";
$result =mysqli_query($conn, $query);



echo "<br><a href='createUser.php'>Tambah User</a>";
echo "<table cellpadding='5' border='1'>

<tr>
<th>No.</th>
<th>username</th>
<th>level</th>
<th>Action</th>
</tr>";

$no = 1;


while($rec = mysqli_fetch_assoc($result)){
    if($rec['level']==1){
        $lvl="User";
    }elseif($rec['level']==0){
        $lvl="Admin";
    }
    echo "<tr>
    <td>$no.</td>
    <td>$rec[username]</td>
    <td>$lvl</td> 
    <td>
    <a href='update.php?id=$rec[id]'>Update</a> |
    <a href='delete.php?id=$rec[id]'>Delete</a>
    </tr>";
$no++;
}
