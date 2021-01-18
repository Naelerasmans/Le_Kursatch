<section class="container">
  <h2 id="info">Информация об издательстве</h2>
  <div>
    
<style>
  table {
    width: 100%;
    border-collapse:collapse;
    border: 2px solid #2a6901;
  }

th {
  background-color: #b9b9b9;
  color: black;
}
td {
    padding: 3px;
    border: 1px solid #2a6901;
    text-align: left;
  }
</style>

<?php  
$mysqli = new mysqli("localhost", "root", "root", "kursatch");
?>

<!---------------------------------------------Услуги-------------------------------->
<?php 
  $res = $mysqli->query("select * from services");

  $res ->data_seek(0);

  echo "<table><tr>  <td>Услуги    <table>"; //создаю большую таблицу и в неё уже вкладываю таблицу "услуги"
  echo "<tr> <th>Номер услуги</th><th>Наименование услуги</th><th>Цена услуги</th> </tr>";//заголовки таблицы "услуги"
  while ($row = $res->fetch_assoc())  //хз что это, забыл уже. Взял из интернета
  {
    $pole1 = "<a href = #orders>" . $row['KodU'] . "</a>";//присваиваю первой ячейке значение "код услуги". На будущее добавил ссылку, на всякий
    $pole2 = $row['name']; // 2 ячейка - наименование услуги
    $pole3 = $row['price']; //3 ячейка - цена

  echo "<tr> <td>$pole1</td><td>$pole2</td><td>$pole3</td> </tr>"; //вывожу данные в таблице
  }
  echo "</table></td>"; //закрываю таблицу "услуги", но не большую таблицу
  ?>
<!--------------------------------------------/Услуги-------------------------------->

<!---------------------------------------------Сотрудники---------------------------->
<?php //Тут всё то же самое, что и с предыдущей таблицей
  $res = $mysqli->query("select * from staff");

  $res ->data_seek(0);

  echo "<td>Сотрудники <table>";
  echo "<tr> <th>Номер сотрудника</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Должность</th> </tr>";
  while ($row = $res->fetch_assoc())
  {
    $pole1 = "<a href = #orders>" . $row['KodS'] . "</a>"; 
    $pole2 = $row['surename'];
    $pole3 = $row['name'];
    $pole4 = $row['patronym'];
    $pole5 = $row['post'];

  echo "<tr> <td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td><td>$pole5</td> </tr>";
  }
  echo "</table></td> </tr>";
  ?>
<!--------------------------------------------/Сотрудники---------------------------->


  <a href="pages\tech_info.php">Изменить информацию об издательстве</a><br><br>
  <a href="#">Наверх</a>
  </div>
</section>
