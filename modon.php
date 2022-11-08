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
            <button type="button" class="btn btn-warning">10 €</button>
            <button type="button" class="btn btn-warning">20 €</button>
            <button type="button" class="btn btn-warning">30 €</button>
            <button type="button" class="btn btn-warning">50 €</button>
            <button type="button" class="btn btn-warning">100 €</button>
        </div>

        <form class="don-form">
            <!-- Nom et prénom-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom et prénon</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doe John">
            </div>
            <!-- Email-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="john.doe@gmail.com">
            </div>

            <!-- credit card-->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Numéro carte</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="4444333322221111">
            </div>

            <!-- date expiration -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Date expiration" aria-label="Date expiration">
                <span class="input-group-text">-</span>
                <input type="text" class="form-control" placeholder="CVV" aria-label="CVV">
            </div>


            <div class="text-center">
                <button type="button" class="btn btn-primary">Faire un don</button>
            </div>
        </form>

    </div>

</html>