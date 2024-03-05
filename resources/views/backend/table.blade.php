@extends('backend.layout.index')
@section('title', 'All Room')

@section('content')
    <form action="{{ route('room.search') }}" method="GET">
        <div class="row">

            <div class="col-3 ms-5">
                <div class="input-group">
                    <span class="input-group-text text-body"></span>
                    <input type="text" class="form-control" name="q_search" value="{{ $q_search ?? '' }}"
                        placeholder="Type here...">
                </div>
            </div>
            <div class="col-1">
                <button class="btn bg-gradient-info btn-icon-split px-4">

                    <i class="fas fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </form>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Room Info</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 "
                                            width=10>
                                            No</th>
                                        <th
                                            class="text-center text-uppercasetext-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            RoomName</th>
                                        <th class="text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            width=30>
                                            RoomType</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th width=250
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Desc</th>
                                        <th class="text-secondary opacity-7 text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php($i = 0)
                                    @if ($rooms->isEmpty())
                                        <tr>
                                            <td class=""colspan='10'>
                                                <div class="text-center mt-4">
                                                    No record found!
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($rooms as $data)
                                            <tr>
                                                <td>
                                                    <div class="d-flex ps-3 py-1">
                                                        <p class="text-xs font-weight-bold mb-0">{{ ++$i }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset($data->room_photo) }}"
                                                                class="avatar avatar-sm me-3" alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $data->room_name }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $data->room_type_name }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span
                                                        class="badge badge-sm bg-gradient-{{ $data->room_status == 1 ? 'success' : 'danger' }}">{{ $data->room_status == 0 ? 'Unavailable' : 'Available' }}</span>

                                                </td>
                                                <td class="align-middle text-start">
                                                    <div class="text-secondary text-xs font-weight-bold"
                                                        style="white-space: normal;">
                                                        {{ $data->room_desc }}
                                                    </div>
                                                </td>
                                                <td class="align-middle pt-3 text-center">
                                                    <a href="#" class="btn btn-info px-3" data-toggle="tooltip"
                                                        data-original-title="Edit user">
                                                        <img src="{{ asset('./assets/icons/view.svg') }}" style="fill:white"
                                                            alt="SVG Image">
                                                    </a>
                                                    <a href="{{ route('room.edit', $data->room_id) }}"
                                                        class="btn btn-primary px-3" data-toggle="tooltip"
                                                        data-original-title="Edit user">
                                                        <img src="{{ asset('./assets/icons/edit.svg') }}" alt="SVG Image">
                                                    </a>
                                                    <button href="{{ route('room.delete', $data->room_id) }}"
                                                        class="btn btn-danger px-3" data-toggle="tooltip"
                                                        data-original-title="Edit user"
                                                        onclick="onConfirm({{ $data->room_id }})">
                                                        <img src="{{ asset('./assets/icons/trash.svg') }}" alt="SVG Image">
                                                    </button>
                                                </td>

                                            </tr>
                                        @endforeach

                                    @endif
                                </tbody>
                            </table>
                            <hr>

                            <div class="ps-3 pe-2">
                                {{ $rooms->appends(request()->except('page'))->links('vendor/pagination/bootstrap-5') }}
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function onConfirm(roomId) {
            Swal.fire({
                title: "Are you sure?",
                text: "You want to delete this room ?",
                toast: true,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "  No  ",
                confirmButtonText: "  Yes  ",
                showClass: {
                    popup: `
      animate__animated
      animate__fadeInUp
      animate__faster
    `
                },
                hideClass: {
                    popup: `
      animate__animated
      animate__fadeOutDown
      animate__faster
    `
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "{{ route('room.delete', ':id') }}";
                    url = url.replace(':id', roomId);

                    window.location.href = url;
                }
            });
        }
    </script>
@endsection
