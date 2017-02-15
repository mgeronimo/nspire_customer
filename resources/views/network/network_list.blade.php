@extends('material-layout.material_app_home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Users</h4>

                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                   cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Activated</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Activated</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td></td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        @if($user->activated)
                                            <td>Yes</td>
                                        @else
                                            <td>No</td>
                                        @endif
                                        <td class="text-right">
                                            <a href="#" class="btn btn-simple btn-info btn-icon like"><i
                                                        class="material-icons">favorite</i></a>
                                            <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i
                                                        class="material-icons">dvr</i></a>
                                            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i
                                                        class="material-icons">close</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>


@endsection

@section('additional_js')

    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "select": true,
                "lengthMenu": [
                    [10, 25, 50, -1, 1],
                    [10, 25, 50, "All", 1]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

            });

            var table = $('#datatables').DataTable();

            // Edit record
            table.on('click', '.edit', function () {
                $tr = $(this).closest('tr');

                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });

            // Delete a record
            table.on('click', '.remove', function (e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function () {
                alert('You clicked on Like button');
            });

            $('.card .material-datatables label').addClass('form-group');

            new $.fn.dataTable.Buttons(table,{
                "buttons":[
                    {extend:'selectAll',text:'Select'},
                    {extend:'selectNone',text:'Clear'},
                    {extend:'copy',text:'Copy',exportOptions:{modifier:{selected:true}}},
                    {extend:'excel',text:'Export',exportOptions:{modifier:{selected:true}}}
                ]
            });
            table.buttons().container().appendTo( $('.col-sm-6:eq(1)', table.table().container() ) );
            table.on( 'order.dt search.dt', function () {table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {cell.innerHTML = i+1;} );} ).draw();
            $.fn.DataTable.ext.pager.numbers_length=6;

        });
    </script>
@endsection