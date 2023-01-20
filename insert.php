<?php
$server = "localhost";
$username = "root";
$password = "YES";
$db = "school";
$con = new mysqli($server,$username,$password,$db);
$sql="insert into student(fname,lastname,age)values('david','niyo','34')";
echo "SUCCESS!";
?>
<html>
    <body>
        <form action="insert.php" method="post">
            <input type="text" name="fname" id="">
            <input type="text" name="lname">
        <input type="text" name="age">
        <input type="submit" value="regist">

        </form>
    </body>
</html>
