<header class="main-header">
    <!-- Logo -->
    
    <a href="{{ url('/admin/home') }}" class="logo">
      <span class="logo-lg"><b>XOI</b>-ITS</span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <span class="hidden-xs">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->

              <li class="user-header">

                <p>
                  {{Auth::user()->first_name.' '.Auth::user()->last_name}}
                </p>
                <img src="{{ asset('storage/uploads/'.Auth::user()->has_images) }}" height="150px" width="150px" 
                     class="img-responsive img-circle img-thumbnail" /><br>
                <small>{{Auth::user()->position}}</small>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <a href="{{ route('auth.change_password') }}" class="btn btn-default btn-flat">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
                </div>
                <div class="pull-right">
                <a href="#logout" onclick="$('#logout').submit();" class="btn btn-default btn-flat">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
                  {{-- <a href="#" class="btn btn-default btn-flat">Sign out</a> --}}
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
</header>



