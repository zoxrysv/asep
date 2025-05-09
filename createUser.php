<?php 
 if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
    $lvl= $_POST['level'];

  

    include "conn.inc.php";
    $query ="INSERT INTO (username,userpass,level) users VALUES('$username', '$password', '$lvl')";
    $result= mysqli_query($conn,$query);

    if($result){
        echo "<script> 
                alert('Data Berhasil di input');window.location='read.php'
                </script>";
    }else{
        echo "<script> 
                alert('Data gagal di input');window.location='create.php'
                </script>";
    }
    mysqli_close($conn);
 }else{
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>tambah User</title>
</head>
<body>
    <h2>Tambah User</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="level">Level :</label>
        <select name="level" id="level">
        <option value="0">Admin</option>
        <option value="1">User</option>
        </select>
        <br><br>
        <input type="submit" value="Tambah">

    </form>
</body>
</html>
<?php
 }
?>