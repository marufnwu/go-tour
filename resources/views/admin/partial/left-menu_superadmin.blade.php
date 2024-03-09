<li class="nav-item {{ request()->is('dashboard')?'active':'' }}">
  <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
  </a>
</li>

<li class="nav-item {{ request()->is('user*')?'active':'' }}">
  <a class="nav-link" href="{{ route('user.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage Users</span>
  </a>
</li>
@if(auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
<li class="nav-item {{ request()->is('user*')?'active':'' }}">
  <a class="nav-link" href="{{ route('user.create') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Create Operator</span>
  </a>
</li>
@endif
<li class="nav-item">
  <a class="nav-link {{ request()->is(['tourleaders*', 'tourleader_tour*'])?'':'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage Tour Leader</span>
  </a>
  <div id="collapse7" class="collapse {{ request()->is(['tourleaders*','tourleader_tour*'])?'show':'' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ request()->is(['tourleaders*'])?'active':'' }}" href="{{ route('tourleaders.index') }}">Tour Leaders</a>
          <a class="collapse-item {{ request()->is(['tourleader_tour*'])?'active':'' }}" href="{{ route('tourleader_tour.index') }}">Tour Leader Tour</a>
          <a class="collapse-item {{ request()->is(['flight_reservation*'])?'active':'' }}" href="{{ route('flight_reservation.index') }}">Flight Reservation</a>
      </div>
  </div>
</li>

<li class="nav-item {{ request()->is(['gti*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('gti.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>General Tour Itinerary</span>
  </a>
</li>

<li class="nav-item {{ request()->is('country*')?'active':'' }}">
  <a class="nav-link" href="{{ route('country.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage Country</span>
  </a>
</li>

<li class="nav-item {{ request()->is('city*')?'active':'' }}">
  <a class="nav-link" href="{{ route('city.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage City</span>
  </a>
</li>

<li class="nav-item {{ request()->is('media*')?'active':'' }}">
  <a class="nav-link" href="{{ route('media.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Media Type</span>
  </a>
</li>
<li class="nav-item {{ request()->is('assign_media*')?'active':'' }}">
  <a class="nav-link" href="{{ route('assign_media.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Media Assign to Sight</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link {{ request()->is(['sight_reservation*','sight_list*','sight_distant*'])?'':'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-user"></i>
      <span>Sight Management</span>
  </a>
  <div id="collapseTwo" class="collapse {{ request()->is(['sight_reservation*','sight_list*','sight_distant*'])?'show':'' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ request()->is(['sight_list*'])?'active':'' }}" href="{{ route('sight_list.index') }}">Manage Sight</a>
          <a class="collapse-item {{ request()->is(['sight_distant*'])?'active':'' }}" href="{{ route('sight_distant.index') }}">Sight Distance</a>
          <a class="collapse-item {{ request()->is(['sight_reservation*'])?'active':'' }}" href="{{ route('sight_reservation.index') }}">Sight Reservation</a>
      </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link {{ request()->is(['cartype*'])?'':'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
      <i class="fas fa-fw fa-user"></i>
      <span>Transportation</span>
  </a>
  <div id="collapse5" class="collapse {{ request()->is(['cartype*', 'transportationtype*', 'cost_transport*', 'reservetransport*'])?'show':'' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ request()->is(['reservetransport*'])?'active':'' }}" href="{{ route('reservetransport.index') }}">Trans. Reservation</a>
          <a class="collapse-item {{ request()->is(['cartype*'])?'active':'' }}" href="{{ route('cartype.index') }}">Ground Trans. Car Type</a>
          {{-- <a class="collapse-item {{ request()->is(['transportationtype*'])?'active':'' }}" href="{{ route('transportationtype.index') }}">Trans. Type Name</a> --}}
          <a class="collapse-item {{ request()->is(['cost_transport*'])?'active':'' }}" href="{{ route('cost_transport.index') }}">Transportation Cost</a>
      </div>
  </div>
</li>

<li class="nav-item {{ request()->is('activity*')?'active':'' }}">
  <a class="nav-link" href="{{ route('activity.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage Activity</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['guide*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('guide.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Guides</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['reserve_guide*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('reserve_guide.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Guide Reservation</span>
  </a>
</li>

<li class="nav-item {{ request()->is(['supplier*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('supplier.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Suppliers</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['type_supplier*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('type_supplier.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Supplier Type</span>
  </a>

</li>

<li class="nav-item {{ request()->is(['airport*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('airport.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage Airport</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link {{ request()->is(['fee*','hotel*','accommodation*','reservation*'])?'':'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
      <i class="fas fa-fw fa-user"></i>
      <span>Hotel Management</span>
  </a>
  <div id="collapse3" class="collapse {{ request()->is(['fee*','hotel*','accommodation*','reservation*'])?'show':'' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ request()->is(['hotel*'])?'active':'' }}" href="{{ route('hotel.index') }}">Hotel</a>
          <a class="collapse-item {{ request()->is(['accommodation*'])?'active':'' }}" href="{{ route('accommodation.index') }}">Accommodation</a>
          <a class="collapse-item {{ request()->is(['fee*'])?'active':'' }}" href="{{ route('fee.index') }}">Hotel prices</a>
          <a class="collapse-item {{ request()->is(['reservation*'])?'active':'' }}" href="{{ route('reservation.index') }}">Reservation</a>
      </div>
  </div>
</li>

<li class="nav-item {{ request()->is(['itinerary*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('itinerary.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Day Itinerary</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['ticket_list*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('ticket_list.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Airline Ticket</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link {{ request()->is(['payment_passenger*','passenger*','method_payment*','financial_report*'])?'':'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse5">
      <i class="fas fa-fw fa-user"></i>
      <span>Manage Passengers</span>
  </a>
  <div id="collapse6" class="collapse {{ request()->is(['payment_passenger*','passenger*','method_payment*','financial_report*'])?'show':'' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ request()->is(['passenger*'])?'active':'' }}" href="{{ route('passenger.index') }}">Passenger Information</a>
          <a class="collapse-item {{ request()->is(['payment_passenger*'])?'active':'' }}" href="{{ route('payment_passenger.index') }}">Passenger Payment</a>
          {{--<a class="collapse-item {{ request()->is(['financial_report*'])?'active':'' }}" href="{{ route('financial_report.index') }}">Financial Report</a>--}}
      </div>
  </div>
</li>
<li class="nav-item {{ request()->is(['method_payment*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('method_payment.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Payment Methods</span>
  </a>
</li>
{{-- <li class="nav-item {{ request()->is(['ticket_list*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('ticket_list.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Admin Accounting</span>
  </a>
</li>

<li class="nav-item {{ request()->is(['ticket_list*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('ticket_list.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Group Acc. Report</span>
  </a>
</li>

<li class="nav-item {{ request()->is(['ticket_list*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('ticket_list.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Hotel Acc. Report</span>
  </a>
</li>

<li class="nav-item {{ request()->is(['ticket_list*'])?'active':'' }}">
  <a class="nav-link" href="{{ route('ticket_list.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Bus Acc. Report</span>
  </a>
</li> --}}