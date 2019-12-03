@extends ('layouts.app')
@section('content')
<form method="post" action="{{route('report.store')}}">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">タイトル</label>
        <input name="title" type="text" class="form-control" placeholder="学習内容">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">内容</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="contents" rows="3"></textarea>
    </div>
    <p class="text-right">
    <button type="submit" class="btn btn-success">追加</button>
</p>
</form>
@endsection
