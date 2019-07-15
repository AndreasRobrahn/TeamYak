<!-- the header section with navbar of the AdminLTE Theme -->
<header class="main-header">
  <a class ="logo" href="/TeamYak/public/demo"> Team Yak</a>
  <nav class="navbar navbar-static-top">
    <a class="sidebar-toggle" href="#" data-toggle="push-menu" role="button">
      <span class="sr-only"> Toggle navigation </span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
              Nachrichten
              <span class="label label-success">0</span>
            </a>
            <!-- an example of a message -->
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Team or User
                        <small><i class="fa fa-clock-o"></i> Betreff</small>
                      </h4>
                      <p>Text</p>
                    </a>
                  </li>
                  <!-- end message -->

                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      </ul>
    </div>
  </nav>

</header>
