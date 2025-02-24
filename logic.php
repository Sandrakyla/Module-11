<?php
// Возможные значения для A и B
$values = [0, 1];

// Начало таблицы
echo '<table>
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>';

// Перебираем все комбинации A и B
foreach ($values as $A) {
    foreach ($values as $B) {
        // Вычисляем результаты логических операций
        $notA = (int)!$A;
        $or = (int)($A || $B);
        $and = (int)($A && $B);
        $xor = (int)($A xor $B);

        // Выводим строку таблицы
        echo "<tr>
                <td>$A</td>
                <td>$B</td>
                <td>$notA</td>
                <td>$or</td>
                <td>$and</td>
                <td>$xor</td>
              </tr>";
    }
}

// Закрываем таблицу
echo '</tbody></table>';
?>