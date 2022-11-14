@extends('layouts.admin')

@section('title', 'Mail Single')

@section('content')
    <div class="container">
        <h1>{{ $mail->name }}'s Mail</h1><br>
        <h3 class="font-weight-bold"> Phone Number: <span class="text-uppercase">{{ $mail->contact }}</span> </h3><br>
        <h3 class="font-weight-bold"> Message: </h3>
        <span>{{ $mail->message }}</span>        
    </div>
@endsection
