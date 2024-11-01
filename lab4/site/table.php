    <form action="table.php" method="get">
      <label>Количество колонок: </label><br>
      <input name="cols" type="number" value="5" min="1"><br>
      <label>Количество строк: </label><br>
      <input name="rows" type="number" value="5" min="1"><br>
      <label>Цвет: </label><br>
      <input name="color" type="color" value="#ff0000" list="listColors">
      <datalist id="listColors">
        <option value="#ff0000">Красный</option>
        <option value="#00ff00">Зелёный</option>
        <option value="#0000ff">Синий</option>
      </datalist><br><br>
      <input type="submit" value="Создать">
    </form>
    <br>

    <?php
    include 'inc\lib.inc.php';
    $cols = isset($_GET['cols']) ? (int)$_GET['cols'] : 5;
    $rows = isset($_GET['rows']) ? (int)$_GET['rows'] : 5;
    $color = isset($_GET['color']) ? $_GET['color'] : '#ff0000';

    getTable($cols, $rows, $color);
    ?>
 