
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($service) ? "Service: " . $service[2] : "Service not found" ?></title>
</head>

<body>
  <form action='index.php' class="form" method="get">
    <h4 class="form__title"><?= isset($service) ? "Service: " . $service[2] : "Service not found" ?></h4>
    <input type="hidden" name="controller" value="services">
    <input type="hidden" name="action" value="<?= isset($service) ? 'updateService' : 'createService' ?>">
    <?= isset($service) ? "<input type='hidden' name='id' value='$service[1]'>" : "" ?>
    description

    <section class="form-section">
      <label class="form-section__label" for="service_name">Service Name</label>
      <input class="form-section__input" type="text" name="service_name" id="service_name" value="<?= isset($service) ? $service[2] : '' ?>" required>
    </section>

    <section class="form-section">
      <label class="form-section__label" for="description">description</label>
      <input class="form-section__input" type="description" name="description" id="description" value="<?= isset($service) ? $service[3] : '' ?>" required>
    </section>

    <input type="submit" class="submit" value="Submit">
    <a href="index.php?controller=services&action=getAllServices" class="button">Back</a>
  </form>
</body>

</html>
