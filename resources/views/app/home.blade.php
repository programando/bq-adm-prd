@extends('templates.app')
@section('content')
    <div class="container text-center">
        <br>
        <h1 >  @Lang('app-home.titulo') </h1>
        <br><br>

        <div class="row">

            <div class="col">
                <a href="{{ route('login') }}">
                    <img src="{{asset('images/img-adm-prd.png')}}" class="bq-img"> <br><br>
                    @Lang('app-home.tit_productos')
                </a> <br>
                <div class="text-left">  @Lang('app-home.descrip_product') </div>
            </div>

            <div class="col">
                <a href="@Lang('app.URL_TRON')">
                    <img src="{{asset('images/img-tron.png')}}" class="bq-img "> <br><br>
                @Lang('app-home.tit_tron') </a><br>
                <div class="text-left">
                    @Lang('app-home.descrip_tron')
                </div>
            </div>

            <div class="col">
                <a href="@Lang('app.URL_BALQUIMIA')">
                    <img src="{{ asset('images/img-balquimia.png')}}" class="bq-img"><br><br>
                    @Lang('app-home.tit_balquimia') </a>
                </a><br>
            <div class="text-left">  @Lang('app-home.descrip_balquimia') </div>
        </div>

    </div>
    </div>

@endsection

