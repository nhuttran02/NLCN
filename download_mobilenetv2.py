# import tensorflow as tf
# import tensorflow_hub as hub

# # Đường dẫn đến nơi bạn muốn lưu trữ mô hình
# model_path = "mobilenet_v2_1.0_224_quant.tflite"

# # Tải mô hình MobileNetV2 từ TensorFlow Hub
# model_url = "https://android.googlesource.com/platform/test/mlts/models/+/refs/heads/android10-qpr2-s3-release/assets/mobilenet_v2_1.0_224_quant.tflite"
# model = hub.load(model_url)

# # Lưu mô hình dưới dạng tệp .tflite
# tf.saved_model.save(model, model_path)
import requests

# Đường dẫn đến nơi bạn muốn lưu trữ mô hình
model_path = "mobilenet_v2_1.0_224_quant.tflite"

# Đường dẫn cụ thể đến mô hình trên Android Source Repository
model_url = "https://android.googlesource.com/platform/test/mlts/models/+/refs/heads/android10-qpr2-s3-release/assets/mobilenet_v2_1.0_224_quant.tflite"

# Tải mô hình từ URL
response = requests.get(model_url)

# Kiểm tra xem có lỗi không
if response.status_code == 200:
    # Lưu mô hình dưới dạng tệp .tflite
    with open(model_path, "wb") as f:
        f.write(response.content)
    print("Download successful.")
else:
    print(f"Failed to download the model. Status code: {response.status_code}")
