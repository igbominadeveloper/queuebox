<section class="dashboard-counts no-padding-bottom" id="app">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Clippings</span>
                        {{--<div class="progress">--}}
                            {{--<div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="@{{ clippings.length }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="number"><strong>@{{ clippings.length }}</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Tweets</span>
                        {{--<div class="progress">--}}
                            {{--<div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="@{{ tweets.length }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="number"><strong>@{{ tweets.length }}</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Videos</span>
                        {{--<div class="progress">--}}
                            {{--<div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="@{{ videos.length }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="number"><strong>@{{ videos.length }}</strong></div>
                </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
                <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Posts</span>
                        {{--<div class="progress">--}}
                            {{--<div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="@{{ posts.length }}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="number"><strong>@{{ posts.length }}</strong></div>
                </div>
            </div>
        </div>
    </div>
</section>