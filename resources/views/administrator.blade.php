
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This is Administrator page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>First Name</th>
                            <td>E-Mail</th>
                            <th>User</th>
                            <th>Admin</th>
                            <th>Administrator</th>
                          </tr>
                        </thead>
                    </table>
                    @foreach($users as $user)
                    <form  method="POST" action="{{route('assighrole',$user->id)}}">
                        <table id="add-me" class="table table-striped">
                             <tbody class="table-container">  
                                <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                                        <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="User"></td>
                                        <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="Admin"></td>
                                        <td><input type="checkbox" {{ $user->hasRole('Administrator') ? 'checked' : '' }} name="Administrator"></td>
                                        {{ csrf_field() }} 
                                        <td><button type="submit" name="submit">Assign Roles</button></td>                          
                                </tr>  
                            </tbody>
                    </table>
                    </form>
                    @endforeach
                
                </div>
            </div>
        </div>
    </div>
@endsection




