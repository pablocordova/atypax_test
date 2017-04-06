@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">Users</div>
                <div class="panel-body"> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all as $data)
                            <tr>
                                <form action="/home/{{ $data->id }}" method="POST">
                                    <input type="hidden" name="_method" value="PUT">
                                    <td><input type="name" name="name" value="{{ $data->name }}"></td>
                                    <td><input type="email" name="email" value="{{ $data->email }}"></td>
                                    <td>
                                        <button type="submit" class="btn btn-danger">Update</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody> 
                    </table>
                    <button type="button" onclick="window.location='{{ url("home") }}'" class="btn btn-info">Get</button>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">Create Users</div>

                <div class="panel-body">
                    <form action="/home" method="POST">
                        <!-- input type="hidden" name="_token" value="{{ csrf_token() }}"></input -->
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Name:</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
