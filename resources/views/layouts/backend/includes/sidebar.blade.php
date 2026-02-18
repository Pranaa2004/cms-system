<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-small-cap"><span class="hide-menu">Content Management</span></li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-pin"></i>
                        <span class="hide-menu">Posts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('posts.index') }}" class="sidebar-link">
                                <span class="hide-menu">All Posts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('posts.create') }}" class="sidebar-link">
                                <span class="hide-menu">Add New Post</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('category.index') }}" class="sidebar-link">
                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('tags.index') }}" class="sidebar-link">
                                <span class="hide-menu">Tags</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-clone"></i>
                        <span class="hide-menu">Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('pages.index') }}" class="sidebar-link">
                                <span class="hide-menu">All Pages</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('pages.create') }}" class="sidebar-link">
                                <span class="hide-menu">Add New Page</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="bi bi-images me-2"></i>
                        <span class="hide-menu">Media</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('medias.index') }}" class="sidebar-link">
                                <span class="hide-menu">Library</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('medias.create') }}" class="sidebar-link">
                                <span class="hide-menu">Upload</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="list-divider"></li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="log-out" class="feather-icon"></i>
                        <span class="hide-menu">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
