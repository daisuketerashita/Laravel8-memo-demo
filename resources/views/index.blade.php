@extends('layout')

@section('content')
@foreach($memos as $memo)
<div>
    <span>{{ $memo->content }}</span>
</div>
@endforeach
@endsection