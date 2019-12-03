@extends ('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        {{$report->title}}
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>{{$report->contents}}</p>
        </blockquote>
    </div>
    <button type="button" class="btn btn-warning btn-sm">Warning</button>
    <button type="button" class="btn btn-danger btn-sm">Danger</button>
</div>
@endsection
