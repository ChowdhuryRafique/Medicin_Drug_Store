<div>
    <!doctype html>
     <html class="no-js" lang="">
         @include('BackEnd.AdminDashboard.CssAndJs.css')
    <body>
        <!-- Left Panel -->
        @include('BackEnd.AdminDashboard.AdminIndex.leftPanel')
      
        <!-- /#left-panel-->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand"><img src="images/medi-logo.png" alt="Logo"></a>
                        <a class="navbar-brand hidden" ><img src="images/medi-logo.png" alt="Logo"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
    
                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                    <span class="count bg-primary">4</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <p class="red">You have 4 Mails</p>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jonathan Smith</span>
                                            <span class="time float-right">Just now</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Jack Sanders</span>
                                            <span class="time float-right">5 minutes ago</span>
                                            
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Cheryl Wheeler</span>
                                            <span class="time float-right">10 minutes ago</span>
                                            <p>Hello, this is an example msg</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item media" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                        <div class="message media-body">
                                            <span class="name float-left">Rachel Santos</span>
                                            <span class="time float-right">15 minutes ago</span>
    
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                            </a>
    
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>
                                    {{Auth::user()->name}}
                                    @if(Auth::user()->role==1)
                                        Admin
                                        @elseif (Auth::user()->role==2)
                                        Sellsman
                                    @endif
                                </a>
    
                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
    
                                <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-power -off"></i>Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </div>
    
                    </div>
                </div>
            </header>
            <!-- /#header -->
            <!-- Content -->
           @yield('admin')
            <!-- /.content -->
        @include('BackEnd.AdminDashboard.AdminIndex.footer')
           
        <!-- /#right-panel -->
    
        @include('BackEnd.AdminDashboard.CssAndJs.js')
        
    </body>
    </html>
    
</div>