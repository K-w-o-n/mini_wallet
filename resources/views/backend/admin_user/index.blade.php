@extends('backend.layouts.app');
@section('title', 'Admin User')
@section('content')
    <div>
        <h3>Users Management</h3>
        <div>
            <table id="myTable" class="display table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable(
                {
               
                processing: true,
                serverSide: true,
                ajax: 'admin/admin_user/datatable/ssd',
                colums: [
                    {
                        data:'name',
                        name: 'name'
                    },
                    {
                        data:'email',
                        name: 'email'
                    },
                    {
                        data:'phone',
                        name: 'phone'
                    }
                ]
            });
        });
    </script>
@endsection
