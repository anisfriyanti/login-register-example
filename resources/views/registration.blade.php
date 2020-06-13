<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            
                            <br/>
 
                   {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="proses" method="post">
                                {{ csrf_field() }}
 
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input class="form-control" type="text" name="firstname" value="">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input class="form-control" type="text" name="lastname" value="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" value="">
                                </div>
                                    <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" value="">
                                </div>
                                    <div class="form-group">
                                    <label for="passwordconfirmation">Password Confirmation</label>
                                    <input class="form-control" type="password" name="passwordconfirmation" value="">
                                </div>
                                 <div class="form-group">
                                    <label for="address">Address</label>
                                    <TEXTAREA class="form-control" type="text" name="address" value="" >
                                      
                                    </TEXTAREA> 
                                </div>
                                <div class="form-group">
                                    <label for="date_birth">Date of birth</label>
                                    <input class="form-control" type="date" name="date_birth" value="">
                                </div>
                                 <div class="form-group">
                                    <label for="">membership type</label>
                                 <select class="form-control"  id="membership_type" name="membership_type">
                                    <option value="1">Silver</option>
                                    <option value="2">Gold</option>
                                    <option value="3">Platinum</option>
                                    <option value="4">Black</option>
                                     <option value="5">VIP</option>
                                      <option value="6">VVIP</option>
                                  </select>
                              </div>
                             <!--  <div class="form-group">
                <label for="owner">Owner</label>
                <input type="text" class="form-control"  name="owner" id="owner">
            </div> -->
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" name="cvv" id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="card_number">Card Number</label>
                <input type="text" class="form-control" name="card_number" id="card_number">
            </div>
            <div class="form-group" id="expiration_date">
                <label>Expiration Date</label>
                <select id="month" name="month">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select id="year" name="year">
                    <option value="2016"> 2016</option>
                    <option value="2017"> 2017</option>
                    <option value="2018"> 2018</option>
                    <option value="2019"> 2019</option>
                    <option value="2020"> 2020</option>
                    <option value="2021"> 2021</option>
                </select>
            </div>
            <div class="form-group">
              <input type="checkbox" name="termandcondition" value="I agree to the Terms and Conditions" /> I agree to the Terms and Conditions</p>
</div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>

                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>