<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{url('/')}}">
            <span class="align-middle">Myron Stores</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link d-flex d-flex" href="{{ url('redirect')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link d-flex" href="{{ url('view_product') }}">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Products</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link d-flex" href="{{ url('view_category') }}">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link d-flex" href="{{ url('view_orders') }}">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Orders</span>
                </a>
            </li>


        </ul>


    </div>
</nav>