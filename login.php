<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM LOGIN</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="login_proses.php" method="post">
            <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">USERNAME</label>

                <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">PASSWORD</label>

                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">SIGN IN</button>
            </div>
            <!-- /.box-footer -->
        </form>
        </div>
    </div>
</div>