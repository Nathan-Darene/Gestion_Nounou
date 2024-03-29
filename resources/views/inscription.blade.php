<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Méta-informations -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Titre de la page -->
        <title>Social Home - Inscription</title>
        <!-- Feuilles de style -->
        <link rel="icon" type="image/png" href="{{ asset ('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png')}}">
        <link rel="stylesheet" href="../test/fontawesome-free-6.5.1-web/css/all.min.css">
        <!-- Nouveau fichier CSS pour la page d'inscription -->
        <link rel="stylesheet" href="{{ asset ('css/connexion.css')}}">
        <link rel="stylesheet" href="{{ asset ('css/cheickbox.css')}}">
        <link rel="stylesheet"
            href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Icône de la page -->
        <link rel="icon" type="image/png"
            href="../test/Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png">
    </head>
    <body>
        <!-- En-tête de la page -->
        <header>

        </header>
        <!-- Contenu principal de la page -->
        <main class="main">
            <!-- Carte d'inscription -->
            <div class="main-card-login">
                <div class="login-card">
                    <!-- Logo -->
                    <div class="login-card-header-image">
                        <!--i class="fa-solid fa-close"></i-->
                        <img src="{{ asset ('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" alt="Logo" height="70" width="180">
                    </div>
                    <!-- Formulaire d'inscription -->
                    <form class="login-card-form" action="" method="post">
                        <!-- Champ pour le nom d'utilisateur -->
                       <input type="text" placeholder="Nom d'utilisateur">
                        <!-- Champ pour l'email -->
                        <input type="email" placeholder="Adresse email">
                        <!-- Champ pour le mot de passe -->
                        <input type="password" placeholder="Mot de passe">
                        <!-- Champ de confirmation du mot de passe -->
                        <input type="password"
                            placeholder="Confirmez le mot de passe">
                            <p>Acceptez les parametre de confidentialité ?</p>
                        <label class="container">
                            <input type="checkbox" checked="checked">
                            <div class="checkmark"></div>
                        </label>
                        <!-- Bouton d'inscription -->
                        <input class="login-form-button" type="submit" placeholder="S'inscrire">
                        <div class="login-or">
                            <hr class="login-or-first-separation">
                            <span>OU</span>
                            <hr class="login-or-last-separation">
                        </div>
                        <div class="login-with-facebook">
                            <p>
                                <i class="fa fa-facebook-square"
                                    aria-hidden="true"></i>
                                Se connecter avec Facebook
                            </p>
                        </div>
                        <!-- Pied de page de la carte d'inscription -->
                        <footer>
                            <!-- Lien vers la page de connexion -->
                            <div class="signup-card-footer">
                                <p>Vous avez déjà un compte ? <a
                                        href="/connexion">Connectez-vous</a></p>
                            </div>
                            <!-- Section de téléchargement de l'application -->
                            <div class="download-app">
                                <p>Téléchargez l'application.</p>
                            </div>
                            <!-- Boutons de téléchargement de l'application -->
                            <div class="download-app-buttons">
                                <img
                                    src="https://i.ibb.co/0MVzVqf/download-appstore.png"
                                    alt="Download on the App Store" height="40"
                                    width="130">
                                <img
                                    src="https://i.ibb.co/hdsFFGB/download-playstore.png"
                                    alt="Get it on Google Play" height="40"
                                    width="130">
                            </div>
                        </footer>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>