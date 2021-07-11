<div class="wrapper">

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-industry"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Sales</span>
                                <span class="info-box-number">
                                    <?php echo number_format($sales_data["total_sales"], 2, '.', ',') ?>
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bars"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">New Items</span>
                                <span class="info-box-number"><?php echo $sales_data["total_items"] ?></span>
                            </div>

                        </div>

                    </div>

                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><span class="fas fa-file"></span></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Cash Invoices</span>
                                <span class="info-box-number"><?php echo $sales_data["total_invoices"] ?></span>

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Quotations</span>
                                <span class="info-box-number"><?php echo $sales_data["total_quotation"] ?></span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
 
 

