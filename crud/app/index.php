<?php

require 'connect.php';
require 'security.php';

$records = array();

if($results = $db->query("SELECT * FROM people")){

  if($results->num_rows){ //check if database ahas records

    while($row = $results->fetch_object()){

      $records[] = $row; //append object to records (array) 

    }

      $results->free();

  }

}

 ?>

<h3>People</h3>

<?php

if(!count($results)) {

  echo 'No results';

} else {

 ?>

<table>
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Bio</th>
      <th>Created</th>
    </tr>
  </thead>

<tbody>
  <?php foreach ($records as $r): ?>

  <tr>
    <td><?= $r->first_name; ?></td>
    <td><?= $r->last_name; ?></td>
    <td><?= $r->bio ?></td>
    <td>Today</td>
  </tr>
  <?php endforeach; ?>
</tbody>

</table>
  <?php } ?>
<hr>
