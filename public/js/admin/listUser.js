var API = "http://quiet-cliffs-41062.herokuapp.com/api/user";

$(document).ready(function () {
    getApi();
})
function getApi() {
    $.ajax({
        type: "GET",
        dataType: 'jsonp',
        url: API
    }).done(function (data) {
        var output = '';
        $.each(data, function (key, data) {
                output += '<tr>';
                output += '<td></td>';
                output += '<td>'+data.id +'</td>';
                output += '<td>'+data.fullname +'</td>';
                output += '<td>'+data.phone +'</td>';
                output += '<td>'+data.password +'</td>';
                output += '<td>'+data.gender +'</td>';
                output += '<td>'+data.email +'</td>';
                output += '<td>' +
                    '<a href="#" class="fa fa-edit"> Edit</a> <p> </p> <a href="#" class="fa fa-trash"> Delete</a>'+'</td>';
                output += '</tr>';
        });
        // in vào List User
        $('#demo-get').html(output);

    });
}
