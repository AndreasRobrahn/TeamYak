@extends('Layout.mainlayout')
@section('content')
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Neues Mitglied</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/dataNewUser" role="form">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" name="Name" placeholder="Kimura">
                </div>
                <div class="form-group">
                  <label for="Firs_Name">Vorname</label>
                  <input type="text" class="form-control"  name="First Name" placeholder="Kai">
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text"  class="form-control" name="Username">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
  </body>
</html>
@endsection
