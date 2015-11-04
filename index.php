
<html>
<body>
<?php   
$connect = new PDO('mysql:host=localhost;dbname=is218','root','root');

$q = 'SELECT UNITID,INSTNM FROM sampleData';
$statement = $connect->prepare($q);
$statement->execute();

echo "<table class='table table-hover'>";

foreach ($statement->fetchAll() as $row) {
	$school_id = $row[0];
	$school = $row[1];
	print( "<tr><td>");
	print("<a href='get_info.php?id=" . $school_id  ."'> ". $school . "</a>");
	print("</td></tr>");
}

?>
</table>
</body>
</html>

