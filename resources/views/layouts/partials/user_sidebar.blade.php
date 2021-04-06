<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('user.dashboard')}}" class="waves-effect">
                        <i class="icon-accelerator"></i> <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.getUserProfile')}}" class="waves-effect">
                        <i class="icon-profile-add"></i> <span> Edit Profile </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-paper-sheet"></i><span> My Events <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>


                    <ul class="submenu">
                        <li><a href="{{route('user.events.upcoming')}}">Upcoming Events</a></li>
                        <li><a href="{{route('user.events.past')}}">Past Events</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('user.dashboard')}}" class="waves-effect">
                        <i class="icon-list"></i> <span>Event Certificates </span>
                    </a>

                </li>
                

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>