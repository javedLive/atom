<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ATM</title>
        <!-- ————————————————————————————————————————————
        ——— CSS
        —————————————————————————————————————————————— -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="atm/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="atm/css/form-elements.css">
        <link rel="stylesheet" href="atm/css/style.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- ————————————————————————————————————————————
        ——— Favicon and touch icons
        —————————————————————————————————————————————— -->
        <link rel="shortcut icon" href="atm/img/favicon.ico">

    </head>
    <body>        
      <!-- ————————————————————————————————————————————
      ——— Success Massage
      —————————————————————————————————————————————— -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                          <h1 style="margin:40px 0;"><strong>Courses</strong> Offered at ATM's</h1>
                            <div class="description text-left form-top">
                            	<p>
                                <strong style="color:#fff;">আপনি যে কোর্সটি Online এ করেত চান তা নিম্ন বর্ণীত কোর্স হতে নির্বাচন করুন</strong></br>
                                <ul class="courses">
                           
                                  
                           <li> <a  href="{{route('registration',['course_id' => Crypt::encrypt('1') ])}}">IELTS</a> </li> 
                           <li> <a  href="{{route('registration',['course_id' => Crypt::encrypt('2') ])}}">BCS</a> </li> 
                           <li> <a  href="{{route('registration',['course_id' => Crypt::encrypt('3') ])}}">University Admission</a> </li> 
                           <li> <a  href="{{route('registration',['course_id' => Crypt::encrypt('4') ])}}">Spoken + Writing</a> </li> 
                           <li> <a  href="{{route('registration',['course_id' => Crypt::encrypt('5') ])}}">Easy Spoken (Regular Batch)</a> </li> 
                           <li> <a  href="{{route('registration',['course_id' => Crypt::encrypt('6') ])}}">Spoken + Writing</a> </li> 
                                 
                                   
                                        
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <!-- ————————————————————————————————————————————
        ——— Added Scripts
        —————————————————————————————————————————————— -->
        <script src="atm/js/jquery-1.11.1.min.js"></script>
        <script src="atm/js/bootstrap.min.js"></script>
        <script src="atm/js/jquery.backstretch.min.js"></script>
        <script src="atm/js/retina-1.1.0.min.js"></script>
        <script src="atm/js/scripts.js"></script>
    </body>
</html>
