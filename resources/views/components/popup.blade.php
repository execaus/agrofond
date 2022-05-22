<div id="popup">
    <div class="formblock form1">
        <a href="javascript:void(0);" class="closepopup">×</a>
        <p class="title">Онлайн-заявка</p>
        <form action="{{ route('form') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="tel" name="telephone" placeholder="Телефон" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Сообщение"></textarea>
            <input type="submit" value="Отправить">
            <p class="accept">Нажимая на кнопку «Отправить» Вы соглашаетесь с пользовательским соглашением и политикой конфиденциальности </p>
        </form>
    </div>
    <div class="formblock form2">
        <a href="javascript:void(0);" class="closepopup">×</a>
        <p class="title">Обратный звонок</p>
        <form  action="{{ route('form') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="tel" name="telephone" placeholder="Телефон" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" value="Отправить">
            <p class="accept">Нажимая на кнопку «Отправить» Вы соглашаетесь с пользовательским соглашением и политикой конфиденциальности </p>
        </form>
    </div>
</div>
