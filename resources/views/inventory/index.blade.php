@extends('layouts.layout')
@section('title') Inventory @endsection
@section('content')
    <x-app-layout>
        <div class="container text-center mt-3">

            <a class="btn btn-outline-success" href="{{ route('inventory.create') }}">Add Element to Inventory </a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoty</th>
                    <th scope="col">QTY</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $inv )
                        <tr>
                            <th scope="row">{{ $inv->id }}</th>
                            <td>{{ $inv->cat }}</td>
                            <td>{{ $inv->qty }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </x-app-layout>
@endsection
