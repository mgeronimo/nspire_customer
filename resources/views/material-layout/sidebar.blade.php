<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ url('../../assets/img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text">
            NSPIRE NETWORK
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
                    {{ \App\Customer::where('user_id','=',Auth::user()->id)->get()->pluck('first_name')[0] }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/profile') }}">Profile</a>
                        </li>
                        <li>
                            <a href="{{ url('/settings') }}">Settings</a>
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
                            <a href="{{ url('/') }}">Account Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url('/boards') }}">Discussion Board</a>
                        </li>
                        <li>
                            <a href="{{ url('/messages') }}">Private Messages</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#register" class="collapsed">
                    <i class="material-icons">account_box</i>
                    <p>Customer Referrals
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="register">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('/add-referral') }}">Register Referral</a>
                        </li>
                        <li>
                            <a href="{{ url('/all-referrals') }}">View All Referrals</a>
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
                            <a href="{{ url('/referral') }}">Unilevel Genealogy</a>
                        </li>
                        <li>
                            <a href="{{ url('/customer') }}">Customer Genealogy</a>
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
                            <a href="{{ url('/summary') }}">Income Summary</a>
                        </li>
                        <li>
                            <a href="{{ url('/first') }}">First Bonus</a>
                        </li>
                        <li>
                            <a href="{{ url('/binary') }}">Binary Bonus</a>
                        </li>
                        <li>
                            <a href="{{ url('/match') }}">Match Bonus</a>
                        </li>
                        <li>
                            <a href="{{ url('/unilevel') }}">Unilevel Bonus</a>
                        </li>
                        <li>
                            <a href="{{ url('/retail') }}">Retail Bonus</a>
                        </li>
                        <li>
                            <a href="{{ url('/global') }}">Global Bonus</a>
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
                            <a href="{{ url('/payout') }}">Payout Transactions</a>
                        </li>
                        <li>
                            <a href="{{ url('/wallet') }}">Other Transactions</a>
                        </li>
                        <li>
                            <a href="{{ url('/bank') }}">Bank Details</a>
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
                            <a href="{{ url('/products') }}">Nspire Products</a>
                        </li>
                        <li>
                            <a href="{{ url('/orders') }}">Product Orders</a>
                        </li>
                        <li>
                            <a href="{{ url('/recurring') }}">Recurring Orders</a>
                        </li>
                        <li>
                            <a href="{{ url('/tracking') }}">Order Tracking</a>
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
                            <a href="{{ url('/rankings') }}">Previous Rankings</a>
                        </li>
                        <li>
                            <a href="{{ url('/sales') }}">Sales Report</a>
                        </li>
                        <li>
                            <a href="{{ url('/income') }}">Income Report</a>
                        </li>
                        <li>
                            <a href="{{ url('/financial') }}">Financial Report</a>
                        </li>
                        <li>
                            <a href="{{ url('/performance') }}">Network Performance</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>