@extends('student.master')
@section('content')

    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-secondary text-white text-center font-weight-bolder rounded">
                <h2 class="display-4">Student Details</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div>Student Name: <h3>{{$student->student_name}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Father's Name: <h3>{{$student->father_name}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Mother's Name: <h3>{{$student->mother_name}}</h3></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div>Address: <h3>{{$student->address}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Phone No: <h3>{{$student->mobile_number}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Date of Birth: <h3>{{$student->date_of_birth}}</h3></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div>Gender: <h3>{{$student->gender}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Height: <h3>{{$student->height}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Weight: <h3>{{$student->weight}} Kg</h3></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div>Student Id: <h3>{{$student->s_code}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Joined: <h3>{{$student->date_of_joining}}</h3></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>Batch: <h3>{{$student->batch_name}}</h3></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <img src="{{url($student->image)}}" style="height: 230px; width: 300px;" alt=" " class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
