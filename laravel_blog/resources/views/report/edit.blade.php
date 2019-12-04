@extends ('layouts.app')
@section('content')
<form method="post" action="{{route('report.update',['id'=>$report->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleFormControlInput1">タイトル</label>
        <input name="title" type="text" class="form-control" placeholder="学習内容" value="{{$report->title}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">内容</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="contents" rows="3">{{$report->contents}}</textarea>
    </div>
    <p class="text-right">
    <button type="submit" class="btn btn-success">追加</button>
</p>
</form>
@endsection
