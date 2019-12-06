@extends('admin.layouts.index')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        @if (isset($news))
                                            <?=count($news)?>
                                        @else
                                            0 
                                        @endif
                                    </div>
                                    <div>Tin Tức</div>
                                </div>
                            </div>
                        </div>
                            <div class="panel-footer">
                                <a href="{{url('admin/new/danhsach')}}">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                    </div>
                </div>
         
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-cube fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    @if (isset($event))
                                        <?=count($event)?>
                                    @else
                                        0 
                                    @endif
                                </div>
                                <div>Sự Kiện</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer">
                            <a href="{{url('admin/event/danhsach')}}">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        @if (isset($type_events))
                                            <?=count($type_events)?>
                                        @else
                                            0 
                                        @endif
                                    </div>
                                    <div>Danh mục</div>
                                </div>
                            </div>
                        </div>
                            <div class="panel-footer">
                            <a href="{{url('admin/danhmuc/danhsach')}}">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                    </div>
                </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    @if (isset($users))
                                        <?=count($users)?>
                                    @else
                                        0 
                                    @endif
                                </div>
                                <div>Account</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer">
                            <a href="{{url('admin/user/danhsach')}}">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <i class="fa fa-area-chart"></i> Biểu đồ Thống Kê
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="box_content">
                            <div class="chart">
                                <div class="line_chart"></div>
                                <div class="kets sock"></div>
                                <div class="line_txt_1 sock"></div>
                                <div class="txt_blue sock">
                                    13.5 %
                                </div>
                                <div class="txt_lf_1 sock">
                                    6.4 %
                                </div>
                                <div class="txt_lf_2 sock">
                                    7.1 %
                                </div>
                                <div class="text_blue">
                                    Danh Mục
                                </div>
                                <div class="text_green">
                                    Sự Kiện
                                </div>
                                <div class="text_yellow">
                                    Tin Tức
                                </div>
                                <div class="text_red">
                                    Account
                                </div>
                                <div class="line_txt_2 sock"></div>
                                <div class="txt_red sock">
                                    6.3 %
                                </div>
                                <div class="txt_rg_1 sock">
                                    2.5 %
                                </div>
                                <div class="txt_rg_2 sock">
                                    3.8 %
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading"> <i class="fa fa-calendar"></i> Lịch Thông Báo</div>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
        </div>
      
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection