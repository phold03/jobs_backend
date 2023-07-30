@extends('client.employer.index')
@section('main')
    <form-register
        :data="{{ json_encode([
            'urlRegister' => route('register.store'),
            'message' => $message ?? '',
            'location' => $location,
            'request' => $request,
        ]) }}">

    </form-register>
@endsection