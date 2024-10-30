<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #CEAEEB; height: 100vh;" class="d-flex justify-content-center align-items-center">
    <div style="width: 500px;">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="ID Product">
            <label for="floatingInput">ID Product</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Product">
            <label for="floatingInput">Nama Product</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Deskripsi">
            <label for="floatingInput">Deskripsi</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Harga Product">
            <label for="floatingInput">Harga Product</label>
        </div>
        <div class="input-group mb-3">
            <select class="form-select" id="inputGroupSelect02">
                <option value="1">Makeup</option>
                <option value="2">Skincare</option>
            </select>
            <label class="input-group-text" for="inputGroupSelect02">Options</label>
        </div>
        <div class="input-group mb-3 rounded-3" style="border: 2px solid white;">
            <p class="fs-6 text-dark px-3 align-items-center d-flex m-0">Upload Image</p>
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                aria-label="Upload">
        </div>
        <button class="btn btn-primary" type="button">SUBMIT</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>