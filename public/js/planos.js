$(document).ready(function () {
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