import * as tf from "@tensorflow/tfjs";

export default class ImageClassifier {
    constructor(modelPath) {
        this.model = tf.loadLayersModel(modelPath);
    }

    classifyImage(image) {
        const input = tf.image.decodeImage(image);
        const resized = tf.image.resizeBilinear(input, [224, 224]);
        const normalized = tf.image.permute(resized, [2, 0, 1]);
        const floatTensor = tf.cast(normalized, "float32");

        const predictions = this.model.predict(floatTensor);
        const label = predictions.argMax(-1).asNumber();

        return {
            label: label,
            confidence: predictions[0][label],
        };
    }
}
