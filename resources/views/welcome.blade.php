@extends('layouts.master')
@section('content')
  {{--<section class="projects no-padding-top">--}}
    {{--<div class="container-fluid">--}}
      {{--<!-- Project-->--}}
      {{--<div class="project">--}}
        {{--<div class="row bg-white has-shadow">--}}
          {{--<div class="left-col col-lg-6 d-flex align-items-center justify-content-between">--}}
            {{--<div class="project-title d-flex align-items-center">--}}
              {{--<div class="image has-shadow"><img src="img/project-1.jpg" alt="..." class="img-fluid"></div>--}}
              {{--<div class="text">--}}
                {{--<h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>--}}
          {{--</div>--}}
          {{--<div class="right-col col-lg-6 d-flex align-items-center">--}}
            {{--<div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>--}}
            {{--<div class="comments"><i class="fa fa-comment-o"></i>20</div>--}}
            {{--<div class="project-progress">--}}
              {{--<div class="progress">--}}
                {{--<div role="progressbar" style="width: 45%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<!-- Project-->--}}
      {{--<div class="project">--}}
        {{--<div class="row bg-white has-shadow">--}}
          {{--<div class="left-col col-lg-6 d-flex align-items-center justify-content-between">--}}
            {{--<div class="project-title d-flex align-items-center">--}}
              {{--<div class="image has-shadow"><img src="img/project-2.jpg" alt="..." class="img-fluid"></div>--}}
              {{--<div class="text">--}}
                {{--<h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>--}}
          {{--</div>--}}
          {{--<div class="right-col col-lg-6 d-flex align-items-center">--}}
            {{--<div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>--}}
            {{--<div class="comments"><i class="fa fa-comment-o"></i>20</div>--}}
            {{--<div class="project-progress">--}}
              {{--<div class="progress">--}}
                {{--<div role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<!-- Project-->--}}
      {{--<div class="project">--}}
        {{--<div class="row bg-white has-shadow">--}}
          {{--<div class="left-col col-lg-6 d-flex align-items-center justify-content-between">--}}
            {{--<div class="project-title d-flex align-items-center">--}}
              {{--<div class="image has-shadow"><img src="img/project-3.jpg" alt="..." class="img-fluid"></div>--}}
              {{--<div class="text">--}}
                {{--<h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>--}}
          {{--</div>--}}
          {{--<div class="right-col col-lg-6 d-flex align-items-center">--}}
            {{--<div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>--}}
            {{--<div class="comments"><i class="fa fa-comment-o"></i>20</div>--}}
            {{--<div class="project-progress">--}}
              {{--<div class="progress">--}}
                {{--<div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<!-- Project-->--}}
      {{--<div class="project">--}}
        {{--<div class="row bg-white has-shadow">--}}
          {{--<div class="left-col col-lg-6 d-flex align-items-center justify-content-between">--}}
            {{--<div class="project-title d-flex align-items-center">--}}
              {{--<div class="image has-shadow"><img src="img/project-4.jpg" alt="..." class="img-fluid"></div>--}}
              {{--<div class="text">--}}
                {{--<h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>--}}
          {{--</div>--}}
          {{--<div class="right-col col-lg-6 d-flex align-items-center">--}}
            {{--<div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>--}}
            {{--<div class="comments"><i class="fa fa-comment-o"></i>20</div>--}}
            {{--<div class="project-progress">--}}
              {{--<div class="progress">--}}
                {{--<div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</section>--}}
  {{--<section class="feeds no-padding-top">--}}
    {{--<div class="container-fluid">--}}
      {{--<div class="row">--}}
        {{--<!-- Trending Articles-->--}}
        {{--<div class="col-lg-6">--}}
          {{--<div class="articles card">--}}
            {{--<div class="card-close">--}}
              {{--<div class="dropdown">--}}
                {{--<button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>--}}
                {{--<div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-header d-flex align-items-center">--}}
              {{--<h2 class="h3">Trending Articles   </h2>--}}
              {{--<div class="badge badge-rounded bg-green">4 New       </div>--}}
            {{--</div>--}}
            {{--<div class="card-body no-padding">--}}
              {{--<div class="item d-flex align-items-center">--}}
                {{--<div class="image"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                {{--<div class="text"><a href="#">--}}
                    {{--<h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Aria Smith.   </small></div>--}}
              {{--</div>--}}
              {{--<div class="item d-flex align-items-center">--}}
                {{--<div class="image"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                {{--<div class="text"><a href="#">--}}
                    {{--<h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Frank Williams.   </small></div>--}}
              {{--</div>--}}
              {{--<div class="item d-flex align-items-center">--}}
                {{--<div class="image"><img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                {{--<div class="text"><a href="#">--}}
                    {{--<h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Ashley Wood.   </small></div>--}}
              {{--</div>--}}
              {{--<div class="item d-flex align-items-center">--}}
                {{--<div class="image"><img src="img/avatar-4.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                {{--<div class="text"><a href="#">--}}
                    {{--<h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Jason Doe.   </small></div>--}}
              {{--</div>--}}
              {{--<div class="item d-flex align-items-center">--}}
                {{--<div class="image"><img src="img/avatar-5.jpg" alt="..." class="img-fluid rounded-circle"></div>--}}
                {{--<div class="text"><a href="#">--}}
                    {{--<h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Sam Martinez.   </small></div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Check List -->--}}
        {{--<div class="col-lg-6">--}}
          {{--<div class="checklist card">--}}
            {{--<div class="card-close">--}}
              {{--<div class="dropdown">--}}
                {{--<button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>--}}
                {{--<div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-header d-flex align-items-center">--}}
              {{--<h2 class="h3">To Do List </h2>--}}
            {{--</div>--}}
            {{--<div class="card-body no-padding">--}}
              {{--<div class="item d-flex">--}}
                {{--<input type="checkbox" id="input-1" name="input-1" class="checkbox-template">--}}
                {{--<label for="input-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>--}}
              {{--</div>--}}
              {{--<div class="item d-flex">--}}
                {{--<input type="checkbox" id="input-2" name="input-2" class="checkbox-template">--}}
                {{--<label for="input-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>--}}
              {{--</div>--}}
              {{--<div class="item d-flex">--}}
                {{--<input type="checkbox" id="input-3" name="input-3" class="checkbox-template">--}}
                {{--<label for="input-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>--}}
              {{--</div>--}}
              {{--<div class="item d-flex">--}}
                {{--<input type="checkbox" id="input-4" name="input-4" class="checkbox-template">--}}
                {{--<label for="input-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>--}}
              {{--</div>--}}
              {{--<div class="item d-flex">--}}
                {{--<input type="checkbox" id="input-5" name="input-5" class="checkbox-template">--}}
                {{--<label for="input-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>--}}
              {{--</div>--}}
              {{--<div class="item d-flex">--}}
                {{--<input type="checkbox" id="input-6" name="input-6" class="checkbox-template">--}}
                {{--<label for="input-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</section>--}}
  {{--<!-- Updates Section                                                -->--}}
  {{--<section class="updates no-padding-top">--}}
    {{--<div class="container-fluid">--}}
      {{--<div class="row">--}}
        {{--<!-- Recent Updates-->--}}
        {{--<div class="col-lg-4">--}}
          {{--<div class="recent-updates card">--}}
            {{--<div class="card-close">--}}
              {{--<div class="dropdown">--}}
                {{--<button type="button" id="closeCard6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>--}}
                {{--<div aria-labelledby="closeCard6" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-header">--}}
              {{--<h3 class="h4">Recent Updates</h3>--}}
            {{--</div>--}}
            {{--<div class="card-body no-padding">--}}
              {{--<!-- Item-->--}}
              {{--<div class="item d-flex justify-content-between">--}}
                {{--<div class="info d-flex">--}}
                  {{--<div class="icon"><i class="icon-rss-feed"></i></div>--}}
                  {{--<div class="title">--}}
                    {{--<h5>Lorem ipsum dolor sit amet.</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="date text-right"><strong>24</strong><span>May</span></div>--}}
              {{--</div>--}}
              {{--<!-- Item-->--}}
              {{--<div class="item d-flex justify-content-between">--}}
                {{--<div class="info d-flex">--}}
                  {{--<div class="icon"><i class="icon-rss-feed"></i></div>--}}
                  {{--<div class="title">--}}
                    {{--<h5>Lorem ipsum dolor sit amet.</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="date text-right"><strong>24</strong><span>May</span></div>--}}
              {{--</div>--}}
              {{--<!-- Item        -->--}}
              {{--<div class="item d-flex justify-content-between">--}}
                {{--<div class="info d-flex">--}}
                  {{--<div class="icon"><i class="icon-rss-feed"></i></div>--}}
                  {{--<div class="title">--}}
                    {{--<h5>Lorem ipsum dolor sit amet.</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="date text-right"><strong>24</strong><span>May</span></div>--}}
              {{--</div>--}}
              {{--<!-- Item-->--}}
              {{--<div class="item d-flex justify-content-between">--}}
                {{--<div class="info d-flex">--}}
                  {{--<div class="icon"><i class="icon-rss-feed"></i></div>--}}
                  {{--<div class="title">--}}
                    {{--<h5>Lorem ipsum dolor sit amet.</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="date text-right"><strong>24</strong><span>May</span></div>--}}
              {{--</div>--}}
              {{--<!-- Item-->--}}
              {{--<div class="item d-flex justify-content-between">--}}
                {{--<div class="info d-flex">--}}
                  {{--<div class="icon"><i class="icon-rss-feed"></i></div>--}}
                  {{--<div class="title">--}}
                    {{--<h5>Lorem ipsum dolor sit amet.</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
                {{--<div class="date text-right"><strong>24</strong><span>May</span></div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Daily Feeds -->--}}
        {{--<div class="col-lg-4">--}}
          {{--<div class="daily-feeds card">--}}
            {{--<div class="card-close">--}}
              {{--<div class="dropdown">--}}
                {{--<button type="button" id="closeCard7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>--}}
                {{--<div aria-labelledby="closeCard7" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-header">--}}
              {{--<h3 class="h4">Daily Feeds</h3>--}}
            {{--</div>--}}
            {{--<div class="card-body no-padding">--}}
              {{--<!-- Item-->--}}
              {{--<div class="item">--}}
                {{--<div class="feed d-flex justify-content-between">--}}
                  {{--<div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-5.jpg" alt="person" class="img-fluid rounded-circle"></a>--}}
                    {{--<div class="content">--}}
                      {{--<h5>Aria Smith</h5><span>Posted a new blog </span>--}}
                      {{--<div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="date text-right"><small>5min ago</small></div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<!-- Item-->--}}
              {{--<div class="item">--}}
                {{--<div class="feed d-flex justify-content-between">--}}
                  {{--<div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-2.jpg" alt="person" class="img-fluid rounded-circle"></a>--}}
                    {{--<div class="content">--}}
                      {{--<h5>Frank Williams</h5><span>Posted a new blog </span>--}}
                      {{--<div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>--}}
                      {{--<div class="CTAs"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-heart"> </i>Love    </a></div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="date text-right"><small>5min ago</small></div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<!-- Item-->--}}
              {{--<div class="item clearfix">--}}
                {{--<div class="feed d-flex justify-content-between">--}}
                  {{--<div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="img/avatar-3.jpg" alt="person" class="img-fluid rounded-circle"></a>--}}
                    {{--<div class="content">--}}
                      {{--<h5>Ashley Wood</h5><span>Posted a new blog </span>--}}
                      {{--<div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="date text-right"><small>5min ago</small></div>--}}
                {{--</div>--}}
                {{--<div class="quote has-shadow"> <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Over the years.</small></div>--}}
                {{--<div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-thumbs-up"> </i>Like</a></div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Recent Activities -->--}}
        {{--<div class="col-lg-4">--}}
          {{--<div class="recent-activities card">--}}
            {{--<div class="card-close">--}}
              {{--<div class="dropdown">--}}
                {{--<button type="button" id="closeCard8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>--}}
                {{--<div aria-labelledby="closeCard8" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-header">--}}
              {{--<h3 class="h4">Recent Activities</h3>--}}
            {{--</div>--}}
            {{--<div class="card-body no-padding">--}}
              {{--<div class="item">--}}
                {{--<div class="row">--}}
                  {{--<div class="col-4 date-holder text-right">--}}
                    {{--<div class="icon"><i class="icon-clock"></i></div>--}}
                    {{--<div class="date"> <span>6:00 am</span><br><span class="text-info">6 hours ago</span></div>--}}
                  {{--</div>--}}
                  {{--<div class="col-8 content">--}}
                    {{--<h5>Meeting</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<div class="item">--}}
                {{--<div class="row">--}}
                  {{--<div class="col-4 date-holder text-right">--}}
                    {{--<div class="icon"><i class="icon-clock"></i></div>--}}
                    {{--<div class="date"> <span>6:00 am</span><br><span class="text-info">6 hours ago</span></div>--}}
                  {{--</div>--}}
                  {{--<div class="col-8 content">--}}
                    {{--<h5>Meeting</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</div>--}}
              {{--<div class="item">--}}
                {{--<div class="row">--}}
                  {{--<div class="col-4 date-holder text-right">--}}
                    {{--<div class="icon"><i class="icon-clock"></i></div>--}}
                    {{--<div class="date"> <span>6:00 am</span><br><span class="text-info">6 hours ago</span></div>--}}
                  {{--</div>--}}
                  {{--<div class="col-8 content">--}}
                    {{--<h5>Meeting</h5>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</section>--}}
@endsection