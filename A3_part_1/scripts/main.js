
function checkName() {
    let name_input = $('#name');
    let cur_val = name_input.val();
    let name_regex = "^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$";
    if (cur_val.match(name_regex) && cur_val !== '') {
        name_input.removeClass('is-invalid');
        name_input.addClass('is-valid');
        return true;
    } else {
        name_input.removeClass('is-valid');
        name_input.addClass('is-invalid');
        return false;
    }
}


function checkPlace() {

    let place_input = $('#place');
    let cur_val_p = place_input.val();
    let place_regex = "^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$";
    if (cur_val_p.match(place_regex) && cur_val_p !== '') {
        place_input.removeClass('is-invalid');
        place_input.addClass('is-valid');
        return true;
    } else {
        place_input.removeClass('is-valid');
        place_input.addClass('is-invalid');
        return false;
    }
}

function check () {


    $('#name').keyup(function () {
        checkName();
    });


    $('#place').keyup(function () {
        checkPlace();
    });

    $('#sub').click(function () {


        if (checkName() && checkPlace()) {

            $('form').submit();
        }

        else {
            $('#my_form')[0].reset();
            alert("enter valid values");
        }

    });

}


$(document).ready(function() {

    check();

});