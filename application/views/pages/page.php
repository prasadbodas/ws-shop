<section>
  <div class="row">
    <?php while($row = mysqli_fetch_object($rlt)) { ?>
      <div class="col-sm-12">
        <h2><?php echo htmlspecialchars_decode($row->name); ?></h2>
        <?php echo htmlspecialchars_decode($row->body); ?>
      </div>
    <?php } ?>
  </div>
</section>
