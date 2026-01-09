@extends('template.default')

@section('content')
    <h1>Pokedex Create</h1>

    <form action="{{ url('/pokedex') }}" method="post">
        @csrf

        <label>Name</label>
        <input class="form-control" type="text" name="name">

        <label>Type</label>
        <input class="form-control" type="text" name="type">

        <label>Species</label>
        <input class="form-control" type="text" name="species">

        <label>Height</label>
        <input class="form-control" type="number" step="0.01" name="height">

        <label>Weight</label>
        <input class="form-control" type="number" step="0.01" name="weight">

        <label>HP</label>
        <input class="form-control" type="number" name="hp">

        <label>Attack</label>
        <input class="form-control" type="number" name="attack">

        <label>Defense</label>
        <input class="form-control" type="number" name="defense">

        <label>Image URL</label>
        <input class="form-control" type="text" name="image_url">

        <br>
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>

    @include('pokedex.table')
@endsection
