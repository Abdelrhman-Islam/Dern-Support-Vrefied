@extends('layouts.layout')
@section('title') Booking A ticket @endsection
@section('content')
<x-app-layout>

    <div class="container">



        <form action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <select name="cat" class="form-select mt-10" aria-label="Default select example">
                <option selected> Select Your Ticket Category </option>
                <option value="processor">processor</option>
                <option value="ram">RAM</option>
                <option value="harDisck">Hard Disck</option>
                <option value="graphicsCard">Graphics Card</option>
                <option value="cooler">Processor Coller</option>
                <option value="monitor">Monitor</option>
                <option value="case">Case</option>
                <option value="mouse">Mouse</option>
                <option value="keyboard">Keyboard</option>
              </select>

              <input class="mt-10" type="text" placeholder="Description"  name="desc" style="width: 100%" >

              <button type="submit" class="btn bg-success mt-3 p-2">Submit</button>


        </form>
    </div>
</x-app-layout>
@endsection
