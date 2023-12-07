<!DOCTYPE html>
<html>
<head>
    <title>Image Search</title>
</head>
<body>
    <form action="{{ route('image.search') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*">
        <button type="submit">Search</button>
    </form>
</body>
</html>
