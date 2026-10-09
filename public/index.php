<?php
require_once 'db.php'; 
$sql = "SELECT * FROM users";
$sql2= "SELECT * FROM products";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
    <h1>Список студентов</h1>
    <a href="add.php"><b>Добавить нового студента</b></a>
    <hr>
    <ul>
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<a href='user.php?id=" . $row['id'] . "'>" . $row['name'] . "</a>";
            echo "</li>";
        }
        ?>
    </ul>
    <h2>Список продуктов</h2>
    <a href="catalog.php"><b>Добавить новую позицию</b></a>
    <ul>    
        <?php
        while($row = $result2->fetch_assoc()) {
            echo "<li>";
            echo "<a href='product.php?id=" . $row['id'] . "'>" . $row['title'] . "</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>
