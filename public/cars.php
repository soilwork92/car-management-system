<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Our Inventory of Available Cars</h2>
      <p>Choose the car you love.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Color</th>
        <th>Price</th>
        <th>&nbsp;</th>
      </tr>

<?php

$cars = Cars::find_all();

?>
      <?php foreach($cars as $car) { ?>
      <tr>
        <td><?php echo h($car->brand); ?></td>
        <td><?php echo h($car->model); ?></td>
        <td><?php echo h($car->year); ?></td>
        <td><?php echo h($car->category); ?></td>
        <td><?php echo h($car->color); ?></td>
        <td><?php echo h(money_format('$%i', $car->price)); ?></td>
        <td><a href="detail.php?id=<?php echo $car->id; ?>">View</a></td>
      </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
