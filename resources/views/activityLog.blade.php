@extends('layout.main')
@section('content')
    <!--  Row 1 -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Assigned</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Role</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Function</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Method</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Status</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_activities as $item)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{ $item->name }}</h6>
                                        <span class="fw-normal">{{ $item->email }}</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $item->jenis_user_id }}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $item->function }}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        @if ($item->method == 'GET')
                                            <div class="d-flex align-items-center gap-2">
                                                <span
                                                    class="badge bg-primary rounded-3 fw-semibold">{{ $item->method }}</span>
                                            </div>
                                        @else
                                            <div class="d-flex align-items-center gap-2">
                                                <span
                                                    class="badge bg-danger rounded-3 fw-semibold">{{ $item->method }}</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $item->status }}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-primary rounded-3 fw-semibold"></span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="my-3">
                        {{ $activity->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
