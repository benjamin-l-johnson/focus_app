@extends('includes.header')

@section('content')

</div>
<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url({{ URL::asset('/images/woodward.jpg')}})"></div>
                <div class="carousel-caption">
                    <h2>Community</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url({{ URL::asset('images/0933.JPG')}})"></div>
                <div class="carousel-caption">
                    <h2>Compassion</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url({{ URL::asset('images/something.jpg')}})"></div>
                <div class="carousel-caption">
                    <h2>Development </h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    FOCUS Kalamazoo
                </h1>
            </div>

            <!-- volunteer-->
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Get Involved</h4>
                    </div>
                    <div class="panel-body">
                        <p>Looking to volunteer but don't know where to start?</p>
                        <a href="{{URL::to('events')}}" class="btn btn-default">Get Involved</a>
 
                    </div>
                </div>
            </div>

            <!-- Past events -->
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Events </h4>
                    </div>
                    <div class="panel-body">
                        <p>Check out all of the past events we have participated in.</p>
                        <a href="{{URL::to('events#all')}}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Group sign up-->
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-star"></i> Organizations </h4>
                    </div>
                    <div class="panel-body">
                        <p>Organization,RSO, school or ... looking to sign up for an event?</p>
                        <a href="" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>

            <!--Donate -->
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-usd"></i> Donate </h4>
                    </div>
                    <div class="panel-body">
                        <p>Don't have time to volunteer but still want to help the cause?</p>
                        <a href="{{URL::to('donate')}}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->



        <!-- Features Section -->
        <div class="row">

            <!-- Video embed -->
        <div class="row">
            <div class = "col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7YuF_YfblXQ?autoplay=0"></iframe>
                            </div>
                    </div>
                </div>
            </div>
             <div class = "col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                                <iframe class="embed-responsive-item" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ffocuskalamazoo&amp;width&amp;height=500&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:500px;" allowTransparency="true"></iframe>
                            
                    </div>
                </div>
            </div>

        </div>

        <!--/video-->
        </div>
        <!-- /.row -->

        <hr>

@stop
