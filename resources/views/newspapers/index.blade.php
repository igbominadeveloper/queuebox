@extends('layouts.master')
@section('content')
    <!-- Projects Section-->
    <button type="button" data-toggle="modal" data-placement="top" title="Create Newspaper Clip" data-target="#myModal" class="btn btn-primary ml-4" id="add"><span class="fa fa-plus-circle font-size-30"></span></button>
    <section class="projects no-padding-top">
        <div class="container-fluid">
            <!-- Project-->
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <!-- Project-->
            @foreach($newspapers as $newspaper)
            <a href="/clippings/{{$newspaper->id}}" class="w-100">
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="{{ asset('storage/clippings/'.$newspaper->attachment) }}" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">{{ $newspaper->title }}</h3><small>{{ $newspaper->body }}</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down"></span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>{{ $newspaper->created_at->diffForHumans() }} </div>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
            {{ $newspapers->links() }}
        </div>
    </section>
    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <form method="post" action="/clippings" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="exampleModalLabel" class="modal-title">New Clipping</h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" placeholder="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control" name="body" placeholder="body"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Attachment</label>
                        <input type="file" name="attachment" id="clip" class="form-control" onchange="checkImage()">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
    <script>
        function checkImage() {
            var size = 2048000;
            var file_size = document.getElementById('clip').files[0].size;
            var file = document.getElementById('clip').value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (file_size > size) {
                document.getElementById('clip').value = '';
                alert('Error!!! Image cannot exceed 2MB');
                return false;
            } else if (!allowedExtensions.exec(file)) {
                document.getElementById('clip').value = '';
                alert('Error!!! .jpeg/.jpg/.png/.gif files only');
                return false;
            }
        }
    </script>
@endsection
