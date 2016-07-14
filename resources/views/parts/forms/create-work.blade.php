@if(count($errors) > 0)
    <div class="">
        @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
<form class="" action="/add-work" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label class="" for="title">Название:
        <input required class=""
               type="text" id="title" name="title" placeholder="Название работы" value="{{ old('title') }}">
    </label><br>
    <label class="" for="content">Описание работы:
        <textarea required class="" id="description"
                  name="description" rows="8" placeholder="Описание работы">{{ old('description') }}</textarea>
    </label><br>
    <label class="" for="url">Ссылка:
        <input required class=""
               type="url" id="url" name="url" placeholder="Ссылка в сети" value="{{ old('url') }}">
    </label><br>
    <label class="" for="github">Ссылка на гитхаб:
        <input required class=""
               type="url" id="github" name="github" placeholder="Ссылка на гитхаб" value="{{ old('github') }}">
    </label><br>
    <label class="" for="preview">Превью:
        <input required class=""
               type="file" id="preview" name="preview">
    </label><br>
    <div class="contact-form__button-block">
        <input class="contact-form__button contact-form__button--submit" type="submit" value="Отправить">
        <input class="contact-form__button contact-form__button--reset" type="reset" value="Очистить">
    </div>
</form>