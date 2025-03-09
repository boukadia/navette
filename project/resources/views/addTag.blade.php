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
        <h2 class="text-center mb-4">Créer une tag</h2>
        <form action="/tag" method="POST">
        
            @csrf
            <!-- Nom de l'annonce -->
            <div class="mb-3">
                <label class="form-label">Nom de tag :</label>
                <input type="text" name="tagTitle" class="form-control" placeholder="Nom de l'annonce" required>
            </div>

       

           
            
            <!-- Bouton de soumission -->
            <button name="submit" type="submit" class="btn btn-primary w-100">Créer tag</button>
        </form>
    </div>
</div>


    </body>
    </html>