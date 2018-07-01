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
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-1.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Ondo State Government commissions 2 new Classrooms</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 45%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-2.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Ondo State Government commissions 2 new Classrooms</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-3.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Ondo State Government commissions 2 new Classrooms</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="img/project-4.jpg" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4">Ondo State Government commissions 2 new Classrooms</h3><small>Lorem Ipsum Dolor</small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                        <div class="project-progress">
                            <div class="progress">
                                <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            var size = 204800;
            var file_size = document.getElementById('clip').files[0].size;
            var file = document.getElementById('clip').value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (file_size > size) {
                document.getElementById('clip').value = '';
                swal('Error!!!', 'Image cannot exceed 200kb', 'warning');
                return false;
            } else if (!allowedExtensions.exec(file)) {
                document.getElementById('clip').value = '';
                swal('Error!!!', '.jpeg/.jpg/.png/.gif files only', 'warning');
                return false;
            }
        }
    </script>
@endsection