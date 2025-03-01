<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сравнение в PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Таблица истинности</h1>
    <?php include 'logic.php'; ?> <!-- Подключаем PHP-логику для таблицы истинности -->

    <h2>Гибкое сравнение в PHP (==)</h2>
    <?php include 'comparison.php'; ?> <!-- Подключаем PHP-логику для гибкого сравнения -->

    <h2>Жёсткое сравнение в PHP (===)</h2>
    <?php include 'comparison.php'; ?> <!-- Подключаем PHP-логику для жёсткого сравнения -->
</body>
</html>