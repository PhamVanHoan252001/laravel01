<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - News by Hoàn không G</title>
    
    <link rel="stylesheet" href="{{asset('/AdminUser/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/AdminUser/assets/css/Validation.css')}}">
    
<link rel="stylesheet" href="{{asset('/AdminUser/assets/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('/AdminUser/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('/AdminUser/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('/AdminUser/assets/images/favicon.svg" type="image/x-icon')}}">
    <script src="{{asset('/AdminUser/js/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{asset('/AdminUser/assets/images/logo.svg')}}" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item active ">
                    <a href="{{route('admin.home')}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class='sidebar-title'>Forms &amp; Tables</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Quản trị Thể loại</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{route('category.index')}}">List Thể loại</a>
                        </li>
                        
                        <li>
                            <a href="{{route('category.create')}}">Add Thể loại</a>
                        </li>

                    </ul>
                    
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Quản trị Loại tin</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{route('newstype.index')}}">List Loại tin</a>
                        </li>
                        
                        <li>
                            <a href="{{route('newstype.create')}}">Add Loại tin</a>
                        </li>

                    </ul>
                    
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Quản trị Tin</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{route('news.index')}}">List Tin</a>
                        </li>
                        
                        <li>
                            <a href="{{route('news.create')}}">Add Tin</a>
                        </li>
                       

                    </ul>
                    
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Quản trị User</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{route('user.index')}}">List User</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Quản trị Advertisement</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{route('advertisement.index')}}">List Advertisement</a>
                        </li>
                        <li>
                            <a href="{{route('advertisement.create')}}">Add Advertisement</a>
                        </li>
                    </ul>
                </li>
                <li class='sidebar-title'>Pages</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Authentication</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="auth-login.html">Login</a>
                        </li>
                        
                        <li>
                            <a href="auth-register.html">Register</a>
                        </li>
                        
                        <li>
                            <a href="auth-forgot-password.html">Forgot Password</a>
                        </li>
                        
                    </ul>
                    
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="alert-circle" width="20"></i> 
                        <span>Errors</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="error-403.html">403</a>
                        </li>
                        
                        <li>
                            <a href="error-404.html">404</a>
                        </li>
                        
                        <li>
                            <a href="error-500.html">500</a>
                        </li>
                    </ul>
                </li>

            
            
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            @guest
                                @if (Route::has('login')||Route::has('register') )
                                    <a href="{{ route('login') }}" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                        <div class="d-none d-md-block d-lg-inline-block">{{ __('Login') }}</div>
                                    </a>
                                @endif
                            @else
                                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                        <div class="avatar mr-1">
                                            <img src="{{asset('/AdminUser/assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="">
                                        </div>
                                        <div class="d-none d-md-block d-lg-inline-block">{{ Auth::user()->name }}</div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('home') }}"><i data-feather="user"></i> Login Normal User</a>
                                        <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                        <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}" 
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i data-feather="log-out"></i> 
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            {{csrf_field()}}
                                        </form>
                                    </div>
                               
                            @endguest
                            
                            
                        </li>
                    </ul>
                </div>
            </nav>
            {{-- Main --}}         

            <div class="main-content container-fluid">
                @include('flash_message');
                @yield('content')
            </div>
            
                        

       {{-- Footer --}}
       <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-left">
                <p>2020 &copy; Voler</p>
            </div>
            <div class="float-right">
                <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Hoàn Không G</a></p>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="{{asset('/AdminUser/assets/js/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('/AdminUser/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('/AdminUser/assets/js/app.js')}}"></script>
<script src="{{asset('/AdminUser/assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('/AdminUser/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('/AdminUser/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('/AdminUser/assets/js/pages/dashboard.js')}}"></script>
<script src="{{asset('/AdminUser/assets/js/vendors.js')}}"></script>
<script src="{{asset('/AdminUser/assets/js/main.js')}}"></script>

</body>
</html>

                        