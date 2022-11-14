@extends('layouts.admin')

@section('title', 'Mails')

@section('content')
    <div class="container">
        <h1>Inbox</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $counter = 0;
                @endphp
                @foreach ($mails as $mail)
                @php
                    $counter++;
                @endphp
                    <tr class="@if ($mail->is_read == 0) font-weight-bold @endif">
                        <th scope="row">{{ $counter }}</th>
                        <td>{{ $mail->name }}</td>
                        <td>{{ $mail->contact }}</td>
                        <td>{{ Str::limit( $mail->message, 100 )}}</td>
                        <td>
                            <a href="{{ route('mail.show', $mail->id) }}" class="btn btn-primary">More</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
