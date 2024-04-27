@extends('layouts.layout')
@section('title') Home @endsection
@section('content')
    <x-app-layout>
        <div class="container text-center mt-3">

            <a class="btn btn-outline-success mb-3" href="{{ route('inventory.index') }}"> Inventory </a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Categoty</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Probability</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Change probability</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $ticket )
                        <tr>
                            <td>{{ $ticket->cat }}</td>
                            <td>{{ $ticket->desc }}</td>
                            <td>{{ $ticket->price }}</td>
                            <td>{{ $ticket->prob }}</td>
                            <td>{{ $ticket->created_at }}</td>
                            <td>
                                <form action="{{ route('prob.set', $ticket->id) }}", method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="radio" id="Urgent" name="prob" value="Urgent">
                                    <label for="Urgent">Urgent</label>
                                    <input type="radio" id="css" name="prob" value="Important">
                                    <label for="Important">Important</label>
                                    <input type="radio" id="NotUrgent" name="prob" value="NotUrgent">
                                    <label for="NotUrgent">Not Urgent</label>
                            <td>
                                <button type="submit">Submit</button>
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-app-layout>
@endsection
