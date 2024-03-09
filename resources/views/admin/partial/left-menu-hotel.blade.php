{{-- Airline Ticket  --}}
<li class="nav-item {{ request()->is(['hotel.edit*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('hotel.edit',auth()->user()->id) }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Edit Info</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['reservation.index'])?'active':'' }}">
  <a class="nav-link" href="{{ route('reservation.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Hotel Reservation</span>
  </a>
</li>

