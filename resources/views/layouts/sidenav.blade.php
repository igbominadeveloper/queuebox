<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h4">Admin</h1>
            {{--<p>Web Designer</p>--}}
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="{{ url('/')  }}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{ url('/clippings') }}"> <i class="fa fa-newspaper-o"></i>Newspaper Clippings </a></li>
        <li><a href="{{ url('/tweets') }}"> <i class="fa fa-twitter"></i>Twitter Feeds </a></li>
        <li><a href="#"> <i class="icon-presentation"></i>Video Links</a></li>
        <li><a href="#"> <i class="icon-website"></i>Blog Posts</a></li>
        <li><a href="#"> <i class="icon-interface-windows"></i>Reports </a></li>
    </ul>
</nav>