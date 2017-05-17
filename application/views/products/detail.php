<section>
  <div class="row">
    <?php while($row = mysqli_fetch_object($rlt)) { ?>
      <div class="col-sm-3 text-center">
        <img class="img-thumbnail" src="<?php echo $row->image; ?>" alt="<?php echo $row->name; ?>" title="<?php echo $row->name; ?>" />
      </div>
      <div class="col-sm-8 col-sm-offset-1">
        <h3><a href="<?php URL; ?>product/index/<?php echo $row->id; ?>"><?php echo $row->name; ?></a></h3>
        <div class="details">
          <span class="price text-success"><?php echo $row->price; ?></span>
          <p><?php echo $row->description; ?></p>
        </div>
        <div class="add-to-cart">
          <a href="<?php echo URL; ?>cart/add/<?php echo $row->id; ?>" alt="" title="" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
