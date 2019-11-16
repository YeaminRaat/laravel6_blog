<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Category</span>
                </a>
                <ul class="sub">
                    <li class="{{ (request()->is('admin/category/create')) ? 'active' : '' }}"><a  href="{{ Route('category.create') }}">Add Category</a></li>
                    <li class="{{ (request()->is('admin/category')) ? 'active' : '' }}"><a  href="{{ Route('category.index') }}">Manage Category</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Blog</span>
                </a>
                <ul class="sub">
                    <li class="{{ (request()->is('admin/blog/create')) ? 'active' : '' }}"><a  href="{{ Route('blog.create') }}">Add Blog</a></li>
                    <li class="{{ (request()->is('admin/blog')) ? 'active' : '' }}"><a  href="{{ Route('blog.index') }}">Manage Blog</a></li>
                </ul>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
