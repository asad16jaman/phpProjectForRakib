<div class="modal fade" id="userSignupModel" tabindex="-1" aria-labelledby="userSignupModel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       
        <div class="modal-body mx-3">
        
            <form class="g-3" method="post" action="./pages/register/register.php">
                <div class="col-12">
                  <div class="form-group">
                      <label for="usernam" class="form-label  d-inln">Username</label>
                        <input type="text" name="username" class="form-control custom-width" placeholder="Username" >
                        <button class="btn btn-primary formIcon">
                          <i class="fa-regular fa-user"></i>
                        </button>
                    </div>

                    <div class="form-group my-3">
                      <label for="first_name" class="form-label d-inln">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control custom-width" placeholder="First Name" >
                        <button class="btn btn-primary formIcon">
                          <i class="fa-regular fa-user"></i>
                        </button>
                    </div>

                    <div class="form-group my-3">
                      <label for="last_name" class="form-label d-inln">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control custom-width" placeholder="Last Name" >
                        <button class="btn btn-primary formIcon">
                          <i class="fa-regular fa-user"></i>
                        </button>
                    </div>

                    <div class="form-group my-3">
                      <label for="email" class="form-label d-inln">Email</label>
                        <input type="email" id="email" name="email" class="form-control custom-width" placeholder="Enter Your Email">
                        <button class="btn btn-primary formIcon">
                            <i class="fa-regular fa-envelope"></i>
                        </button>
                    </div>

                    <div class="form-group my-3">
                      <label for="password"  class="form-label  d-inln">Password</label>
                        <input type="password" id="password" name="password" class="form-control custom-width" placeholder="Password">
                        <button class="btn btn-primary formIcon">
                            <i class="fa-solid fa-lock"></i>
                        </button>
                    </div>
                </div>

                <div class="form-check">
                  <input class="form-check-input" id="trmCnd" name="trmCnd" type="checkbox" value="true" id="defaultCheck1">
                  <label class="form-check-label" for="trmCnd">
                    I understand the Terms & Conditions
                  </label>
                </div>
                
                <!-- <input type="submit" value="Sign Up" class="btn btn-primary btn-block"> -->
                <div class="d-grid">
                  <input type="submit" value="Sign Up" class="btn btn-primary">
                </div>

                <div class="brdiv">
                 <span></span>
                  <button>or</button>
                 <span></span>
                </div>

                <!--  -->
                <div class="d-grid">
                  <a href="./user/login" class="btn btn-outline-dark">Login Now</a>
                </div>
            </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div> -->
    </div>
  </div>