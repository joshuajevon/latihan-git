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
                <a class="nav-link" href="/create-book">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-book">View Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-buyer">View buyer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/create-category">Create Category</a>
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
      <h1>Create Category</h1>
        <form action="/store-category" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="CategoryName">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</body>
</html>
