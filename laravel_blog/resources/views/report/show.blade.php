@extends ('layouts.app')
@section('content')
<div class="card">
    <h5 class="card-header">{{$report->title}}</h5>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">{{$report->contents}}</p>
      <a href="{{route('report.edit',['id'=>$report->id])}}" class="btn btn-primary pen"><i class="fas fa-pencil-alt "></i></a>
      <a href="{{route('report.destroy',['id'=>$report->id])}}" class="btn btn-primary pen"><i class="fas fa-trash-alt"></i></a>

    </div>
  </div>
@endsection
