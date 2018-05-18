<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div class="article-clean"></div>
<div class="article-list">
    <div class="container">
        <div class="intro"></div>
    </div>
</div>
<div class="register-photo">
    <div class="form-container">
        <form action="/student/edit/{{$id}}" name="register-form" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <h2 class="text-center"><strong>Edit form</strong> </h2>
            <div class="form-group" id="rollNumber">
                <input type="text" name="rollNumber" placeholder="Roll Number" class="form-control" required />
                <div></div>
            </div>

            <div class="form-group">
                <input type="text" name="phone" placeholder="Phone Number" class="form-control"  required/>
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" class="form-control" />
                <div></div>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" required/>
                <div></div>
            </div>
            <div class="form-group">
                <select name="gender" id="gender" class="form-control">
                    <option value="2">Other</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">Submit </button>
            </div>

        </form>
    </div>
</div>
<script src="{{asset(('js/app.js'))}}"></script>
</body>
</html>