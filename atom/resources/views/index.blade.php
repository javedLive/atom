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
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		     <link rel="stylesheet" href="{{ URL::asset('atm/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('atm/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('atm/css/style.css') }}">
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
      ——— Top content
      —————————————————————————————————————————————— -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>ATM's</strong> Registration Form</h1>
                            <div class="description">
                            	<p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Registration Now</h3>
                            		<p>Fill in the form below to get instant access:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    {!! Form::open(array('route' => 'postRegistration','class'=>'form-horizontal','method'=>'POST'))  !!}
                                {!! Form::token(); !!}
                                {!!   csrf_field() ; !!} 
                            <div class="form-group">
                              <label class="sr-only" for="form-first-name">Admission</label>
                                <select id="branch_id" class="form-first-name form-control" name="branch_id">
                                  <option value="">Select Branch</option>
                                  <option value="1">পান্থপথ</option>
                                  <option value="2">ফার্মগেট</option>
                                  <option value="3">নিলক্ষেত</option>
                                  <option value="5">মিরপুর-10</option>
                                  <option value="6">যাত্রাবাড়ি</option>
                                  <option value="9">লালমাটিয়া</option>
                                  <option value="12">বনানী</option>
                                </select>
                              </div>
                            
			                 <div class="form-group">
			                    		<label class="sr-only" for="form-first-name">Name</label>
			                        <input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="form-first-name">
			                  </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-first-name">Phone</label>
                                  <input type="text" name="phone_no" placeholder="Phone..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                <div class="form-group">
                                  <label class="sr-only" for="form-first-name">Date Of Barth</label>
                                    <input type="date" name="dob" placeholder="Date of barth..." class="form-first-name form-control" id="form-first-name">
                                  </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Fathers Name</label>
			                        	<input type="text" name="f_name" placeholder="Fathers Name..." class="form-last-name form-control" id="form-last-name">
			                        </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-last-name">Address</label>
                                <textarea rows="4" style="height:100px;" name="address" placeholder="Address..." class="form-last-name form-control" id="form-last-name"></textarea>
                              </div>

                                                      
                               <input type="hidden" name="course_id" value="{{ $course_id }}" class="form-last-name form-control" id="form-last-name">
                             
			                        <button type="submit" class="btn">Submit</button>
			                    {!! Form::close() !!}
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ————————————————————————————————————————————
        ——— Added Scripts
        —————————————————————————————————————————————— -->
        <script src="{{ URL::asset('atm/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ URL::asset('atm/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('atm/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ URL::asset('atm/js/retina-1.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('atm/js/scripts.js') }}"></script>
       
    </body>
</html>
