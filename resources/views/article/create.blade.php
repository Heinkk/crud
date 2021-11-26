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
                <div class="my-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route("article.store") }} " method="post">
                        @csrf
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old("title") }}">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        <div class="mt-5">

                            <label for="" class="form-label">Category</label>

                                <select name="category_id" class="form-select"  id="">
                                    @foreach(\App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}" {{ $category->id==old("category") ? "selected" : "" }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>

                            <div class="mt-5">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="7">{{ old("description") }}</textarea>
                                <br>
                            </div>

                            <button class="btn btn-primary">Create</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
