<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($car)) {
  redirect_to(url_for('/staff/cars/index.php'));
}
?>

<dl>
  <dt>Brand</dt>
  <dd><input type="text" name="car[brand]" value="<?php echo h($car->brand); ?>" /></dd>
</dl>

<dl>
  <dt>Model</dt>
  <dd><input type="text" name="car[model]" value="<?php echo h($car->model); ?>" /></dd>
</dl>

<dl>
  <dt>Year</dt>
  <dd>
    <select name="car[year]">
      <option value=""></option>
    <?php $this_year = idate('Y') ?>
    <?php for($year=$this_year-20; $year <= $this_year; $year++) { ?>
      <option value="<?php echo $year; ?>" <?php if($car->year == $year) { echo 'selected'; } ?>><?php echo $year; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Category</dt>
  <dd>
    <select name="car[category]">
      <option value=""></option>
    <?php foreach(Cars::CATEGORIES as $category) { ?>
      <option value="<?php echo $category; ?>" <?php if($car->category == $category) { echo 'selected'; } ?>><?php echo $category; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Color</dt>
  <dd><input type="text" name="car[color]" value="<?php echo h($car->color); ?>" /></dd>
</dl>

<dl>
  <dt>Condition</dt>
  <dd>
    <select name="car[condition_id]">
      <option value=""></option>
    <?php foreach(Cars::CONDITION_OPTIONS as $cond_id => $cond_name) { ?>
      <option value="<?php echo $cond_id; ?>" <?php if($car->condition_id == $cond_id) { echo 'selected'; } ?>><?php echo $cond_name; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Price</dt>
  <dd>$ <input type="text" name="car[price]" size="18" value="<?php echo h($car->price); ?>" /></dd>
</dl>

<dl>
  <dt>Description</dt>
  <dd><textarea name="car[description]" rows="5" cols="50"><?php echo h($car->description); ?></textarea></dd>
</dl>
