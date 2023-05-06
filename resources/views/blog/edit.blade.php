
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add blog</title>
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class=" text-center text-uppercase">Add Blog</h6>
                    <hr/>

                    <form class="row g-3" action="{{route('update.blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                        <div class="col-12">
                            <label class="form-label"><b>Title</b></label>
                            <input type="text" name="title" value="{{$blog->title}}" class="form-control">
                        </div>

                        <div class="col-12">
                            <label class="form-label"><b>Image</b></label>
                            <input type="file" name="image"  class="form-control">
                            <img src="{{asset($blog->image)}}" height="80px">
                        </div>

                        <div class="col-12">
                            <label  class="form-label"><b>Description</b></label>
                            <textarea class="form-control"name="description" cols="20" rows="5">{{$blog->description}}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label"><b>tag</b></label>
                            <input type="text" name="tag" value="{{$blog->tag}}" class="form-control">
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
