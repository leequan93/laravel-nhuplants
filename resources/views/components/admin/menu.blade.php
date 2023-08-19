<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.index') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.index']) ? 'active' : '' }}">
            <a href="{{ route('admin.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.user.show']) ? 'active' : '' }}">
            <a href="{{ route('admin.user.show') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-user'></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.cover.index','admin.cover.create','admin.cover.show']) ? 'active' : '' }}">
            <a href="{{ route('admin.cover.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="Analytics">Cover</div>
            </a>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.category.index','admin.category.create','admin.category.show']) ? 'active' : '' }}">
            <a href="{{ route('admin.category.index') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-category'></i>
                <div data-i18n="Analytics">Category</div>
            </a>
        </li>
        <li class="menu-item {{ in_array(Route::currentRouteName(), ['admin.product.index','admin.product.create','admin.product.show']) ? 'active' : '' }}">
            <a href="{{ route('admin.product.index') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-tree' ></i>
                <div data-i18n="Analytics">Product</div>
            </a>
        </li>
    </ul>
</aside>
