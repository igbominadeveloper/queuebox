@extends('layouts.master')
@section('content')
    <!-- Projects Section-->
    <button type="button" data-toggle="modal" data-placement="top" title="Add new Tweet" data-target="#myModal" class="btn btn-primary ml-4" id="add"><span class="fa fa-plus-circle font-size-30"></span></button>
    <section class="projects no-padding-top">
        <div class="container-fluid">
            <!-- Project-->
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        <!-- Daily Feeds -->
            <div class="col-lg-12">
                <div class="daily-feeds card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard7" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h3 class="h4">Tweets</h3>
                    </div>
                    <div class="card-body no-padding">
                        @foreach($tweets as $tweet)
                            <div class="item clearfix">
                                {{--<div class="feed d-flex justify-content-between">--}}
                                {{--<a class="twitter-timeline" href="https://twitter.com/Ajidefeerefe?ref_src=twsrc%5Etfw">Tweets by Ajidefeerefe</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
                                {{--</div>--}}

                                <p>{!! $tweet->url !!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <form method="post" action="/tweets">
                {{ csrf_field() }}
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title">New Tweet</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>url</label>
                            <input type="text" name="url" placeholder="link" onkeydown="ping()" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        <button type="submit" class="btn btn-primary">Add Tweet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection