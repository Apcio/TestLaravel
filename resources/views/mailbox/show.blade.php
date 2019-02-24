@extends('layouts/page')

@section('content')
    <br>
    <a href="/mailbox" class="btn btn-outline-secondary">Cofnij</a>
    <br><br>
    <h1>{{$mailbox->title}}</h1>
    <h3>Dane szczegółowe</h3>
    <div>
        <p><h2>{{$mailbox->title}}</h2></p>
        <p>Serwer SMTP: {{$mailbox->smtp_server}}</p>
        <p>Port SMTP: {{$mailbox->smtp_port}}</p>
        <p>Serwer POP3: {{$mailbox->pop3_server}}</p>
        <p>Port POP3: {{$mailbox->pop3_port}}</p>
        <p>Testowa skrzynka:
            @if($mailbox->fake == 1)
                Tak
            @else
                Nie
            @endif
        </p>
        <p>Login: {{$mailbox->login_mail}}</p>
        <p>Data utworzenia: {{$mailbox->created_at}}</p>
        <p>Data modyfikacji: {{$mailbox->updated_at}}</p>
    </div>
@endsection