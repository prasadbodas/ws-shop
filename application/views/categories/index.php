<section>
  <div class="row">
    <div class="col-sm-12">
      <h2>Product Categories</h2>
    </div>
    <?php while($row = mysqli_fetch_object($rlt)) { ?>
      <div class="col-sm-3 text-center flax">
        <img class="img-thumbnail" width="250" height="300" src="<?php echo $row->image; ?>" alt="<?php echo $row->name; ?>" title="<?php echo $row->name; ?>" />
        <h3><a href="<?php echo URL; ?>category/index/<?php echo $row->id; ?>"><?php echo $row->name; ?></a></h3>
      </div>
    <?php } ?>
  </div>
</section>
