<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
            </a>
        </div>
        {{-- <div class="flex-grow-1 search-bar">
            <div class="input-group">
                <button class="btn btn-search-back search-arrow-back" type="button"><i
                        class="bx bx-arrow-back"></i></button>
                <input type="text" class="form-control" placeholder="search" />
                <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
            </div>
        </div> --}}
        <div class="right-topbar ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item search-btn-mobile">
                    <a class="nav-link position-relative" href="javascript:;"> <i
                            class="bx bx-search vertical-align-middle"></i>
                    </a>
                </li>

                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                        data-bs-toggle="dropdown">
                        <div class="d-flex user-box align-items-center">
                            <div class="user-info">
                                <p class="user-name mb-0"> {{ Auth::user()->name }}</p>
                            </div>
                            <img src="{{ asset('assets/images/avatars/user.png') }}" class="user-img"
                                alt="user avatar">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('admin-change-password') }}"><i class='bx bx-lock-open-alt'></i><span>Change Password</span></a>

                        <a class="dropdown-item"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class='bx bx-log-out'></i><span>Logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
