<div class="row">
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Category
            </div>
            <div class="table-responsive">
                <table  class="table table-hover table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>Image</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                  @foreach($blogs as $blog)
                        <tr>
                            <td>{{$i++}}</td>
                             <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->description}}</td>
                            <td>{{$blog->tag}}</td>
                            <td>
                                <img src="{{asset($blog->image)}}" width="100" height="100" class="img-fluid">
                            </td>


                            <td class="d-flex">
                                <a href="" class="btn btn-primary mx-2 "><i class="fas fa-edit">edit</i></a>

                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{$blog->id}}">
                                    <a class="btn btn-danger"  onclick="return confirm('are you sure for delete')">delete</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

