<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>


@include("navbar")

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-lg-4">

                <form action="{{ route("category.update", $category->id) }}" method="post"><br>
                    @csrf
                    @method("put")

                    <div class="row">

                        <div class="col-12">
                            <label for="" class="form-control">Category Name</label> <br>
                        </div>

                        <div class="col-lg-4">
                            <input type="text" class="form form-control" name="title" value="{{ $category->title }}" required>
                        </div>

                        <div class="col-lg-4">
                            <button class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </form>
                @include("category.list")
            </div>
        </div>
    </div>
</div>

<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
