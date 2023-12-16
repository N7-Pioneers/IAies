

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
</head>
<body>
    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
    <p>Scannez ce QR code pour afficher les données du joueur.</p>
</body>
</html>