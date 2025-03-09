<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">edit une role</h2>
        <form action="{{ Route("updateRole",$role) }}" method="POST">
        
            @csrf
            <!-- Nom de l'annonce -->
            <div class="mb-3">
                <label class="form-label">Nom du Role :</label>
                <input type="text" value="{{ $role->name }}" name="name" class="form-control" placeholder="Nom du Role" required>
            </div>

            <!-- Description -->
         
            <!-- Date de fin -->
          
            <!-- Bouton de soumission -->
            <button name="submit" type="submit" class="btn btn-primary w-100">modifier le role</button>
        </form>
    </div>
</div>


    </body>
    </html>