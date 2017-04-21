<script type="text/javascript">
    $(document).ready(function () {
        var loginForm = $("#loginForm");
        loginForm.submit(function (e) {
            e.preventDefault();
            var formData = loginForm.serialize();
            $('#login-errors-email').html("");
            $('#login-errors-password').html("");
            $('#login-login-errors').html("");
            $("#login-email").removeClass("has-error");
            $("#login-password").removeClass("has-error");

            $.ajax({
                url: '/login',
                type: 'POST',
                data: formData,
                success: function () {
                    $('#loginModal').modal('hide');
                    location.reload(true);
                },
                error: function (data) {
                    /* console.log(data.responseText); */
                    var obj = jQuery.parseJSON(data.responseText);
                    if (obj.email) {
                        $("#login-email").addClass("has-error");
                        $('#login-errors-email').html(obj.email);
                    }
                    if (obj.password) {
                        $("#login-password").addClass("has-error");
                        $('#login-errors-password').html(obj.password);
                    }
                    if (obj.error) {
                        $("#login-email").addClass("has-error");
                        $("#login-password").addClass("has-error");
                        $('#login-errors-password').html(obj.error);
                    }
                }
            });
        });

        var registerForm = $("#registerForm");
        registerForm.submit(function (e) {
            e.preventDefault();
            var formData = registerForm.serialize();
            $('#register-errors-name').html("");
            $('#register-errors-email').html("");
            $('#register-errors-password').html("");
            $('#register-errors-repeat').html("");
            $("#register-name").removeClass("has-error");
            $("#register-email").removeClass("has-error");
            $("#register-password").removeClass("has-error");
            $("#register-repeat").removeClass("has-error");

            $.ajax({
                url: '/register',
                type: 'POST',
                data: formData,
                success: function () {
                    $('#registerModal').modal('hide');
                    location.reload(true);
                },
                error: function (data) {
                    /*console.log(data.responseText);*/
                    var obj = jQuery.parseJSON(data.responseText);
                    if (obj.name) {
                        $("#register-name").addClass("has-error");
                        $('#register-errors-name').html(obj.name);
                    }
                    if (obj.email) {
                        $("#register-email").addClass("has-error");
                        $('#register-errors-email').html(obj.email);
                    }
                    if (obj.password) {
                        $("#register-password").addClass("has-error");
                        $('#register-errors-password').html(obj.password);
                    }
                    if (obj.password_confirmation) {
                        $("#register-repeat").addClass("has-error");
                        $('#register-errors-repeat').html(obj.password_confirmation);
                    }
                }
            });
        });
    });
</script>