@extends('finance.master')
@section('finance_content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-success text-center">
            <h1 class="font-weight-bolder text-white">Make Payment</h1>
        </div>
        <div class="card-body">
            <div class="pt-3 container">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="batch_name">Batch Name</label>
                                    <select name="batch_id" id="batch_id" class="form-select form-control rounded">
                                        <option value=" ">Batch</option>
                                        @foreach ($batches as $batch)
                                            <option value="{{ $batch->id }}">{{ $batch->batch_name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <input type="text" class="form-control rounded" name="batch_name" id="batch_name" placeholder="Batch Name"> --}}
                                </div>
                                <div class="col-lg-4">
                                    <label for="student_name" >Trainee Name</label>
                                    <select name="student_id" id="student_id" class="form-select form-control rounded">

                                    </select>
                                    {{-- <input type="text" class="form-control rounded" name="student_name" id="student_name" placeholder="Trainee Name"> --}}
                                </div>
                                <div class="col-lg-4">
                                    <label for="month" >Month</label>
                                    <input type="text" class="form-control rounded" name="month" id="month" placeholder="Enter Month Name">
                                </div>

                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function() {

    $('#batch_id').on('change', function() {
        var batchId = this.value;
        $("#student_id").html(''); // Clear student dropdown options

        $.ajax({
            url: "{{url('api/students')}}",
            type: "POST",
            data: {
                batch_id: batchId,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                if (result.students.length > 0) {
                    $('#student_id').append('<option value="">-- Select Student --</option>');
                    $.each(result.students, function(key, value) {
                        $("#student_id").append('<option value="' + value.id + '">' + value.student_name + '</option>');
                    });
                } else {
                    // Handle case where no students belong to the selected batch
                    $('#student_id').html('<option value="">No students in this batch</option>');
                }
            }
        });
    });

});

</script>

@endsection
