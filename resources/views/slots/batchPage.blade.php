@extends('slots.master')

@section('content')

<div class="container">
    {{-- details of the batch --}}
   <div class="card mt-5">
    <div class="card-header bg-success text-center text-white rounded">
        <h1 class="display-4  font-weight-bolder">{{$batch->batch_name}}</h1>
    </div>
    <div class="card-body rounded">
        <div class="row">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>Started at: {{$batch->starting_date}}</h2>
                        </div>
                        <div class="col-lg-3">
                            <h2>Class Time: {{$batch->class_time}}</h2>
                        </div>
                        <div class="col-lg-3">
                            <h2>Student seat: {{$batch->number_of_students}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        {{-- showing multiple values in a single attribute field --}}
                        @php
                            $days = explode(',', $batch->days);
                        @endphp
                        <div class="col-lg-5 mt-3">
                            <h2>Days:
                                @foreach ($days as $day)
                                    {{$day}},
                                @endforeach
                            </h2>
                        </div>
                        <div class="col-lg-3 mt-3">
                           <h2>Total Classes: {{$batch->total_classes}}</h2>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <h2>Classes Done: {{$batch->classes_done}}</h2>
                         </div>
                        <div class="col-lg-3 mt-3">
                           <h2>Classes Left: {{$batch->total_classes - $batch->classes_done}}</h2>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
   </div>
   {{-- Student list of he batch --}}
   <div class="card mt-5">
    
        <div class="card-body rounded">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($students as $index=>$student)
                    <tr>
                        <td scope="row">{{ $loop->index+1 }}</td>
                        <td>{{$student->student_name}}</td>
                        <td>{{$student->s_code}}</td>
                        <td>{{$student->email}}</td>
                        <td><a href="{{url('/student/details')}}/{{$student->id}}" class="btn btn-warning btn-sm rounded"><i class="fa fa-edit fa-alt"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

