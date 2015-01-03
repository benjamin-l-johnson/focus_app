@extends('includes.header')

@section('content')

<div class="container">

    <!--Pageheading-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Events
                    <small>Where We Make A Difference</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">Events</li>
                </ol>
            </div>
        </div>
    <!--/Pageheading-->

    <!--Start of get involved buttons-->
        <div class="row" id="involved">
            
            <!--Volunteer individual-->
            <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>
                            <i class="fa fa-fw fa-check"></i> Volunteer Individually
                           <!-- <div class="btn-group pull-right">
                                <a href="#" class="btn btn-default btn-lrg">Sign up</a>
                            </div>-->
                            </h4>
                        </div>

                        <div class="panel-body">
                            <p>Get yourself involved in the community with FOCUS Kalamazoo.</p>
                            <a href="https://docs.google.com/forms/d/1yiqVo-7SAS0oHqGTIic4DqnpZ88yKDmIDJVXt5jxeVQ" class="btn btn-default">Sign Up!</a>
                        </div>
                    </div>
                </div>
                
                <!--Volunteer as group-->
                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> Group Volunteering</h4>
                        </div>
                        <div class="panel-body">
                            <p>Click to sign up a group of more than 5 volunteers.</p>
                            <a href="https://docs.google.com/forms/d/1FFj8xn9UjpQXiaOlTiiOVvZtwsVQZa1_2akX4b9QGWs" class="btn btn-default" class="btn btn-default">Sign Up!</a>
                        </div>
                    </div>
                </div>

                <!--Request Volunteer-->
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-star"></i> Request Volunteers</h4>
                        </div>
                        <div class="panel-body">
                            <p>Have FOCUS Kalamazoo put together volunteers for your event.</p>
                            <a href="https://docs.google.com/forms/d/1q3KkPaU-0AlKYIKmK4tet_v_2al3avQco4cJWviQhIU/viewform" class="btn btn-default">Sign Up!</a>
                        </div>
                    </div>
                </div>

                <!--Present in class-->
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-university"></i> Class Presentation</h4>
                        </div>
                        <div class="panel-body">
                            <p>Have FOCUS Kalamazoo come present to the class. </p>
                            <a href="https://docs.google.com/forms/d/1KehcbIYlJJLjknrOga7-vyEIKlG6K81RN9qSDgllaX0/viewform" class="btn btn-default">Sign Up!</a>
                        </div>
                    </div>
                </div>
            </div>
        
        <!--/row-->
        <hr>
    <!-- Start big google cal -->



        <!--Google calendar-->
        <div class="col-md-4 col-md-push-9">
           <iframe id="769616488" src="https://www.google.com/calendar/embed?src=ciu5ovedes9287u4h3qdgf500o%40group.calendar.google.com&amp;color=%23668CD9&amp;mode=AGENDA&amp;showTitle=0&amp;showNav=1&amp;showDate=1&amp;showTabs=0&amp;showCalendars=0&amp;hl=en" title="Google Sites Demo Calendar" width="300" height="500" frameborder="0" scrolling="no"></iframe>
       </div>

       <div class="col-md-8 col-md-pull-4" id="all">
        @foreach($events as $event) 
        <div class="row">
            <div class="col-md-7">
                <a href="{{ URL::route('event',array($event->id)) }}">
                    {{ HTML::image($event->images_path.$event->cover_photo_name, '', array('class' => 'img-responsive img-hover')) }}
                    <!--<img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">-->
                </a>
            </div>
            <div class="col-md-5">

                {{--List the title--}}
                <h3>{{$event->title}}</h3>

                <p>{{$event->read_more}}</p>

                {{ HTML::linkRoute('event', 'See more', array($event->id), array('class' => 'btn btn-primary')) }}
            </div>
        </div>
        

        <hr>
        @endforeach
        </div>




    {{$events->links()}}
</div>
@stop