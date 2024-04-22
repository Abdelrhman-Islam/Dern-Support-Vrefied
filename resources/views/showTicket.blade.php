
@extends('layouts.layout')
@section('title') Show @endsection
@section('content')
<x-app-layout>
    <div class="container">
        <div class="card m-4">
            <h5 class="card-header">Competition Info</h5>
            <div class="card-body">
              <h5 class="card-title">Competition Name: {{ $data->cat }} </h5>
              <h5 class="card-title">Competition Description: {{ $data->desc }} </h5>
              <h5 class="card-title">Competition Description: {{ $data->price }} </h5>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection


