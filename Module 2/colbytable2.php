<?php
/* 
   File: ColbyTable2.php
   Author: Colby King  
   Description: Generates TWO HTML tables using PHP.
*/
?>
<!DOCTYPE html>
<html>
<body>

<h2>Table 1</h2>
<table border="1" cellpadding="8">
<?php for ($r = 1; $r <= 5; $r++) { ?>
    <tr>
        <?php for ($c = 1; $c <= 5; $c++) { ?>
            <td><?php echo rand(1, 100); ?></td>
        <?php } ?>
    </tr>
<?php } ?>
</table>

<h2>Table 2</h2>
<table border="1" cellpadding="8">
<?php for ($r = 1; $r <= 5; $r++) { ?>
    <tr>
        <?php for ($c = 1; $c <= 5; $c++) { ?>
            <td><?php echo rand(1, 100); ?></td>
        <?php } ?>
    </tr>
<?php } ?>
</table>

</body>
</html>



