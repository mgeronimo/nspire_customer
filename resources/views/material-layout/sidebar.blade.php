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
                <img src="{{ url('/assets/img/faces/avatar.jpg') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{ \App\Distributor::where('user_id','=',Auth::user()->id)->get()->pluck('first_name')[0] }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/profile') }}">Profile</a>
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
                <a data-toggle="collapse" href="#dashboard" class="collapsed">
                    <i class="material-icons">dashboard</i>
                    <p>Account Dashboard
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="dashboard">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/') }}">Account Summary</a>
                        </li>
                        <li>
                            <a href="">Discussion Board</a>
                        </li>
                        <li>
                            <a href="">Private Messages</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#register" class="collapsed">
                    <i class="material-icons">assignment_ind</i>
                    <p>Enroll Distributor
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="register">
                    <ul class="nav">
                        <li>
                            <a href="">Enroll Extreme Left</a>
                        </li>
                        <li>
                            <a href="">Enroll Extreme Right</a>
                        </li>
                        <li>
                            <a href="">Enroll Inside Position</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#network" class="collapsed">
                    <i class="material-icons">device_hub</i>
                    <p>Network Structure
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="network">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/network') }}">Binary Genealogy</a>
                        </li>
                        <li>
                            <a href="">Unilevel Genealogy</a>
                        </li>
                        <li>
                            <a href="">Customer Genealogy</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#income" class="collapsed">
                    <i class="material-icons">credit_card</i>
                    <p>Personal Income
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="income">
                    <ul class="nav">
                        <li>
                            <a href="">Income Summary</a>
                        </li>
                        <li>
                            <a href="">First Bonus</a>
                        </li>
                        <li>
                            <a href="">Binary Bonus</a>
                        </li>
                        <li>
                            <a href="">Match Bonus</a>
                        </li>
                        <li>
                            <a href="">Unilevel Bonus</a>
                        </li>
                        <li>
                            <a href="">Retail Bonus</a>
                        </li>
                        <li>
                            <a href="">Global Bonus</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#wallet" class="collapsed">
                    <i class="material-icons">account_balance_wallet</i>
                    <p>Electronic Wallet
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="wallet">
                    <ul class="nav">
                        <li>
                            <a href="">Payout Transactions</a>
                        </li>
                        <li>
                            <a href="">Other Transactions</a>
                        </li>
                        <li>
                            <a href="">Bank Details</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#store" class="collapsed">
                    <i class="material-icons">local_grocery_store</i>
                    <p>Shopping Cart
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="store">
                    <ul class="nav">
                        <li>
                            <a href="">Nspire Products</a>
                        </li>
                        <li>
                            <a href="">Product Orders</a>
                        </li>
                        <li>
                            <a href="">Recurring Orders</a>
                        </li>
                        <li>
                            <a href="">Order Tracking</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#report" class="collapsed">
                    <i class="material-icons">assessment</i>
                    <p>Online Reports
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="report">
                    <ul class="nav">
                        <li>
                            <a href="">Previous Rankings</a>
                        </li>
                        <li>
                            <a href="">Sales Report</a>
                        </li>
                        <li>
                            <a href="">Income Report</a>
                        </li>
                        <li>
                            <a href="">Network Performance</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>