@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $message->title }}</td>
        </tr>
        <tr>
            <th>ご意見</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    {!! link_to_route('messages.edit', 'このご意見を編集', ['id' => $message->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection