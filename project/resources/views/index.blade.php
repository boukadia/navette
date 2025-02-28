<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/formInsertion">insertion</a>
    <table>
        <thead>
            <tr>
                <th>title</th>
                <th>description</th>
                <th>price</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announces as $product )

            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td><button>delete</button></td>
                <td><button>modifier</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            background-color: #f8f9fa;
            transition: transform 0.3s, box-shadow 0.3s;
            width: 100rem;
            height: 20rem;
        }
        .container {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        /* Style de base */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    display: flex;
    justify-content: center;
    background-color: #333;
    overflow: hidden;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

.navbar li {
    display: inline;
    margin-right: 20px;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    display: inline-block;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}


        /* Centrer la navbar au milieu de la page */
        .container {
            /* height: 100vh; Hauteur égale à 100% de la fenêtre */
            display: flex;
            justify-content: center; /* Centrage horizontal */
            align-items: center; /* Centrage vertical */
        }
    

    </style>



    
<body>
    

<header class="position-fixed top-0 start-0 end-0 z-3 mx-auto w-100 max-w-md border border-light bg-white bg-opacity-75 py-3 shadow backdrop-blur-md rounded-3">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div>
                <a class="d-flex align-items-center" href="/">
                    <img class="h-7" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Logo" width="30">
                    <span class="visually-hidden">Website Title</span>
                </a>
            </div>

            <!-- Menu (Desktop) -->
            <nav class="d-none d-md-flex gap-3">
                <a class="text-dark text-decoration-none px-2 py-1 rounded small fw-medium transition" href="#">How it works</a>
                <a class="text-dark text-decoration-none px-2 py-1 rounded small fw-medium transition" href="#">Pricing</a>
            </nav>

            <!-- Actions -->
            <div class="d-flex align-items-center gap-2">
                <a class="btn btn-light d-none d-sm-inline-flex border" href="/login">Sign in</a>
                <a class="btn btn-primary" href="/login">Login</a>
            </div>
        </div>
    </div>
</header>

    <div class="container mt-5">
    @foreach ($announces as $announce )
        <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Image de l'annonce">
            <div class="card-body">
                <h5 class="card-title">{{ $announce->title }}</h5>
                <p class="card-text">{{ $announce->description }}</p>
                <p class="card-text">{{ $announce["dateFin" ]}} </p>
                <p class="card-text">{{ $announce["dateDebut" ]}} </p>
                <p class="card-text">{{ $announce["heure-depart" ]}} </p>
                <p class="card-text">{{ $announce["heure-arrive" ]}} </p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



 <!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .card {
            background-color: #f8f9fa;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Tableau de bord des annonces</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Annonce 1</td>
                    <td>Description de l'annonce 1</td>
                    <td>100€</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Modifier</button>
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Annonce 2</td>
                    <td>Description de l'annonce 2</td>
                    <td>200€</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Modifier</button>
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->
