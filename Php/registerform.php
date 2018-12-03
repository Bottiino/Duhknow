<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
</head>
<body >
    <div class="slider display-table center-text">
            <h1 class="title display-table-cell"><b>Sign Up</b></h1>
    </div><!-- slider -->
    <div class="container">
        <div class="row">

            <div class="col-lg-2 col-md-0"></div>

            <div class="col-lg-8 col-md-12">

                <div class="comment-form">

                    <form id="regForm" enctype="multipart/form-data">

                        <div class="row">

                            <div class="col-sm-6">
                                    <input type="text" aria-required="true" name="username" class="form-control"
                                            placeholder="Enter your username" required>
                            </div>
                            <div class="col-sm-6">
                                    <input type="email" aria-required="true" name="email" class="form-control"
                                            placeholder="Enter your email" required>
                            </div>
                            <div class="col-sm-6">
                                    <input type="password" aria-required="true" name="password" class="form-control"
                                            placeholder="Enter your password" required>
                            </div>
                            <div class="col-sm-6">
                                    <input type="file" aria-required="true" name="avatar" class="form-control btn btn-sm" required>
                            </div>
                            <div class="col-sm-12">
                                <input id="cbTermsConditions" type="checkbox" name="cbTermsConditions"/> I agree that I have read and accepted the <a href="termsAndConditions.php" target="_blank">Terms and conditions</a><br/><br/>
                            </div>
                            <div class="col-sm-12">
                                <input id="cbEmailSubscribe" checked="checked" type="checkbox" name="cbEmailSubscribe"/> I would like to receive email notifications for upcoming events<br/><br/>
                            </div>
                            <div class="col-sm-12">
                                <div class="captcha g-recaptcha" data-sitekey="6Lf151UUAAAAALAPXJEuRv79QMCi7OipBKvI1rAq"></div>
                            </div>  
                            <div class="col-sm-12">
                                <div class="alert alert-warning"><b>GDPR Notice:</b> We may collect personal information relating to our users.</a>
                            </div>

                            <div class="col-sm-12">
                                <button disabled="disabled" class="submit-btn btnDisabled" type="submit" name="submit" id="form-submit"><b>SIGN UP</b></button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>        
</body>
</html>
