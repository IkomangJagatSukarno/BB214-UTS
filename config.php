<?php

$servername = "localhost";

$username = "root";

$password = "";

$db = "bb214";

$conn = mysqli_connect($servername, $username, $password, $db);

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>