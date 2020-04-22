<?php
session_start();
include ('header.inc.php');

if(array_key_exists('errors', $_SESSION)):
?>
<div class="alert alert-danger">
    <?= implode('<br>', $_SESSION['errors']); ?>
</div>

<?php unset($_SESSION['errors']); endif; ?>



    <div class="container">
        <div class="d-flex">
            <div>
                <p class="font-weight-bold text-right">Alexis Mathieu</p>
                <p class="text-right">Dirigeant de la société</p>
                <p>a.mathieu@boumat-tp.fr</p>
                <p class="text-right">06.60.16.37.95</p>
            </div>
            <img src="/images/assets/gémeaux.jpg" alt="..." class="img-thumbnail">
            <img src="/images/assets/Lion.png" alt="..." class="img-thumbnail">
            <div>
                <p class="font-weight-bold text-left">Dimitri Mathieu</p>
                <p class="text-left">Responsable administratif</p>
                <p class="text-left">et financier</p>
                <p>dimitri.mathieu@boumat-tp.fr</p>
                <p class="text-left">06.78.34.54.83</p>
            </div>
        </div>



        <form action="post_contact.php" method="post">
        <div class="form-row justify-content-center">
            <div class="col-auto">
                <label for="validationServer01">Prénom</label>
                <input type="text" name="firstname" class="form-control is-valid" id="validationServer01" placeholder="Prénom" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="col-auto">
                <label for="validationServer02">Nom</label>
                <input type="text" name="name" class="form-control is-valid" id="validationServer02" placeholder="Nom" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="col-auto">
                <label for="validationServerEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="text" name="email" class="form-control is-invalid" id="validationEmail" placeholder="Email" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="col-auto">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Votre demande concerne : </label>
            <select class="custom-select my-1 mr-sm-2" name="reason" id="inlineFormCustomSelectPref">
                <option selected>Choisir</option>
                <option value="1">Réalisation de chantier</option>
                <option value="2">Demande de devis</option>
                <option value="3">Comptabilité/gestion</option>
            </select>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">On vous écoute : </label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>


<!--        <div class="form-group justify-content-center">-->
<!--            <div class="form-check">-->
<!--                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>-->
<!--                <label class="form-check-label" for="invalidCheck3">-->
<!--                    Agree to terms and conditions-->
<!--                </label>-->
<!--                <div class="invalid-feedback">-->
<!--                    You must agree before submitting.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>

<?php include ('footer.inc.php')?>
