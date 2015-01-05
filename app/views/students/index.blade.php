@extends('includes.header')

@section('content')

<div class="container">

    <!--Pageheading-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Groups
                    <small>Helping Make a Difference</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Groups</li>
                </ol>
            </div>
        </div>
    <!--/Pageheading-->

    
        <hr>


        @foreach($students as $student) 
        <div class="row">
            <div class="col-md-7">
                <a href="{{ URL::route('student',array($student->id)) }}">
                    {{ HTML::image($student->images_path.$student->cover_photo_name, '', array('class' => 'img-responsive img-hover')) }}
                </a>
            </div>
            <div class="col-md-5">

                {{--List the title--}}
                <h3>{{$student->name}}</h3>

                <p>{{$student->read_more}}</p>

                {{ HTML::linkRoute('student', 'See more', array($student->id), array('class' => 'btn btn-primary')) }}
            </div>
        </div>
        
        <hr>

        @endforeach


    {{$students->links()}}
</div>
@stop