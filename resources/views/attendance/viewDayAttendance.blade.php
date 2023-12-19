@extends('attendance.master')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Name</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">Batch Name</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($attendants as $index=>$attendant)
                                    <tr>
                                        <td scope="row">{{ $loop->index+1 }}</td>
                                        <td>{{$attendant->student_name}}</td>
                                        <td>{{$attendant->s_code}}</td>
                                        <td>{{$attendant->batch_name}}</td>
                                        <td>{{$attendant->submission_date}}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
