 <li class="nav-item {{ request()->is(['guide*'])?'active':'' }}">
   <a class="nav-link" href="{{ route('passenger.edit',auth()->user()->id) }}">
       <i class="fas fa-fw fa-user"></i>
       <span>Edit Info</span>
   </a>
 </li>

  
  <li class="nav-item {{ request()->is(['special_request*'])?'active':'' }}">
    <a class="nav-link" href="{{ route('special_request.create') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Special request</span>
    </a>
  </li>
  
  <li class="nav-item {{ request()->is(['flight_arrangement*'])?'active':'' }}">
    <a class="nav-link" href="{{ route('flight_arrangement.index') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Flight Arrangement</span>
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
        <span>Daily Itinerary</span>
    </a>
  </li>

  <li class="nav-item {{ request()->is(['payment_passenger*'])?'active':'' }}">
    <a class="nav-link" href="{{ route('payment_passenger.index') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Financial Report</span>
    </a>
  </li>

