@extends('Layout.mainlayout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Videos
  </h1>
   @foreach ($arrayWithVideos as $element)
     <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{$element}}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <video src="./videos/{{$element}}" controls>
            Ihr Browser kann dieses Video nicht wiedergeben.<br/>
            Dieser Film zeigt eine Demonstration des video-Elements.
            Sie können ihn unter <a href="#">Link-Addresse</a> abrufen.
          </video>
        </div>
        <!-- /.box-body
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
    
   @endforeach
  <!-- /.box -->
</section>
<!-- /.content -->
@endsection
