<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="assets/images/logo-icon.png" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Maxton</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            
            
            
            <li>
                <a href="{{ route('category_list') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">join_right</i>
                    </div>
                    <div class="menu-title">Category</div>
                </a>
            </li>
            <li>
                <a href="{{ route('sub_category_list') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">join_right</i>
                    </div>
                    <div class="menu-title">Sub Category</div>
                </a>
            </li>
            <li>
                <a href="{{ route('product_list') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">join_right</i>
                    </div>
                    <div class="menu-title">Products</div>
                </a>
            </li>
            
        </ul>
        <!--end navigation-->
    </div>
</aside>
<!--end sidebar-->
