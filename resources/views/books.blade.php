<!DOCTYPE html>
<html>
<head>
    <title>Book Order</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }

        .button {
            text-align: center;
            display: block;
        }
    </style>
</head>
<body>
<br/>
<br/>
<br/>
<div class="container box">
    <h3 align="center">Book Order Form</h3><br/>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{url('sendemail/send')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Your Name</label>
            <input type="text" name="name" class="form-control" value="" placeholder="Your name..." required
                   maxlength="40"/>
        </div>
        <div class="form-group">
            <label>Your Address</label>
            <input type="text" name="address" class="form-control" value="" placeholder="Your address..." required/>
        </div>
        <div class="form-group">
            <label>Book's Quantity</label>
            <input type="number" name="quantity" class="form-control" placeholder="Quantity" value="1" min="1"
                   max="10"/>
        </div>
        <div class="form-group button">
            <input type="submit" name="send" class="btn btn-info" value="Submit"/>
        </div>
    </form>
</div>
</body>
</html>
