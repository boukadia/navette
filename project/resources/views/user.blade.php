<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte de Profil</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .card h2 {
            margin: 0;
            color: #333;
        }
        .card p {
            margin: 5px 0;
            color: #666;
        }
        .card .email {
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>{{ $user['name']}}</h2>
    <p class="email">{{ $user['email'] }}</p>
</div>

</body>
</html>

</body>
</html>