@extends('layouts/page')

@section('content')
    <h1>Lista zapisanych skrzynek pocztowych:</h1>
    @if(count($boxList) > 0)
        @foreach ($boxList as $box)
            <div class="card bg-light mb-2">
                <h3 class="card-header pb-2 pt-2">
                    <a href="mailbox/{{$box->id_mailbox}}">{{$box->title}}</a>
                    <a href="mailbox/modify/{{$box->id_mailbox}}" class="float-right">
                        <img src="svg\settings.svg">
                    </a>
                </h3>
                <div class="card-body card-text pb-1 pt-1">
                    <p class="pb-0 mb-0">{{$box->login_mail}}</p>
                    <p class="pb-0 mb-0">założono: {{$box->created_at}}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>Brak skrzynek pocztowych</p>
    @endif
    <br>
    <a href="mailbox/create" class="btn btn-primary">Nowa skrzynka</a>
@endsection