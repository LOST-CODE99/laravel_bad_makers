@section('header')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  bg-white border-bottom shadow-sm" id="header">
        <h5 class="my-0 mr-md-auto font-weight-normal">Lost Records</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{route('home')}}">Главная</a>
            <a class="p-2 text-dark" href="{{route('about')}}">О нас</a>
            <a class="p-2 text-dark" href="{{route('contact')}}">Контакты</a>
        </nav>
        <a class="btn  btn-dark" href="#">Зарегистрироваться</a>
    </div>

