@extends('attendance.master')
@section('content')
<div class="container">
    <div class="text-center">
        <div class="row">
            @foreach ($batches as $batch)
                <div class=" mt-5 col-sm-6">
                    <div class="card rounded">
                        <div class="card-body rounded">
                            <h5 class="card-title">{{$batch->batch_name}}</h5>
                            <p class="card-text">Time: {{$batch->class_time}}</p>
                            <a href="{{url('/take/attendance') }}/{{ $batch->id }}" class="btn btn-primary rounded">Take attendance</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
