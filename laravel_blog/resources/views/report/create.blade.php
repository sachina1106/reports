@extends ('layouts.app')
@section('content')
<form method="post" action="{{route('report.store')}}">
    @csrf
    <div class="form-group form-size-small">
        <label for="exampleFormControlInput1">タイトル</label>
        <input name="title" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="学習内容">
        @if($errors->has('title'))<span class="help-block text-danger">{{$errors->first('title')}}</span> @endif
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">内容</label>
        <textarea class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" name="contents" rows="3"></textarea>
        @if($errors->has('contents'))<span class="help-block text-danger">{{ $errors->first('contents') }}</span>@endif
    </div>
    <p class="text-right">
    <button type="submit" class="btn btn-success">追加</button>

</p>
</form>
@endsection
