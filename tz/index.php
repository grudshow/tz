<form method="POST">
    <h3>Квадратное уравнение:</h3>
    <input name="a" value=''>&middot;x<sup>2</sup> +
    <input name="b" value=''>&middot;x +
    <input name="c" value=''> = 0 <br>
    <input type="submit" value="Решение">
</form>

<?php
    require_once 'realization.php';
    $realization = new realization();
    $realization->realize();
?>
