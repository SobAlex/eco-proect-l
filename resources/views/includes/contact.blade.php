<p class="mb-4 fs-3 text"><b>{{ $contact->name_firm }}</b></p>

<p class="fs-5 text lh-sm">{{ $contact->slogan }}</p>

<p class="fs-5 text">Адрес: {{ $contact->adress }}</p>

<p class="fs-5 text">График работы: {{ $contact->work_time }}</p>

<p class="fs-5 text">Раб. тел.: <a href="tel:{{ $contact->tel_work }}">{{ $contact->tel_work }}</a></p>

<p class="fs-5 text">Моб. тел.: <a href="tel:{{ $contact->tel_mob }}">{{ $contact->tel_mob }}</a></p>

<p class="fs-5 text">E-mail: <a href="mailto:presurseco@mail.ru">{{ $contact->email }}</a></p>
