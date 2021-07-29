(function($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function() {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        //check && validateEmailSenha() depois de confirmado
        if (validateEmailSenha()) check = false;

        return check;
    });


    $('.validate-form .input100').each(function() {
        $(this).focus(function() {
            hideValidate(this);
        });
    });

    function validateEmailSenha() {
        document.getElementById("erros").innerText = "";
        if (document.getElementById("email1").value !== document.getElementById("email2").value) {
            //console.log($(document.getElementById("email1")).parent());
            showValidate(document.getElementById("email1"));
            showValidate(document.getElementById("email2"));
            //console.log(document.getElementById("erros"));
            //console.log(document.getElementById("erros").innerText);
            document.getElementById("erros").innerText += "Emails diferentes |  ";

            if (document.getElementById("pass1").value !== document.getElementById("pass2").value) {
                showValidate(document.getElementById("pass1"));
                showValidate(document.getElementById("pass2"));
                document.getElementById("erros").innerText += "  Senhas diferentes";
            }

            return false;
        }



        document.getElementById("erros").innerText = "";

    }

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else if ($(input).attr('type') == 'nick' || $(input).attr('name') == 'nick') { // validar nick
            if ($(input).val().trim().match(/^[A-Za-z0-9-]+$/) == null) {
                return false;
            }
        } else if ($(input).attr('type') == 'cpf' || $(input).attr('name') == 'cpf') { // validar cpf
            if ($(input).val().trim().match(/^[0-9]{11}$/) == null) {
                return false;
            }
        } else if ($(input).attr('type') == 'password' || $(input).attr('name') == 'pass') { //validar senha
            if ($(input).val().trim().match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/) == null) {
                return false;
            }
        } else if ($(input).attr('type') == 'tel' || $(input).attr('name') == 'tel') { //validar telefone
            if ($(input).val().trim().match(/^[0-9]{11}$/) == null) {
                return false;
            }
        } else { //demais casos
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }



})(jQuery);