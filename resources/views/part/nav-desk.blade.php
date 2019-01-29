<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
    <!-- START RIGHT TOOLBAR ICON MENUS -->
    <ul class="navbar-nav nav-right">
        
        <li class="nav-item dropdown dropdown-menu-lg">
           
                   </li>
        <li class="nav-item dropdown dropdown-notifications dropdown-menu-lg">
           
            <div class="dropdown-menu dropdown-menu-right">
                
                   
                    <div class="card-body">
                        <div class="card-container-wrapper">
                            <div class="card-container">
                                <div class="timeline timeline-border">
                                    <div class="timeline-list">
                                      
                                    </div>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('/assets/admin/img/6.jpg')}}" class="w-35 rounded-circle" >
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                <div class="dropdown-header pb-3">
                    <div class="media d-user">
                        <img class="align-self-center mr-3 w-40 rounded-circle" src="{{asset('/assets/admin/img/6.jpg')}}" alt="">
                        <div class="media-body">
                        {{ Auth::user()->name }} <br>
                        {{ Auth::user()->email }} 
                           
                        </div>
                    </div>
                </div>
            <a class="dropdown-item" href="pages.profile.html"><i class="icon dripicons-user"></i> Profile</a>
                <a class="dropdown-item" href="pages.my-account.html"><i class="icon dripicons-gear"></i> Account Settings </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            </div>
        </li>
    </ul>
    <!-- END RIGHT TOOLBAR ICON MENUS -->
    <!--START TOP TOOLBAR SEARCH -->
    <form role="search" action="http://www.authenticgoods.co/themes/quantum-pro/demos/demo1/pages.search.html" class="navbar-form">
        <div class="form-group">
            <input type="text" placeholder="Search and press enter..." class="form-control navbar-search" autocomplete="off">
            <i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>
        </div>
        <button type="submit" class="d-none">Submit</button>
    </form>
    <!--END TOP TOOLBAR SEARCH -->
</nav>
