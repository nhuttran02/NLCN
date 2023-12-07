<?php

namespace App\Http\Controllers;

use App\Public;
use App\Models\Product;
use TensorFlow\TensorFlow;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;

// class ProductController extends Controller
// {
//     protected $productService;

//     public function __construct(ProductService $productService)
//     {
//         $this->productService = $productService;
//     }

//     public function index($id = '', $slug = '')
//     {
//         $product = $this->productService->show($id);
//         $productsMore = $this->productService->more($id);

//         return view('products.content', [
//             'title' => $product->name,
//             'product' => $product,
//             'products' => $productsMore
//         ]);
//     }
// }

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    // public function computeFeatureVector($image)
    // {
    //     // Xử lý và tính toán vectơ đặc trưng từ hình ảnh
    //     // Sử dụng TensorFlow và MobilenetV2
    //     // ...

    //     // Giả sử $featureVector là kết quả tính toán
    //     $featureVector = '...';

    //     return $featureVector;
    // }


    private function computeFeatureVector($image)
    {
        // Load mô hình MobileNetV2
        $model = TensorFlow::loadModel('public/mobilenet_v2_1.0_224_quant.tflite');

        // Xử lý hình ảnh và chuyển đổi thành định dạng phù hợp cho mô hình
        $processedImage = $this->processImage($image);

        // Đưa hình ảnh qua mô hình để lấy feature_vector
        $featureVector = $model->predict($processedImage);

        return $featureVector;
    }

    private function processImage($image)
    {
        // Xử lý hình ảnh, chuyển đổi kích thước, chuẩn hóa, ...

        return $processedImage;
    }


    // public function index($id = '', $slug = '')
    // {
    //     $product = $this->productService->show($id);
    //     $productsMore = $this->productService->more($id);

    //     return view('products.content', [
    //         'title' => $product->name,
    //         'product' => $product,
    //         'products' => $productsMore
    //     ]);
    // }

    public function index($id = '', $slug = '')
    {
        $product = $this->productService->show($id);
        $productsMore = $this->productService->more($id);

        // Tính toán vectơ đặc trưng từ hình ảnh và gán vào trường feature_vector
        // $featureVector = $this->computeFeatureVector($request->file('image'));
        // $product->feature_vector = $featureVector;
        // $product->save();

        return view('products.content', [
            'title' => $product->name,
            'product' => $product,
            'products' => $productsMore
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        // Tính toán vectơ đặc trưng từ hình ảnh
        $featureVector = $this->computeFeatureVector($request->file('image'));

        // Debugging
        dd($featureVector);

        // Logging
        Log::info('Feature Vector: ' . $featureVector);

        // Gán vectơ đặc trưng vào trường feature_vector
        $product->feature_vector = $featureVector;

        // Lưu sản phẩm vào cơ sở dữ liệu
        $product->save();

        // return redirect()->route('products.index');
    }
}
