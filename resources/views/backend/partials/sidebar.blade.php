<div class="sidebar_main">
    <div class="sidebar_items">
        <div class="sidebar_logo">
            <a href="/"><img src="{{asset('backend/assets/img/side_logo.png')}}"></a>
        </div>
        <div class="side_bar_nav">
            <ul class="side_menu list-unstyled">
                <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('backend/assets/img/square.png') }}" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('subscription.create') ? 'active' : '' }}">
                    <a href="{{ route('subscription.create') }}">
                        <img src="{{ asset('backend/assets/img/tag.png') }}" alt="">
                        <span>Pricing</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('some.route.name1') ? 'active' : '' }}">
                    <a href="javascript:;">
                        <img src="{{ asset('backend/assets/img/house.png') }}" alt="">
                        <span>Lorem Ipsum</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('some.route.name2') ? 'active' : '' }}">
                    <a href="javascript:;">
                        <img src="{{ asset('backend/assets/img/stat.png') }}" alt="">
                        <span>Lorem Ipsum</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('some.route.name3') ? 'active' : '' }}">
                    <a href="javascript:;">
                        <img src="{{ asset('backend/assets/img/file.png') }}" alt="">
                        <span>Lorem Ipsum</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('some.route.name4') ? 'active' : '' }}">
                    <a href="javascript:;">
                        <img src="{{ asset('backend/assets/img/setting.png') }}" alt="">
                        <span>Lorem Ipsum</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('some.route.name5') ? 'active' : '' }}">
                    <a href="javascript:;">
                        <img src="{{ asset('backend/assets/img/mark.png') }}" alt="">
                        <span>Lorem Ipsum</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="logout_btn">
        <a href="{{route('logout')}}" id="logoutLink"><i class="fa-solid fa-power-off"></i></a>
    </div>
</div>
<script>
    document.getElementById('logoutLink').addEventListener('click', function(event) {
        event.preventDefault();
        fetch('{{ route('logout') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }).then(response => {
            if (response.ok) {
                window.location.href = '/'; // Redirect to home page
            }
        }).catch(error => console.error('Logout failed:', error));
    });
</script>
