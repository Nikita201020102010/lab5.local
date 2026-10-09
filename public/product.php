<?php
require_once 'db.php';
$product = null;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Информация о  позиции</title>
</head>
<body>
    <a href="index.php">Назад к списку</a>
    <hr>
    <?php if ($product): ?>
        <h1>Карточка продукта</h1>
        <p><b>ID:</b> <?php echo $product['id']; ?></p>
        <p><b>Имя:</b> <?php echo $product['title']; ?></p>
        <p><b>Email:</b> <?php echo $product['price']; ?></p>
    <?php else: ?>
        <p>Позиция не найдена!</p>
    <?php endif; ?>
</body>
</html>
