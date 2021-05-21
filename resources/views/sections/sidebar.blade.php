<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
        <div class="user-logo">
            <div class="img" style="background-image: url(images/logo.jpg);"></div>
            <h3>{{ config('app.name') }}</h3>
        </div>
    </div>
    <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li>
            <a href="{{ route('user.index') }}">
                <span class="fa fa-users mr-3 notif"></span>
                {{ __('share_text.Users_manage') }}
            </a>
          </li>
        <li>
            <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="fa fa-sign-out mr-3"></span>
                {{ __('share_text.Logout') }}
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>