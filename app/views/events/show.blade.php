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
                    @if(count($files)>0)
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        @for ($i = 1; $i < count($files); $i++)
                        <li data-target="#carousel-example-generic" data-slide-to="$i"></li>
                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <!-- using portfolio 1 700X300 slides-->
                    <div class="carousel-inner">
                    
                        {{--display first image --}}
                        <div class="item active">
                            {{ HTML::image("$event->images_path/$files[0]", " ", array('class' => 'img-responsive')) }}
                        </div>
                    
                    {{--For loop to display rest--}}
                    @for ($i = 1; $i < count($files); $i++)
                        <div class="item">
                            {{ HTML::image("$event->images_path/$files[$i]", " ", array('class' => 'img-responsive')) }}
                        </div>
                    @endfor


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

        @if (count($relProjs)>0)
        
        <!-- Related Projects Row -->
        <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Related Projects</h3>
        </div>
        
        @foreach($relProjs as $relProj)
        <div class="col-sm-3 col-xs-6">
            <a href="{{ URL::route('event',array($relProj->id)) }}">
                    
                    <!--A hackish way to lay text over an image in bootstrap-->
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">

                            {{--Insert image--}}
                            {{ HTML::image($relProj->images_path.$relProj->cover_photo_name, '', array('class' => 'img-responsive img-hover')) }}
                               
                               <div class="carousel-caption">
                               {{{$relProj->title}}}
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
        <!-- /.row -->
        @endif
        <hr>

        
        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>
            @if ($event->volunteers->count() > 0)
                <h3>Volunteers That helped</h3>
            @endif
                    
            @foreach($event->volunteers as $volunteer)
                <li>{{{$volunteer->name}}}</li>
            @endforeach
        </div>
@stop