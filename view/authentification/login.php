{{ include('header.php', {title: 'Login'}) }}
<div class="container-login">
    <form action="">
        <h2 class="titre-login">Authentification</h2>
        <input type="text" placeholder="Email" class="input-login">
        <input type="password" placeholder="Password" class="input-login">
        <input type="submit" value="Connexion" class="btn-login">
        <div class="container-lien">
            <a href="{{path}}login/forgot">Mot de passe oublié ?</a>
            <a href="">S'inscrire</a>
        </div>
    </form>
</div>