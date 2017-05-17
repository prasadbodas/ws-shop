<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Products</h3>
  </div>
  <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_object($rlt)) { ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->price; ?></td>
                        <td><span class="<?php if($row->status) echo 'text-success'; else echo 'text-danger'; ?>"><i class="fa fa-check"></i></span></td>
                        <td>
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
  </div>
</div>
