<?php

namespace Tests\Feature;
namespace App\Tests;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\ImageClassifier;

// class ExampleTest extends TestCase
// {
//     /**
//      * A basic test example.
//      *
//      * @return void
//      */
//     public function test_example()
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200);
//     }
// }

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
