@extends('includes.header')

@section('content')
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{{$event->title}}}
                </h1>
                <ol class="breadcrumb">
                    <li>{{ HTML::link('/', 'Home') }}
                    </li>
                    <li>{{ HTML::link('/events', 'Events') }}
                    </li>
                    <li class="active">{{$event->title}}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    @if(count($event->images())>0)
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        @for ($i = 1; $i < count($event->images()); $i++)
                        <li data-target="#carousel-example-generic" data-slide-to="$i"></li>
                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <!-- using portfolio 1 700X300 slides-->
                    <div class="carousel-inner">
                    
                        {{--display first image --}}
                        <div class="item active">
                            {{ HTML::image("$event->images_path/$event->images->toArray()", " ", array('class' => 'img-responsive')) }}
                        </div>
                    
                    {{--For loop to display rest--}}
                    @foreach ($event->images as $image)
                        <div class="item">
                            {{ HTML::image("$event->images_path$image->name", " ", array('class' => 'img-responsive')) }}
                        </div>
                    @endforeach


                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <h3>{{{$event->title}}}</h3>
                <p>{{{$event->content}}}</p>
                
            </div>


        </div>
        <!-- /.row -->
        

        @if(count($event->students)>0)
        <!-- Related Projects Row -->

        <div class="row">
        
            <div class="col-lg-12">
                <h3 class="page-header">Groups that helped</h3>
            </div>

            @foreach($event->students as $stu)

           
            <div class="col-sm-3 col-xs-6">
                <a href="{{ URL::route('students',array($stu->id)) }}">
                    
                    <!--A hackish way to lay text over an image in bootstrap-->
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">

                            {{--Insert image--}}
                            {{ HTML::image("$stu->images_path/$stu->cover_photo_name", " ", array('class' => 'img-responsive img-hover img-related')) }}
                               
                               <div class="carousel-caption">
                               {{{$stu->name}}}
                               </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                </a>
                <!-- end overlay -->

            </div>
            @endforeach

        </div>
        @endif
        

        @if(count($event->nonprofits)>0)
        <!-- Related Projects Row -->

        <div class="row">
        
            <div class="col-lg-12">
                <h3 class="page-header">Nonprofits that helped</h3>
            </div>

            @foreach($event->nonprofits as $nProf)

           
            <div class="col-sm-3 col-xs-6">
                <a href="{{ URL::route('nonprofits',array($nProf->id)) }}">
                    
                    <!--A hackish way to lay text over an image in bootstrap-->
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">

                            {{--Insert image--}}
                            {{ HTML::image("$nProf->images_path/$nProf->cover_photo_name", " ", array('class' => 'img-responsive img-hover img-related')) }}
                               
                               <div class="carousel-caption">
                               {{{$nProf->name}}}
                               </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                </a>
                <!-- end overlay -->

            </div>
            @endforeach

        </div>
        @endif

@stop