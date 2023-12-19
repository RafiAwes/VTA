@extends('attendance.master')
@section('content')

<div class="container">

    <div class="card mt-5">
        <div class="container-fluid">
            <div class="card-body rounded">
                <form method="POST" action="{{ route('submit-attendance') }}">
                    {{-- {{ route('attendance.store') }} --}}
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Present</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $index=>$student)
                                        <tr>
                                            <label>
                                                {{ $student->name }}
                                            </label>
                                            <td scope="row">{{ $loop->index+1 }}</td>
                                            <td>{{$student->student_name}}</td>
                                            <td>{{$student->s_code}}</td>
                                            <td> <input type="checkbox" name="attendance[{{ $student->id }}]" value="{{$student->id}}"></td>
                                            <input type="hidden" id="batch_id", name="batch_id" value="{{$id}}">
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center mt-3">
                            <input type="submit" value="Submit Attendance" class=" btn btn-warning rounded">
                        </div>
                    </div>



                </form>

            </div>
        </div>

    </div>

</div>

@endsection
