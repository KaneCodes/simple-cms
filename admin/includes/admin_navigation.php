<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">CMS Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li><a href="../index.php">Home</a></li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <!-- Dashboard Link -->
        <li>
            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
         <!-- Posts Link -->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Posts<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="posts_dropdown" class="collapse">
                <li>
                    <a href="#">View All Post</a>
                </li>
                <li>
                    <a href="#">Add Post</a>
                </li>
            </ul>
        </li>
         <!-- Categories Link -->
        <li>
            <a href="categories.php"><i class="fa fa-fw fa-wrench"></i>Categories</a>
        </li>
        <!-- Comments Link -->
        <li class="">
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Comments</a>
        </li>
        <!-- Users Link -->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="users_dropdown" class="collapse">
                <li>
                    <a href="#">View All Users/a>
                </li>
                <li>
                    <a href="#">Add User</a>
                </li>
            </ul>
        </li>
        <!-- Profile Link -->
        <li class="">
            <a href="blank-page.html"><i class="fa fa-fw fa-dashboard"></i>Profile</a>
        </li>
       
    </ul>
    <!-- /. Link List Ends -->
</div>
<!-- /.navbar-collapse -->
</nav>