<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Item</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2"></div>

                    <div class="col-sm-8">

                        <div class="card card-info">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="<?php echo base_url()?>save_item" method="post">
                                <div class="card-body">

                                    <?php if ($msg) { ?>

                                        <div class="alert <?php echo $alert_type ?> alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                &times;
                                            </button>
                                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                            <?php echo $msg ?>
                                        </div>

                                    <?php } ?>

                                    <div class="form-group row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4" style="text-align:center;">Create Item</div>
                                        <div class="col-sm-4"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="lblItemName" class="col-sm-4 col-form-label">Item Code</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="item_code"
                                                   placeholder="Item Code" name="item_code" required>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="lblItemName" class="col-sm-4 col-form-label">Item Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="Item Name" name="name" required>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="itm_price"  class="col-sm-4 col-form-label">MRP</label>
                                        <div class="col-sm-4">
                                            <input type="number" step='0.01' class="form-control" id="itm_price"
                                                   placeholder="MRP" name="itm_price" required>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="max_pct"  class="col-sm-4 col-form-label">Max %</label>
                                        <div class="col-sm-4">
                                            <input type="number" step='0.01' class="form-control" id="max_pct"
                                                   placeholder="Max %" name="max_pct" required>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="max_pct"  class="col-sm-4 col-form-label">Cash %</label>
                                        <div class="col-sm-4">
                                            <input type="number" step='0.01' class="form-control" id="cash_pct"
                                                   placeholder="Cash %" name="cash_pct" required>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="max_pct"  class="col-sm-4 col-form-label">Dealer %</label>
                                        <div class="col-sm-4">
                                            <input type="number" step='0.01' class="form-control" id="dealer_pct"
                                                   placeholder="Dealer %" name="dealer_pct" required>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <label for="lblstatus" class="col-sm-4 col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="status" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="col-sm-4"></div>
                                            <button type="button" class="col-sm-8 btn btn-danger" style="float:right;">
                                                Cancel
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="col-sm-8 btn btn-primary">Save</button>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <!-- /.card-footer -->
                            </form>
                        </div>

                    </div>

                    <div class="col-sm-2"></div>

                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->




