<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TensorFlow\Tensor;
use TensorFlow\TensorFlow;

// class ImageRecognitionController extends Controller
// {
//     //
// }

class ImageRecognitionController extends Controller
{
    public function recognizeImage(Request $request)
    {
        // Xử lý hình ảnh từ request
        $imageData = $request->file('image')->post();
        $imageTensor = Tensor::fromBuffer($imageData, Tensor::DT_UINT8);
        
        // Tải mô hình MobileNetV2
        $modelPath = public_path('mobilenet_v2_1.0_224_quant.tflite'); // Đường dẫn đến file mô hình
        $model = TensorFlow::loadModel($modelPath);

        // Thực hiện nhận dạng
        $predictions = TensorFlow::run($model, ['input' => $imageTensor]);

        // Xử lý kết quả nhận dạng
        // ...

        // Trả về kết quả
        return response()->json(['predictions' => $predictions]);
    }
}
