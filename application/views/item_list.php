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
                            <li class="breadcrumb-item active">Items List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->


        <section class="content">
            <div class="container-fluid">
                <div class="form-group row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 col-form-label" style="text-align:center;">Item List</div>
                    <div class="col-sm-4"></div>
                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <form action="" method="get" class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-8">
                                    <!-- text input -->
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Search by:</label>
                                        <div class="col-sm-4">
                                            <select id="drpoption" class="form-control" name="drpoption">
                                                <option>By Item Code</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select id="item_code" class="form-control" name="item_code">
                                                <?php foreach ($items->result() as $item) { ?>
                                                    <option value="<?php echo $item->item_code?>" <?php echo $item->item_code == $selected ? "selected" : "" ?>><?php echo $item->item_code."-".$item->item_name?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="submit" class="form-control btn-secondary" value="Search"/>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>

                            </div>
                        </form>


                    </div>
                    <div class="col-sm-2">
                        <a href="<?php echo base_url()?>item_create" class="btn btn-dark" >Create Item</a>
                    </div>


                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body col-sm-12">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Max Price</th>
                                        <th>Max Pct</th>
                                        <th>Cash Price</th>
                                        <th>Cash pct</th>
                                        <th>Dealer price</th>
                                        <th>Dealer Pct</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($item_list->result() as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->item_code ?></td>
                                            <td><?php echo $item->item_name ?></td>
                                            <td><?php echo $item->max_price ?></td>
                                            <td><?php echo $item->max_pct ?></td>
                                            <td><?php echo $item->Caprice ?></td>
                                            <td><?php echo $item->cash_pct ?></td>
                                            <td><?php echo $item->Deprice ?></td>
                                            <td><?php echo $item->dealer_pct ?></td>
                                            <td> <span class="right badge <?php echo $item->status ? "badge-success" :"badge-danger" ?>"><?php echo $item->status ? "Active" :"In-active" ?></span> </td>
                                        </tr>

                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Max Pct</th>
                                        <th>Cash pct</th>
                                        <th>Dealer Pct</th>
                                        <th>Status</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->



