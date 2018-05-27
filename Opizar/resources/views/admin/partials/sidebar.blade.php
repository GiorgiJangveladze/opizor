<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
      <div class="user-panel">
            <div class="pull-left image">
              <img src="https://99designs-start-attachments.imgix.net/alchemy-pictures/2016%2F02%2F22%2F04%2F24%2F31%2Fb7bd820a-ecc0-4170-8f4e-3db2e73b0f4a%2F550250_artsigma.png?auto=format&ch=Width%2CDPR&w=250&h=250" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
      <!-- search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <!--special section title need class .header-->
            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview @if(str_contains(Request::decodedPath(),'contact'))  active @endif">

                <a href="{!! route('contactEdit') !!}">
                    <i class="fa fa-map-signs"></i> <span>Contact</span>
                    <span class="pull-right-container">
                        <i class="fa  pull-right  "></i>
                    </span>
                </a>
                <!--tree sons need class .treeview-menu-->
                <ul class="treeview-menu">
                    <li  @if(Request::decodedPath() ==  'admin/contact/edit') class="active" @endif><a href="{!! route('contactEdit') !!}"><i class="fa   fa-edit"></i>Edit</a></li>
                </ul>

            </li>

            <li  class="treeview @if(str_contains(Request::decodedPath(),'social'))  active @endif">

                <a href="">
                    <i class="fa  fa-internet-explorer"></i> <span>Social Icons</span>
                    <span class="pull-right-container">
                        <i class="fa  pull-right  "></i>
                    </span>
                </a>
                <!--tree sons need class .treeview-menu-->
                <ul class="treeview-menu">
                    <li  @if(Request::decodedPath() ==  'admin/social/edit') class="active" @endif><a href=""><i class="fa   fa-edit"></i>Edit</a></li>
                </ul>

            </li>

            <li>
                <a href="#" id="logout">
                    <i class="fa  fa-unlock-alt"></i> <span>Logout</span>
                </a>

            </li>

            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>