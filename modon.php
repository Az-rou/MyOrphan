<!DOCTYPE html>
<html>
<head>
    <title>MyOrphan</title>
    <?php include('composant/header.html')?>
</head>

<body>

<div class="menus">
    <?php include('composant/menu.html');?>
<div>

</body>


    <div class="container page-container">

        <div class="don-text text-center mt-2 mb-5">
            <br><br>
            <h1>FAIRE UN DON</h1>
            <h4>-*-*-*-*-*-</h4>
            <p>Aidez-nous à aider en soutenant nos actions par un don.</p>
        </div>


        <div class="buttons text-center">
            <button type="button" class="btn btn-warning" onclick="selectionDon(10)">10 €</button>
            <button type="button" class="btn btn-warning" onclick="selectionDon(20)">20 €</button>
            <button type="button" class="btn btn-warning" onclick="selectionDon(30)">30 €</button>
            <button type="button" class="btn btn-warning" onclick="selectionDon(50)">50 €</button>
            <button type="button" class="btn btn-warning" onclick="selectionDon(100)">100 €</button>
        </div>

        <form class="don-form">
            <!-- Nom et prénom-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom et prénon</label>
                <input type="text" class="form-control" id="nomPrenom" placeholder="Doe John">
            </div>
            <!-- Email-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" placeholder="john.doe@gmail.com">
            </div>

            <!-- credit card-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Numéro carte</label>
                <input type="number" class="form-control" id="numeroCarte" placeholder="4444333322221111">
            </div>

            <!-- date expiration -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="dateExpiration" placeholder="Date expiration" aria-label="Date expiration">
                <span class="input-group-text">-</span>
                <input type="number" class="form-control" id="cvv" placeholder="CVV" aria-label="CVV">
            </div>


            <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="faireDon()">Faire un don</button>
            </div>
        </form>

    </div>

<div class="dialog">
    <div class="modal" tabindex="10" id="errorModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Don</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul  id="errorModalText">
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script  src="js/don.js"></script>

<?php include("composant/js.html")?>
</html>