<?php session_start(); ?>
<?php if(isset($_SESSION['login'])) { $nev = $_SESSION['login'];			
} 
else $nev = 'Vendég';
		$conn = mysqli_connect("localhost", "root", "", "adatbazis");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $uzenet = $_REQUEST['megjegyzes'];
		$datum = date('m/d/Y h:i:s a', time());

        $sql = "INSERT INTO uzenetek VALUES ('$uzenet', '$nev', '$datum')";

        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Üzenet elküldve!')</script>";
			echo "<script>window.location = '/index.php'</script>";

        } else{
            echo "Hiba, az üzenetet nem sikerült elküldeni $sql. "
                . mysqli_error($conn);
        }

        mysqli_close($conn);
?>