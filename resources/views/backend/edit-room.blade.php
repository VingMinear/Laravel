@extends('backend.layout.index')
@section('title', 'CreateRoom')
@section('stylecss')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <a href="{{url('/admin/table')}}" class="btn bg-gradient-success px-5"
            data-toggle="tooltip" data-original-title="Edit user">
            <img src="{{ asset('./assets/icons/back.svg') }}" alt="SVG Image"> 
        
        </a>
        <!-- Page Heading -->
        <h1 class="h3 mb-2  text-white">UpdateRoom</h1>

        <form action="{{ url('admin/edit-room/update') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$room->room_id}}" name="room_id"  id="room_id">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Overflow Hidden -->
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Fill room info</h6>
                        </div>
                        <div class="card-body">



                            <div class="form-group row">
                                <label for="room_name" class="col-sm-4 col-form-label">RoomName <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="room_name" id="room_name" value="{{$room->room_name}}"  autofocus>
                                    @error('room_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="room_desc" class="col-sm-2 col-form-label">RoomDesc</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control"  style=" min-width:500px; max-width:100%;min-height:120px;height:100%;width:100%;"  name="room_desc" id="room_desc">{{$room->room_desc}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="room_status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-control" id="room_status" name="room_status">
                                        <option value="1"{{$room->room_status==1?'selected':''}} >Available</option>
                                        <option value="0"{{$room->room_status==0?'selected':''}} >Unavailable</option>
                                    </select>
                                </div>
                                @error('room_status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="room_type_id" class="col-sm-2 col-form-label">RoomType</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-control" id="room_type_id" name="room_type_id">
                                        <option value="">---Choose RoomType---</option>
                                        @foreach ($room_type as $rt)
                                            <option value="{{ $rt->room_type_id }}"  {{ $rt->room_type_id==$room->room_type_id?'selected':''  }} >{{ $rt->room_type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('room_type_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Roitation Utilities -->
                    <div class="card" style="min-height: 335px;height: auto;">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Attachment</h6>
                        </div>
                        <div class="card-body">

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <div>
                                        <input class="form-control form-control-lg" name="room_photo" id="room_photo"
                                            type="file" onchange="previewImg(event)">
                                    </div>
                                </div>
                            </div>
                            <img class="img-thumbnail img-fluid shadow" id='img' accept="image/*"
                                style="height:120px; width:120px;" src="{{ asset($room->room_photo) }}" />
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-auto">
                            {{-- <button class="btn btn-success">Save</button> --}}
                            <button class="btn bg-gradient-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Update</span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>
    <!-- /.container-fluid -->


@endsection
