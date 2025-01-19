<div class="table-responsive">
    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Destination</th>
            <th>Duration</th>
            <th>Arrival City </th>
            <th>Departure City </th>
            <th>Travel Start At</th>
            <th>Travel End At</th>
            <th>Booking Start At</th>
            <th>Booking End At</th>
            <th>Status</th>

            @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
            <th class="text-center">Action</th>
            @endif
        </tr>
        </thead>
        <tbody>

        @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->destination->name }}</td>
                <td>{{ $item->duration }}</td>
                <td>{{ $item->arrivalCity->city_name }}</td>
                <td>{{ $item->departureCity->city_name }}</td>

                <td>{{ \Carbon\Carbon::parse($item->travel_strat_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($item->travel_end_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($item->booking_start_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($item->booking_end_at)->format('M d, Y') }}</td>
                <td>{{ $item->is_active ? "Enabled" : "Disabled" }}</td>
                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                <td class="text-center">

                    <a class="btn btn-warning btn-sm" href="{{ route('tour.show',$item->id) }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="btn btn-success btn-sm" href="{{ route('tour.edit',$item->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form class="deleteform d-inline-block" action="{{route('tour.destroy',$item->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger deletebtn">
                            <span class="btn-label">
                              <i class="fas fa-trash"></i>
                            </span>
                        </button>
                    </form>

                </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
