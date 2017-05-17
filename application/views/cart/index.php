<section>
  <div class="col-sm-12">
    <h2>Cart</h2>
  </div>
  <div class="col-sm-8 col-sm-offset-2">
    <?php if(isset($empty_cart)): ?>
      <h3>Your cart is empty. <a href="<?php echo URL; ?>product">Continue Shopping</a></h3>
    <?php else: ?>
      <form action="<?php echo URL; ?>cart/update" method="post">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>ID</th>
              <th>Title</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          <thead>
          <tbody>
            <?php while($row = mysqli_fetch_object($products)) { ?>
              <?php $cart_total = $cart_total + ($row->price * $cart[$row->id]['quantity']); ?>
              <tr>
                <td><a href="<?php echo URL; ?>cart/remove/<?php echo $row->id; ?>"><i class="fa fa-times"></i></a></td>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><input type="text" name="quantity[<?php echo $row->id; ?>]" size="5" value="<?php echo $cart[$row->id]['quantity']; ?>" /></td>
                <td><?php echo $row->price * $cart[$row->id]['quantity']; ?></td>
              </tr>
            <?php } ?>
          <tbody>
          <tfoot>
            <tr>
              <td colspan="4"> </td>
              <td>Cart Total: <?php echo $cart_total; ?></td>
            </tr>
            <tr>
              <td colspan="4"> </td>
              <td colspan="" align="center"><input type="submit" class="btn btn-primary" value="Update" name="submit" /></td>
            </tr>
          </tfoot>
        </table>
      </form>
    <?php endif; ?>
  </div>
</section>
