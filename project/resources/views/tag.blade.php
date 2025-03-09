<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="content">
    <a href="/tag" class="btn btn-primary w-100">Créer tag</a>


        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tag as $tags )
                
                <tr>
                    
                    <td>{{ $tags['tagTitle'] }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Modifier</button>
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</body>
</html>