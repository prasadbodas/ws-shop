<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Pages <i class="fa fa-angle-right"></i> Add</h3>
    </div>
    <div class="panel-body">
        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2" for="">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $page[0]->name; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="">Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" id="slug" class="form-control" value="<?php echo $page[0]->slug; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="">Body</label>
                <div class="col-sm-10">
                    <textarea name="body" id="body" class="form-control"><?php echo $page[0]->body; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="">Template</label>
                <div class="col-sm-10">
                    <select name="template" class="form-control">
                        <option <?php if($page[0]->template == 'page') echo 'selected="selected"'; ?> value="page">Page</option>
                        <option <?php if($page[0]->template == 'homepage') echo 'selected="selected"'; ?> value="homepage">Homepage</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="">Parent</label>
                <div class="col-sm-10">
                    <select name="parent_id" id="parent_id" class="form-control">
                        <option <?php if($page[0]->parent_id == 0) echo 'selected="selected"'; ?> value="0">No Parent</option>
                        <?php while($row = mysqli_fetch_object($rlt)) { ?>
                            <option <?php if($page[0]->parent_id == $row->parent_id) echo 'selected="selected"'; ?> value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
