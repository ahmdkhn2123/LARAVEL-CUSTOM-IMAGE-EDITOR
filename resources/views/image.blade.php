<html>
<head>
    <title>Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">



</head>
<body>
<h1 class="text-center">Upload Image Below</h1>
<div class="text-center">
    <form action="upload" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <input type="file" name="photo">
        </div>
        <div class="mb-3">
            <label for="blur">Blur Value</label>
            <input type="number" name="blur" placeholder="0">
        </div>
        <div class="mb-3">
            <label for="fit">Fit Value</label>
            <input type="number" name="fit" placeholder="0">
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
    </form>
</div>
</body>
</html>
