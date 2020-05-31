<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['car'];
  $car = new Cars($args);
  $result = $car->save();

  if($result === true) {
    $new_id = $car->id;
    $session->message('The car was created successfully.');
    redirect_to(url_for('/staff/cars/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $car = new Cars;
}

?>

<?php $page_title = 'Create Car'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/cars/index.php'); ?>">&laquo; Back to List</a>

  <div class="car new">
    <h1>Create Car</h1>

    <?php echo display_errors($car->errors); ?>

    <form action="<?php echo url_for('/staff/cars/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create Car" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
