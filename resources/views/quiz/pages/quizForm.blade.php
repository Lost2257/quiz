@extends('quiz.home')
@section('content')
<form class="container" method="POST" action="/store">
{{csrf_field()}}
<div class="d-flex justify-content-center">
    <h2>How do you find our service? </h2>
</div>
<div class="form-check form-check-inline d-flex justify-content-center  ">
    <input class="form-check-input" type="radio" name="answer" value="good">
    <label class="form-check-label">Good</label>
    <input class="form-check-input" type="radio" name="answer" value="fair">
    <label class="form-check-label">Fair</label>
    <input class="form-check-input" type="radio" name="answer" value="neutral">
    <label class="form-check-label">Neutral</label>
    <input class="form-check-input"type="radio" name="answer" value="bad">
    <label class="form-check-label">Bad</label>
</div>
<div class="d-flex justify-content-center">
    <button class="btn btn-success" type="submit">Save</button>
</div>
</form>
@endsection