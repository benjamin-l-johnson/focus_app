@extends('includes.header')


@section('content')
 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Donate
                    <small>Make a Difference</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="active">Donate</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <hr>


        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="{{URL::asset('images/facebookCover.jpg')}}" alt="">
            </div>
            <div class="col-md-6">
                <h3>The expenses that you would be donating to:</h3>

                <p>
                    <ul>
                        <li>
                            <b>501(c)3 License:</b> The next step for our organization is to apply for our 501(c)3 so that we can become an official nonprofit.
                        </li>
                        <li>
                            <b>Marketing & Promotional Items:</b> These items include business cards, flyers, and banners.
                        </li>
                        <li>    
                            <b>Food & Beverages:</b> The food and beverages are for our volunteers during events. Food is also given to the residents of the Rickman House, a nonprofit partner of ours.
                        </li>

                        <li>
                            <b>Incentives for the FOCUS Staff:</b> Our staff works long and hard hours, and we are in dire need for ways to show our appreciation for all of the hard word they. The incentives would be rewards for the “Most Committed Staff Members,” “Social Change Leader of the Year,” and “Most Improved.”
                        </li>
                    </ul>
                </p>





            </div>

        </div>
        <!-- /.row -->

        <hr>




        <!-- Call to action-->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Your cash contributions fund our mission to help change the negative stereotypes surrounding volunteering. Click this button to donate online or mail your donation to FOCUS Kalamazoo, 2421 Crest, Kalamazoo MI 49008.
                    </p>
                </div>
                <div class="col-md-4">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="XT44CT8G6LCFY">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
        <!--/Call to action-->

        <hr>

        <!-- Intro Content -->
        <div class="row">

            <div class="col-md-6">
                <h2>Donate Your Expertise & Resources:</h2>

                <p>
                    <ul>
                    
                   <li> 
                   <b>Workshops:</b> Donate your time and expertise for presenting a workshop for our staff and or volunteers.
                   </li>

                    <ul>
                    <li>
                    <b>Topics can vary from:</b> Team Bonding, Leadership, Professionalism, Motivation, etc.. We are open to all topics to broaden our staff and volunteers views of the community and self development.
                    </li>
                    </ul>
                    <li>
                    <b>Assets:</b> Donate your business’ assets to FOCUS. This includes, food, office space, network, and anything else you and your business might have to offer.
                    </li>
                    </ul>
                    Contact us at  <a href="mailto:focuskalamazoo@gmail.com?Subject=Donate%20Your%20Expertise%20and%20Resources" target="_top">focuskalamazoo@gmail.com</a> or call/text  
                    <i class="fa fa-phone"></i> (269) 250-0278 if you want to donate your expertise and resources.
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="{{URL::asset('images/093.JPG')}}" alt="">
            </div>
        </div>
        <!-- /.row -->

@stop