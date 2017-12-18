<?php 

// $host = config('app.host');
// $database = config('app.database');
// $username = config('app.username');
// $password = config('app.password');

// //Query that retrieves events
// $requete = " SELECT * FROM subjects WHERE id='id' ";

// //connection to the database
// try 
// {
// 	$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $username, $password);
// 	// $bdd = new PDO('mysql:host=localhost;dbname=nazrolhr', 'root', '');
// } 
// catch(Exception $e) 
// {
// 	exit('Unable to connect to database.');
// }
 
// // Execute the query
// $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

// // sending the encoded result to success page
// echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));


///////////////////////////////////////////////////////

if(isset($_POST["id"]))
{
	$connect = mysql_connect("localhost", "root", "", "try");
	$query = "SELECT * FROM subjects WHERE id='".$_POST["id"]."'";
	$result = mysql_query($connect, $query);
	while($row = mysqli_fetch_array($result))
	{
		$output = '
			<p><img src="images/'.$row["images"].'" class="img-responsive img-thumbnail" /><p>
			<p><label>TITLE: '.$row['subject_title'].'</label><p>
			<p><label>TITLE: '.$row['subject_desc'].'</label><p>
			<p><label>TITLE: '.$row['subject_title'].'</label><p>
		


	}
}

?>
