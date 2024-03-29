<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('fontawesome-free-6.5.1-web/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/fontawesome-6.5.1-beta3/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/profil.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Brand</h1>
        </div>
        <ul>
            <li><i class="fa-solid fa-user"></i>Profil</li>
            <li><i class="fa-solid fa-clipboard-list"></i> Dashboard</li>
            <li><i class="fa-solid fa-bell"></i> Notification</li>
            <li><i class="fa-solid fa-calendar-check"></i> Agenda</li>
            <li><i class="fa-solid fa-envelope-circle-check"></i> Messagerie</li>
            <li><i class="fa-solid fa-lightbulb"></i> Aide</li>
            <li><i class="fa-solid fa-gears"></i> Paramètre</li>
            <li><i class="fa-solid fa-door-open"></i> Déconnexion</li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Recherche..">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
