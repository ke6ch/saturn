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
    <?php foreach($city as $row){ ?>
    <tr>
        <?php foreach($row as $cel){ ?>
            <td><?= $cel?></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </table>
  </body>
</html>