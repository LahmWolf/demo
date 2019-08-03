@extends('layouts.admin')

@section('content')
    <div class="container-fulid">    
     <br />
     <h3 align="center">List Customer</h3>
     <br />
     <div align="right">
      <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button>
     </div>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped" id="user_table">
           <thead>
            <tr>
                <th width="10%">Image</th>
                <th width="35%">First Name</th>
                <th width="35%">Last Name</th>
                <th width="30%">Action</th>
            </tr>
           </thead>
       </table>
   </div>
   <br />
   <br />
  </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

            $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
            url: "{{ route('list_customer') }}",
            },
            columns:[
            {
                data: 'image',
                name: 'image',
                render: function(data, type, full, meta){
                return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
                },
                orderable: false
            },
            {
                data: 'first_name',
                name: 'first_name'
            },
            {
                data: 'last_name',
                name: 'last_name'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
            ]
            });
        });
    </script>
@endsection
