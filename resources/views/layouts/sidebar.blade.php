<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">

            <!-- User Details -->
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle img-responsive" src="{{ url('assets/img/faces/marc.jpg') }}" width="50px" height="auto"/>
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                        {{ Auth::user()->name }}</strong>
                         </span> <span class="text-muted text-xs block">User Member <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    NS
                </div>
            </li>
            <!-- User Details End -->

            <li>
                <a href="layouts.html"><i class="fa fa-user"></i> <span class="nav-label">Profile</span></a>
            </li>
        </ul>

    </div>
</nav>