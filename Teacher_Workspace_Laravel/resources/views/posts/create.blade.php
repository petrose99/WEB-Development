@extends('layouts.app')
@section('content')
<div class='container'>
    <form action="/p" enctype="multipart/form-data" method="post">
   
        @csrf

        <div class="row">
        <div class="col-8 offset-2">

            <div class="form-group row">
                    <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>

                    <div class="col-md-6">
                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
            </div>

            <div class="form-group row">
                    <label for="prenom" class="col-md-4 col-form-label text-md-right">Prenom</label>

                    <div class="col-md-6">
                            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
            </div>

            <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                    <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
            </div>

            <div class="">
                <button class="btn btn-primary"> Add New Student</button>
            </div>

        </div>
    </div>
    </form>
    
</div>
@endsection

