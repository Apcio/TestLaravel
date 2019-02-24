@extends('layouts/page')

@section('content')
    <h1>Zakładanie nowej skrzynki</h1>
    <a href="/mailbox" class="btn btn-outline-secondary mb-4">Cofnij</a>

    {!!
        Form::open(['action' => 'MailboxController@store',
                    'method' => 'POST',
                    'class' => 'col-sm-6'])
    !!}

        <div class="form-group">
            {{Form::label('title', 'Nazwa skrzynki')}}
            {{Form::text('title', '', ['class' => 'form-control', 
                                       'placeholder' => 'Podaj nazwę skrzynki'/*,
                                       'required' => true*/
                                      ])}}
            @if ($errors->has('title'))
                @foreach ($errors->get('title') as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            {{Form::label('smtp_server', 'Serwer SMTP')}}
            {{Form::text('smtp_server', '', ['class' => 'form-control',
                                             'placeholder' => 'Podaj adres serwera SMTP'/*,
                                             'required' => true*/
                                            ])}}
            @if ($errors->has('smtp_server'))
                @foreach ($errors->get('smtp_server') as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            {{Form::label('smtp_port', 'Port serwera SMTP')}}
            {{Form::number('smtp_port', '', ['class' => 'form-control',
                                             'placeholder' => 'Podaj numer portu do serwera SMTP'/*,
                                             'required' => true,
                                             'min' => 1000,
                                             'max' => 65535*/
                                            ])}}
            @if ($errors->has('smtp_port'))
                @foreach ($errors->get('smtp_port') as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            {{Form::label('pop3_server', 'Serwer POP3')}}
            {{Form::text('pop3_server', '', ['class' => 'form-control',
                                             'placeholder' => 'Podaj adres serwera POP3'/*,
                                             'required' => true*/
                                            ])}}
            @if ($errors->has('pop3_server'))
                @foreach ($errors->get('pop3_server') as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            {{Form::label('pop3_port', 'Port serwera POP3')}}
            {{Form::number('pop3_port', '', ['class' => 'form-control',
                                             'placeholder' => 'Podaj numer portu do serwera POP3'/*,
                                             'required' => true,
                                             'min' => 1000,
                                             'max' => 65535*/
                                            ])}}
            @if ($errors->has('pop3_port'))
                @foreach ($errors->get('pop3_port') as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            {{Form::label('login_mail', 'Login do skrzynki pocztowej')}}
            {{Form::email('login_mail', '', ['class' => 'form-control',
                                             'placeholder' => 'Podaj login skrzynki pocztowej'/*,
                                             'required' => true*/
                                            ])}}
            @if ($errors->has('login_mail'))
                @foreach ($errors->get('login_mail') as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            {{Form::label('password', 'Hasło do skrzynki pocztowej')}}
            {{Form::password('password', ['class' => 'form-control',
                                          'placeholder' => 'Podaj hasło do skrzynki pocztowej'/*,
                                          'required' => true,
                                          'pattern' => '.{6,20}',
                                          'oninvalid' => 'this.setCustomValidity("Hasło powinno mieć długość od 6 do 20 znaków")',
                                          'onchange' => 'try{setCustomValidity("")}catch(e){}'*/
                                         ])}}
            @if ($errors->has('password'))
                @foreach ($errors->get('password') as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
        </div>

        {{Form::submit('Nowa skrzynka pocztowa', ['class' => 'btn btn-success mt-3'])}}
    {!! Form::close() !!}
@endsection
