function handleDeleteButton() {
    $("button[data-action='delete']").click(function(){
        const target = this.dataset.target;
        $(target).remove();
    });
}

function updateCounter() {
    const count = +$("#trick_images div.form-group").length;
    const countVideo = +$("#trick_videos div.form-group").length;

    $("#widgets-counter-image").val(count);
    $("#widgets-counter-video").val(countVideo);
}

$("#add-image").click(function(){
    // Recuperation du numero des futurs champs que je vais créer
    const index = +$("#widgets-counter-image").val();

    // Recuperation du prototype des entrées
    // AddEventListener sur le click etc...
    const tmpl = $("#trick_images").data("prototype").replace(/__name__/g, index);

    // Injection du code du prototype au sein de la div
    $("#trick_images").append(tmpl);

    // On gére le "placehold" de fichier lorsqu'un fichier est uploadé
    bsCustomFileInput.init();

    $("#widgets-counter-image").val(index + 1);

    // Gestion du bouton Supprimer
    handleDeleteButton();
});

$("#add-video").click(function(){
    // Recuperation du numero des futurs champs que je vais créer
    const index = +$("#widgets-counter-video").val();

    // Recuperation du prototype des entrées
    // AddEventListener sur le click etc...
    const tmpl = $("#trick_videos").data("prototype").replace(/__name__/g, index);

    // Injection du code du prototype au sein de la div
    $("#trick_videos").append(tmpl);

    $("#widgets-counter-video").val(index + 1);

    // Gestion du bouton Supprimer
    handleDeleteButton();
});

updateCounter();

handleDeleteButton();
