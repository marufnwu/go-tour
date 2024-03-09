{{-- Airline Ticket  --}}
<li class="nav-item {{ request()->is('supplier*')?'active':'' }}">
  <a class="nav-link" href="{{ route('supplier.edit',auth()->user()->id) }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Modify info</span>
  </a>
</li>
<li class="nav-item {{ request()->is(['ticket_list.index'])?'active':'' }}">
    <a class="nav-link" href="{{ route('passenger.pass_to_be_ticket') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Pass. to be Ticketed</span>
    </a>
  </li>

  <li class="nav-item {{ request()->is(['ticket_list.create'])?'active':'' }}">
    <a class="nav-link" href="{{ route('ticket_list.create') }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Add Pass. Ticket Info</span>
    </a>
  </li>