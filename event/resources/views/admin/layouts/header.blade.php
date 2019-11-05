<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="{{ url('admin/login') }}">A Event | Admin</a>
        </div>
        <!-- /.navbar-header -->
        @if(Auth::user())
      <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ url('admin/danhmuc/danhsach') }}"><i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}</a>
                    </li>
                    <li><a href="{{ url('admin/danhmuc/danhsach') }}"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('admin/login') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                    </li>
                </ul>
            </li>

        </ul> 
        @endif
        <!-- /.navbar-top-links -->
        @include('admin.layouts.menu')
        <!-- /.navbar-static-side -->
    </nav>
