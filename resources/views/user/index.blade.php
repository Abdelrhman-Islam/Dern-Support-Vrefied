@extends('layouts.layout')
@section('title') Home @endsection
@section('content')

<x-app-layout>
    <div class="container">
<div class="row">

    <div class="col-xxl-7 mt-4 text-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">product</th>
                <th scope="col">Description</th>
                <th scope="col">price</th>
              </tr>
            </thead>
            <tbody>
             @foreach ( $tickets as $ticket )
                <tr>
                    <td>{{ $ticket->cat }}</td>
                    <td>{{ $ticket->desc }}</td>
                    <td>{{ $ticket->price }}</td>
                </tr>
             @endforeach
            </tbody>
          </table>
          <a class="btn btn-success m-3 text-center" href="{{ route('ticket.create') }}">Book New Ticket</a>

    </div>
    </div>
</x-app-layout>
@endsection
