<div class="fixed-buttom">
  <footer class="page-footer font-small bg-dark text-white blue  pt-4 mt-5" id="footer-part">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
          <h5 class="text-uppercase">Easy Cart</h5>
          <p>We see our customers as invited guests to a party, and we are the hosts. It’s our job every day to make every important aspect of the customer experience a little bit better</p>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase"></h5>

          <ul class="list-unstyled">
            <li>
              <a class="text-white" href="product.php"></a>
            </li>
            <li>
              <a class="text-white" href="product.php">product</a>
            </li>

            <!-- <li>
            <a class="text-white" href="#">Link 1</a>
          </li>
          <li>
            <a class="text-white" href="#">Link 1</a>
          </li>
          <li>
            <a class="text-white" href="#">Link 1</a>
          </li> -->
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase"></h5>
          <ul class="list-unstyled">
            <li>
              <a class="text-white" href="product.php"></a>
            </li>
            <li>
              <a class="text-white" href="#">home</a>
            </li>

            <!-- <li>
            <a class="text-white" href="#">Link 1</a>
          </li>
          <li>
            <a class="text-white" href="#">Link 1</a>
          </li>
          <li>
            <a class="text-white" href="#">Link 1</a>
          </li> -->
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <a href="#">Debjeetpal</a>

    </div>
  </footer>
</div>

<style>
  .error {
    color: red;
  }
</style>


<script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- LIGHTSLIDER JS -->
<script type="text/javascript" src="assets/js/Lightslider js/lightslider.js"></script>
<!-- CUSTOME JS -->
<script type="text/javascript" src="assets/js/custome.js"></script>

<script>
  $(document).ready(function() {

    jQuery.validator.addMethod('gmail', function (value, element) {
    return this.optional(element) || /^[a-z0-9](\.?[a-z0-9]){4,}@[g][m][a][i][l]\.com$/i.test(value);
}, "not a valid Gmail email address");

    $('#singin').validate({
      rules: {
        email: {
          required: true,
          gmail: true
        },
        password: {
          required: true
        }
      },
      messages: {
        email: {
          required: "Please enter your email",
         gmail: "Please enter valid email"
        },
        password: {
          required: "Please enter your password"
        }
      }
    })
    $('#signup').validate({

      rules: {
        email: {
          required: true,
          gmail: true
        },
        username: {
          required: true
        },
        password: {
          required: true
        },
        cpassword: {
          required: true,
          equalTo: '#password'
        }
      },
      messages: {
        email: {
          required: "Please enter your email",
          email: "Enter your valid email"
        },
        username: {
          required: "Please enter your User name"
        },
        password: {
          required: "Please enter your password"
        },
        cpassword: {
          required: "",
          equalTo: "password does not match"
        }
      }
    })
    $("#summary").validate({
      rules: {
        address: {
          required: true
        },
        phone: {
          required: true,
          maxlength: 10,
          minlength: 10
        }
      },
      messages: {
        address: {
          required: "Please enter your address"
        },
        phone: {
          required: "Please enter the phone number",
          maxlength: "Please enter your valid number",
          minlength: "Please enter your valid number"
        }
      }
    })
  })
</script>


</body>

</html>