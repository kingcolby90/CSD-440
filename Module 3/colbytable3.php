<?php
/*
 * File: ColbyTable3.php
 * Author: Colby King
 */

require_once "colbyfunctions.php";
?>
<!DOCTYPE html>
<html>
<body>

<h2>Colby Table 3 - Sum of Two Random Numbers</h2>

<table border="1" cellpadding="8">
<?php for ($r = 1; $r <= 5; $r++) { ?>
    <tr>
        <?php for ($c = 1; $c <= 5; $c++) { ?>
            <td>
                <?php
                    $a = rand(1, 50);
                    $b = rand(1, 50);
                    echo addTwoRandoms($a, $b);
                ?>
            </td>
        <?php } ?>
    </tr>
<?php } ?>
</table>

</body>
</html>

