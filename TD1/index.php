create table famille_tbl (id int(11) NOT NULL auto_increment, nom varchar(255) NOT NULL, prenom varchar(255) NOT NULL, statut varchar(255) NOT NULL, date date DEFAULT '1970-01-01' NOT NULL, PRIMARY KEY (id));

$servername = "localhost";
	$username = "";  // your personal username
	$password = "";
	$dbname = "tabl_famille";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
  
  $conn->set_charset('utf8');
    
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
 echo "Q1: tous les éléments de la table sans condition:"."<br>"."<br>";
 $sql = "SELECT * FROM famille_tbl";
 $result = $conn->query($sql);
    
 if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["nom"]. "  " . $row["prenom"]. "   (" . $row["statut"]."),    date de naissance : " . $row["date"]."<br>";
	}
 } else {
	echo "0 results";
 }
 echo "Q2: liste en ordre décroissant du prénom:"."<br>"."<br>";
    
    $sql = "SELECT * FROM famille_tbl ORDER BY prenom DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["nom"]. "  " . $row["prenom"]. "   (" . $row["statut"]."),    date de naissance : " . $row["date"]."<br>";
	}
   } else {
	echo "0 results";
   }
