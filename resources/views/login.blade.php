<!DOCTYPE html>
<html lang="en">
 <head>
   @include('Layout.Partials.head')
 </head>
 <body class="skin-blue layout-boxed sidebar-mini" style="height: auto; min-height: 100%;">
<div class=" wrapper" style="overflow:hidden; height:auto; min-height: 100%">

   <!-- <body class="skin-blue layout-top-nav"> -->
 <header class="main-header">
   <a class ="logo" href="/TeamYak/public/demo">Team Yak</a>
   <nav class="navbar navbar-static-top">
   </nav>
  </header> 
<div class="content-wrapper" style="min-height: 902.8px;">
  <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Anmelden</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="post" action="Logindataz" role="form">
            {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label for="User">Username</label>
                <input type="text" class="form-control" name="Username" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Passwort</label>
                <input type="password" name="Passwort">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>

</div>
  @include('Layout.Partials.footer')
</div>

  @include('Layout.Partials.footer-scripts')
 </body>
</html>
