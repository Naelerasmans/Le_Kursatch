<section class="container">
  <h2 id="authors">Авторы</h2>
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


<?php  #Подключение к БД
$mysqli = new mysqli("localhost", "root", "root", "kursatch");
?>

<?php #Извлечение данных
  $res = $mysqli->query("select * from author");

  $res ->data_seek(0);

  echo "<table> <tr> <td>Авторы<table>";
  echo "<tr> <th>ИНН</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Дата рождения</th><th>Телефонный номер</th><th>email</th> </tr>";
  while ($row = $res->fetch_assoc())
  {
    $pole1 = $row['inn'];
    $pole2 = $row['surename'];
    $pole3 = $row['name'];
    $pole4 = $row['patronym'];
    $pole5 = $row['birthdate'];
    $pole6 = $row['tel_num'];
    $pole7 = $row['email'];

  echo "<tr> <td id='1'>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td><td>$pole5</td><td>$pole6</td><td>$pole7</td> </tr>";
  }
  echo "</table></td>";
?>

<!------------------------------Таблица адреса выбранного автора------------------------->

<?php
  $res = $mysqli->query("select * from address where inn = 123456789012");

  $res ->data_seek(0);

  echo "<td><table>";

  while ($row = $res->fetch_assoc())
  {
    $pole1 = $row['inn'];
    $pole2 = $row['city'];
    $pole3 = $row['street'];
    $pole4 = $row['house'];
    $pole5 = $row['apartment'];
    $pole6 = $row['indeks'];

  
  echo "
  <tr> <th>ИНН</th> <td>$pole1</td> </tr>
  <tr> <th>Город</th> <td>$pole2</td> </tr>
  <tr> <th>Улица</th> <td>$pole3</td> </tr>
  <tr> <th>Дома</th> <td>$pole4</td> </tr>
  <tr> <th>Квартира</th> <td>$pole5</td> </tr>
  <tr> <th>Индекс</th> <td>$pole6</td> </tr>
  ";
  }
  echo "</table></td></tr>";
?>

<!------------------------------/Таблица адреса выбранного автора------------------------->


  <a href="pages\new_author.php">Добавить нового автора</a> <br><br>
  <a href="#">Наверх</a>
  </div>
</section>
