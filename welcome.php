
<!DOCTYPE html>
<html>
<head>
	<title>Video Games</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Game Name</th>
			<th>Genre</th>
			<th>Release Year</th>
			<th>Publisher</th>
		</tr>
		<?php
		// Database connection settings
		$servername = "localhost";
		$username = "videogame_user";
		$password = "passw0rd";
		$dbname = "video_game";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		// Query to retrieve data from video_game table
		$sql = "SELECT id, game_name, genre_name, release_year, publisher_name FROM video_game";
		
		// Execute query
		$result = $conn->query($sql);
		
		// Output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["id"] . "</td>";
			echo "<td>" . $row["game_name"] . "</td>";
			echo "<td>" . $row["genre_name"] . "</td>";
			echo "<td>" . $row["release_year"] . "</td>";
			echo "<td>" . $row["publisher_name"] . "</td>";
			echo "</tr>";
		}
		
		// Close connection
		$conn->close();
		?>
	</table>
</body>
</html>

	