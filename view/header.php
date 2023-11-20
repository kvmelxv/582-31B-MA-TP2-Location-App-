<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{path}}css/style.css">

    <title>{{ title }}</title>
</head>
<body>
    <header>
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="45" viewBox="0 -960 960 960" width="50"><path d="M120-360v-240h140q24 0 42 18t18 42v40q0 24-18 42t-42 18h-80v80h-60Zm260 0v-240h60v80h80v-80h60v240h-60v-100h-80v100h-60Zm280 0v-240h140q24 0 42 18t18 42v40q0 24-18 42t-42 18h-80v80h-60ZM180-500h80v-40h-80v40Zm540 0h80v-40h-80v40Z"/></svg>
        </div>
        <nav>
            <ul>
                <div>
                  <li><a href="{{path}}">Accueil</a></li>
                </div>
                {% if guest %}
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>
                    <li><a href="{{path}}login">Login</a></li>
                </div>
                {% else %}
                    {% if session.Type_idType == 1 %}
                    <div>
                        <li><a href="{{path}}usager">Liste de tous les utilisateurs</a></li>
                    </div>
                    <div>
                        <li><a href="{{path}}appartement">Liste de tous les appartements</a></li>
                    </div>
                    <div>
                        <li><a href="{{path}}reservation">Liste de toutes les réservations</a></li>
                    </div>
                    {% elseif session.Type_idType == 2 %}
                    <div>
                        <li><a href="{{path}}appartement">Liste de tous les appartements</a></li>
                    </div>
                    <div>
                       <li><a href="{{path}}reservation/create">Faire une réservation</a></li>
                    </div>
                {% endif %}
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="24" viewBox="0 -960 960 960" width="24"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                    <li><a href="{{path}}login/logout">Logout</a></li>
                </div>
                <div class="user">
                   <p>Username: {{session.Username}}</p>
                </div>
                {% endif %}
            </ul>
        </nav>
    </header>   
</body>
</html>