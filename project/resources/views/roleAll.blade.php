<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }
        .navbar {
            background: #007bff;
            color: white;
        }
        .create-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .create-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    

<div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <span class="navbar-brand">Dashboard Admin</span>
            </div>
        </nav>
        <h2 class="mt-4">Tableau de bord des annonces</h2>
        <!-- Button to create new announce -->
        <a href="/role" class="create-btn mb-3">Créer une Role</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Titre</th>
                   
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role['name'] }}</td>
                   
                    <td>
                        <a href="{{ route('editRole', parameters: $role) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="{{ Route('deleteRole',parameters:$role) }}" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</body>
</html>