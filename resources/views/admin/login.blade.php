
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
</head>
<body>

@if(Session::has('thongbao'))
    <div style="margin-top: 20px"></div>
    <div style="text-align: center;margin: auto; width: 400px" class="alert alert-success">{{Session::get('thongbao')}}</div>
@endif
@if(Session::has('loi'))
    <div style="margin-top: 20px"></div>
    <div style="text-align: center;margin: auto; width: 400px" class="alert alert-danger">{{Session::get('loi')}}</div>
@endif
<div class="login">
    <div class="container">
        <section id="content">
            <form action="{{route('Login')}}" method="post">
                {{csrf_field()}}
                <h1>Login Form</h1>
                <div>
                    <input type="text" class="fa fa-user-o" placeholder="Username" name="email" required="" id="username" />
                </div>
                <div>
                    <input type="password" placeholder="Password" name="password" required="" id="password" />
                </div>
                <div>
                    <input type="submit" value="Log in" />
                    <a href="#">Lost your password?</a>
                </div>
            </form><!-- form -->

        </section><!-- content -->
    </div><!-- container -->
</div>

</body>
</html>


