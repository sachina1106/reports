@extends ('layouts.app')

@section('content')
<h3 class="text-info text-center ">日記一覧</h3>
<p class="text-right">
<a  class="btn btn-success" href="{{route('report.create')}}">新規作成</a>
</p>
<table class="table">
    <thead>
        <tr>
            <!-- <th scope="col">#</th> -->
            <th scope="col" >タイトル</th>
            <th scope="col" >内容</th>
            <th scope="col" ></th>

        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <!-- <th scope="row">1</th> -->
            <td>{{$report->title}}</td>
            <td>{{$report->contents}}</td>
            <td class="text-right"><a href="{{route('report.show',['id'=>$report->id])}}" class="btn btn-info">詳細</a></td>
        </tr>
     @endforeach
    </tbody>
</table>
@endsection
