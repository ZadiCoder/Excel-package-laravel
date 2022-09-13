<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6 mt-5">
    <div class="p-5 border-2 border border-secondary rounded">
      <h2>Product Data</h2>
      <form action="{{ route('import-product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- <label>Barcode/QrCode</label>
        <input type="text" name="barcode" class="form-control">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
        <label>Description</label>
        <input type="text" name="description" class="form-control"> -->
        <label>Select file</label>
        <input type="file" name="file" class="form-control">
        <div class="mt-5">
          <button type="submit" class="btn btn-info">Import</button>
          <a href="{{route('export-product')}}" class="btn btn-primary flot-right">Export Excel</a>
        </div>
      </form>
    </div>
    </div>
  </div>

</div>

</body>
</html>
