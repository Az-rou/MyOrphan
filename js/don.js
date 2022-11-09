var montantDon = 0;


function selectionDon(valeurDon) {
    montantDon = valeurDon;
}

function faireDon() {

    // 1) Tester validité du formulaire.
    if (montantDon === 0) {
        afficherDialogError("Choisisez un montant");
    } else if (!$('#nomPrenom').val()) {
        afficherDialogError('Saisisez votre nom et prénom');
    } else if (!$("#email").val()) {
        afficherDialogError('Saisisez votre email');
    } else if (!$("#numeroCarte").val()) {
        afficherDialogError('Saisisez votre numéro de carte');
    } else if (!$("#dateExpiration").val()) {
        afficherDialogError("Saisisez la date d'expiration de votre carte");
    } else if (!$("#cvv").val()) {
        afficherDialogError("Saisisez le cryptograme de votre carte");
    }

}

function afficherDialogError(messageErreur) {

    $("#errorModalText").html("<li>" + messageErreur + "</li>");

    var myModal = new bootstrap.Modal($("#errorModal"), {});

    myModal.show();
}