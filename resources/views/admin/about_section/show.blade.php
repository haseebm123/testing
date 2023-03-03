@extends('admin/layout/layout')

@section('header-script')
@endsection

@section('body-section')
    <br>
    <section class="input-validation dashboard-analytics">
        <div class="row">
            <div class="col-12">

                <!-- account start -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Account</div>
                        </div>
                        <div class="card-body page-users-view">
                            <div class="row">
                                {{-- <div class="users-view-image" style="width: 10% !important;">
                                    <h1>Image</h1>
                                    @if (isset($data->image))
                                        <img src='{{ asset("documents/about_section/$data->image??null") }}'
                                            class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="Home Image">
                                    @else
                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                            class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                    @endif
                                </div> --}}
                                <div class="col-12  ">
                                    <table>

                                        <tr>
                                            <td class="font-weight-bold">Image</td>
                                            <td>
                                                @if (isset($data->image))
                                                    <img src='{{ asset("documents/about_section/$data->image??null") }}'
                                                        class="users-avatar-shadow   rounded mb-2 pr-2 ml-1"
                                                        alt="Home Image" width="150px">
                                                @else
                                                    <img src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                                        class="users-avatar-shadow   rounded mb-2 pr-2 ml-1" alt="avatar"
                                                        width="150px">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Title</td>
                                            <td>{{ $data->title ?? null }}</td>
                                        </tr>


                                        <tr>
                                            <td class="font-weight-bold">Name</td>
                                            <td>{{ $data->name ?? null }}</td>
                                        </tr>


                                        <tr>
                                            <td class="font-weight-bold">Body</td>
                                            <td>{{ $data->body ?? null }}</td>
                                        </tr>

                                    </table>
                                </div>

                                <div class="col-12">
                                    <a href="{{ route('about.edit', $data->id) }}" class="btn btn-primary mr-1"><i
                                            class="feather icon-edit-1"></i> Edit</a>
                                    {{-- <form method="post" action="{{ route('about.destroy', $data->id) }}"
                                        style="margin-top: -38px;margin-left: 150px";>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger"
                                            onclick="return confirm('Are You Sure Want To Delete This..??')"
                                            class="btn btn-default generalsetting_admin"><i
                                                class="feather icon-trash-2"></i>Delete</button>
                                    </form> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- account end -->
            </div>

        </div>


    </section>






    <!-- BEGIN: Content-->
    <!-- END: Content-->
@endsection


@section('footer-section')
@endsection

@section('footer-script')
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
@endsection
