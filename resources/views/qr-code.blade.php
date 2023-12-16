
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
</head>
<body>
    <center>
        <p>Scannez ce QR code pour accéder à notre site web.</p><br>
        <img src={{$qrCode}}
       <!-- />-->
    </center>

</body>
<script>

// Récupérer toutes les images dans la balise <center>
var images = document.querySelectorAll('center img');

       // Rendre la première image invisible (hidden)
       if (images.length > 0) {
           images[0].style.display = 'none';
       }

</script> 
</html>