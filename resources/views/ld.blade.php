@extends('layouts.layout')
@section('title') landing @endsection
@section('content')

    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand">DERN-SUPPORT</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('login') }}" aria-disabled="true">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <section class="text-center pt-3">
            <h1>Dern Support</h1>
        </section>

        <section class="pt-3" >
            <h2>Brief Overview</h2>
            <h4>Dern Support is a leading provider of comprehensive hardware support solutions for businesses and individuals. With a dedicated team of experienced technicians and a commitment to exceptional customer service, we offer a range of services to ensure that your hardware systems are running smoothly and efficiently.</h4>
        </section class="pt-10">

        <section class="text-center ">
            <div>
                <a class="btn btn-outline-success btn-lg m-5" href="{{ route('qa') }}"> Q / A </a>
                <a class="btn btn-outline-success btn-lg m-5" href="{{ route('register') }}"> SignUp </a>
            </div>
        </section>

    </div>

@endsection
