@extends('admin-panel/master')
@section('title','Student Count')
@section('content')
<div class="row">
    <h4 class="col-md-10">Student Count</h4>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('successMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('successMsg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            @if (session()->has('delmsg'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session()->get('delmsg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            <form action="{{url('admin/studentcount/create')}}" method="post">
                @csrf
                <div class="input-group">
                    <input type="number" name="studentcount" class="form-control" placeholder="Input new student count">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    @error('studentcount')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                </div>
            </form>
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Count</th>
                        <th>Actions</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
