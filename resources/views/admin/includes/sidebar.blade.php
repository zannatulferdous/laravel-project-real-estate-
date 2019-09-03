<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Category</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('add-category')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Category </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manage-category')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Category </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Property</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('add-property')}}" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Add Product </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manage-property')}}" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu">Manage Property </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Agent</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('add-agent')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">Add Agent </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manage-agent')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Manage Agent </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Blogs </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('add-blog')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Blog </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manage-blog')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Manage Blog </span></a></li>
                        </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
