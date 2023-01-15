@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patvirtinkite el.pašto adresą</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Patvirtinimo nuoroda buvo nusiųsta į el.paštą
                        </div>
                    @endif

                    Prieš tęsdami, patikrinkite pašto dėžutę ir patvirtinkite elektroninį paštą
                    Negavote laiško?
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Siųsti dar kartą</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
