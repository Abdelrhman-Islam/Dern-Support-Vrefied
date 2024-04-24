@extends('layouts.layout')
@section('title') Home @endsection
@section('content')
    <x-app-layout>
        <div class="container text-center mt-3">

            <a class="btn btn-outline-success" href="{{ route('inventory.index') }}"> Inventory </a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoty</th>
                    <th scope="col">Last</th>
                    <th scope="col">Price</th>
                    <th scope="col">Probability</th>
                    <th scope="col">Change probability</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $ticket )
                        <tr>
                            <th scope="row">{{ $ticket->id }}</th>
                            <td>{{ $ticket->cat }}</td>
                            <td>{{ $ticket->desc }}</td>
                            <td>{{ $ticket->price }}</td>
                            <td>{{ $ticket->prob }}</td>
                            <td>
                                <form action="{{ route('prob.set', $ticket->id) }}", method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="prob" class="form-select" aria-label="Default select example">
                                        <option selected> Select probability </option>
                                        <option value="urgent" class="bg-danger">Urgent</option>
                                        <option value="important" class="bg-warning">Important</option>
                                        <option value="notUrgent" class="bg-success">Not urgent</option>
                                    </select>

                            </td>
                            <td>
                                <button type="submit">Submit</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </x-app-layout>
@endsection
