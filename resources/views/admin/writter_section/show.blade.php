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
                                <div class="users-view-image">
                                    {{-- @if (isset($data->image))
                                        <img  src='{{ asset("documents/writter_section/$data->image") }}'
                                        class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="Home Image">

                                    @endif --}}
                                </div>
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Name</td>
                                            <td>{{ $data->name ?? null }}</td>


                                        </tr>


                                        <tr>
                                            <td class="font-weight-bold">Body </td>
                                            <td>{!! $data->body ?? null !!}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Additional Infomation </td>
                                            <td>{!! $data->add_info ?? null !!}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Image </td>
                                            <td>
                                                @if (isset($data->image))
                                                    <img src='{{ asset("documents/writter_section/$data->image") }}'
                                                        class="users-avatar-shadow  rounded mb-2 pr-2 ml-1" alt="Home Image"
                                                        width="200px">
                                                @endif
                                            </td>
                                        </tr>

                                    </table>
                                </div>


                                <div class="col-12">
                                    <a href="{{ route('writer.edit', $data->id) }}" class="btn btn-primary mr-1"><i
                                            class="feather icon-edit-1"></i> Edit</a>
                                    {{-- <form method="post" action="{{ route('writer.destroy', $data->id) }}"
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
@endsection


@section('footer-section')
@endsection

@section('footer-script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": []
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
@endsection
