@extends('layout')

@section('content')
<a href="{{ route('create') }}">新規メモ作成</a>
@foreach($memos as $memo)
<div>
    <span>{{ $memo->content }}</span>
</div>
@endforeach
@endsection