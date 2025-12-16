@extends('layouts.backend')
@section('title', "all products")
@section('backend_content')
{{-- @dd($products); --}}
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle table-borderless">
                <thead class="text-uppercase small text-dark border-bottom">
                    <tr>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Contact</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($messages as $message)
                        
                    <tr>
                        <td class="fw-semibold text-dark">{{$message->name}}</td>

                        <td>
                            <div class="border rounded-3 p-3 text-dark bg-white" style="max-width:340px;">
                                {{$message->msg}}
                            </div>
                        </td>

                        <td class="text-dark">
                            <div class="fw-semibold">
                                📧 {{$message->email}}
                            </div>
                            <div class="fw-semibold">
                                📞 +88{{$message->phone}}
                            </div>
                        </td>

                        <td class="text-dark">
                            {{$message->created_at->format('M d Y')}}<br>
                            {{ $message->created_at->format('h:i A') }}
                        </td>

                        <td>
                            <span class="badge rounded-pill {{$message->status ? 'btn-success' : 'btn-danger'}}">
                                {{$message->status ? 'Read' : 'Unread'}}
                            </span>
                        </td>

                        <td class="text-end">
                            @if($message->status == 0)
                            <form method="POST" action="{{ route('backend.message.markasread', $message->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-dark">
                                    Mark as Read
                                </button>
                            </form>
                            @else
                            <samp class="text-success">✔</samp>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

    </div>
</div>



@endsection