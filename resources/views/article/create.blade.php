<!DOCTYPE html>
<html>
<head>
  <!-- Link -->
  @include('layouts.link')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- Sidebar -->
  @include('layouts.sidebar')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md ">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Article Create</h3>
              </div>
              <form role="form" action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Creator</label>
                        <select class="form-control select2" placeholder="Creator" name="user_id">
                          @foreach($user as $usr)
                          <option value="{{ $usr->id }}">
                            {{ $usr->name }}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Category</label>
                          <select class="form-control select2" name="category_id">
                            @foreach($category as $ctg)
                            <option value="{{ $ctg->id }}">
                              {{ $ctg->name }}
                            </option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                 </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" placeholder="Title" name="title">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="">
                          <label>Article</label>
                            <div class="mb-3">
                              <textarea class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content"></textarea>
                            </div>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div>
                        <label>Article Image</label>
                      </div>
                        <input type="file" class=" btn" name="image">
                    </div>
                  </div><!-- 
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card-body">
                        <label>Slug</label>
                        <input type="text" class="form-control" placeholder="Slug">
                      </div>
                    </div>
                  </div> -->
              </div>
               <div class="card-footer">
                <button class="btn btn-outline-success">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- Script -->
@include('layouts.script')
</body>
</html>
