<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirigiendo a Google Maps</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            max-width: 40%;
            height: auto;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DIRECCION
            const address = 'C.' + @json($direccion);
            const baseUrl = "https://www.google.com/maps/search/?api=1&query=";
            
            // CODIFICAR LA DIRECCION
            const encodedAddress = encodeURIComponent(address);
            const url = `${baseUrl}${encodedAddress}`;
            
            // REDIRECCIONAMIENTO
            window.location.href = url;
        });
    </script>
</head>
<body>
    <img src="{{ asset('Imagenes/Maps.png') }}" alt="Logo">
</body>
</html>