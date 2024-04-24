@extends('layouts.layout')
@section('title') Home @endsection
@section('content')

<x-app-layout>
    <div class="container">
<div class="row">

        @foreach ($tickets as $ticket )
        <div class="col-3 mt-2 text-center ">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $ticket->cat }}</h5>
                  <p class="card-text">{{ $ticket->desc }}</p>
                  <a href="{{ route('ticket.show', $ticket->id) }}" class="btn btn-primary">View</a>
                </div>
              </div>
        </div>

        @endforeach
    </div>
        <a class="btn btn-success m-3 text-center" href="{{ route('ticket.create') }}">Book New Ticket</a>
    </div>
</x-app-layout>
@endsection
