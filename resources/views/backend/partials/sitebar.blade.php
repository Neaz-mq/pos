<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">

        <ul class="nav side-menu">
            <li>
                <a href="{{url('/Dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard </a>
                <ul class="nav child_menu">
                    <!-- <li><a href="../admin/dashboard.php">Dashboard</a></li> -->
                    <!--<li><a href="../admin/dashboard2.php">Dashboard2</a></li>-->
                    <!--<li><a href="../admin/dashboard3.php">Dashboard3</a></li>-->
                </ul>
            </li>
            <li>
                <!-- <li><a href="{{url('/POS')}}"></a></li> -->
                <a href="{{url('/POS')}}"><i class="fa fa-cart-plus"></i> POS </a>

                <ul class="nav child_menu">


                </ul>
            </li>

            <li>
                <a href="{{url('/Sales')}}"><i class="fa fa-shopping-bag"></i> Sales </a>
                <ul class="nav child_menu">

                </ul>
            </li>
            <li>
                <a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.user')}}">Add user</a></li>
                    <li><a href="../Manage users/Manage users.php">Manage users</a></li>


                </ul>
            </li>

            <li>
                <a><i class="fa fa-users"></i> Customers <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.customer')}}">Add customer</a></li>
                    <li><a href="{{route('customer.manage')}}">Manage customers</a></li>


                </ul>
            </li>
            <li>
                <a><i class="fa fa-users"></i> Suppliers <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.supplier')}}">Add Supplier</a></li>
                    <li><a href="{{route('supplier.manage')}}">Manage Suppliers</a></li>


                </ul>
            </li>
            <li>
                <a><i class="fa fa-book"></i> Products <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.product')}}">Add product</a></li>
                    <li><a href="{{route('product.manage')}}">Manage products</a></li>


                </ul>
            </li>
            <li>
                <a href="{{route('category.list')}}"><i class="fa fa-cubes"></i> Categories </a>
                
               
            </li>
            <li>
                <a><i class="fa fa-folder-o"></i> Stocks</a>
                </li>
                <li>
                <a><i class="fa fa-suitcase"></i> purchase </span></a>
                
            </li>
        </ul>
    </div>

</div>
