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
      <th>Name</th>
      <th>E-mail</th>
      <th>street Address</th>
      <th>City</th>
      <th>State</th>
      <th>Phone Number</th>
      <th>Buttons</th>
    </tr>
    <?php
    if (isset($allUsers)) {
      foreach ($allUsers as $user) {
        echo "<tr>";
        echo "<td>$user[1]" . " " . "$user[2]" ."</td>";
        echo "<td>$user[3]</td>";
        echo "<td>$user[6]</td>";
        echo "<td>$user[7]</td>";
        echo "<td>$user[8]</td>";
        echo "<td>$user[5]</td>";
        echo "<td><a  href='index.php?controller=users&action=getUser&user_no=$user[0]' class='button'>Edit</a> <a  href='index.php?controller=users&action=deleteuser&user_no=$user[0]' class='button'>Delete</a></td>";
        echo "</tr>";
      }
    } else {
      error("A problem with database ocurred");
    }
    ?>
  </table>
  <a href="index.php?controller=users&action=getUser">New user</a>
  <a href="index.php">Back</a>
</body>

</html>