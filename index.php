<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>NPI LookUp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">NPI LookUp</h1>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

			<form>
			<div class="form-item-first">
				<label for "npi" class="control-label" maxlength="10" >NPI Number :</label>
				<input type="text" id="npi" name="npi" class="control"></input>
				<span class="error-msg" id="npi-error" name="npi-error"></span>
			</div>
			<div class="form-item bigOR">
			OR
			</div>
			<div class="form-item">
				<label for "name" class="control-label">Name :</label>
				<input type="text" id="name" name="name" class="control"></input><br />
				<label class="control-label"> </label>
				<span class="underText">Last, First or Organization name</span>
			</div>
			<div class="form-item">
				<label class="control-label">Type :</label>
				<input type="radio" id="type" name="type" value="1" checked="checked" />
				<label class="radio-label">Individual</label>
				<input type="radio" id="type" name="type" value="0" />
				<label class="radio-label">Organization</label>
			</div>
			<div class="form-item">
				<label class="control-label">Location(s) :</label>
				<input type="radio" id="state" name="state" value="**" />
				<label class="radio-label">All States</label>
				<input type="radio" id="state" name="state" value="NY" checked="checked" />
				<label class="radio-label">NY, NJ &amp; CT</label>
			</div>
			<div id="form-buttons" class="form-action">
				<input id="clear_form" class="btn-clear" type="button" value="Clear">
				<input id="submit_form" class="btn-search" type="button" value="Search">
			</div>
			</form>
			<div class="form-item" id="results"></div>
		
			<div id="loader">
				<img id="ajax-gif" src="images\ajax.gif" />
			</div>			
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

    </body>
</html>
