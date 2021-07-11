<!-- Main Sidebar Container -->

<?php

if (!isset($active_main_tab))
    $active_main_tab = '';
//die();
?>

<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Kethmi Holdings</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item has-treeview ">
                    <a href="<?php echo base_url() ?>dashboard"
                       class="nav-link <?php if ($active_tab == 'Dashboard') echo "active" ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php if ($active_main_tab == 'Administration') echo "menu-open" ?> ">
                    <a href="#" class="nav-link <?php if ($active_main_tab == 'Administration') echo "active" ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Administration
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>user/user"
                               class="nav-link <?php if ($active_tab == 'user_list') echo "active" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>user/user/user_group_list"
                               class="nav-link <?php if ($active_tab == 'group_list') echo "active" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Groups</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview <?php if ($active_tab == 'Invoice') echo "menu-open" ?> ">
                    <a href="#" class="nav-link <?php if ($active_tab == 'Invoice') echo "active" ?>">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Invoice
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>invoice_list"
                               class="nav-link <?php if ($active_tab == 'Invoice') echo "active" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Invoice</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview ">
                    <a href="<?php echo base_url() ?>item_create"
                       class="nav-link <?php if ($active_tab == 'item_create') echo "active" ?>">
                        <i class="nav-icon fa fa-hourglass-start"></i>
                        <p>
                            Item Create
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="<?php echo base_url() ?>item_list"
                       class="nav-link <?php if ($active_tab == 'item_list') echo "active" ?>">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>
                            Item List
                        </p>
                    </a>
                </li>
<!--                <li class="nav-item has-treeview ">-->
<!--                    <a href="--><?php //echo base_url() ?><!--itemsaleshistory"-->
<!--                       class="nav-link --><?php //if ($active_tab == 'Itemsaleshistory') echo "active" ?><!--">-->
<!--                        <i class="nav-icon fa fa-list-alt"></i>-->
<!--                        <p>-->
<!--                            Item Sales History-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
                <li class="nav-item has-treeview ">
                    <a href="<?php echo base_url() ?>dashboard/salestransaction"
                       class="nav-link <?php if ($active_tab == 'Salestransaction') echo "active" ?>">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Sales Transaction
                        </p>
                    </a>
                </li>
<!--                <li class="nav-item has-treeview ">-->
<!--                    <a href="--><?php //echo base_url() ?><!--dashboard/salesreport"-->
<!--                       class="nav-link --><?php //if ($active_tab == 'salesreport') echo "active" ?><!--">-->
<!--                        <i class="nav-icon fa fa-file-alt"></i>-->
<!--                        <p>-->
<!--                            Sales Report-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item has-treeview ">-->
<!--                    <a href="--><?php //echo base_url() ?><!--dashboard/inventoryreport"-->
<!--                       class="nav-link --><?php //if ($active_tab == 'inventoryreport') echo "active" ?><!--">-->
<!--                        <i class="nav-icon fa fa-file-alt"></i>-->
<!--                        <p>-->
<!--                            Inventory Report-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<body class="hold-transition sidebar-mini layout-fixed">
