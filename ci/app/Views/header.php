<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="title icon" href="<?= base_url('vendor/image/apple-icon-144x144.png')?>" type="image/png" />
    <title>Ignition</title>

    <!-- montserrat font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> -->

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="../main2.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar py-0 navbar-expand-lg navbar-light">
        <div class="container-fluid px-2 px-md-4 px-lg-5">
            <a class="navbar-brand py-0" href="#">
                <img src="imgs/ignition-logo.svg" class="logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Launchpads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">PAID token</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Staking</a>
                    </li>
                    <div class="nav_action_buttons show_mobile">
                        <button class="nav-link" data-bs-target="#signUpModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up</button>

                        <button class="nav-link" data-bs-target="#loginModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Login</button>
                    </div>
                </ul>
                
                <div class="nav_action_buttons">
                    <button class="btn btn-outline-success button" data-bs-target="#signUpModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up</button>
                    
                    <button class="btn btn-outline-success button" data-bs-target="#loginModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Login</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- login, forgot password and sign up modal -->
    <!-- data-bs-backdrop="static" data-bs-keyboard="false" in .modal -->
    <!-- login -->
     <div class="modal fade" id="loginModalToggle" aria-hidden="true" aria-labelledby="loginModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalToggleLabel">Login</h5>
                    <span class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" class="close-icon" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                            </path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body">
                    <form class="form px-0 px-md-3">
                        <div class="form_input">
                            <input type="email" placeholder="Email" name="email">
                            
                            <div class="helper">
                                <p class="d-none">Email must be an email</p>
                            </div>
                        </div>
                        <div class="form_input">
                            <input type="password" placeholder="Password" name="password">

                            <div class="helper">
                              <p class="d-none">Password must have a minimum length of 12 characters</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" role="button" class="btn button" > <a href="index2.html">Login</a></button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <p data-bs-target="#signUpModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up for an account</p>

                    <p data-bs-target="#forgotPasswordModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot password</p>
                </div>
            </div>
        </div>
    </div> 


    <!-- forgot password -->
     <div class="modal fade" id="forgotPasswordModalToggle" aria-hidden="true" aria-labelledby="forgotPasswordModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header mb-0">
                    <h5 class="modal-title" id="forgotPasswordModalToggleLabel">Forgot password</h5>
                    <span class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" class="close-icon"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                            </path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body">
                    <p>
                        Please enter your email and we'll send you instructions to reset your password
                    </p>

                    <form class="form px-0 px-md-3">
                        <div class="form_input">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                    
                        <div class="d-flex justify-content-center">
                            <button type="submit" role="button" class="btn button">Send</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p data-bs-target="#signUpModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up for an account</p>
                </div>
            </div>
        </div>
    </div> 


    <!-- sign up -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"  id="signUpModalToggle" aria-hidden="true" aria-labelledby="signUpModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUpModalToggleLabel">Sign up</h5>
                    <span class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" class="close-icon"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                            </path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body">
                    <form class="form px-0 px-md-3">
                        <div class="d-flex flex-column flex-md-row align-items-md-center">
                            <div class="form_input me-md-3 flex-fill">
                                <input type="text" placeholder="Name" name="name">
                            
                                <div class="helper">
                                    <p class="d-none">Name should not be empty</p>
                                </div>
                            </div>
                            <div class="form_input flex-fill">
                                <input type="text" placeholder="Surname" name="surname">
                            
                                <div class="helper">
                                    <p class="d-none">Surname should not be empty</p>
                                </div>
                            </div>
                        </div>

                        <div class="form_input">
                            <input type="email" placeholder="Email" name="email">
                    
                            <div class="helper">
                                <p class="d-none">Email must be an email</p>
                            </div>
                        </div>

                        <div class="form_input">
                            <input type="password" placeholder="Password" name="password">
                    
                            <div class="helper">
                                <p class="d-none">Password must have a minimum length of 12 characters</p>
                            </div>
                        </div>
                        <div class="form_input">
                            <input type="password" placeholder="Confirm password" name="password">
                    
                            <div class="helper">
                                <p class="d-none">Password must be the same</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-md-center">
                            <div class="form_input me-md-3 flex-fill">
                                <input type="text" placeholder="Address" name="Address">
                        
                                <div class="helper">
                                    <p class="d-none">Address should not be empty</p>
                                </div>
                            </div>
                            <div class="form_input me-md-3 flex-fill">
                                <input type="text" placeholder="Address 2" name="Address 2">
                            </div>
                            <div class="form_input flex-fill">
                                <input type="text" placeholder="City" name="City">
                        
                                <div class="helper">
                                    <p class="d-none">City should not be empty</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-md-center">
                            <div class="form_input me-md-3">
                                <input type="text" placeholder="Province/State" name="Province/State">
                        
                                <div class="helper">
                                    <p class="d-none">Province/State should not be empty</p>
                                </div>
                            </div>
                            <div class="form_input flex-fill">
                                <select name="Country select" id="country_select">
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Ukraine">Ukraine</option>
                                </select>
                        
                                <div class="helper">
                                    <p class="d-none">Country should not be empty</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4 ps-1 pb-3">
                            <input type="checkbox" name="confirm check" id="confirm_check">
                            <label class="ms-2 flex-fill" for="confirm_check">
                                I confirm i am not a resident or citizen of the United states of America
                            </label>
                        </div>
                        <div class="helper">
                            <p class="d-none">You have to confirm that you are not a US resident/citizen</p>
                        </div>
                    
                        <div class="d-flex justify-content-center">
                            <button type="submit" role="button" class="btn button">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    <main>
        <div class="inner_wrapper">
          

            <!-- active -->
          

            <!-- upcoming -->
           

             <!-- ended -->
             

           
            </html>