new WOW().init();

import swal from 'sweetalert';

$(document).ready(function () {
    $("#IOS").click(function () {
        $("#imgRequisito").attr('src', 'img/iphone8spacegrey_landscape.png');
    });
    $('#android').click(function () {
        $("#imgRequisito").attr('src', 'img/nexus5x-landscape.png');
    });

    $('#btnCadastro').click(function() {
        swal("Hello world!");
    });
});

