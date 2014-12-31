@extends('includes.header')


@section('content')
 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Culture
                    <small>What We're All About</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">Culture</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <!-- Video embed -->
        <div class="row">
            <div class = "col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8MoPVBNcDr8"></iframe>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!--/video-->

        <hr>

@stop