<body>
    {{ include('header.php', {title: 'add reserv'}) }}
    <h1>Ajouter une nouvelle réservation</h1>
    <form class="form" action="{{path}}reservation/store" method="POST">
        <label>Date de début</label>
        <input type="date" name="DateDebut">
        <label>Date de fin</label>
        <input type="date" name="DateFin">
        <label>Locataire</label>
        <select name="Utilisateur_Username">
            <option value="">Selectionner un locataire</option>
            {%  for usager in usagers %}
            <option value="{{ usager.Username }}">{{ usager.Prenom }} {{ usager.Nom }}</option>
            {% endfor %}
        </select>
        <label>Appartement</label>
        <select name="Appartement_idAppartement">
            <option value="">Selectionner un appartement</option>
            {%  for appart in apparts %}
            <option value="{{ appart.idAppartement }}">{{ appart.idAppartement }} - {{ appart.Description }}</option>
            {% endfor %}
        </select>
        <input class="btn" type="submit" value="save">
    </form>
</body>