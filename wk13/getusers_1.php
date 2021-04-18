<form  method="get">
 <p>Your name: <input type="text" name="name" /></p>
 
 <p><input type="submit" /></p>
</form>
<?php
  $name = $_POST['name'];
  if (empty($name)) {
      echo "Name is empty";
  } else {
      echo $name;
  }

?>
<?php if (count($name) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($name))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($name as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>