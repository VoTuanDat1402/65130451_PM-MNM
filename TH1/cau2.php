<table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; text-align: center;">
    <tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>";
            echo "<b>Bảng $i</b><br><br>";
            for ($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br>";
            }
            echo "</td>";
        }
        ?>
    </tr>
</table> 