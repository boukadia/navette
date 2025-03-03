<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Centrer le formulaire au milieu de la page */
        .center-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .register-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-light">

<div class="center-container">
    <div class="register-card bg-white p-4">
        <h2 class="text-center mb-4">Inscrire</h2>
        <form method="post" action="/register">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="exemple@email.com" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Choisir un rôle</label>
                <select class="form-select" name="roleId" id="roleId" required>
                    <option value="" selected disabled>-- Sélectionnez un rôle --</option>
                    <option value="1">societe</option>
                    <option value="2">client</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe" required>
            </div>
            <!-- <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmez votre mot de passe" required>
            </div> -->
            <button type="submit" name="submit" class="btn btn-primary w-100">S'inscrire</button>
        </form>
        <p class="text-center mt-3">
            Déjà un compte ? <a href="/login" class="text-primary">Se connecter</a>
        </p>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
