<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }

        .box {
            border: 2px solid #000000;
            background-color: #4c77cb;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 6px;
        }

        label {
            font-weight: 500;
        }
    </style>

</head>
<body>

<div class="p-4">
    <div class="box">
        <form action="{{ url('/pokedex') }}" method="POST">
            @csrf

            <div class="row mb-2">
                <div class="col">
                    <label>Name</label>
                    <input class="form-control" name="name">
                </div>
                <div class="col">
                    <label>Type</label>
                    <input class="form-control" name="type">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <label>Species</label>
                    <input class="form-control" name="species">
                </div>
                <div class="col">
                    <label>Image URL</label>
                    <input class="form-control" name="image_url">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <label>Height</label>
                    <input type="number" class="form-control" name="height">
                </div>
                <div class="col">
                    <label>Weight</label>
                    <input type="number" class="form-control" name="weight">
                </div>
                <div class="col">
                    <label>HP</label>
                    <input type="number" class="form-control" name="hp">
                </div>
                <div class="col">
                    <label>Attack</label>
                    <input type="number" class="form-control" name="attack">
                </div>
                <div class="col">
                    <label>Defense</label>
                    <input type="number" class="form-control" name="defense">
                </div>
            </div>

            <div class="text-end">
                <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

    {{-- ตาราง --}}
    @include('pokedex.table')

</div>

</body>
</html>
