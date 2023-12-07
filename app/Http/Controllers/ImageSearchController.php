<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TensorFlow\TensorFlow;
use App\Models\Product;

class ImageSearchController extends Controller
{
    public function search(Request $request)
{
    // Xử lý upload hình ảnh và tìm kiếm ở đây
    // $image = $request->file('image');
    // // Tiếp theo: sử dụng TensorFlow và MobilenetV2 để phân loại hình ảnh
    // Giả sử $result là kết quả tìm kiếm
    $computedFeatureVector = '...';
    $result = Product::where('feature_vector', $computedFeatureVector)->first();

    // Hiển thị kết quả
    return view('search_result', compact('result'));
}

}
