<?php

namespace App\Tests\TestCase;

use App\Models\ImageClassifier;
use PHPUnit\Framework\TestCase;

class ImageClassifierTest extends TestCase
{
    public function testClassifyImage()
    {
        // Tạo môi trường test
        $image = file_get_contents('https://upload.wikimedia.org/wikipedia/commons/thumb/a4/Husky_dog.jpg/1200px-Husky_dog.jpg');

        // Khởi tạo đối tượng cần thiết
        $classifier = new ImageClassifier(storage_path('models/mobilenetv2.h5'));

        // Thực hiện test
        $result = $classifier->classifyImage($image);

        // Kiểm tra kết quả
        $this->assertEquals(1, $result['label']);
        $this->assertEquals(0.9995097, $result['confidence']);
    }
}
