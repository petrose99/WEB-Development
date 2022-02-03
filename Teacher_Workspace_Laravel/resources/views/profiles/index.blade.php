

@extends('layouts.app')

@section('title')
    Registered Roles | Espace Etudiant
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> <a href="/p/create" class="btn btn-success">ADD STUDENT</a></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">

                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Email</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>

                    <tbody>
                    <div class="row">  
                      
                        @foreach ($user->posts as $post)
                        <tr>
                            <td>{{ $post->nom }}</td>
                            <td>{{ $post->prenom }}</td>
                            <td>{{ $post->email }}</td>
                            <td>
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger">DELETE</a>
                        </td>
                        </tr>
                        @endforeach
                        
                      
                      </div>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection


@section('scripts')

@endsection