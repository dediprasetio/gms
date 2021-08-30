
! function (a) {
    "use strict";
    a("html, body");
    var e = a(".pwdMask > .form-control"),
        t = a(".pwd-toggle");
    a(".lnk-toggler").on("click", function (t) {
        t.preventDefault();
        var e = a(this).data("panel");
        a(".authfy-panel.active").removeClass("active"),
            a(e).addClass("active")
    }),
        a(t).on("click", function (t) {
            t.preventDefault(),
                a(this).toggleClass("fa-eye-slash fa-eye"),
                a(this).hasClass("fa-eye") ? a(e).attr("type", "text") : a(e).attr("type", "password")
        }),
        a("#forget-lnk").on("click", function () {
            a(".authfy-login .nav-tabs").find("li").removeClass("active")
        }),
        a(window).on("load", function () {
            a(".square-block").fadeOut(),
                a("#preload-block").fadeOut("slow", function () {
                    a(this).remove()
                })
        })
}(jQuery);

/****************************
VALIDATE AND LOGIN
*****************************/
$().ready(function () {
    $("#commentForm").validate({
        rules: {
            username: {
                required: true,
                minlength: 1,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
            }
        },
        submitHandler: function (form) {
            /****************************
            REQUEST TOKEN & AUTHENTICATION
            *****************************/
            axios.post(
                base_url+'api/user/login',
                {
                    username: $('#username').val(),
                    password: $('#password').val()
                }, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                responseType: "application/json"
            }).then(function (response) {
                if (response.status == 200) {
                    notify('top', 'right', 'fa fa-check', 'success', 'animated fadeInDown', 'animated fadeOutDown', response.data.messages);
                    
                    sessionStorage.setItem("token", response.data.token);//SET SESSION STORAGE ITEM TOKEN. GET IT EX: sessionStorage.getItem(token)

                    /****************************
                    REQUEST TO SET SESSION USER
                    *****************************/
                    axios.post(
                        base_url + 'api/user/set-session',
                        {
                            data: response.data.user
                        }, {
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        responseType: "application/json"
                    }).then(function (response) {
                        window.location.replace(base_url+'dashboard');
                    }).catch(function (error) {
                        notify('top', 'right', 'fa fa-check', 'danger', 'animated fadeInDown', 'animated fadeOutDown', error.response.data.message);
                    });
                    /*****************************
                    END REQUEST TO SET SESSION USER
                    *****************************/


                } else {
                    notify('top', 'right', 'fa fa-check', 'danger', 'animated fadeInDown', 'animated fadeOutDown', response.statusText);
                }
            }).catch(function (error) {
                notify('top', 'right', 'fa fa-check', 'danger', 'animated fadeInDown', 'animated fadeOutDown', error.response.data.message);
            });
        }
    });
});