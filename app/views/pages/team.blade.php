@extends('includes.header')
@section('content')

 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Meet the Team
                    <small>The Game Changing Players</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Team</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>

            @foreach($members as $member)
            
            <!-- Begin team picture-->
            <div class="col-md-4 text-center">
            
                <div class="thumbnail">

                <!-- Wrap the picture in modal div-->
                <div data-toggle="modal" data-target="#{{{$member->id}}}">
                    <img class="img-responsive" src="{{ $member->photo_path}}" alt="">
                </div>
                    <div class="caption">
                        <h3>{{{ $member->name }}}<br>
                            <small>{{{ $member->job_title}}}</small>
                        </h3>
                        <ul class="list-inline">
                            <li><a href="{{$member->facebook }}"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="{{ $member->linkdin }}"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="{{ $member->twitter }}"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                            <!--<button class="btn btn-primary" data-toggle="modal" data-target="#{{{$member->id}}}">Large modal</button>-->
                        </ul>
                    </div>
                </div>
            
            </div>
            <!-- End team picture-->

            <!-- Large modal -->
            <div class="modal fade" id="{{{ $member->id }}}" tabindex="-1" role="dialog" aria-labelledby="{{{$member->id}}}Label" aria-hidden="true">

            <!--Add modal-lg here-->
              <div class="modal-dialog">
                
                <div class="modal-content" >
                <div class="modal-warapper">
                      <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="{{{$member->id}}}Label">{{{$member->name}}}</h4>
                      </div>
                      <div class="modal-body">

                          <p>{{{ $member->about}}}</p>
                      </div>
                      <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>  
                </div>
              </div>
            </div>
          </div>
          
            <!--end modal-->
            @endforeach
        </div>
        <!-- /.row -->


        <!-- Volunteers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Top Volunteers</h2>
            </div>
             @foreach($volunteers as $volunteer)

             <!--A hackish way to lay text over an image in bootstrap-->
                <div class="col-md-3">
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                            <img src="{{$volunteer->photo_path}}" alt="" class="img-responsive customer-img">
                               <div class="carousel-caption">
                               {{{"$volunteer->name"}}}
                               </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
            
        </div>
        <!-- /.row -->
@stop