//Quando o usuario clicar em abrir o popUp
// Abre o pop, obs: automatizar isto
$(function(){
    $("#popup").css({position: 'sticky'});
    $("#newsletterPopUp").dialog({
        position: {my: "right", at: "right fixed", of: top}
    });
});