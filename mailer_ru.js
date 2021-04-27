$(document).ready(function () {

    //E-mail Ajax Send
    $(".form").submit(function (e) { //Change
        e.preventDefault();

        var th = $(this)
        $.ajax({
            url: "mail_ru.php",
            type: "POST",
            data: th.serialize(),
            success: function (res) {

            },
            error: function () {
                alert('Ошибка')
            }
        })


    })
})

