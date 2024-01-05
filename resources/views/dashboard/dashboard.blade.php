@extends('dashboard.master')
@section('content')
<div class="container mt-5">
    <div class="card mt-3">
        <div class="card_header bg-success text-white text-center">
           <h1 class="display-3 font-weight-bolder">Dashboard</h1>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card_header bg-success text-white text-center">
                    <h1 class="display-5 font-weight-bolder">Total batches: {{$batchesCount}}</h1>
                </div>
                <div class="card-body">
                    <div class="card-body rounded">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Total class</th>
                                        <th scope="col">Classes Done</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($batches as $batch)
                                        <tr>
                                            <td>{{$batch->batch_name}}</td>
                                            <td>{{$batch->total_classes}}</td>
                                            <td>{{$batch->classes_done}}</td>
                                            <td>{{$batch->status}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">

                        </div>


                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card_header bg-success text-white text-center">
                    <h1 class="display-5 font-weight-bolder">Total Students: {{$studentCount}}</h1>
                </div>
                <div class="card-body">
                    <div class="card-body rounded">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Students Id</th>
                                        <th scope="col">Classes Done</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{$student->student_name}}</td>
                                            <td>{{$student->s_code}}</td>
                                            <td>{{$student->mobile_number}}</td>
                                            <td>{{$student->address}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h1>Total students completed: {{$cStudents}}</h1>
                                    </div>
                                    <div class="col-lg-3">
                                        <h1>Total dropped students: {{$dStudents}}</h1>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="bg-success text-white text-center">
        <h4 class="display-3 font-weight-bolder">Welcome</h4>
    </div> --}}

</div>

@endsection
