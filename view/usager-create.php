<body>
    {{ include('header.php', {title: 'User create'}) }}
    <h1>Ajouter un nouvel usager</h1>
    
    <form class="form" action="{{path}}usager/store" method="post">
        <label>Username</label>
        <input type="text" name="Username">
        <label>Nom</label>
        <input type="text" name="Nom">
        <label>Prénom</label>
        <input type="text" name="Prenom">
        <label>Téléphone</label>
        <input type="text" name="Telephone">
        <label>Courriel</label>
        <input type="email" name="Courriel">
        <label>Type d'utilisateur</label>
        <select name="Type_idType">
            <option value="">Selectionner un type</option>
            {%  for type in types %}
            <option value="{{ type.idType }}">{{ type.type }}</option>
            {% endfor %}
        </select>
        <input class="btn" type="submit" value="save">
    </form>  
</body>