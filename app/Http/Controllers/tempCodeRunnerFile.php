   $imageData = base64_encode(file_get_contents($imagePath)); // Convert image into Base64 encoded data
        $qrCode1 = QrCode::size(300)->generate($imageData)