$(document).ready(function () {
    $.getJSON(url + '/plugin/cidade_estado/estados_cidades.json', function (data) {
        var items = [];
        var options = '<option value="">Estado</option>';

        var selected = '';

        var estado_selected = $('.estado-select').val();
        if (estado_selected) {
            estado_selected = estado_selected.split(";");
        }

        var cidade_selected = $('.cidade-select').val();
        if (cidade_selected) {
            cidade_selected = cidade_selected.split(";");
        }

        $.each(data, function (key, val) {
            if ($.inArray(val.sigla, estado_selected) > -1) {
                selected = 'selected';
            } else {
                selected = '';
            }
            options += '<option ' + selected + ' value="' + val.sigla + '">' + val.sigla + '</option>';
        });

        $(".estados").html(options);

        $(".estados").change(function () {
            var options_cidades = '';
            var str = [];

            $(".estados option:selected").each(function () {
                str.push($(this).text());
            });

            $.each(data, function (key, val) {
                $.each(str, function (strKel, strVal) {
                    if (val.sigla == strVal) {
                        $.each(val.cidades, function (key_city, val_city) {
                            if ($.inArray(val_city, cidade_selected) > -1) {
                                selected = 'selected';
                            } else {
                                selected = '';
                            }
                            options_cidades += '<option ' + selected + ' value="' + val_city + '">' + val_city + '</option>';
                        });
                    }
                });
            });

            $(".cidades").html(options_cidades);

        }).change();
    });
});