<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-4 text-gray-800"> Registered Users </h1>
      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the </p>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th> Blog Post </th>
                        <th> Roles <br> Assigned </th>
                        <th>User Email</th>
                        <th> Registered On</th>
                        <th> Updated On</th>
                        <th> Operations</th>
                        <th> Delete Item </th>
                     </tr>
                  </thead>

                  <tbody class="text-center">
                     @foreach ($view_users as $all_users)
                        <tr>
                           <td>  {{ $all_users->id }}
                              @foreach ($all_users->roles as $user_roles)
                                 @if ($user_roles->name === 'Admin' )
                                    <b><i class="fas fa-star text-success"></i></b>
                                 @endif
                              @endforeach
                           </td>
                           <td><a href="{!! route('assign-role',$all_users->id) !!}">{{ $all_users->name }}</a></td>
                           <td>{{ $all_users->posts->count() }}</td>
                           <td>
                              {{ $all_users->roles->count() }}
                           </td>
                           <td>{{ $all_users->email }}</td>
                           <td>{{ $all_users->created_at->diffforhumans() }}</td>
                           <td>{{ $all_users->updated_at->diffforhumans() }}</td>
                           <td><a class="font-weight-bold text-success" href="">Approved</a></td>
                           <td>
                              <form action="{!! route('view_users_delete', $all_users->id) !!}" method="post">
                                 @csrf
                                 @method('DELETE')
                                 <button class="btn btn-danger"> Delete </button>
                              </form>
                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
               <br>
               <h2 class="h6"><b>Note:</b> &nbsp;<i class="fas fa-star text-success"></i> &nbsp;<b>(it's Admin) </b> </h2>
            </div>
         </div>
      </div>
   @endsection


   @section('scripts_tables')

      <script type="text/javascript">
      $(document).ready(function() {
         $('#dataTable').DataTable();
      });
      </script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>


   @endsection


</x-admin_index>
