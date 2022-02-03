@extends('layouts.app')
{{--
@section('content')
    <div class="container">
        <form action="/profile/{{$post->id}}" enctype="multipart/form-data" method="post">
   
        @csrf
        @method('PATCH')

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
                <button class="btn btn-primary"> Edit Student</button>
            </div>

        </div>
    </div>
    </form>

    </div>
@endsection
--}}
@section('content')
    <div class="container">
   
        @csrf
        @method('PATCH')

        <div class="row">
        <div class="col-8 offset-2">
            {!! Form::open(['action' => 'PostController@store','method'=>'POST'])!!}
            @csrf
            <div class="form-group row">
                {!! Form::label('nom', 'Nom', ['class' => 'control-label','row'])!!}
                {!! Form::text('nom', '' ,['class' => 'form-control-panel'])!!}
            </div>

            <div class="form-group row">
                {!! Form::label('prenom', 'Prenom', ['class' => 'control-label'])!!}
                {!! Form::text('prenom', '' ,['class' => 'form-control-panel'])!!}
            </div>

            <div class="form-group row">
                {!! Form::label('email', 'Email', ['class' => 'control-label'])!!}
                {!! Form::text('email', '' ,['class' => 'form-control-panel'])!!}
            </div>
                {!! Form::submit('Edit Student',['class'=>'btn btn-primary'])!!}
                {!! Form::close() !!}
        </div>
        </div>
    </div>
    
     @endsection

