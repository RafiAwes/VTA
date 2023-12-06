@extends('slots.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-header bg-warning font-weight-bolder text-center text-white rounded">
                    <h2>Create New Batch</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="name">Batch Name</label>
                                            <input type="text" name="batch_name" class="form-control rounded" id="name" placeholder="Enter your name">
                                        </div>
                                        <div class="col-lg-4">
                                                <label for="total_classes">Total classes</label>
                                                <input type="text" name="total_classes" class="form-control rounded" id="total_classes" placeholder="Enter total class number">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="starting_date">Starting Date</label>
                                            <input type="date" name="starting_date" class="form-control rounded" id="starting_date" placeholder="Enter starting date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="numberOfStudents">number of students</label>
                                            <input type="int" name="numberOfStudents" class="form-control rounded" id="numberOfStudents" placeholder="Enter the number of students">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="time">starting time</label>
                                            <input type="time" class="form-control rounded" name="class_time" id="class_time" placeholder="Enter the training time: ">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="Days">Days of training</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" value="saturday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Saturday</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" value="sunday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Sunday</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" value="monday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Monday</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" value="tuesday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Tuesday</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" value="wednesday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Wednesday</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" value="thursday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Thursday</label>
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 text-center">
                                    <input type="submit" value="Create" class="btn btn-warning rounded">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

