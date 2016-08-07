<!DOCTYPE html>
<html>
<head>
    <title>Iridium</title>
    <link rel="stylesheet" href="/css/welcome.css"/>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="triangle">△</div>
        <div class="title">IRIDIUM</div>
        <div class="form row">
            <div class="strike">
                <span>Get in via email</span>
            </div>
            @if(session('invited'))
                <div class="alert alert-info">
                    Go ahead and check this email!
                </div>
            @else
                <form class="form-inline" method="POST" action="/get-in">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="Email"
                               class="form-control"
                               required>
                    </div>
                    <button type="submit" class="btn btn-lg btn-dark">Get In</button>
                </form>
            @endif
        </div>
        <div class="social row">
            <div class="strike">
                <span>or via social network</span>
            </div>
            <ul class="list-inline">
                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
