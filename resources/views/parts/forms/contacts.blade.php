@if(count($errors) > 0)
    <div class="contact-form__field--error">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
    </div>
@endif
<form class="contact-form__form" action="/contacts" method="post">
    {{ csrf_field() }}
    <label class="contact-form__label" for="name">Имя:
        <input required class="contact-form__field contact-form__field-name"
               type="text" id="name" name="name" placeholder="Как к Вам обращаться" value="{{ old('name') }}">
    </label>
    <label class="contact-form__label" for="email">Email:
        <input required class="contact-form__field contact-form__field-email"
               type="email" id="email" name="email" placeholder="Куда мне писать" value="{{ old('email') }}">
    </label>
    <label class="contact-form__label" for="content">Сообщение:
        <textarea required class="contact-form__field contact-form__field-message" id="content"
                  name="content" rows="8" placeholder="Кратко в чем суть">{{ old('content') }}</textarea>
    </label>
    {{--
    <label class="contact-form__label" for="captcha">Введите код указанный на картинке:
    <div class="captcha">
    <div class="captcha__img-field">
    <img class="captcha__img" src="/img/captcha.png" alt="captcha" width="108" height="33">
    </div>
    <input class="contact-form__field contact-form__field-name captcha__field" type="text" id="capcha" name="captcha">
    </div>
    </label>
    --}}
    <div class="contact-form__button-block">
        <input class="contact-form__button contact-form__button--submit" type="submit" value="Отправить">
        <input class="contact-form__button contact-form__button--reset" type="reset" value="Очистить">
    </div>
</form>