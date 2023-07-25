@extends('base')

@section('content')
    <ul class="list-group">
    @foreach ($polls as $poll)
        <li class="list-group-item">Poll {{$poll->id}} {{$poll->title}} <a href="admin/poll/{{$poll->id}}">Edit</a></li>
    @endforeach
    </ul>
@endsection

@section('js')
    <script src="{{asset('js/admin.js')}}"></script>
@endsection