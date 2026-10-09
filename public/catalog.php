<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string($_POST['product_title']);
    $price = $conn->real_escape_string($_POST['product_price']);

    if (!empty($title) && !empty($price)) {
        $sql = "INSERT INTO products (title, price) VALUES ('$title', '$price')";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Позиция добавлена!</p>";
        } else {
            echo "Ошибка: " . $conn->error;
        }
    } else {
        echo "<p style='color: red;'>Заполните все поля!</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавить позицию</title>
</head>
<body>
    <a href="index.php">Назад к списку</a>
    <hr>
    <h1>Форма добавления новой позиции</h1>
    <form action="catalog.php" method="POST">
        <label>Название позиции:</label><br>
        <input type="text" name="product_title"><br><br>
        <label>Цена</label><br>
        <input type="number" name="product_price"><br><br>
        <input type="submit" value="Сохранить в БД">
    </form>
</body>
</html>