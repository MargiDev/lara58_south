<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="h-100 d-md-flex justify-content-between align-items-center">
            <div class="email-address">
                <a href="mailto:contact@southtemplate.com">contact@southtemplate.com</a>
            </div>
            <div class="phone-number d-flex">
                <div class="icon">
                    <img src="/img/frontend_img/icons/phone-call.png" alt="">
                </div>
                <div class="number">
                    <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ url('/') }}"><img src="/img/frontend_img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about_us') }}">About Us</a></li>
                            <li><a href="#">Our servies</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="{{ url('/about_us') }}">About Us</a></li>
                                    <li><a href="#">Listings</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('properties.show') }}">Properties List</a></li>
                                            <li><a href="{{ url('/single') }}">Single Property</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/news_events') }}">News &amp; Event List</a></li>
                                            <li><a href="{{ url('/news_event') }}">Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Properties</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Headline 1</li>
                                        <li><a href="#">Mega Menu Item 1</a></li>
                                        <li><a href="#">Mega Menu Item 2</a></li>
                                        <li><a href="#">Mega Menu Item 3</a></li>
                                        <li><a href="#">Mega Menu Item 4</a></li>
                                        <li><a href="#">Mega Menu Item 5</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Headline 2</li>
                                        <li><a href="#">Mega Menu Item 1</a></li>
                                        <li><a href="#">Mega Menu Item 2</a></li>
                                        <li><a href="#">Mega Menu Item 3</a></li>
                                        <li><a href="#">Mega Menu Item 4</a></li>
                                        <li><a href="#">Mega Menu Item 5</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Headline 3</li>
                                        <li><a href="#">Mega Menu Item 1</a></li>
                                        <li><a href="#">Mega Menu Item 2</a></li>
                                        <li><a href="#">Mega Menu Item 3</a></li>
                                        <li><a href="#">Mega Menu Item 4</a></li>
                                        <li><a href="#">Mega Menu Item 5</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Headline 4</li>
                                        <li><a href="#">Mega Menu Item 1</a></li>
                                        <li><a href="#">Mega Menu Item 2</a></li>
                                        <li><a href="#">Mega Menu Item 3</a></li>
                                        <li><a href="#">Mega Menu Item 4</a></li>
                                        <li><a href="#">Mega Menu Item 5</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="blog.html">News &amp; Events</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/news_events') }}">News &amp; Event List</a></li>
                                    <li><a href="{{ url('/news_event') }}">Single</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>

                        <!-- Search Form -->
                        <div class="south-search-form">
                            <form action="#" method="post">
                                <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Search Button -->
                        <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                    </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</header>
