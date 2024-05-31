<?php
include 'public/header.html.php';
?>
<main class="content"></main>
<?php
include 'public/footer.html.php';
?> 

    <div class="form-container">
        <h2>Formulaire</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="pseudo">Pseudo *</label>
            <input type="text" id="pseudo" name="pseudo" required>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Taper votre prenom">

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="cv">CV</label>
            <input type="file" id="cv" name="cv">

            <label>Quels sont vos fruits préférés ?</label>
            <div class="fruit-options">
                <label for="orange">Orange</label>
                <input type="checkbox" id="orange" name="fruits[]" value="orange">

                <label for="fraise">Fraise</label>
                <input type="checkbox" id="fraise" name="fruits[]" value="fraise" checked>

                <label for="poire">Poire</label>
                <input type="checkbox" id="poire" name="fruits[]" value="poire">
            </div>

            <label for="codepostal">Code postal</label>
            <input type="text" id="codepostal" name="codepostal">

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit" class="submit">Envoyer</button>
            <button type="reset" class="cancel">Annuler</button>
        </form>

