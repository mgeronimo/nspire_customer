<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ url('../../assets/img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text">
            nspirenetwork
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="{{ url('/') }}" class="simple-text">
            NN
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ url('https://pixabay.com/get/e830b80d2bf21c22d2524518a33219c8b66ae3d111b7194194f0c671/avatar-159236_1280.png') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{ \App\Distributor::where('user_id','=',Auth::user()->id)->get()->pluck('first_name')[0] }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/profile') }}">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ url('/') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="material-icons">device_hub</i>
                    <p>Network</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="material-icons">account_balance_wallet</i>
                    <p>Wallet</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="material-icons">local_grocery_store</i>
                    <p>Store</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="material-icons">assessment</i>
                    <p>Reports</p>
                </a>
            </li>
        </ul>
    </div>
</div>