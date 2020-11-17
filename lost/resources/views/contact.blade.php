@extends('layouts.app')

@section('title-block')
    Контакты
@endsection

@section('content')
    <div class="p-3">
        <div class = "col-xl">
            <div class="text-center " style="background-color: whitesmoke ;padding:10px;">
                <h1>Связаться с нами</h1>
                <form action="./mail.php" method="post">
                    <div class="form-group">
                        <label for="name">Ваше имя:</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <label for="email1">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Сообщение:</label>
                        <textarea class="form-control" name="Сообщение" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Отправить сообщение</button>
                </form>
            </div>
        </div>
    </div>
@endsection
