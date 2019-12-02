<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <script type = "text/javascript">
                            var d = new Date();
                            var ngay = new Date().getDate()  
                            var thang = new Date().getMonth()  
                            var month = new Array();
                                month[0] = "1";
                                month[1] = "2";
                                month[2] = "3";
                                month[3] = "4";
                                month[4] = "5";
                                month[5] = "6";
                                month[6] = "7";
                                month[7] = "8";
                                month[8] = "9";
                                month[9] = "10";
                                month[10] = "11";
                                month[11] = "12";
                                var thang = month[d.getMonth()];
                                var nam =new Date().getFullYear() 
                                document.write("Ngày"+" "+ngay+" "+"Tháng"+" "+thang+" "+"Năm"+" "+nam+"."); 
                            </script> 
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="admin/danhmuc/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i> QL Danh mục<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/danhmuc/danhsach"> Danh sách</a>
                        </li>
                        <li>
                            <a href="admin/danhmuc/them"> Thêm</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="admin/event/danhsach"><i class="fa fa-cube fa-fw"></i> QL Sự kiện<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/event/danhsach"> Danh sách</a>
                        </li>
                        <li>
                            <a href="admin/event/them"> Thêm</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="admin/new/danhsach"><i class="fa fa-newspaper-o"></i> QL Tin Tức<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/new/danhsach"> Danh Sách Tin Tức</a>
                        </li>
                        <li>
                            <a href="admin/new/them"> Thêm Tin Tức</a>
                        </li>
                    </ul>  
                </li>
                <li>
                    <a href="admin/user/danhsach"><i class="fa fa-users fa-fw"></i> QL Account<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/user/danhsach"> Danh Sách Account</a>
                        </li>
                        <li>
                            <a href="admin/user/them"> Thêm Account</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="admin/seenmail/danhsach"><i class="fa fa-envelope"></i> QL Email<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="admin/seenmail/getmail">Gửi Email</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
