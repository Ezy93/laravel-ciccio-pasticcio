@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.pasticcios.update', $pasticcio)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name">Inserisci il nome del pasticcio:</label>
                        <input type="text" name="name" id="name" value="{{$pasticcio->name}}">
                    </div>
                    <div class="mb-4">
                        <label for="ingredients">Inserisci la lista ingredienti:</label>
                        <input type="text" name="ingredients" id="ingredients" value="{{$pasticcio->ingredients}}">
                    </div>
                    <div class="mb-4">
                        <label for="price">Inserisci il prezzo del pasticcio:</label>
                        <input type="number" name="price" id="price" value="{{$pasticcio->price}}">
                    </div>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>

@endsection
