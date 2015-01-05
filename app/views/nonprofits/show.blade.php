@extends('includes.header')

@section('content')
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{{$nProf->name}}}
                </h1>
                <ol class="breadcrumb">
                    <li>{{ HTML::link('/', 'Home') }}
                    </li>
                    <li>{{ HTML::link('/organizations/nonprofits', 'Nonprofits') }}
                    </li>
                    <li class="active">{{$nProf->name}}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        @for ($i = 1; $i < count($bNames); $i++)
                        <li data-target="#carousel-example-generic" data-slide-to="$i"></li>
                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <!-- using portfolio 1 700X300 slides-->
                    <div class="carousel-inner">
                    
                        {{--display first image --}}
                        <div class="item active">
                            {{ HTML::image("$nProf->images_path/$bNames[0]", " ", array('class' => 'img-responsive')) }}
                        </div>
                    
                    {{--For loop to display rest--}}
                    @for ($i = 1; $i < count($bNames); $i++)
                        <div class="item">
                            {{ HTML::image("$nProf->images_path/$bNames[$i]", " ", array('class' => 'img-responsive')) }}
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
                </div>
            </div>
            <div class="col-md-4">
                <h3>{{{$nProf->name}}}</h3>
                <p>{{e($nProf->content)}}</p>
                <ul>
            </div>

        </div>
        <!-- /.row -->

        @if(count($nProf->vents)>0)
        <!-- Related Projects Row -->

        <div class="row">
        
            <div class="col-lg-12">
                <h3 class="page-header">Related Volunteer Projects</h3>
            </div>

            @foreach($nProf->vents as $vent)

           
            <div class="col-sm-3 col-xs-6">
                <a href="{{ URL::route('event',array($vent->id)) }}">
                    
                    <!--A hackish way to lay text over an image in bootstrap-->
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">

                            {{--Insert image--}}
                            {{ HTML::image("$vent->images_path/$vent->cover_photo_name", " ", array('class' => 'img-responsive img-hover img-related')) }}
                               
                               <div class="carousel-caption">
                               {{{$vent->title}}}
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

        <hr>


@stop