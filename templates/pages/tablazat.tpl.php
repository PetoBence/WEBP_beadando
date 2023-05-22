<link rel="stylesheet" href="./styles/tablazat.css" type="text/css">
<table>
<thead>
<tr>
	<th>Üzenet</th>
	<th>Dátum</th>
	<th>Küldte</th>
</tr>
</thead>
<tbody>
<?php
        $conn = mysqli_connect("localhost", "root", "", "adatbazis");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

$query = "SELECT * FROM uzenetek ORDER BY datum DESC";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) 
{

	foreach($query_run as $row)
	{
		?>
			<tr>
				<td><?= $row['uzenet']; ?></td>
				<td><?= $row['datum']; ?></td>
				<td><?= $row['nev']; ?></td>
			<tr>
		<?php
	}

}
else
{
		?>
			<tr>
				<td>Nincs találat</td>
			<tr>
		<?php
	
}
?>
</tbody>
</table>