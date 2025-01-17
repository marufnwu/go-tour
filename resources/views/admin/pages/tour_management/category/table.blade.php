<div class="table-responsive">
    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
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
                <td>{{ $item->is_active ? "Enabled" : "Disabled" }}</td>
                @if (auth()->user()->type=='CHCP' || auth()->user()->type=='Admin')
                <td class="text-center">

                    <a class="btn btn-success btn-sm" href="{{ route('destination-category.edit',$item->id) }}">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form class="deleteform d-inline-block" action="{{route('destination-category.destroy',$item->id)}}" method="post">
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
