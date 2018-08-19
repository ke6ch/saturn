<!doctype html>
<html>
  <body>
    <h1> Hello World </h1>
    <table border=1>
    <tr>
      <td>speaker</td>
      <td>play_name</td>
      <td>line_id</td>
      <td>speech_number</td>
    </tr>
    <?php foreach($shakespeare as $row) {
      echo '<tr>';
      echo '<td>'.htmlspecialchars($row['speaker']).'</td>';
      echo '<td>'.htmlspecialchars($row['play_name']).'</td>';
      echo '<td>'.htmlspecialchars($row['line_id']).'</td>';
      echo '<td>'.htmlspecialchars($row['speech_number']).'</td>';
      echo '</tr>';
    }?>
    </table>
  </body>
</html>