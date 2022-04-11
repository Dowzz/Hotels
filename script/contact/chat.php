<div class="chat_icon">
    <p>contacter<i class="fa fa-comments" aria-hidden="true"></i></p>
</div>

<div class="chat_box">

    <form id="contact_form" action="contact" method="post">
        <div class="section-title">
            <h3 id="myContactTitle">Nous contacter</h3>
        </div>
        <div class="textbox-wrap">
            <div class="input-group-contact">
                <input type='text' required="required" id="contactNom" name='=nom' value="" class="form-control"
                    placeholder="Nom">
            </div>

            <div class="input-group-contact">
                <input type='text' required="required" id="contactPrenom" name='prenom' value="" class="form-control"
                    placeholder="Prenom">
            </div>

            <div class="input-group-contact">
                <input type='email' required="required" id="contactEmail" name='email' value="" class="form-control"
                    placeholder="Email">
            </div>
            <div class="input-group-contact">
                <label for="contactSujet">Choix du sujet</label>
                <select name="contactSujet" id="sujet" value="">
                    <option value="recla" name="recla">Je souhaite poser une réclamation</option>
                    <option value="supp" name="supp">Je souhaite commander un service supplémentaire</option>
                    <option value="info+" name="infos+">Je souhaite en savoir plus sur une suite</option>
                    <option value="bug" name="bug">J’ai un souci avec cette application</option>
                </select>
            </div>
            <div class="input-group-contact">
                <textarea name="message" id="messagearea" cols="30" rows="10"
                    placeholder="Une question ? Une information ? laissez nous votre message !"></textarea>
            </div>



        </div>
        <div id="contact-btn">
            <input class="myContactButton" type="submit" name="login" value="Envoyer">
        </div>
    </form>

    <h3 id="messagealert"></h3>
</div>

<script>
$("#contact_form").submit(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    var nom = document.getElementById('contactNom').value;
    var prenom = document.getElementById('contactPrenom').value;
    var email = document.getElementById('contactEmail').value;
    var message = document.getElementById('messagearea').value;
    var sujet = document.getElementById('sujet').value;
    console.log(nom, prenom, email, sujet, message);
    if (message.length == 0) {
        $('#messagealert').html('Merci d\'enregistrer un message')

    } else {
        $.ajax({
            url: "./script/contact/contact.php",
            method: "post",
            data: {
                email: email,
                message: message,
                contact: 1,
            },
            success: function(response) {
                $('#messagealert').html(response);
            }

        })
    }
})
</script>