<?php
$conn = mysqli_connect('localhost', 'root', 'ienh', 'escolaienh');
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';

$sql = "SELECT usuarios, senha FROM escola";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "\n" . "usuarios: " . $row["usuarios"]. " - Senha: " . $row["senha"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>