$.get('../api/telephone').done(
    (response) => {
        $.post('../get-telephone', {telephone: response}).done(
            (response) => { $('#telephone_content').append(response); }
        )
    }
)

$.get('../api/address').done(
    (response) => {
        $.post('../get-address', {address: response}).done(
            (response) => { $('#address_content').append(response); }
        )
    }
)

$.get('../api/email').done(
    (response) => {
        $.post('../get-email', {email: response}).done(
            (response) => { $('#email_content').append(response); }
        )
    }
)

$(document).on('click', '#update_btn', (event) => {
    $('.update_btn').text('Изменить')
    event.target.innerText = 'Подтвердить';
    let input_id = event.target.getAttribute('data-target');
    let input = document.getElementById(input_id);
    let btn_id = event.target.getAttribute('data-btn');
    let btn = document.getElementById(btn_id);
    if(event.target.classList.contains('confirm_btn')){
        btn.click();
    }
    $('.update_btn').removeClass('confirm_btn');
    $('.form_hidden_input').removeClass('form_hidden_input_active');
    input.classList.add('form_hidden_input_active');
    event.target.classList.add('confirm_btn');
})



$('#contacts').addClass('active');
