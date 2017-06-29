/*global $,alertify,FileReader*/
$(document).ready(function () {
    "use strict";


    $('.edit').click(function () {
        $('.edit-sector').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('.add-sector').click(function () {
        $('.edit-sector1').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('.add-compare,.add-elem').click(function () {
        $('.edit-sector2').bPopup({
            speed: 450,
            transition: 'slideDown',
            positionStyle: 'fixed'
        });
    });

    $(".mess-send,.cont-mas").niceScroll({
        bouncescroll: true,
        cursoropacitymin: 1,
        cursorborder: "0px",
        scrollspeed: 200
    });

    $('.add-elements').click(function () {
        var element = $('.elements').html();
        $(this).parents('.edit-sector2').find('.elements').append(element).stop();
    });

    //for tooltip
    $('[data-toggle="tooltip"]').tooltip();

    $('.remove').click(function () {

        alertify.confirm("Do you want to delete this sectore ?",
            function () {
                alertify.success('Deleted ^_^');
            },
            function () {
                alertify.error('Canceled >_<');
            });
    });

    function url(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $(".target,.target1,.target2").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);

        }
    }
    $("#file,#file1,#show-adj8").change(function () {
        url(this);
    });

    $('.forget').click(function () {
        $('.form-body').hide(1000);
        $('.forgetpass').show(1000);
    });

    $('.gohome').click(function () {
        $('.forgetpass').hide(1000);
        $('.form-body').show(1000);
    });

});