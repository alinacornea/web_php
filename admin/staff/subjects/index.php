<?php require_once('../../initialize.php'); ?>

<?php
  $subjects = [
    ['id' => '1', 'price' => '1', 'available' => '1', 'menu_name' => 'Product1'],
    ['id' => '2', 'price' => '2', 'available' => '1', 'menu_name' => 'Product2'],
    ['id' => '3', 'price' => '3', 'available' => '1', 'menu_name' => 'Product3'],
    ['id' => '4', 'price' => '4', 'available' => '1', 'menu_name' => 'Product4'],
  ]
?>


<?php $page_title = 'Producs'; ?>
<?php include('../../shared/header.php'); ?>
<div id= "content">
  <div class = "products listing">
  <h1> Products </h1>

  <div class = "actions">
    <a class="action" href=""> Add new product </a>
  </div>

  <table class = "list">
    <tr>
      <th>ID</th>
      <th>Price</th>
      <th>Available</th>
      <th>Name</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>

    <?php foreach ($subjects as $subject) {
      ?>
      <tr>
      <td> <?php echo $subject['id']; ?> </td>
      <td> <?php echo $subject['price']; ?> </td>
      <td> <?php echo $subject['available'] == 1 ? 'true' : 'false'; ?> </td>
      <td> <?php echo $subject['menu_name']; ?> </td>
      <td> <a class= "action" href="<?php echo url_for('/staff/subjects/show_product.php?id=' . $subject['id']); ?>">View</a></td>
      <td> <a class= "action" href="">Edit</a></td>
      <td> <a class= "action" href="">Delete</a></td>
    </tr>
    <?php } ?>
  </table>
</div>

</div>



<?php include('../../shared/footer.php'); ?>
