<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/cars/index.php'));
}
$id = $_GET['id'];
$car = Cars::find_by_id($id);
if($car == false) {
  redirect_to(url_for('/staff/cars/index.php'));
}

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['car'];
  $car->merge_attributes($args);
  $result = $car->save();

  if($result === true) {
    $session->message('The car was updated successfully.');
    redirect_to(url_for('/staff/cars/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit Car'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/cars/index.php'); ?>">&laquo; Back to List</a>

  <div class="car edit">
    <h1>Edit Car</h1>

    <?php echo display_errors($car->errors); ?>

    <form action="<?php echo url_for('/staff/cars/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Car" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
