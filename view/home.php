{{ include('header.php', {title: 'Home'}) }}
    <body>
    {% if guest==false %}
        <div class="container">
            <h1>Bienvenue {{ session.Prenom }} {{ session.Nom }} !</h1>
        </div>
        {% else %}
        <div class="container">
            <h1>Bienvenue dans mon projet MVC !</h1>
        </div>
    {% endif %}
    </body>
</html>