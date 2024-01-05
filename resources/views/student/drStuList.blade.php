@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="card mt-5">

        <div class="card-body rounded">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Batch</th>
                            <th scope="col">Status</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$student->student_name}}</td>
                                <td>{{$student->s_code}}</td>
                                <td>{{$student->batch_name}}</td>
                                <td>{{$student->status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-lg-12 text-center">
                    <a class="btn btn-warning float-end" href="{{ url('/students/list/download') }}">Export User Data</a>
                </div> --}}
            </div>


        </div>
    </div>
</div>

@endsection
