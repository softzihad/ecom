@extends('layouts.app2')

@section('content')
 
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Dashboard</h3>
        </div>

        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">{{ $products_count }}</span>
                                <p class="stats-info">PRODUCTS</p>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-car"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">{{ $trashed_count }}</span>
                                <p class="stats-info">TRASHED POST</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-arrow_downward stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">{{ $users_count }}</span>
                                <p class="stats-info">USERS</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-arrow_upward stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="panel panel-white stats-widget">
                        <div class="panel-body">
                            <div class="pull-left">
                                <span class="stats-number">{{ $categories_count }}</span>
                                <p class="stats-info">CATEGORIES</p>
                            </div>
                            <div class="pull-right">
                                <i class="icon-arrow_upward stats-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        
        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Zihad</p>
        </div>
    </div><!-- /Page Inner -->
@endsection
