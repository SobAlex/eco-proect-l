<form method="post" action="{{ route('message.store') }}">

    @csrf

    <div class="form-group mb-2">
        <label>Имя</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

    <div class="form-group mb-2">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>

    <div class="form-group mb-2">
        <label>Телефон</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>

    <div class="form-group mb-2">
        <label>Тема</label>
        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject">
        @if ($errors->has('subject'))
        <div class="error">
            {{ $errors->first('subject') }}
        </div>
        @endif
    </div>

    <div class="form-group mb-2">
        <label>Сообщение</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4"></textarea>
        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>
    <br>
    <input type="submit" name="send" value="Отправить" class="btn btn-success">
</form>
