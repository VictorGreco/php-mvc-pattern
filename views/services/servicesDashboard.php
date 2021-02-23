<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wuser_noth=device-wuser_noth, initial-scale=1.0">
  <title>Dashboard</title>
  <script defer src="./assets/js/utils.js"></script>
</head>

<body>
  <?= isset($message) ? "<p class='message'>$message</p>" : "" ?>
  <table class="table">
    <tr>
      <th>Service Name</th>
      <th>Description</th>
    </tr>
    <?php
    if (isset( $allServices)) {
      foreach ( $allServices as  $service) {
        echo "<tr>";
        echo "<td> $service[2]</td>";
        echo "<td> $service[3]</td>";
        echo "<td><a  href='index.php?controller=services&action=getService&service_no= $service[1]' class='button'>Edit </a><a  href='index.php?controller=users&action=deleteuser&user_no= $service[0]' class='button'>Delete</a></td>";
        echo "</tr>";
      }
    } else {
      error("A problem with database ocurred");
    }
    ?>
  </table>
  <a href="index.php?controller=services&action=getService">New Service</a>
  <a href="index.php">Back</a>
</body>

</html>