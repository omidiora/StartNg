@extends('layouts.tutor-dashboard')

@section('content')
<br><br><br>

<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="{{$tutor->profile_pic}}" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3>{{$tutor->first_name}} {{$tutor->last_name}}</h3>
        <em>click my face for more</em>
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About {{$tutor->username}}</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="{{$tutor->profile_pic}}" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">{{$tutor->first_name}} {{$tutor->last_name}}</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Username: {{$tutor->username}}</li>
                        <li class="list-group-item">Email: {{$tutor->email}}</li>
                        <li class="list-group-item">Phone: {{$tutor->phone}}</li>
                        <li class="list-group-item">Status: {{$tutor->status}}</li>
                    </ul>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>{{$tutor->about}}</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about {{$tutor->username}}</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="span3 well">
        <center><h3 class="media-heading">Edit Profile</h3></center>
        <center>
        <form class="user-form" method="post" action="{{route('tutor.update', $tutor->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="username"><strong>User Name</strong></label></div>
                        <input type="text" class="form-control" id="username"  placeholder="Username" name="username" value="{{$tutor->username}}">
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <div><label for="email"><strong>Email Address</strong></label></div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$tutor->email}}">
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div><label for="fname"><strong>First Name</strong></label></div>
                        <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name" value="{{$tutor->first_name}}">
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <div><label for="lname"><strong>Last Name</strong></label></div>
                        <input type="text" class="form-control" name="last_name" id="lname" placeholder="Last Name" value="{{$tutor->last_name}}">
                        </div>
                    </div>
                    </div>

                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="address"><strong>Phone</strong></label> </div>
                        <input type="number" class="form-control" name="phone" class="phone" id="phone" placeholder="Phone Number" value="{{$tutor->phone}}">
                    </div>
                </div>
                        <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="address"><strong>Status</strong></label> </div>
                        <input type="text" class="form-control" name="status" class="about" id="status" placeholder="Status" value="{{$tutor->status}}">
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <div><label for="about"><strong>About Me</strong></label> </div>
                        <textarea name="about"  class="form-control"id="about" class="about" cols="30" rows="5" placeholder="About Me">{{$tutor->about}}</textarea>
                    </div>
                </div>
            </div>
               <div class="row">
                    <div class="col-md-8">
                        <div> <label for="address"><strong>Profile Picture</strong></label> </div>
                        <input type="text" class="form-control" placeholder="Please Enter Your Image URL" name="profile_pic"><br>
                        <em>E.g https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQro4VxpgvG-aVKdFts6R2GH3Poe07DSgYVGudL8P13aZ32lHuknQ&s</em>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                 <div class="col-md-8">
                    <div class="form-group">
                <button class="but">UPDATE PROFILE</button>
            </div>
        </div>
    </div>
            
        </form>
    </div>
</div>
</center>
<br>
</main>
@endsection
