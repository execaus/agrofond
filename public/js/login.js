$('.auth_message').hide();

$(document).ready(function(){
    $('.login_form').submit(function (e){
        e.preventDefault();
        let formData = new FormData($('.login_form')[0]);

        $.post('/admin', {  login: formData.get('login'), password: formData.get('password') }).done((response)=>{
            if(response.status === 'success'){
                location.href = '/admin/contacts';
            }
            else{
                $('.auth_message').text('Неправильно введен логин или пароль').slideDown();
            }
        });
    });
})
