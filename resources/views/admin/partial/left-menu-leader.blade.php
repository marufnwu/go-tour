<li class="nav-item {{ request()->is(['tour_booking*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('tour_booking.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Tour Info</span>
  </a>
</li>

<li class="nav-item {{ request()->is(['generate_brochure*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('generate_brochure.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Generate a Brochure</span>
  </a>
</li>

<li class="nav-item {{ request()->is('tourleaders*')?'active':'' }}">
  <a class="nav-link" href="{{ route('tourleaders.edit',auth()->user()->id) }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Modify info</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['reservation*'])?'active':'' }}">
    <a class="nav-link" href="{{ route('reservation.index') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Hotel Arrangement</span>
    </a>
  </li>
<li class="nav-item {{ request()->is(['itinerary*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('itinerary.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Day Itinerary</span>
  </a>
</li>

<li class="nav-item {{ request()->is(['passenger*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('passenger.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage passengers</span>
  </a>
</li>

<li class="nav-item {{ request()->is(['payment_passenger*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('payment_passenger.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Passenger's Fin. Rep.</span>
  </a>
</li>

{{-- <li class="nav-item {{ request()->is(['ticket_list*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('ticket_list.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Special request</span>
  </a>
</li> --}}