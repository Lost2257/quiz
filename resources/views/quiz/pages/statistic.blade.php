@extends ('quiz.home')
@section('content')
<div class="container">
    <h1 class="d-flex justify-content-center">VOTES:</h1>
    <div class="d-flex justify-content-center">
        <h1 class="btn btn-success">Good{{round($goodPercent,2)}}%</h1>
        <p class="text-info">{{$good}}results</p>
    </div>
    <div class="d-flex justify-content-center">
        <h1 class="btn btn-primary">Fair{{round($fairPercent,2)}}%</h1>
        <p class="text-info">{{$fair}}results</p>
    </div>
    <div class="d-flex justify-content-center">
        <h1 class="btn btn-warning">Neutral{{round($neutralPercent,2)}}%</h1>
        <p class="text-info">{{$neutral}}results</p>
    </div>
    <div class="d-flex justify-content-center">
        <h1 class="btn btn-danger">Bad{{round($badPercent,2)}}%</h1>
        <p class="text-info">{{$bad}}results</p>
    </div>
</div>



@endsection