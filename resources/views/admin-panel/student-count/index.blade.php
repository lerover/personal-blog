@extends('admin-panel/master')
@section('title', 'Student Count')
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
                    <input type="number" name="studentcount"
                        class="form-control @error('studentcount') is-invalid @enderror"
                        placeholder="Input new student count">
                    <button type="submit" class="btn btn-primary ">Confirm</button>

                </div>
                @error('studentcount')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </form>
            <table class="table table-hover mt-3">
                <thead>
                    <tr>

                        <th>Student Amount</th>
                    </tr>

                </thead>

                <tbody>
                    @php
                        $total = 0
                    @endphp
                    @foreach ($students as $student)
                                        @php
                                            $total += $student->count;

                                        @endphp

                    @endforeach

                    <tr>
                        <td colspan="2">
                            @php
                                echo $total;
                            @endphp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection