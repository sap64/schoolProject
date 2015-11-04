<body>
<table>
<tbody>
<?php 

$connect = new PDO('mysql:host=localhost;dbname=is218','root','root');

$query1 = 'SELECT * FROM headers';
$t = $connect->prepare($query1);
$t->execute();
$title_info = $t->fetchAll();
$school_id = $_GET['id'];


$info = $connect->prepare('SELECT * FROM sampleData WHERE UNITID = :school_id');
$info->bindValue(':school_id', $school_id);
$info->execute();


foreach ($info->fetchAll() as $row) {
	for ($i=0; $i < 66; $i++) { 
		echo "<tr>";
		echo "<td>" . $title_info[$i][0] . "</td>";
		echo "<td>" . $row[$i] . "</td>";
		echo "</tr>";
		# code...
	}
}


?>
</tbody>
</table>
</body>
</html>
