@extends('layouts.layout')
@section('title') Booking A ticket @endsection
@section('content')
<x-app-layout>

    <div class="container">



        <form action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <select name="cat" class="form-select mt-10" aria-label="Default select example">
                <option selected> Select Your Ticket Category </option>
                <option value="CPU (Central Processing Unit)">CPU (Central Processing Unit)</option>
                <option value="GPU (Graphics Processing Unit)">GPU (Graphics Processing Unit)</option>
                <option value="RAM (Random Access Memory)">RAM (Random Access Memory)</option>
                <option value="SSD (Solid State Drive)">SSD (Solid State Drive)</option>
              </select>

              <input class="mt-10" type="text" placeholder="Description"  name="desc" style="width: 100%" >

              <button type="submit" class="btn bg-success mt-3 p-2">Submit</button>

        </form>

    </div>
</x-app-layout>
@endsection
