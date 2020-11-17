@extends('layouts.app')

@section('title-block')
    Главная
@endsection

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="color: white">
        <h1 class="display-4">Наши услуги:</h1>
    </div>
    <div class="container">
        <div class ="card-images">
            <div class="card-deck mb-3 text-center">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="images/5.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Сведем ваш проект на профессиональном оборудовании.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-dark btn-block ">Записаться</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="images/3.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Напишем аранжировку под ваш проект со всеми желаниями и предпочтениями.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn btn-dark btn-block">Записаться</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="images/4.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Запишем ваш вокал и живые инструменты в спецальном подготовленом для этого помещении.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-dark btn-block">Записаться</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
