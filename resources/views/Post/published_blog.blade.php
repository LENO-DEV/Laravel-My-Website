<x-admin_index>
   @section('view_users')

      <h1 class="h3 mb-4 text-gray-800"> View Published Blog </h1>

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
                        <th> Category </th>
                        <th> Title </th>
                        <th> Content </th>
                        <th> Image </th>
                        <th> Updated On</th>
                        <th> Status </th>
                        <th> Delete Ite </th>
                     </tr>
                  </thead>

                  <tbody class="text-center">
                     @foreach ($post_published as $all_posts)
                        <tr>
                           <td>{{ $all_posts->id }}</td>
                           <td>{{ $all_posts->user->name }}</td>
                           <td>{{ $all_posts->categories->name }}</td>
                           <td><a href="{!! route('assign-role',$all_posts->id) !!}">{{ $all_posts->MainTitle }}</a></td>
                           <td>{!! Str::limit($all_posts->content, 80) !!}</td>
                           <td>
                              <img height="60px" width="70px" src="{{ asset('storage/app/public/' .$all_posts->post_image) }}" alt="picture">
                           </td>
                           <td>{{ $all_posts->updated_at->diffforhumans() }}</td>
                           <td><b>{{ $all_posts->Status }}</b></td>
                           <td>
                              <form  action="{!! route('delete-blog',$all_posts->id) !!}" method="post">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger"> Delete </button>
                              </form>
                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
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
