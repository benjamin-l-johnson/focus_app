@extends('includes.header')


@section('content')
 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">History, Mission & Vision
                    <small>Looking to the Future</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">History, Mission & Vision</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->



        <div class="row">

            <div class="col-md-4">
                <h4>History of organization</h4>
                <hr>
                <p>FOCUS Kalamazoo was founded by Tinashe Chaponda on November 3rd, 2013, at Western Michigan University.</p>

                <p> Starting as a small group of students, our accomplishments went above and beyond our expectations for the first year. We managed to host twelve events, gather over ninety volunteers, successfully executed a $6,000 service project, and gave 500 hours of service to the community within the first year!</p>

            </div>
            <div class="col-md-4">
                <h4> Mission statement</h4>
                <hr>
                <p> FOCUS Kalamazoo is a community service network founded within the campus of Western Michigan University. We offer organizations and companies access to our network of volunteers, resources to create any community-focused promotional event, and cause-marketing strategies. We also host service projects and events for individuals and organizations within a community. FOCUS Kalamazoo is creating a community-based culture for hundreds of volunteers and organizations who are prepared to assist with any community service event.</p>
            </div>
            <div class="col-md-4">
                <h4>Vision statement</h4>
                <hr>
                <p>Our vision is to expand and position FOCUS Kalamazoo and eventually FOCUS-USA as the largest full scale, community service network in the United States. We want everyone who is affiliated with us to have a blast while volunteering in an appropriate manner. We also envision FOCUS Kalamazoo as an organization to unite individuals to focus on common core goals within a community.</p>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">

        <div class="col-lg-12">
            <h4 class="page-header">Goals</h4>
        </div>
        </div>
    <!--Goals  -->
    <div class="row">
        
        <!-- Goal 1 -->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Goal #1
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                Acquire a 501(c)3 License (i.e. non-profit license).
              </div>
            </div>
          </div>


          <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Goal #2
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                Have 50 partnerships within our network.
              </div>
            </div>
          </div>


          <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Goal #3
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                Provide ten schools around the Kalamazoo Area with our services.
              </div>
            </div>
          </div>


          <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Goal #4
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                Expose our officers to experiences that further their professional development.
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->

        </div>
        <!-- /container -->



        <hr>
@stop