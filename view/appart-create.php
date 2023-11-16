<body>
    {{ include('header.php', {title: 'Add app'}) }}
    <h1>Ajouter un nouvel appartement</h1>
    <span class="text-danger">{{ errors | raw }}</span>
    <form class="form" action="{{path}}appartement/store" method="POST">
        <label>Description</label>
        <input type="text" name="Description" value="{{ Appartement.Description }}">
        <label>Adresse</label>
        <input type="text" name="Adresse" value="{{ Appartement.Adresse }}">
        <label>Nombre de chambre</label>
        <input type="number" name="NombreChambre" value="{{ Appartement.NombreChambre }}">
        <label>Nombre de salle de bain</label>
        <input type="number" name="NombreSalleDeBain" value="{{ Appartement.NombreSalleDeBain }}">
        <label>surface</label>
        <input type="number" name="Surface" value="{{ Appartement.Surface }}">
        <label>Prix</label>
        <input type="number" name="Prix" value="{{ Appartement.Prix }}">
        <input class="btn" type="submit" value="save">
    </form>     
</body>
</html>