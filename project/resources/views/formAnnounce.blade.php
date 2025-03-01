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
        <h2 class="text-center mb-4">Créer une annonce</h2>
        <form action="/create" method="POST">
        
            @csrf
            <!-- Nom de l'annonce -->
            <div class="mb-3">
                <label class="form-label">Nom de l'annonce :</label>
                <input type="text" name="title" class="form-control" placeholder="Nom de l'annonce" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Description :</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Entrez la description" required></textarea>
            </div>

            <!-- Date de début -->
            <div class="mb-3">
                <label class="form-label">Date de début :</label>
                <input type="date" name="dateDebut" class="form-control" required>
            </div>
            
            <!-- Date de fin -->
            <div class="mb-3">
                <label class="form-label">Date de fin :</label>
                <input type="date" name="dateFin" class="form-control" required>
            </div>

            <!-- Heure de départ -->
            <div class="mb-3">
                <label class="form-label">Heure de départ :</label>
                <input type="time" name="heure-depart" class="form-control" required>
            </div>
            
            <!-- Heure d'arrivée -->
            <div class="mb-3">
                <label class="form-label">Heure d'arrivée :</label>
                <input type="time" name="heure-arrive" class="form-control" required>
            </div>
            
            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary w-100">Créer l'annonce</button>
        </form>
    </div>
</div>


    </body>
    </html>