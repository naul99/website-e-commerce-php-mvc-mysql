<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo BASE_URL?>/login/dashboard">Admin Cpanel</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class=""><a href="<?php echo BASE_URL?>/login/dashboard">Trang chủ</a></li>

                    <li class="dropdown ">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục Bài viết
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Thêm</a></li>
                            <li><a href="#">Liệt kê</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục sản phẩm
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASE_URL?>/product">Thêm</a></li>
                            <li><a href="<?php echo BASE_URL?>/product/list_category">Liệt kê</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bài viết
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Thêm</a></li>
                            <li><a href="#">Liệt kê</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASE_URL?>/product/add_product">Thêm</a></li>
                            <li><a href="<?php echo BASE_URL?>/product/list_product">Liệt kê</a></li>
                           
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Đơn hàng
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASE_URL?>/order/add_order">Thêm</a></li>
                            <li><a href="<?php echo BASE_URL?>/order">Liệt kê</a></li>
                            
                        </ul>
                    </li>
                    <li class=""><a href="<?php echo BASE_URL?>/login/logout">Logout</a></li>
                    
                
                </ul>
            </div>
        </nav>