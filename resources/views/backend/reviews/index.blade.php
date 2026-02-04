@extends('layouts.backend')
@section('title', "All Reviews")
@section('backend_content')

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle table-borderless">
                <thead class="text-uppercase small text-dark border-bottom">
                    <tr>
                        <th>User</th>
                        <th>Product Id</th>
                        <th>Message</th>
                        <th>Rating</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($reviews as $review)
                    <tr>

                        <!-- User -->
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ $review->customer->profile_imge ? asset('storage/' . $review->customer->profile_imge) : 'https://api.dicebear.com/9.x/notionists/svg?seed=' . $review->customer->first_name }}" 
                                    alt="Profile" 
                                    class="rounded-circle me-2 flex-shrink-0" 
                                    style="width:45px; height:45px; object-fit:cover;">
                                <span class="fw-semibold text-dark">
                                    {{ $review->customer->first_name }}
                                </span>
                            </div>
                        </td>

                        <!-- Product Id -->
                        <td class="text-dark fw-semibold">
                            #{{ $review->product_id }}
                        </td>

                        <!-- Message -->
                        <td class="text-dark">
                            <div class="bg-light rounded-3 p-2">
                                {{ $review->msg }}
                            </div>
                        </td>

                        <!-- Rating -->
                        <td class="fw-bold text-warning">
                            ⭐ {{ round($review->rating, 1) }}
                        </td>

                        <!-- Time -->
                        <td class="text-dark">
                            {{$review->created_at->format('M d Y')}}<br>
                            {{ $review->created_at->format('h:i A') }}
                        </td>

                        <!-- Status -->
                        <td>
                            <span class="badge rounded-pill {{ $review->approve ? 'bg-success ' : 'bg-danger ' }}">
                                {{ $review->approve ? 'Approved' : 'Pendding' }}
                            </span>
                        </td>

                        <!-- Action -->
                        <td class="text-end">
                            @if($review->approve == 0)
                            <form method="POST" action="{{ route('backend.reviews.approve', $review->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-dark">
                                    Approve
                                </button>
                            </form>
                            @else
                            <span class="text-success fs-5">✔</span>
                            @endif
                        </td>

                    </tr>
                    @empty
                    <td class="text-center"><h4>Review not found</h4></td>
                    @endforelse
                    </tbody>
            </table>

            {{-- Pagination (optional) --}}
            {{-- <div class="mt-3">{{ $reviews->links() }}</div> --}}

        </div>
    </div>
</div>

@endsection
