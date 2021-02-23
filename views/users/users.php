
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($user) ? $user[1] . "'s profile" : "New user" ?></title>
</head>

<body>
  <form action='index.php' class="form" method="get">
    <h4 class="form__title"><?= isset($user) ? $user[1] . "'s profile" : "New user" ?></h4>
    <input type="hidden" name="controller" value="user">
    <input type="hidden" name="action" value="<?= isset($user) ? 'updateuser' : 'createuser' ?>">
    <?= isset($user) ? "<input type='hidden' name='id' value='$user[0]'>" : "" ?>


    <section class="form-section">
      <label class="form-section__label" for="first_name">First Name</label>
      <input class="form-section__input" type="text" name="name" id="first_name" value="<?= isset($user) ? $user[1] : '' ?>" required>
      <label class="form-section__label" for="lastName">Last Name</label>
      <input class="form-section__input" type="text" name="lastName" id="last_name" value="<?= isset($user) ? $user[2] : '' ?>" required>
    </section>

    <section class="form-section">
      <label class="form-section__label" for="email">e-mail</label>
      <input class="form-section__input" type="email" name="email" id="email" value="<?= isset($user) ? $user[3] : '' ?>" required>
    </section>

    <section class="form-section">
      <label class="form-section__label" for="address">Street Address</label>
      <input class="form-section__input" type="text" name="address" value="<?= isset($user) ?  $user[6] : '' ?>" required>
      <label class="form-section__label" for="state">State</label>
      <input class="form-section__input" type="text" name="state" id="state" value="<?= isset($user) ?  $user[8] : '' ?>" required>
    </section>

    <section class="form-section">
      <label class="form-section__label" for="city">City</label>
      <input class="form-section__input" type="text" name="city" id="city" value="<?= isset($user) ?  $user[7] : '' ?>" required>
    </section>

    <section class="form-section">
      <label class="form-section__label" for="phoneNumber">Phone Number</label>
      <input class="form-section__input" type="number" name="phoneNumber" id="phoneNumber" value="<?= isset($user) ?  $user[5] : '' ?>" required>
    </section>

    <input type="submit" class="submit" value="Submit">
    <a href="index.php?controller=user&action=getAllUsers" class="button">Back</a>
  </form>
</body>

</html>