@extends('Layout.mainlayout')
@section('content')
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Videos hochladen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="dataz" role="form">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Video Titel</label>
                  <input type="text" class="form-control" name=" Videotitel" placeholder="z.B. 24-07-2019_BJJ">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Video auswählen</label>
                  <input type="file" name="Datei">
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
