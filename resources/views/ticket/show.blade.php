@extends('layouts.layout')
@section('title') Show Ticket @endsection
@section('content')
<x-app-layout>
    <div class="container">
        <div class="card m-4">
            <h5 class="card-header">Ticket Info</h5>
            <div class="card-body">
              <h5 class="card-title">Category: {{ $data->cat }} </h5>
              <h5 class="card-title"> Description: {{ $data->desc }} </h5>
              <h5 class="card-title">Price: {{ $data->price }} </h5>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection


