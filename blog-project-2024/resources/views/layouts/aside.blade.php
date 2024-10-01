<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('category.index') }}">
                <i class="bi bi-tags"></i>
            <span>Category</span>
            </a>
        </li><!-- End Category Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('post.index') }}">
                <i class="bi bi-file-earmark-text"></i>
              <span>Post</span>
            </a>
          </li><!-- End Post Nav -->
    </ul>

  </aside><!-- End Sidebar-->
