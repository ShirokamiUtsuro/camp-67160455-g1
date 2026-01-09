<div class="box">
    <h5 class="mb-3">Pokedex List</h5>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Species</th>
                <th>Height</th>
                <th>Weight</th>
                <th>HP</th>
                <th>Attack</th>
                <th>Defense</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pokedexs as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->species }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->attack }}</td>
                <td>{{ $item->defense }}</td>
                <td>{{ $item->image_url }}</td>
                <td>
                    <a href="{{ url('/pokedex/'.$item->id.'/edit') }}"
                       class="btn btn-warning btn-sm">แก้ไข</a>

                    <form action="{{ url('/pokedex/'.$item->id) }}"
                          method="POST"
                          style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">ลบ</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
