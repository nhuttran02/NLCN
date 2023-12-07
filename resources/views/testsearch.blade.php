<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Recognition</title>
</head>
<body>

    <h1>Image Recognition</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form action="{{ url('/recognize-image') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image">Choose an image:</label>
        <input type="file" name="image" id="image" accept="image/*">
        <button type="submit">Recognize</button>
    </form>

</body>
</html>
