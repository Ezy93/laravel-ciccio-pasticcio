@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            {{$pasticcio->name}}
                        </div>
                        <div class="card-subtitle">
                            {{$pasticcio->price}}
                        </div>
                        <div class="card-text">
                            {{$pasticcio->ingredients}}
                        </div>
                    </div>
                    <div class="card-footer">
                        numero totale di pasticci disponibili: {{$pasticciosCount}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
