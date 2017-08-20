<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('student/css/style.css')}}">
</head>
<body>
<div class="header">
    <div class="row">
        <!-- Title -->
        <div class="col-xs-6">
            <h2 style="margin-left:10px; margin-top:8px">Project</h2></div>
        <!-- Profile-->
        <div class="col-xs-6">
            <div class="col-xs-11">
                <li class="dropdown pull-right">
                    <a class="dropdown-toggle pro" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu sub">
                        <a href="edit profile.html"><li><i class="fa fa-user" aria-hidden="true"></i>Edit Profile</li></a>
                        <a href="add admin.html"><li><i class="fa fa-user-plus" aria-hidden="true"></i>Add or remove</li></a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <li><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</li>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li></div>

            <!-- Settings-->
            <div class="col-xs-1">
                <li class="dropdown pull-right">
                    <a class="dropdown-toggle pro" data-toggle="dropdown" href="#"><i class="fa fa-gear" aria-hidden="true"></i> </a>
                    <ul class="dropdown-menu sub sub-long">
                        <li><h3>Set site title</h3>
                            <input class="form-control" id="site-title" name="site-title" placeholder="site-title" type="text"></li>

                        <li><h3>Set title-bar logo</h3>
                            <input id="a" name="a" placeholder="Add a photo" type="file"></li>

                        <li><h3>Set site logo</h3>
                            <input id="a" name="a" placeholder="Add a photo" type="file"></li>

                        <li><h3>Set address</h3>
                            <input class="form-control" id="site-title" name="address" placeholder="Company address" type="text">
                            <input class="form-control" id="site-title" name="cell" placeholder="Mobile number" type="text" style="margin-top:5px;">
                            <input class="form-control" id="site-title" name="mail" placeholder="Email address" type="text" style="margin-top:5px;">
                            <button class="btn btn-primary" type="submit" style="width:100%; margin-top:15px;">Done</button></li>

                    </ul>
                </li>
            </div>
        </div>


    </div>
</div>

<!-- Left side bar -->
<div class="row container-fluid">
    @foreach($student as $user)
    <div class="col-xs-2 menu">
        <div class="row menu-head">
            <div class="col-sm-4">
                <img src="{{$user['student_photo']}}" class="img-circle img-responsive" style="padding-left:10px;">
            </div>
            <div class="col-sm-8">
                <h5>{{$user['student_name']}}</h5>

                <h6><i class="fa fa-circle" aria-hidden="true" style="color:#2b2; font-size:12px; padding-top:-12px;"> </i> Online</h6>
            </div>
        </div>
        <ul>

            <a href="dashboard"><li><h5><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</h5></li></a>
            <a href="grades.blade.php"><li><h5><i class="fa fa-users" aria-hidden="true"></i> Grades</h5></li></a>
            @if($user['student_approved']==1)
            <a href="allNotices"><li><h5><i class="fa fa-user-times" aria-hidden="true"></i>Notices</h5></li></a>
            <a href="remarks"><li><h5><i class="fa fa-photo" aria-hidden="true"></i> Remarks</h5></li></a>
            <a href="newRemarks"><li><h5><i class="fa fa-link" aria-hidden="true"></i> Add Remarks</h5></li></a
            @endif
        </ul>
    </div>


    @yield('student_content')

    @endforeach


</div>
</body>
</html>
