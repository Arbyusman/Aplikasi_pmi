<html>
<head>
    <title>VHEG Overses Educational Fair Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
        <!-- Include jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <style>
            body{
                background-image: url(https://bit.ly/2KhEw1d);
                background-position-x: center;
                background-position-y: center;
                background-size: cover;
                background-repeat-x: no-repeat;
                background-repeat-y: no-repeat;
                background-attachment: fixed;
                background-origin: initial;
                background-clip: initial;
                background-color: initial;
            }
            .top-buffer-1 { margin-top:20px; }
            .top-buffer { margin-top:2px; }
            fieldset.scheduler-border {
                border: 1px groove #ddd !important;
                padding: 0 1.4em 1.4em 1.4em !important;
                margin: 0 0 1.5em 0 !important;
                -webkit-box-shadow:  0px 0px 0px 0px #000;
                box-shadow:  0px 0px 0px 0px #000;
            }

            legend.scheduler-border {
                font-size: 1.2em !important;
                font-weight: bold !important;
                text-align: left !important;
                width:auto;
                padding:0 1px;
                border-bottom:none;
            }
            .login-wrapper {
                width: 100%;
                height: 100%;
                position: absolute;
                display: table;
                z-index: 2;
            }
            .note
            {
                text-align: center;
                height: 80px;
                background: -webkit-linear-gradient(left, #0072ff, #8811c5);
                color: #fff;
                font-weight: bold;
                line-height: 80px;
            }
            .note p{ font-size:30px; }
            .form-content
            {
                padding: 5%;
                border: 1px solid #ced4da;
                margin-bottom: 2%;
            }
            .form-control{
                border-radius:1.5rem;
            }
            .bk{
                background-color: white;
            }
            @media print {
                body * {
                    visibility: visible;
                }
                #section-to-print, #section-to-print * {
                    visibility: hidden;
                }
                #section-to-print {
                    position: absolute;
                    left: 0;
                    top: 0;
                }
                .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                    float: left;
                }
                .col-sm-12 {
                    width: 100%;
                }
                .col-sm-11 {
                    width: 91.66666667%;
                }
                .col-sm-10 {
                    width: 83.33333333%;
                }
                .col-sm-9 {
                    width: 75%;
                }
                .col-sm-8 {
                    width: 66.66666667%;
                }
                .col-sm-7 {
                    width: 58.33333333%;
                }
                .col-sm-6 {
                    width: 50%;
                }
                .col-sm-5 {
                    width: 41.66666667%;
                }
                .col-sm-4 {
                    width: 33.33333333%;
                }
                .col-sm-3 {
                    width: 25%;
                }
                .col-sm-2 {
                    width: 16.66666667%;
                }
                .col-sm-1 {
                    width: 8.33333333%;
                }
            }
        </style>


    </head>
    <body>
        <div class="container register-form top-buffer-1">
          <div class="form">
              <div class="note">
                <p>VHEG Fair Registration AUG'19</p>
            </div>
            <div class="form-content bk">
                <form action="#" method="POST">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Personal Information</legend>
                        <div class="row">
                            <div class="col-SM-2">
                              <label for="title">Title</label>
                              <input type="name" class="form-control" id="title" placeholder="Mr/Mrs/Miss" name="title">
                          </div>
                          <div class="col-SM-5">
                              <label for="fname">First Name</label>
                              <input type="name" class="form-control" id="fmane" placeholder="Manohar" name="fname">
                          </div>
                          <div class="col-sm-5">
                              <label for="lname">Last Name</label>
                              <input type="name" class="form-control" id="fmane" placeholder="Manohar" name="lname">
                          </div>
                      </div>
                      <div class="section-to-print" id="section-to-print">
                        <div class="row top-buffer">
                            <div class="col-sm-3">
                              <label for="email">Email ID</label>
                              <input type="email" class="form-control" id="email" placeholder="xyz@xyz.com" name="email">
                          </div>
                          <div class="col-sm-3">
                              <label for="dob">Date of Birth</label>
                              <input name="date" class="form-control" id="dob" type="dob" />
                          </div>
                          <div class="col-sm-2">
                              <label for="phone">Phone Number</label>
                              <input name="phone" class="form-control" id="phone" type="phone" />
                          </div>
                          <div class="col-sm-4">
                              <label for="phone">Gender / Sex</label></br>
                              <div class="radio-inline"><label><input type="radio" name="sex" value="male" checked>Male</label></div>
                              <div class="radio-inline"><label><input type="radio" name="sex" value="female">Female</label></div>
                              <div class="radio-inline"><label><input type="radio" name="sex" value="transgender">Transgender</label></div>
                          </div>
                      </div>
                      <div class="row top-buffer">
                        <!-- Address -->
                        <div class="form-group col-sm-3">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="add1" placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" name="add2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-2">
                              <label for="inputCity">City</label>
                              <input type="text" class="form-control" name="city" id="inputCity">
                          </div>
                          <div class="form-group col-sm-2">
                              <label for="inputState">State</label>
                              <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" name="zip" id="inputZip">
                      </div>
                  </div>
                  <!-- Address -->
              </div>
          </div>
      </fieldset>
      <!-- Educational Qualification -->
      
      <fieldset class="scheduler-border">
        <legend class="scheduler-border">Educational Qualification</legend>
        <div class="row">
            <div class="col-sm-4">
              <label for="cname">Collage Name</label>
              <input type="name" class="form-control" id="title" placeholder="KITS" name="cname">
          </div>
          <div class="col-sm-4">
              <label for="uname">University Name</label>
              <input type="name" class="form-control" id="fmane" placeholder="JNTUH" name="uname">
          </div>
          <div class="col-sm-4">
              <label for="place">Place</label>
              <input type="name" class="form-control" id="fmane" placeholder="Manohar" name="place">
          </div>
      </div>
      <div class="row top-buffer">
        <div class="col-sm-2">
          <label for="percentage">Percentage %</label>
          <input type="number" class="form-control" id="email" placeholder="xyz@xyz.com" name="percentage">
      </div>
      <div class="col-sm-2">
          <label for="backlogs">Backlogs</label>
          <input name="number" class="form-control" id="dob" type="backlogs" />
      </div>
      <div class="col-sm-2">
          <label for="phone">Specialization</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>
    <div class="col-sm-2">
      <label for="phone">Majors / Subjects</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>
