<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Invoice List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10">
                        <form action="" method="get" class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">From:</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control" id="from" name="from"
                                                   value="<?php echo isset($_GET['from']) ? $_GET['from'] : "" ?>">
                                        </div>
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">To:</label>
                                        <div class="col-sm-3">
                                            <input type="date" class="form-control" id="to" name="to"
                                                   value="<?php echo isset($_GET['to']) ? $_GET['to'] : "" ?>">
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            <a href="<?php echo base_url()?>invoice_list" class="btn btn-info">Clear</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Invoice Number</th>
                                <th>Date</th>
                                <th>Gross Total Rs.</th>
                                <th>Discounted Value Rs.</th>
                                <th>Net Total Rs.</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($invoice_data->result() as $invoice) { ?>
                                <tr>
                                    <td><?php echo $invoice->invoice_number ?></td>
                                    <td><?php echo $invoice->invoice_date ?></td>
                                    <td><?php echo $invoice->gross_total ?></td>
                                    <td><?php echo $invoice->discount ?></td>
                                    <td><?php echo $invoice->net_total ?></td>
                                    <td><?php echo $invoice->invoice_type ?></td>
                                    <td style="text-align: center">
                                        <a href="<?php echo base_url() ?>invoice?id=<?php echo $invoice->id ?>">
                                            <span title="View" class="fa fa-eye"></span>
                                        </a>
                                    </td>
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


</div>