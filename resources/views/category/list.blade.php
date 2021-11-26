<table class="table table-dark mt-4">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Control</td>
            <td>Created_at</td>
        </tr>
    </thead>

    <tbody>
        @foreach(\App\Models\Category::all() as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>
                    <a href="{{ route("category.edit", $category->id) }}" class="btn btn-outline-warning" method="post">Edit</a>
                    <form action="{{ route("category.destroy", $category->id) }}" class="d-inline-block" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
                <td>{{ $category->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
