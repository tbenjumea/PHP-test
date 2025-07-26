<?php
require_once "db.php";

$sql = "SELECT * FROM users";  // Assuming table 'users'
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP + MySQL Test</title>
</head>
<body>
  <h1>User List</h1>
  <ul>
    <?php while($row = $result->fetch_assoc()): ?>
      <li><?= htmlspecialchars($row['name']) ?></li>
    <?php endwhile; ?>
  </ul>
</body>
</html>
