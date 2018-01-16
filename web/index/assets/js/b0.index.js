// URL


var url = window.location.href;

if (!url.match(/\/$/)) {
    url += '/';
}

// Regist User

function registUser() {

    var b0validate = $('#registuser').parsley('isValid').validate();

    if (b0validate == true) {

        var name = $('#name').val();
        var email = $('#email').val();

        var formData = {name:name, email:email};

        console.log(formData);

        $.ajax({
            url: url + 'index/regist',
            data: formData,
            type: "POST",
            success: function (data) {

                // Reset Input's
                $('#name').val("");
                $('#email').val("");

                // Visual
                $('.form .container').html('<div class="row"><h2>Saved Successfully</h2></div>');
                $('#registuser').remove();

                // Table
                $('table tr:last').after('<tr><td>'+name+'</td><td>'+email+'</td></tr>');

            }
        });
    }
}