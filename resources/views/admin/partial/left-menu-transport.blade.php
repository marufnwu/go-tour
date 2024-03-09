{{-- Airline Ticket  --}}

<li class="nav-item {{ request()->is('supplier*')?'active':'' }}">
  <a class="nav-link" href="{{ route('supplier.edit',auth()->user()->id) }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Modify info</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['ground_transport.index'])?'active':'' }}">
  <a class="nav-link" href="{{ route('reservetransport.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Transport Reservation</span>
  </a>
</li>

