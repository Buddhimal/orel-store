<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Item Sales History</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Item Sales History</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="" method="GET" class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-1.5 col-form-label">Date Range</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <input type="date" name="from" class="form-control float-right"
                                               value="<?php echo isset($_GET['from']) ? $_GET['from'] : "" ?>">
                                        <input type="date" name="to" class="form-control float-right"
                                               value="<?php echo isset($_GET['to']) ? $_GET['to'] : "" ?>">
                                    </div>
                                </div>
                                <label for="inputEmail3" class="col-1.5 col-form-label">Item</label>
                                <div class="form-group col-sm-3">
                                    <select id="item_code" name="item_code" class="form-control select2bs4">
                                        <option value="">All</option>
                                        <?php foreach ($item_codes->result() as $item) { ?>
                                            <option value="<?php echo $item->item_code ?>"
                                                <?php if (isset($_GET['item_code']) && $_GET['item_code'] == $item->item_code) echo "selected" ?> >
                                                <?php echo $item->item_code . '-' . $item->item_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-1">
                                    <button id="btnSearch" type="submit" class="btn btn-primary bg-gradient-primary">
                                        Search
                                    </button>
                                </div>
                                <div class="form-group col-sm-1">
                                    <a href="<?php echo base_url() ?>dashboard/itemsaleshistory" class="btn btn-info">
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Item Code</th>
                                <th>Item Name</th>
                                <th>Unit Price (Rs)</th>
                                <th>Sales Qty</th>
                                <th>Total Price (Rs)</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($sales_history_table->result() as $item) { ?>
                                <tr>
                                    <td><?php echo $item->item_code ?></td>
                                    <td><?php echo $item->item_name ?></td>
                                    <td><?php echo number_format($item->unit_price, 2, '.', ',') ?></td>
                                    <td><?php echo number_format($item->qty, 0, '', ',') ?></td>
                                    <td><?php echo number_format($item->total_price, 2, '.', ',') ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Invoice</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- <p>One fine body&hellip;</p> -->
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

    <script>
        $(document).ready(function () {
            $('.select2bs4').select2();
        });
    </script>

    <style>
        .select2-selection--single {
            height: 40px !important;
        }
    </style>