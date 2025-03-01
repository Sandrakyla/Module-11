<?php
$values = [true, false, 1, 0, -1, "1", null, "php"];

// Гибкое сравнение (==)
echo '<h2>Гибкое сравнение в PHP (==)</h2>';
echo '<table>
        <thead>
            <tr>
                <th>==</th>';

foreach ($values as $value) {
    echo "<th>" . htmlspecialchars(var_export($value, true)) . "</th>";
}

echo '</tr></thead><tbody>';

foreach ($values as $y) {
    echo "<tr><th>" . htmlspecialchars(var_export($y, true)) . "</th>";
    foreach ($values as $x) {
        $result = ($y == $x) ? 'true' : 'false';
        echo "<td>$result</td>";
    }
    echo "</tr>";
}

echo '</tbody></table>';

// Жёсткое сравнение (===)
echo '<h2>Жёсткое сравнение в PHP (===)</h2>';
echo '<table>
        <thead>
            <tr>
                <th>===</th>';

foreach ($values as $value) {
    echo "<th>" . htmlspecialchars(var_export($value, true)) . "</th>";
}

echo '</tr></thead><tbody>';

foreach ($values as $y) {
    echo "<tr><th>" . htmlspecialchars(var_export($y, true)) . "</th>";
    foreach ($values as $x) {
        $result = ($y === $x) ? 'true' : 'false';
        echo "<td>$result</td>";
    }
    echo "</tr>";
}

echo '</tbody></table>';
?>