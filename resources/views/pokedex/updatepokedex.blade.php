<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pokedex</title>
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

    {{-- หัวข้อ --}}
    <h3 class="mb-3 text-primary">Edit Pokedex</h3>

    {{-- กรอบฟอร์ม (เหมือน index) --}}
    <div class="box">
        <form action="{{ url('/pokedex/'.$pokedex_update->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row mb-2">
                <div class="col">
                    <label>Name</label>
                    <input class="form-control" name="name" value="{{ $pokedex_update->name }}">
                </div>
                <div class="col">
                    <label>Type</label>
                    <input class="form-control" name="type" value="{{ $pokedex_update->type }}">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <label>Species</label>
                    <input class="form-control" name="species" value="{{ $pokedex_update->species }}">
                </div>
                <div class="col">
                    <label>Image URL</label>
                    <input class="form-control" name="image_url" value="{{ $pokedex_update->image_url }}">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <label>Height</label>
                    <input type="number" class="form-control" name="height" value="{{ $pokedex_update->height }}">
                </div>
                <div class="col">
                    <label>Weight</label>
                    <input type="number" class="form-control" name="weight" value="{{ $pokedex_update->weight }}">
                </div>
                <div class="col">
                    <label>HP</label>
                    <input type="number" class="form-control" name="hp" value="{{ $pokedex_update->hp }}">
                </div>
                <div class="col">
                    <label>Attack</label>
                    <input type="number" class="form-control" name="attack" value="{{ $pokedex_update->attack }}">
                </div>
                <div class="col">
                    <label>Defense</label>
                    <input type="number" class="form-control" name="defense" value="{{ $pokedex_update->defense }}">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ url('/pokedex') }}" class="btn btn-secondary">Back</a>
                <button class="btn btn-warning">Update</button>
            </div>

        </form>
    </div>

</div>

</body>
</html>
