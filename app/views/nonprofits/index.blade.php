@extends('includes.header')

@section('content')

<div class="container">

        <!--Pageheading-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nonprofits
                    <small>Helping Make a Difference</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">Nonprofits</li>
                </ol>
            </div>
        </div>
        <!--/Pageheading-->
        <hr>


        @foreach($nProfs as $nProf) 
        <div class="row">
            <div class="col-md-7">
                <a href="{{ URL::route('nonprofit',array($nProf->id)) }}">
                    {{ HTML::image($nProf->images_path.$nProf->cover_photo_name, '', array('class' => 'img-responsive img-hover')) }}

                </a>
            </div>
            <div class="col-md-5">

                {{--List the title--}}
                <h3>{{$nProf->name}}</h3>


                <p>{{$nProf->read_more}}</p>

                {{ HTML::linkRoute('nonprofit', 'See more', array($nProf->id), array('class' => 'btn btn-primary')) }}
            </div>
        </div>
        
        <hr>
        @endforeach

    {{$nProfs->links()}}
</div>
@stop