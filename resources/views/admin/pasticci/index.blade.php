
@extends('layouts.app')

@section('content')
<div>
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Ingredients</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pasticcios as $pasticcio)
                <tr>
                    <th scope="row">{{$pasticcio->name}}</th>
                    <td>{{$pasticcio->ingredients}}</td>
                    <td>{{$pasticcio->price}}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        non sono presenti pasticcis
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection
