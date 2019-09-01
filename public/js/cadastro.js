
$('.carousel').carousel({
    pause: true,
    interval: false,
    keyboard: true,
    wrap: false,
});
$(document).ready(function () {

    //Evento do clique de continuar
    $('#btnContinua').click(function () {
        var camposParaValidar = BotaoContinuar($('#btnContinua').val());
        return Validacao(camposParaValidar, (33.3333333 / camposParaValidar.length));
    }
    );

    //Evento de progresso de barra
    $('input').keypress(function () {
        if ($('input').val() == '') {
            var newprogress = newprogress - porcentagemPorUnidade;
            $('#theprogressbar').attr('aria-valuenow', newprogress).css('width', newprogress);
        }
    });
    
    $('#servicoInput').click(function () {
        var valorPro = 1.00;
        var valorProduto = $('#produtoInput').val();
        $('#valorProduto').text('R$  ' + valorProduto * valorPro);
    });
    $('#produtoInput').click(function () {
        var valorPro = 1.00;
        var valorProduto = $('#produtoInput').val();
        $('#valorProduto').text('R$  ' + valorProduto * valorPro);
    });
    setInterval(function () {
        var valorPro = 1.00;
        var valorProduto = $('#produtoInput').val();
        $('#valorProduto').text('R$  ' + valorProduto * valorPro);
        var valorSer = 10.00;
        var valorServico = $('#servicoInput').val();
        $('#valorServico').text('R$  ' + valorServico * valorSer);
        $('#valorTotal').text('R$  ' + (valorServico + valorProduto));
    });

});

function BotaoContinuar(parametroDePagina) {
    if (parametroDePagina == '2') {
        var inputs = ["campoPlaca", "campoMarcaVeiculo", "campoModeloVeiculo", "campoAnoVeiculo", "campoCorVeiculo", "campoCidadeVeiculo", "campoEstado"];
    }
    else {
        var inputs = ["campoNome", "campoSobrenome", "campoEmail", "campoDoCpf", "campoSenha", "campoConfirmaSenha"];
    }
    return inputs;
}

function Validacao(array, porcentagemPorUnidade) {
    for (input of array) {
        if ($('#' + input).val() == '') {
            alert('Campo em branco encontrado');
            return false;
        }
    }
    return true;
}
function juridico() {
    window.location.href = './cadastro_juridico.html';
}
function fisico() {
    window.location.href = './cadastro.html';
}
function redirecionar() {
    window.location.href = './redirecionamento.html';
}
function confirma()
{
    window.location.href = './confirmaCadastro.html';
}