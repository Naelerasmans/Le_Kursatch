<section class="container">
  <h2 id="orders">Заказы и договоры</h2>
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




<!------------------------------Таблица Договор-услуги------------------------->

<?php
  $res = $mysqli->query("select * from contactservices");

  $res ->data_seek(0);

  echo "<table>";
  echo "<tr> <th>Номер договора</th><th>Код услуги</th><th>Количество</th> </tr>";
  while ($row = $res->fetch_assoc())
  {
    $pole1 = $row['contactNumber'];
    $pole2 = $row['ServiceKod'];
    $pole3 = $row['amount'];

  echo "<tr> <td>$pole1</td><td>$pole2</td><td>$pole3</td> </tr>";
  }
  echo "</table>";
?>
<!------------------------------/Таблица Договор-услуги------------------------->


  <a href="pages\new_author.php">оформить новый заказ</a> <br><br>
  <a href="#">Наверх</a>
  </div>
</section>
