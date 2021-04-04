<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>contact us</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>

<body>
 
    <div class="page-wrapper bg-gra-02  p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Contact us</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('contact.submit')}}" enctype="multipart/form-data" >
                    @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name">
                                        </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Surname</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="surname">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Photo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="file">
                                </div>
                            </div>
                        </div>
                            <button class="btn btn--radius-2 " name="store_image" type="submit">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

</html>