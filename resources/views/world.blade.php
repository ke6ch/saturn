<!doctype html>
<html>
  <body>
    <h1> Hello World </h1>
    <table border=1>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>CountryCode</td>
      <td>District</td>
      <td>Population</td>
    </tr>
    <?php foreach($city as $row) {
      echo '<tr>';
      echo '<td>'.htmlspecialchars($row['ID']).'</td>';
      echo '<td>'.htmlspecialchars($row['Name']).'</td>';
      echo '<td>'.htmlspecialchars($row['CountryCode']).'</td>';
      echo '<td>'.htmlspecialchars($row['District']).'</td>';
      echo '<td>'.htmlspecialchars($row['Population']).'</td>';
      echo '</tr>';
    }?>
    </table>
  </body>
</html>