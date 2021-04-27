$(document).ready(function () {

    //E-mail Ajax Send
    $(".form").submit(function () { //Change
        console.log('Работает')
        var th = $(this);
        console.log(th)
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function () {
            alert("Thank you!");
            setTimeout(function () {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

});