(function ($) {
    $(function () {
        $('a#sign-out').on('click', function (e) {
            e.preventDefault();
            $('form#do-sign-out').submit();
        });
    });
    /*
     * Run right away
     * */

    if ((sessionFlashdata !== undefined) && (sessionFlashdata !== null))
    {
        if ((sessionFlashdata['notify'] !== undefined))
        {
            apiResponseNotify(sessionFlashdata['notify']);
        }
    }

})(jQuery);

function randomID(len)
{
    var char;
    var arr = [];
    var len = len || 5;

    do
    {
        char = ~~(Math.random() * 128);

        if ((
            (char > 47 && char < 58) || // 0-9
            (char > 64 && char < 91) || // A-Z
            (char > 96 && char < 123) // a-z

            // || (char > 32 && char < 48) // !"#$%&,()*+'-./
            // || (char > 59 && char < 65) // <=>?@
            // || (char > 90 && char < 97) // [\]^_`
            // || (char > 123 && char < 127) // {|}~
        )
        //security conscious removals: " ' \ `
        //&& (char != 34 && char != 39 && char != 92 && char != 96)

        )
        {
            arr.push(String.fromCharCode(char))
        }

    }
    while (arr.length < len);

    return arr.join('')
}


function apiResponseNotify(response)
{
    for (var i = -1, is = response.length; ++i < is;)
    {
        $.notify({
            message: response[i]
        }, {
            type: 'success',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message" style="color: #0f0f0f">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                '</div>'
        });
    }
}
