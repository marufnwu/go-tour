<!-- resources/views/components/data-table.blade.php -->
<div class="table-responsive">
    <table class="table table-bordered table-sm js-dt" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                @foreach($columns as $column)
                    <th>{{ $column['label'] }}</th>
                @endforeach
                @if(isset($actions) && count($actions) > 0)
                    <th class="text-center">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    @foreach($columns as $column)
                        <td>{{ $item->{$column['field']} }}</td>
                    @endforeach
                    @if(isset($actions) && count($actions) > 0)
                        <td class="text-center">
                            @foreach($actions as $action)
                                <a class="btn btn-{{ $action['type'] }} btn-sm" href="{{ route($action['route'], $item->id) }}">
                                    <i class="fas fa-{{ $action['icon'] }}"></i>
                                </a>
                            @endforeach
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
