@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/calendar')}}">
                  <i class="fa fa-calendar"></i>
                  <span class="title">
                    Calendar
                  </span>
                </a>
            </li>
        
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" >
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>
                    @endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_action_access')
                    <li>
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span>@lang('quickadmin.user-actions.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>
            @endcan
            {{-- RECRUITMENT TAB --}}
            @can('user_management_access')
            <li class="treeview">
                <a href="#recruitment">
                    <i class="fa fa-user-circle"></i>
                    <span>Recruitment</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" id='recruitment'>
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.candidates.index') }}">
                            <i class="fa fa-user-circle-o"></i>
                            <span>@lang('quickadmin.candidates.title')</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            {{-- END OF RECRUITMENT TAB --}}

            {{-- ATTENDANCE --}}
            @can('user_management_access')
            <li class="treeview">
                <a href="#attendance">
                    <i class="fa fa-clock-o"></i>
                    <span>Attendance</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" id='attendance'>
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.attendances.index') }}">
                            <i class="fa fa-address-card"></i>
                            <span>@lang('quickadmin.attendances.title')</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.leave_managements.index') }}">
                            <i class="fa fa-book"></i>
                            <span>@lang('quickadmin.leave_managements.title')</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            </li>
        </ul>
    </section>
</aside>