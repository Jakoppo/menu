<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<h1>name</h1>
<body>
        <header>
            <nav>
                <ul>
                    <li><a href="">Page 1</a></li>
                    <li><a href="">Page 2</a></li>
                    <li><a href="">Page 3</a></li>
                    <li><a href="">Page 4</a></li>
                </ul>
            </nav>
        </header>
        <section>
        <?php
 session_start();

 if (isset($_SESSION['user_id'])) {
     echo '<ul>';
     echo '<li><a href="profile.php">Profile</a></li>';
     echo '<li><a href="logout.php">Logout</a></li>';
     echo '</ul>';
 } else {
     echo '<ul>';
     echo '<li><a href="login.php">Login</a></li>';
     echo '<li><a href="register.php">Register</a></li>';
     echo '</ul>';
 }
 ?>
 </section>
 <section>
    <?php
    $conn = new mysqli('localhost', 'user', 'password', 'database');
    $result = $conn->query("SELECT name, link FROM menu_items");
    
    echo '<ul>';
    while ($row = $result->fetch_assoc()) {
      echo '<li><a href="' . $row['link'] . '">' . $row['name'] . '</a></li>';
    }
    echo '</ul>';
?>    
 </section>
</body>
</html>