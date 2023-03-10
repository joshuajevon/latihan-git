<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Book</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/create-book">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-book">View Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-buyer">View buyer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create-category">Create Category</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="m-5">
      <h1>Create Data</h1>
        <form action="/store-book" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Name">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Publication Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1" name="PublicationDate">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Stock">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Author</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Author">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="CategoryName">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</body>
</html>
