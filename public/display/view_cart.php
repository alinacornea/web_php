<?php
include('../../admin/headers/header.php');
?>
<?php
  include ("../../shared/initialize.php");
  $run_pro = mysqli_query($conn, "select * from Cart");
  $check = mysqli_fetch_array($run_pro);
  if($check['id'])
  {
  ?>
  <link rel="stylesheet" type="text/css" href="../front_style/cart_style.css">
  <table class="table" align = "center" >
    <tr align = "center">
      <td colspan = "10"><h2> Cart </h2></td>
    </tr>
    <tr id="name">
      <td>Title</td>
      <td>Image</td>
      <td>Price</td>
      <td>In stock</td>
      <td>Quantity</td>
      <td>Delete</td>
    </tr>
    <?php
      include ("../../shared/initialize.php");
      $run_pro = mysqli_query($conn, "select * from Cart");
      $i = 0;
      while ($row_pro = mysqli_fetch_array($run_pro))
      {
        $pro_id = $row_pro['id'];
        $email = $row_pro['email'];
        $login = $row_pro['login'];
        $pro_title = $row_pro['title'];
        $pro_desc = $row_pro['description'];
        $product_image = $row_pro['img_path'];
        $pro_price = $row_pro['price'];
        $pro_year = $row_pro['year'];
        $stock = $row_pro['max_stock'];
        $pro_quantity = $row_pro['quantity'];
        $pro_active = $row_pro['availability'];
        $total += ($pro_price * $pro_quantity);
        $i++;
    ?>
    <tr id="info">
      <td align= "center"><b><?php echo $pro_title;?></b></td>
      <td><img class="image" src = "../../admin/database/product_images/<?php echo $product_image;?>"/></td>
      <td> $<?php echo $pro_price;?></td>
      <td> <?php echo $stock;?></td>
      <td>
        <form  action="update_quantity.php?id=<?php echo $pro_id; ?>" method = "post">
          <input type="button" class ="no-click" value="<?php echo $pro_quantity;?>">
          <input type="hidden" name="quantity" value="<?php echo $pro_quantity;?>">
          <input type="submit" class="submit" name="Update" value="+"/>
          <input type="submit" class="submit" name="Update" value="-"/>
        </form>
      </td>
      <td><a href = "delete_pro_cart.php?delete_product=<?php echo $pro_id;?>"> <img id="delete" src="http://localhost:8080/ecommerce/public/images/delete.png" alt="delete"></a></td>
    </tr>
  <?php } ?>

  <tr>
    <td colspan ="10">
    <input id= "price" type = "submit" name = "price" value = "Total Price: $<?php echo $total;?>"/>
    </td>
  </tr>
  <tr>
    <td colspan ="10">
    <form action="check_out.php" method = "post">
    <input id = "buttom" type = "submit" name = "submit" value = "Proceed to checkout"/>
    </form>
    </td>
  </tr>
  </table>
<?php } else { ?>
  <div class="empty"> Cart empty </div>
<?php } ?>


<?php
include('../../admin/headers/footer.php');
?>
