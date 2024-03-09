<li class="nav-item {{ request()->is(['guide*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('guide.edit',auth()->user()->id) }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Edit Info</span>
  </a>
</li>