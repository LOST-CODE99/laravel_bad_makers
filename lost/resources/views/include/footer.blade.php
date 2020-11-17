@section('footer')

    <footer class="footer mt-auto py-3" style="background-color:ghostwhite;">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-md-4" style="margin: 0;padding: 0">
                <h5>Навигация</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{route('home')}}">Главная</a></li>
                    <li><a class="text-muted" href="{{route('contact')}}">Контакты</a></li>
                    <li><a class="text-muted" href="{{route('about')}}">О нас</a></li>
                </ul>
            </div>
        </div>
    </footer>

