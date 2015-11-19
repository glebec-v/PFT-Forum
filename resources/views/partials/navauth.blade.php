@if (\Illuminate\Support\Facades\Auth::user())
    <li class="dropdown"><a href="/auth/logout">Выход</a></li>
@else
    <li class="dropdown"><a href="/auth/login">Вход</a></li>
    <li class="dropdown"><a href="/auth/register">Регистрация</a></li>
@endif