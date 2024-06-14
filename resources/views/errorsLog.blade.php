@extends('layout.main')
@section('content')
    <!--  Row 1 -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {{-- <table class="table text-nowrap mb-0 align-middle" style="border-collapse:collapse;">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Users</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Errors Date</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Controller</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Function</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">error line</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">error message</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Status</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Param</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($errors as $item)
                                <tr data-toggle="collapse" data-target=".demo1">
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
                                <tr>
                                    <td class="hiddenRow">
                                        <div class="collapse demo1">Demo1</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <table class="table table-hover" style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Users</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Errors Date</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Function</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">error line</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Status</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($errors as $item)
                                <tr data-toggle="collapse" data-target="#demo{{ $loop->iteration }}"
                                    class="accordion-toggle">
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{ $item->user_id }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $item->errors_date }}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $item->function }}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $item->error_line }}</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-danger rounded-3 fw-semibold">{{ $item->status }}</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="hiddenRow">
                                        <div class="accordian-body collapse m-3" id="demo{{ $loop->iteration }}">
                                            <ul>
                                                <div class="row">
                                                    <div class="col-2 text-start">
                                                        <strong>Controller</strong>
                                                    </div>
                                                    <div class="col-10 text-start">
                                                        : {{ $item->controller }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2 text-start">
                                                        <strong>Error Message </strong>
                                                    </div>
                                                    <div class="col-10 text-start">
                                                        : {{ $item->error_message }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2 text-start">
                                                        <strong>Parameter </strong>
                                                    </div>
                                                    <div class="col-10 text-start">
                                                        : {{ $item->param }}
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        .hiddenRow {
            padding: 0 !important;
        }
    </style>
@section('page-js')
    <script>
        $(document).ready(function() {
            $('.collapse').on('show.bs.collapse', function() {
                $('.collapse.show').collapse('hide');
            });

            // Ensure table rows are clickable
            $('.accordion-toggle').click(function() {
                var target = $(this).data('target');
                $(target).collapse('toggle');
            });
        });
    </script>
@endsection
@endsection
