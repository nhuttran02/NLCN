<!-- <!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
</head>
<body>
    <h2>Search Result</h2>
    {{-- Hiển thị kết quả tìm kiếm ở đây --}}
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
</head>
<body>
    <h2>Search Result</h2>

    @if ($result)
        <h3>{{ $result->name }}</h3>
        <p>{{ $result->thumb }}</p>
        <p>{{ $result->price }}</p>
        <p>{{ $result->description }}</p>

    @else
        <p>Không tìm thấy sản phẩm</p>
    @endif
</body>
</html>