</div>
<div class="col-sm-2">
  <label for="yop">Year of Passing</label>
  <input name="number" class="form-control" id="dob" type="yop" />
</div>
<div class="col-sm-2">
  <label for="phone">Any Work Exp?</label></br>
  <div class="radio-inline"><label><input type="radio" name="work" value="yes" >Yes</label></div>
  <div class="radio-inline"><label><input type="radio" name="work" value="no" checked>No</label></div>
</div>
</div>
</fieldset>
<!--Educational Qualification -->
<!-- Study Abroad Plans -->
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Study Abroad Plans</legend>
    <div class="row">
        <div class="col-sm-8">
          <label for="cname">Country Intrested For</label>
          <label class="checkbox-inline"><input type="checkbox" name="country[]" value="Australia">Australia</label>
          <label class="checkbox-inline"><input type="checkbox" name="country[]" value="Canada">Canada</label>
          <label class="checkbox-inline"><input type="checkbox" name="country[]" value="UK">UK</label>
          <label class="checkbox-inline"><input type="checkbox" name="country[]" value="USA">USA</label>
          <label class="checkbox-inline"><input type="checkbox" name="country[]" value="NZ">NZ</label>
          <label class="checkbox-inline"><input type="checkbox" name="country[]" value="Italy">Italy</label>
          <label class="checkbox-inline"><input type="checkbox" name="country[]" value="Germany">Germany</label>
          <input type="checkbox" name="country[]" id="propertytype-8" value="others">
          <input id="propertytype_other" name="country[]" type="text" value="" placeholder="other Seperate with coma (,)" class="form-control"> 
      </div>
      <div class="col-sm-4">
          <label for="location">Location</label>
          <input type="name" class="form-control" id="fmane" placeholder="Sydney" name="location">
      </div>
  </div>
</fieldset>
<!-- Study Abroad Plans -->
<!-- Test Prep -->
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Test Prep</legend>
    <div class="row">
        <div class="col-sm-2">
          <label for="location">Have you taken any Test Prep?</label>
          <div class="radio-inline"><label><input type="radio" name="testprep" value="yes" >Yes</label></div>
          <div class="radio-inline"><label><input type="radio" name="testprep" value="no" checked>No</label></div>
      </div>
      <div class="col-sm-6">
          <label for="cname">Name of Test Prep</label>
          <label class="checkbox-inline"><input type="checkbox" name="tname[]" value="IELTS">IELTS</label>
          <label class="checkbox-inline"><input type="checkbox" name="tname[]" value="PTE">PTE</label>
          <label class="checkbox-inline"><input type="checkbox" name="tname[]" value="UK">GRE</label>
          <label class="checkbox-inline"><input type="checkbox" name="tname[]" value="USA">GMAT</label>
          <label class="checkbox-inline"><input type="checkbox" name="tname[]" value="NZ">TOEFL</label>
          <input type="checkbox" name="tname[]" id="propertytype-8" value="others"> Others
          <input id="propertytype_other" name="tname[]" type="text" value="" placeholder="other Seperate with coma (,)" class="form-control"> 
      </div>
      <div class="col-sm-4">
          <label for="location">Overall Marks</label>
          <input type="number" class="form-control" id="fmane" placeholder="Sydney" name="marks">
      </div>
  </div>
</fieldset>
<!-- Study Abroad Plans -->
<button type="submit" class="btn btn-success" value="submit">Submit </button>
<button onclick="window.print();return false;" class="btn btn-primary">Print </button>
</form>
</div>
</div>
</div>
</body>
</html>