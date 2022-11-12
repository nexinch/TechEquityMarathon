 @extends('layouts.admin')

 @section('content')

<div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($contact as $contacts)
                        <tr>
                            <td>{{ $contacts->id }}</td>
                            <td>{{ $contacts->name }}</td>
                            <td>{{ $contacts->email }}</td>
                            <td>{{ $contacts->contact }}</td>
                            <td>{{ $contacts->subject }}</td>
                            <td>{{ $contacts->message }}</td>
                            <td>
                                <form action="{{ route('message.destroy', $contacts->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection