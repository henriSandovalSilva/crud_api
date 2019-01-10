$(document).ready(function () {
    $('.modalDetalhes').click(function () {
        let codigo = $(this).data('codigo');

        $.ajax({
            url: url + "/local/ajaxGetDetalhes/" + codigo,
            method: 'POST',
            dataType: "json",
            data: {
                "codigo": codigo
            },
            async: false,
            success: function (data) {
                $('#imagem_src').attr('src', data.FotoDestaque ? data.FotoDestaque : url + '/img/sem_foto.jpg');
                $('#imagem_a_href').attr('href', data.FotoDestaque ? data.FotoDestaque : url + '/img/sem_foto.jpg');
                $('#codigo').text(data.Codigo);
                $('#categoria').text(data.Categoria);
                $('#bairro').text(data.Bairro);
                $('#cidade').text(data.Cidade);
                $('#valor').text(data.ValorVenda);
                $('#status').text(data.Status);
                $('#carac_tv').text(data.Caracteristicas.TVCabo);
                $('#carac_mobiliado').text(data.Caracteristicas.Mobiliado);
                $('#carac_hidro').text(data.Caracteristicas.Hidromassagem);
                $('#carac_sacada').text(data.Caracteristicas.Sacada);
                $('#modalDetalhes').modal('show');
            },
            error: function (data) {
                console.log('e');
                console.log(data);
            }
        });
    });
});