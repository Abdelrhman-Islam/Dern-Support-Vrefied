@extends('layouts.layout')
@section('title')Add Element | Inventory @endsection
@section('content')
<x-app-layout>

    <div class="container">

        <form action="{{ route('inventory.update') }}" method="POST">
            @csrf
            @method('PUT')
              <table class="table">
                <thead>
                <tr>
                    <th scope="col">Categoty</th>
                    <th scope="col">QTY</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                <select name="cat" class="form-select mt-10" aria-label="Default select example">
                                    <option selected> Select Your Ticket Category </option>
                                    <option value="processor">Processor</option>
                                    <option value="ram">RAM</option>
                                    <option value="harDisck">Hard Disck</option>
                                    <option value="graphicsCard">Graphics Card</option>
                                    <option value="cooler">Processor Coller</option>
                                    <option value="monitor">Monitor</option>
                                    <option value="case">Case</option>
                                    <option value="mouse">Mouse</option>
                                    <option value="keyboard">Keyboard</option>
                                  </select>
                            </td>
                            <td>
                                <input class="mt-10" type="text" placeholder="QTY"  name="qty" style="width: 100%" >

                            </td>
                            <td>
                                <button type="submit" class="btn bg-success mt-3 p-2">Submit</button>

                            </td>
                        </tr>
                    </form>

                </tbody>
            </table>



        </form>
    </div>
</x-app-layout>
@endsection
