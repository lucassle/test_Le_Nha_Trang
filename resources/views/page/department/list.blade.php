<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($item as $key => $item)
            <tr>
                @php
                    $number = $key + 1;
                @endphp
                <td>{{ $number }}</td>
                <td>{{ $item->code }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <div style="display:flex;">
                        <a href="{{ route($controllerName . '.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route($controllerName . '.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>