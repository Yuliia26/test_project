$(function() {
    $('form').submit(function(e) {
        var form = $(this);
        var formData = new FormData();
        formData.append('name', form.find('input[name="name"]').val());
        formData.append('bedrooms', parseInt(form.find('select[name="bedrooms"]').val()));
        formData.append('bathrooms', parseInt(form.find('select[name="bathrooms"]').val()));
        formData.append('storeys', parseInt(form.find('select[name="storeys"]').val()));
        formData.append('garages', parseInt(form.find('select[name="garages"]').val()));
        formData.append('from', parseInt(form.find('input[name="from"]').val()));
        formData.append('to', parseInt(form.find('input[name="to"]').val()));
        $.ajax({
            url: "http://127.0.0.1:8000/api/search",
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            // async: true,
            method: 'POST',
            cache: false,
            success: function (res) {
                console.log(res);
                var html = '';
                if (res.length > 0) {
                    if ($('table.table').hasClass('table_hidden')) {
                        $('table.table').removeClass('table_hidden');
                        $('table.table').addClass('table_visible');
                    }
                    $.each(res, function(i, item) {
                        var cnt = i+1;
                        html+='<tr>';
                        html+='<th scope="row">'+cnt+'</th>';
                        html+='<td>'+item.name+'</td>';
                        html+='<td>'+item.price+'</td>';
                        html+='<td>'+item.bedrooms+'</td>';
                        html+='<td>'+item.bathrooms+'</td>';
                        html+='<td>'+item.storeys+'</td>';
                        html+='<td>'+item.garages+'</td>';
                        html+='</tr>';
                    });
                    $('#empty_response').html('');
                    $('#table tbody').html(html);
                } else {
                    if ($('table.table').hasClass('table_visible')) {
                        $('table.table').removeClass('table_visible');
                        $('table.table').addClass('table_hidden');
                    }
                    html = '<h5>По вашему запросу ничего не найдено.</h5>'
                    $('#empty_response').html(html);
                }
            },
            error: function () {
                console.log("error");
            }
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
    });
});
