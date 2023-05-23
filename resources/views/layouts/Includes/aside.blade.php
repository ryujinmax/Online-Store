<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/home">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.category.index') }}">
                <i class="bi bi-basket3-fill"></i>
                <span>Category</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.product.index') }}">
                <i class="bi bi-newspaper"></i>
                <span>Product</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->
