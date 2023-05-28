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
		define("DB_SERVER", "mysql.nethely.hu");
		define("DB_USER", "adatbazis1993");
		define("DB_PASSWORD", "jelszo999");
		define("DB_DATABASE", "adatbazis1993");
		define("DB_PORT", "3306");
		define("DB_SOCKET", "mysql.omega");
		
		$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT, DB_SOCKET);

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

$query = "SELECT * FROM uzenetek ORDER BY datum DESC LIMIT 1";
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