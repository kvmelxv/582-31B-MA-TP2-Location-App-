<body>
    {{ include('header.php', {title: 'Add app'}) }}
    <h1>Ajouter un nouvel appartement</h1>
    <form class="form" action="{{path}}appartement/store" method="POST">
        <label>Description</label>
        <input type="text" name="Description">
        <label>Adresse</label>
        <input type="text" name="Adresse">
        <label>Nombre de chambre</label>
        <input type="number" name="NombreChambre">
        <label>Nombre de salle de bain</label>
        <input type="number" name="NombreSalleDeBain">
        <label>surface</label>
        <input type="number" name="Surface">
        <label>Prix</label>
        <input type="number" name="Prix">
        <input class="btn" type="submit" value="save">
    </form>     
</body>
</html>