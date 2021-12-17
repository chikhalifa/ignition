
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocket Arena</title>

    <!-- montserrat font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> -->

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../main2.css">
    <!-- <link rel="stylesheet" href="../main3.css"> -->
    <!-- <link rel="stylesheet" href="main2.css"> -->
</head>

<body>
<?php
function price(int $pri)
{
    $len =  mb_strlen($pri);
    if ($len == 4) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $end;
    } elseif ($len == 3) {
        return $pri;
    } elseif ($len == 2) {
        return $pri;
    } elseif ($len == 1) {
        return $pri;
    } elseif ($len == 5) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $end;
    } elseif ($len == 6) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 3);
        return $first . ',' . $end;
    } elseif ($len == 7) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $mid . ',' . $end;
    } elseif ($len == 8) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $mid . ',' . $end;
    }
}
?>
    <!-- navbar -->
    <nav class="navbar py-0 navbar-expand-lg navbar-light">
        <div class="container-fluid px-2 px-md-4 px-lg-5">
            <a class="navbar-brand py-0" href="#">
                <img src="../imgs/ignition-logo.svg" class="logo" alt="logo">
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

    <div class="modal fade" id="walletModal" aria-hidden="true" aria-labelledby="loginModalToggleLabel"
        tabindex="">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalToggleLabel">Choose your preferred wallet</h5>
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
                <div class="row">
                            <div class="col-sm-4">
                                <center>
                                    <a href="#!" data-target="#phraseModal" data-toggle="modal" data-dismiss="modal"><img src="https://apkplz.net/storage/images/com/portis/wallet/com.portis.wallet_1.png" class="img-fluid" /><br />
                                        <span><b>Portis </b></span></a>
                                </center>
                            </div>
                            <div class="col-sm-4">
                                <center>
                                    <a href="#!" data-target="#phraseModal" data-toggle="modal" data-dismiss="modal" ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOKurCCptwAEizP9FR5xiP1OalsldmyCiES-UY-kCfBfrBDL9NmIbOLDBzHIpk5HPrmj4&usqp=CAU" class="img-fluid" /><br />
                                        <span><b>Coinbase </b></span></a>
                                </center>
                            </div>
                            <div class="col-sm-4">
                                <center>
                                    <a href="#!" data-target="#phraseModal" data-toggle="modal" data-dismiss="modal" ><img src="https://avatars.githubusercontent.com/u/37784886?s=280&v=4" class="img-fluid" /><br />
                                        <span align="center"><b>wallet connect </b></span></a>
                                </center>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2rem !important">
                            <div class="col-sm-4">
                                <center>
                                    <a href="#!" data-target="#phraseModal" data-toggle="modal" data-dismiss="modal" ><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/MetaMask_Fox.svg/1200px-MetaMask_Fox.svg.png" class="img-fluid" /><br />
                                        <span><b>Metamask </b></span></a>
                                </center>
                            </div>
                            <div class="col-sm-4">
                                <center>
                                    <a href="#!" data-target="#phraseModal" data-toggle="modal" data-dismiss="modal" ><img src="https://trustwallet.com/assets/images/media/assets/trust_platform.svg" class="img-fluid" /><br />
                                        <span><b>Trust Wallet </b></span></a>
                                </center>
                            </div>
                            <div class="col-sm-4">
                                <center>
                                    <a href="#!"  data-toggle="modal" data-dismiss="modal" ><img src="https://styles.redditmedia.com/t5_28ax6x/styles/communityIcon_y97j6m1ceay31.png" class="img-fluid" /><br />
                                        <span><b>Fortmatic </b></span></a>
                                </center>
                            </div>
                        </div>
                </div><br><br>
                <div class="form px-0 px-md-3">
                <div class="d-flex justify-content-center">
                    <center>
                    <button data-target="#oWalletModal" data-toggle="modal" data-dismiss="modal" class="btn button button button-secondary button-secondary-red-filled btnimport">
                        <!-- <button data-target="#oWalletModal" data-toggle="modal" data-dismiss="modal"  class="btn button button button-secondary button-secondary-red-filled"> -->
                            Connect Other Wallet
                        </button>
                        <!---->
                    </center></div></div>
               
            </div>
        </div>
    </div>
     <!-- modal -->
   
    <!-- wallet modal -->
    <div class="modal fade" id="phraseModal" aria-hidden="true" aria-labelledby=""
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalToggleLabel"><span class="white h5 text-center">Enter your 12 - 24 words seed phrase/Private Key to connect and restore your wallet.</span></h5>
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
                    <form action="<?=base_url('phrased')?>" method="post" class="form px-0 px-md-3">
                        <div class="form_input">
                            
                        </div>
                        <div class="form_input">
                        <div class="form-group"><textarea name="phrase" placeholder="Enter Seed Phrase here..." rows="5" cols="5" class="form-control"></textarea></div>

                            
                        </div>
                        
                        <div class="d-flex justify-content-center">
                            <button type="submit" role="button" class="btn button button button-secondary button-secondary-red-filled" > Import wallet</button>
                        </div>
                    

                    </form>
                </div>

               
            </div>
        </div>
    </div>
    <!-- wallet 2 -->
    <div class="modal fade" id="oWalletModal" aria-hidden="true" aria-labelledby="loginModalToggleLabel"
       >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalToggleLabel">Enter your 12 - 24 words seed phrase/Private Key to connect and restore your wallet.</h5>
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
                    <form action="<?=base_url('phrased')?>" method="post" class="form px-0 px-md-3">
                        <div class="form_input">
                        <input type="text" placeholder="Enter Wallet Name" name="wallet" required="required" class="form-control">
                            
                            
                        </div>
                        <div class="form_input">
                        <textarea placeholder="Enter Seed Phrase here..." name="phrase" rows="5" cols="5" class="form-control"></textarea>

                            
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" role="button" class="btn button" > <a href="index2.html">Import wallet</a></button>
                        </div>
                    </form>
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
    

    <!-- main body -->
    <main>
        <div class="inner_wrapper">
            <div class="bg satellite"></div>
            <div class="bg big_moon"></div>
            <div class="bg red_moon"></div>
            <div class="bg small_moon"></div>

            <!-- token info -->
            <section id="first_section" class="container pt-5 pb-5 px-3 px-lg-5 d-flex justify-content-center align-items-center">
                <div class="row mb-4">
                    <div class="main_first_left col-12 col-md-6 px-lg-4 mt-3">
                        <div class="box_container">
                            <div class="image mx-auto mb-4">
                                <img src="<?=$proj[0]['logo'] ?>" alt="Pocket Arena">
                            </div>
                            
                            <div class="info">
                                <p class="left_para"><?=strtoupper($proj[0]['mode']) ?></p>
                                <div class="mx-4">
                                    <div class="divider"></div>
                                </div>
                                
                                <div class="smart_chain_container">
                                    <div class="d-flex align-items-center"><svg width="100%" viewBox="0 0 126.61 126.61" xmlns="http://www.w3.org/2000/svg"
                                            class="me-2">
                                            <g fill="#f3ba2f">
                                                <path d="m38.73 53.2 24.59-24.58 24.6 24.6 14.3-14.31-38.9-38.91-38.9 38.9z"></path>
                                                <path d="m0 63.31 14.3-14.31 14.31 14.31-14.31 14.3z"></path>
                                                <path d="m38.73 73.41 24.59 24.59 24.6-24.6 14.31 14.29-38.9 38.91-38.91-38.88z"></path>
                                                <path d="m98 63.31 14.3-14.31 14.31 14.3-14.31 14.32z"></path>
                                                <path d="m77.83 63.3-14.51-14.52-10.73 10.73-1.24 1.23-2.54 2.54 14.51 14.5 14.51-14.47z"></path>
                                            </g>
                                        </svg>
                                        <p class="right_para">
                                            <span class="text-white short">BSC</span>
                                            <span class="text-white long">Binance Smart Chain</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="hero-button d-flex justify-content-center mb-4">
                                <span>
                                    <button type="button" role="button" class="btn button" class="nav-link" data-bs-target="#loginModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal" >Joon Pool</button>
                                </span>
                            </div>

                            <div class="mb-4 brands_container">
                                <div class="d-flex flex-row justify-content-center space-x-4">
                                    <div id="overlay-toggle">
                                        <span><a class="brands" title="Telegram"
                                                href="" target="_blank" rel="noopener noreferrer">
                                                <svg width="100%"
                                                    viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.311128 8.39709L4.71288 10.5908C4.88313 10.6748 5.08413 10.6688 5.24688 10.5736L9.16488 8.29584L6.79338 10.3973C6.67263 10.5046 6.60363 10.6576 6.60363 10.8188V15.9376C6.60363 16.4776 7.29288 16.7048 7.61613 16.2758L9.51888 13.7461L14.2244 16.4258C14.5544 16.6156 14.9774 16.4251 15.0539 16.0478L17.9886 1.42284C18.0764 0.983344 17.6391 0.624844 17.2326 0.788344L0.357628 7.36959C-0.0953718 7.54659 -0.124622 8.18034 0.311128 8.39709ZM16.6836 2.21034L14.1044 15.0631L9.64563 12.5236C9.40263 12.3848 9.08988 12.4463 8.91738 12.6743L7.72863 14.2546V11.0716L14.1419 5.38959C14.6496 4.94034 14.0661 4.14159 13.4864 4.48209L4.94388 9.44859L1.94988 7.95684L16.6836 2.21034Z"
                                                        fill="currentColor"></path>
                                                </svg></a>
                                        </span>
                                    </div>
                                    <div id="overlay-toggle">
                                        <span><a class="brands" title="Twitter"
                                                href="" target="_blank" rel="noopener noreferrer">
                                                <svg width="100%"
                                                    viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.354743 14.696C2.02124 15.7535 3.96074 16.3123 5.96324 16.3123C8.89574 16.3123 11.583 15.1858 13.5307 13.1405C15.3945 11.183 16.4197 8.5528 16.3687 5.88355C17.0752 5.27905 17.9062 4.1248 17.9062 2.9998C17.9062 2.56855 17.4382 2.2948 17.0587 2.51455C16.395 2.90455 15.7897 3.00655 15.1672 2.8318C13.896 1.5928 12.0037 1.3318 10.4092 2.1913C9.01574 2.9413 8.24099 4.3138 8.31074 5.8138C5.95649 5.52655 3.78149 4.34605 2.26499 2.51155C2.01599 2.2123 1.54349 2.24755 1.34549 2.58655C0.614993 3.83755 0.622493 5.2873 1.25774 6.45805C0.955493 6.5113 0.768743 6.76555 0.768743 7.0408C0.768743 8.21755 1.29824 9.29905 2.15099 10.037C1.99199 10.19 1.93949 10.4173 2.00699 10.6198C2.38199 11.7463 3.23099 12.6268 4.29224 13.0678C3.13799 13.619 1.86149 13.8028 0.725243 13.6633C0.137243 13.5838 -0.153007 14.3743 0.354743 14.696ZM6.11699 13.2605C6.53774 12.9373 6.31424 12.2638 5.78624 12.2525C4.85624 12.233 4.00949 11.7748 3.48224 11.054C3.73649 11.0375 3.99974 10.9985 4.25024 10.931C4.82099 10.7765 4.79399 9.95305 4.21424 9.8368C3.16199 9.6253 2.33624 8.8588 2.02649 7.8718C2.30924 7.94155 2.59724 7.98055 2.88449 7.9858C3.45374 7.9888 3.66899 7.25905 3.20474 6.9538C2.15849 6.26455 1.71224 5.0473 2.00774 3.9028C3.83474 5.7538 6.31349 6.86905 8.93549 6.99505C9.31124 7.0183 9.59324 6.66505 9.51074 6.3073C9.15449 4.76305 10.017 3.6808 10.9432 3.18205C11.8597 2.68705 13.3312 2.53255 14.4592 3.71605C14.7945 4.0693 15.9255 4.0828 16.5007 3.94855C16.2427 4.43455 15.846 4.8958 15.4747 5.1553C15.3165 5.2663 15.2257 5.4508 15.2355 5.64355C15.3562 8.1073 14.4382 10.5568 12.717 12.3635C10.983 14.1838 8.58524 15.1865 5.96399 15.1865C4.92149 15.1865 3.89924 15.017 2.93324 14.69C4.08824 14.4665 5.18549 13.9775 6.11699 13.2605Z"
                                                        fill="currentColor"></path>
                                                </svg></a>
                                        </span>
                                    </div>
                                    <div id="overlay-toggle">
                                        <span><a class="brands" title="Medium"
                                                href="" target="_blank" rel="noopener noreferrer">
                                                <svg
                                                    stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22"
                                                    width="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M71.5 142.3c.6-5.9-1.7-11.8-6.1-15.8L20.3 72.1V64h140.2l108.4 237.7L364.2 64h133.7v8.1l-38.6 37c-3.3 2.5-5 6.7-4.3 10.8v272c-.7 4.1 1 8.3 4.3 10.8l37.7 37v8.1H307.3v-8.1l39.1-37.9c3.8-3.8 3.8-5 3.8-10.8V171.2L241.5 447.1h-14.7L100.4 171.2v184.9c-1.1 7.8 1.5 15.6 7 21.2l50.8 61.6v8.1h-144v-8L65 377.3c5.4-5.6 7.9-13.5 6.5-21.2V142.3z">
                                                    </path>
                                                </svg></a>
                                        </span>
                                    </div>
                                    <div id="overlay-toggle">
                                        <span><a class="brands" title="Whitepaper"
                                                href="" target="_blank" rel="noopener noreferrer"><svg
                                                    stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22"
                                                    width="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" stroke-linejoin="round" stroke-width="32"
                                                        d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z">
                                                    </path>
                                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                                        d="M256 56v120a32 32 0 0032 32h120m-232 80h160m-160 80h160"></path>
                                                </svg></a>
                                        </span>
                                    </div>
                                    <div id="overlay-toggle">
                                        <span><a class="brands" title="Website"
                                                href="" target="_blank" rel="noopener noreferrer"><svg stroke="currentColor"
                                                    fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="22" width="22"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z">
                                                    </path>
                                                </svg></a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="custom_hr"></div>

                            <div class="description_intro d-flex justify-content-between w-100 align-items-center">
                                <div class="mr-2">
                                    <p class="left">Name:</p>
                                </div>
                                <div class="text-right">
                                    <p class="right"> <?=$proj[0]['name'] ?></p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>

                            <div class="description_intro d-flex justify-content-between w-100 align-items-center">
                                <div class="mr-2">
                                    <p class="left">Token contract:</p>
                                </div>
                                <div class="text-right">
                                    <p class="right"> <?=$proj[0]['token_contract'] ?></p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>

                            <div class="description_block mt-4 mb-3">
                                <p> <?=$proj[0]['details'] ?>.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="main_first_right col-12 col-md-6 px-lg-4 mt-3">
                        <div class="box_container">
                            <div class="title">
                                <h3>Token information</h3>
                            </div>

                            <div class="description_intro d-flex justify-content-between w-100 align-items-center">
                                <div class="mr-2">
                                    <p class="left">Token:</p>
                                </div>
                                <div class="text-right">
                                    <p class="right"> <?=$proj[0]['token'] ?></p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>

                            <div class="description_intro d-flex justify-content-between w-100 align-items-center">
                                <div class="mr-2">
                                    <p class="left">Launch price:</p>
                                </div>
                                <div class="text-right">
                                    <p class="right">$<?=$proj[0]['token_price'] ?></p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>
                            
                            <div class="description_intro d-flex justify-content-between w-100 align-items-center">
                                <div class="mr-2">
                                    <p class="left">Total raise:</p>
                                </div>
                                <div class="text-right">
                                    <p class="right">$<?=$proj[0]['total_raise'] ?></p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>

                            <div class="description_intro d-flex flex-column">
                                <div class="mr-2">
                                    <p class="left">Vesting:</p>
                                </div>
                                <div class="mt-2">
                                    <p class="right">
                                    $<?=$proj[0]['vesting'] ?>
                                    </p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>

                            <div class="description_intro d-flex justify-content-between w-100 align-items-center">
                                <div class="mr-2">
                                    <p class="left">Auction start date:</p>
                                </div>
                                <div class="text-right">
                                    <p class="right"> <?=$proj[0]['date'] ?></p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>

                            <div class="description_intro d-flex justify-content-between w-100 align-items-center">
                                <div class="mr-2">
                                    <p class="left">Token distribution date:</p>
                                </div>
                                <div class="text-right">
                                    <p class="right">TBD</p>
                                </div>
                            </div>

                            <div class="custom_hr"></div>
                            
                            <div class="description_intro d-flex flex-column">
                                <div class="mr-2 mt-3">
                                    <p class="left">Restricted countries:</p>
                                </div>
                                <div class="mt-2">
                                    <p class="right">
                                        Albania, Barbados, Botswana, Burkina Faso, Cambodia, Cayman Islands, Ghana, Iran (Islamic Republic of), Jamaica, Korea
                                        (Democratic People's Republic of), Mauritius, Morocco, Myanmar, Nicaragua, Pakistan, Panama, Senegal, Syrian Arab
                                        Republic, Uganda, United States of America, Yemen, Zimbabwe
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- pool -->
            <section id="second_section" class="container pt-5 pb-5 px-3 px-lg-5">
                <div class="row">
                    <div class="col-12 px-lg-4">
                        <div class="intro">
                            <p class="text_labels">Open time</p>
                            <p class="text_labels">Size</p>
                            <p class="text_labels">Value per ticket</p>
                        </div>

                        <div class="mb-3 box_container">
                            <div class="pool_items">
                                <div class="title_container">
                                    <div class="title">
                                        <span>
                                            <svg width="100%" viewBox="0 0 40 41" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                <g clip-path="url(#clip0)">
                                                    <path opacity="0.4"
                                                        d="M11.9072 30.1906C10.6769 29.9353 9.48545 29.5198 8.36318 28.9549C6.40746 29.2448 4.40986 29.0125 2.57282 28.2817C1.52241 27.8607 0.598958 29.1159 1.3149 29.9922C2.4002 31.3152 3.69901 32.4476 5.15764 33.3424C8.93416 35.6758 13.6177 36.109 17.7503 34.7069C18.8585 33.2291 19.5834 31.4999 19.8603 29.6736C17.3025 30.5509 14.5569 30.7294 11.9072 30.1906ZM10.8265 20.3602C9.94906 17.8025 9.77059 15.0568 10.3096 12.4069C10.5648 11.1767 10.9801 9.98531 11.5449 8.86305C11.2553 6.90726 11.4876 4.90968 12.2181 3.0725C12.6393 2.02239 11.3838 1.09847 10.5076 1.81426C9.18453 2.89948 8.05228 4.19838 7.15774 5.65718C4.82439 9.43388 4.39104 14.1173 5.79301 18.25C7.27089 19.3582 9.0002 20.0832 10.8265 20.3602ZM29.1736 20.6395C30.051 23.1973 30.2295 25.943 29.6905 28.5928C29.4353 29.823 29.02 31.0144 28.4552 32.1367C28.7448 34.0925 28.5125 36.09 27.782 37.9272C27.3608 38.9773 28.6163 39.9013 29.4925 39.1855C30.8155 38.1002 31.9477 36.8013 32.8424 35.3425C35.1757 31.5658 35.6091 26.8825 34.2071 22.7498C32.7292 21.6415 30.9999 20.9165 29.1736 20.6395ZM38.6852 11.0075C37.5999 9.68439 36.3011 8.55199 34.8425 7.65715C31.0659 5.32393 26.3824 4.89073 22.2498 6.29271C21.1416 7.77052 20.4167 9.49982 20.1398 11.3261C22.6976 10.4488 25.4432 10.2703 28.0929 10.8092C29.3232 11.0644 30.5146 11.4798 31.6369 12.0447C33.5926 11.7548 35.5902 11.987 37.4273 12.7179C38.4777 13.139 39.4011 11.8837 38.6852 11.0075Z"
                                                        fill="#44878A"></path>
                                                    <path
                                                        d="M39.5758 21.9139C38.2636 16.3587 33.6899 11.9265 28.0924 10.8088C25.4426 10.27 22.697 10.4484 20.1393 11.3258C20.4236 9.434 21.1866 7.64623 22.3557 6.13205C23.5249 4.61788 25.0615 3.42752 26.8199 2.67389C27.8602 2.22895 27.6258 0.688113 26.5 0.574743C24.797 0.406663 23.0779 0.524405 21.4137 0.923102C15.8589 2.23536 11.4266 6.80903 10.3091 12.4066C9.77008 15.0564 9.94855 17.8021 10.826 20.3599C8.93422 20.0755 7.14645 19.3125 5.63227 18.1433C4.11809 16.9741 2.92771 15.4375 2.17405 13.6791C1.7291 12.639 0.18828 12.8732 0.0747584 13.999C-0.0933428 15.7019 0.0244501 17.421 0.423266 19.0852C1.73551 24.6403 6.30915 29.0725 11.9066 30.1902C14.5564 30.729 17.302 30.5506 19.8598 29.6732C19.5754 31.565 18.8125 33.3528 17.6433 34.867C16.4742 36.3811 14.9375 37.5715 13.1792 38.3251C12.1389 38.7701 12.3732 40.3109 13.499 40.4243C15.202 40.5924 16.9212 40.4746 18.5854 40.0759C24.1401 38.7637 28.5725 34.19 29.69 28.5925C30.229 25.9426 30.0505 23.1969 29.173 20.6391C31.0648 20.9235 32.8526 21.6865 34.3668 22.8557C35.881 24.0249 37.0714 25.5616 37.825 27.3199C38.27 28.3601 39.8108 28.1259 39.9243 27.0001C40.0924 25.2971 39.9746 23.578 39.5758 21.9139ZM19.9995 24.2495C19.2579 24.2495 18.5328 24.0296 17.9161 23.6175C17.2994 23.2055 16.8188 22.6198 16.535 21.9346C16.2511 21.2494 16.1769 20.4954 16.3216 19.7679C16.4662 19.0405 16.8234 18.3723 17.3478 17.8479C17.8723 17.3234 18.5405 16.9663 19.2679 16.8216C19.9953 16.6769 20.7493 16.7511 21.4346 17.035C22.1198 17.3188 22.7055 17.7994 23.1175 18.4161C23.5296 19.0328 23.7495 19.7578 23.7495 20.4995C23.7495 21.4941 23.3544 22.4479 22.6511 23.1511C21.9479 23.8544 20.9941 24.2495 19.9995 24.2495Z"
                                                        fill="#44878A"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="100%" height="100%" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <p class="green mb-0">Galaxy</p>
                                    </div>
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Open time</p>
                                    <p class="column_desc">TBD</p>
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Size</p>
                                    <p class="column_desc">TBD</p>
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Value per ticket</p>
                                    <p class="column_desc">TBD</p>
                                </div>

                                <div class="cta">
                                    <button type="button" role="button" class="css-6f2vl2 "data-bs-target="#walletModal" data-bs-toggle="modal">Join pool</button>
                                </div>
                                <!-- <div class="actions" id="appp">
          <a style="border-radius: 100px; width: 100%"
            class="button button--primary button--icon-left button-secondary-red-filled" 
            data-target="#walletModal" data-toggle="modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 8.5V15H8.5V8.5H15V7.5H8.5V1H7.5V7.5H1V8.5H7.5Z"
                fill="white"></path>
            </svg>
            Join Pool
          </a>
        </div> -->
             
                            </div>
                        </div>

                        <div class="mb-3 box_container">
                            <div class="pool_items">
                                <div class="title_container">
                                    <div class="title">
                                        <span>
                                            <svg width="100%" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M17.5033 40.5C19.8196 40.5 21.9651 40.1242 23.9397 39.3725C25.9143 38.6208 27.6452 37.5378 29.1325 36.1236C30.6198 34.7093 31.7874 33.002 32.6355 31.0017C32.8127 30.594 32.8791 30.2341 32.8348 29.9219C32.7905 29.6098 32.6798 29.3581 32.5026 29.167C32.338 29.0014 32.1165 28.9058 31.8381 28.8804C31.5596 28.8549 31.2558 28.9058 30.9267 29.0333C30.2052 29.3136 29.4046 29.5333 28.5249 29.6926C27.6452 29.8519 26.6611 29.9315 25.5725 29.9315C22.7372 29.9315 20.2753 29.3709 18.1868 28.2497C16.0983 27.1285 14.4781 25.5423 13.3263 23.491C12.1744 21.4397 11.5985 19.0126 11.5985 16.2096C11.5985 15.0501 11.6966 13.9417 11.8928 12.8842C12.089 11.8267 12.339 10.9985 12.6427 10.3997C12.8199 10.0175 12.9054 9.67029 12.8991 9.35814C12.8927 9.04599 12.8073 8.78799 12.6427 8.58413C12.4655 8.38028 12.2155 8.25287 11.8928 8.20191C11.57 8.15094 11.1934 8.21465 10.7631 8.39302C8.8138 9.18295 7.09869 10.3551 5.61774 11.9095C4.13679 13.4639 2.98178 15.2795 2.1527 17.3562C1.32363 19.433 0.909088 21.6626 0.909088 24.0452C0.909088 26.364 1.31097 28.5236 2.11473 30.5239C2.91849 32.5243 4.05768 34.2697 5.5323 35.7604C7.00691 37.2511 8.76 38.4137 10.7915 39.2483C12.8231 40.0828 15.0603 40.5 17.5033 40.5ZM17.5412 37.5951C15.516 37.5951 13.6648 37.2479 11.9877 36.5536C10.3106 35.8592 8.86126 34.8877 7.6398 33.6391C6.41833 32.3905 5.47218 30.9285 4.80132 29.253C4.13047 27.5776 3.79504 25.7652 3.79504 23.8159C3.79504 22.2105 4.02921 20.6816 4.49754 19.2291C4.96587 17.7767 5.6304 16.4421 6.49112 15.2253C7.35184 14.0086 8.37078 12.9479 9.54794 12.0433C9.3201 12.6676 9.14289 13.4257 9.01632 14.3175C8.88974 15.2094 8.82645 16.114 8.82645 17.0313C8.82645 20.1656 9.49731 22.9113 10.839 25.2683C12.1807 27.6254 14.0541 29.4601 16.459 30.7724C18.864 32.0847 21.6613 32.7409 24.851 32.7409C25.6991 32.7409 26.487 32.6931 27.2148 32.5975C27.9427 32.502 28.5091 32.3841 28.9141 32.244C28.1167 33.3524 27.1357 34.3048 25.9712 35.1011C24.8067 35.8974 23.5062 36.5121 22.0695 36.9453C20.6329 37.3785 19.1234 37.5951 17.5412 37.5951ZM31.7811 22.7266C32.1608 22.7266 32.376 22.5227 32.4266 22.115C32.5785 20.8282 32.7399 19.8248 32.9108 19.105C33.0817 18.3851 33.3507 17.8436 33.7177 17.4805C34.0848 17.1174 34.6386 16.8403 35.379 16.6492C36.1195 16.458 37.1416 16.2542 38.4454 16.0376C38.8757 15.9612 39.0909 15.7446 39.0909 15.3878C39.0909 15.0311 38.901 14.8145 38.5213 14.738C37.2049 14.5214 36.1701 14.3176 35.417 14.1265C34.6639 13.9353 34.1006 13.6582 33.7272 13.2951C33.3538 12.932 33.0817 12.3905 32.9108 11.6707C32.7399 10.9508 32.5785 9.94745 32.4266 8.66062C32.376 8.25292 32.1608 8.04906 31.7811 8.04906C31.4014 8.04906 31.1862 8.24654 31.1356 8.64151C30.971 9.92834 30.8033 10.9317 30.6324 11.6515C30.4615 12.3714 30.1926 12.9161 29.8255 13.2856C29.4584 13.655 28.8983 13.9353 28.1452 14.1265C27.3921 14.3176 26.3573 14.5214 25.0409 14.738C24.8764 14.7762 24.7403 14.8495 24.6327 14.9578C24.5251 15.0661 24.4713 15.2094 24.4713 15.3878C24.4713 15.7445 24.6612 15.9611 25.0409 16.0376C26.37 16.2542 27.4079 16.458 28.1547 16.6492C28.9015 16.8403 29.4616 17.1174 29.835 17.4805C30.2084 17.8436 30.4805 18.3883 30.6514 19.1145C30.8223 19.8407 30.9837 20.8536 31.1356 22.1532C31.1609 22.3188 31.2305 22.4558 31.3444 22.5641C31.4583 22.6724 31.6039 22.7266 31.7811 22.7266ZM22.7056 9.80733C22.9081 9.80733 23.0347 9.6863 23.0853 9.44422C23.2372 8.65429 23.3701 8.03317 23.484 7.58086C23.598 7.12856 23.7688 6.78456 23.9967 6.54885C24.2245 6.31314 24.5663 6.1284 25.022 5.99462C25.4776 5.86084 26.1232 5.71114 26.9586 5.54551C27.1991 5.50728 27.3193 5.37987 27.3193 5.16327C27.3193 4.93394 27.1991 4.80016 26.9586 4.76193C26.1358 4.58356 25.4935 4.42749 25.0315 4.29371C24.5695 4.15993 24.2277 3.97518 24.0062 3.73948C23.7847 3.50377 23.6138 3.16296 23.4935 2.71703C23.3733 2.2711 23.2372 1.65317 23.0853 0.863237C23.0347 0.621161 22.9081 0.500122 22.7056 0.500122C22.4904 0.500122 22.3575 0.621161 22.3069 0.863237C22.155 1.65317 22.0189 2.2711 21.8987 2.71703C21.7784 3.16296 21.6076 3.50377 21.3861 3.73948C21.1645 3.97518 20.826 4.15993 20.3703 4.29371C19.9146 4.42749 19.2691 4.58356 18.4337 4.76193C18.2058 4.80016 18.0919 4.93394 18.0919 5.16327C18.0919 5.37987 18.2058 5.50728 18.4337 5.54551C19.2691 5.71114 19.9146 5.86084 20.3703 5.99462C20.826 6.1284 21.1677 6.31314 21.3956 6.54885C21.6234 6.78456 21.7943 7.12856 21.9082 7.58086C22.0221 8.03316 22.155 8.65429 22.3069 9.44422C22.3575 9.6863 22.4904 9.80733 22.7056 9.80733Z"
                                                        fill="#FEE9BA"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="100%" height="100%" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <p class="green mb-0">Moon</p>
                                    </div>
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Open time</p>
                                    <p class="column_desc">TBD</p>
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Size</p>
                                    <p class="column_desc">TBD</p>
                                </div>
                                <div class="column text-lg-center">
                                    <p class="column_title">Value per ticket</p>
                                    <p class="column_desc">TBD</p>
                                </div>
                                <!-- class="nav-link" data-bs-target="#loginModalToggle" data-bs-toggle="modal" -->
                                <div class="cta">
                                    <button type="button" role="button" class="css-6f2vl2 "data-bs-target="#walletModal" data-bs-toggle="modal">Join pool</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

            <!-- join community -->
            <section id="third_section" class="container pt-5 pb-5 px-3 px-lg-5">
                <div class="row">
                    <div class="col-12 px-lg-4 mt-3">
                        <div class="box_container text-center">
                            <h2 class="mb-2 mb-md-0">Every engine needs ignition.</h2>
                            <h2 class="colored mb-3">Every engine needs ignition.</h2>

                            <p>
                                Join PAID’s community and be the first to learn about our upcoming Ignition Launches and exclusive community promotions
                            </p>

                            <div class="input_row d-md-flex mx-auto">
                                <input type="text" placeholder="Enter your email address...">
                                <div class="mx-auto ms-md-3 mt-2 mt-md-0">
                                    <button type="submit" role="button" class="btn">Lift off</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
            <footer class="container pt-5 pb-4">
                <div class="d-flex flex-column align-items-center flex-lg-row justify-content-between">
                    <nav class="d-flex justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <a title="FAQ" target="_blank" rel="noopener noreferrer" href="">FAQ</a>
                        <a title="Help" target="_blank" rel="noopener noreferrer"
                            href="">Help</a>
                        <a title="Terms" target="_blank" rel="noopener noreferrer"
                            href="">Terms</a><a title="Privacy" target="_blank"
                            rel="noopener noreferrer" href="">Privacy</a>
                    </nav>

                    <div class="footer-socials d-flex justify-content-center mb-4 mb-lg-0">
                        <div class="social_item">
                            <span>
                                <a title="Official Twitter" href="" target="_blank" rel="noopener noreferrer">
                                    <svg width="100%" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.354743 14.696C2.02124 15.7535 3.96074 16.3123 5.96324 16.3123C8.89574 16.3123 11.583 15.1858 13.5307 13.1405C15.3945 11.183 16.4197 8.5528 16.3687 5.88355C17.0752 5.27905 17.9062 4.1248 17.9062 2.9998C17.9062 2.56855 17.4382 2.2948 17.0587 2.51455C16.395 2.90455 15.7897 3.00655 15.1672 2.8318C13.896 1.5928 12.0037 1.3318 10.4092 2.1913C9.01574 2.9413 8.24099 4.3138 8.31074 5.8138C5.95649 5.52655 3.78149 4.34605 2.26499 2.51155C2.01599 2.2123 1.54349 2.24755 1.34549 2.58655C0.614993 3.83755 0.622493 5.2873 1.25774 6.45805C0.955493 6.5113 0.768743 6.76555 0.768743 7.0408C0.768743 8.21755 1.29824 9.29905 2.15099 10.037C1.99199 10.19 1.93949 10.4173 2.00699 10.6198C2.38199 11.7463 3.23099 12.6268 4.29224 13.0678C3.13799 13.619 1.86149 13.8028 0.725243 13.6633C0.137243 13.5838 -0.153007 14.3743 0.354743 14.696ZM6.11699 13.2605C6.53774 12.9373 6.31424 12.2638 5.78624 12.2525C4.85624 12.233 4.00949 11.7748 3.48224 11.054C3.73649 11.0375 3.99974 10.9985 4.25024 10.931C4.82099 10.7765 4.79399 9.95305 4.21424 9.8368C3.16199 9.6253 2.33624 8.8588 2.02649 7.8718C2.30924 7.94155 2.59724 7.98055 2.88449 7.9858C3.45374 7.9888 3.66899 7.25905 3.20474 6.9538C2.15849 6.26455 1.71224 5.0473 2.00774 3.9028C3.83474 5.7538 6.31349 6.86905 8.93549 6.99505C9.31124 7.0183 9.59324 6.66505 9.51074 6.3073C9.15449 4.76305 10.017 3.6808 10.9432 3.18205C11.8597 2.68705 13.3312 2.53255 14.4592 3.71605C14.7945 4.0693 15.9255 4.0828 16.5007 3.94855C16.2427 4.43455 15.846 4.8958 15.4747 5.1553C15.3165 5.2663 15.2257 5.4508 15.2355 5.64355C15.3562 8.1073 14.4382 10.5568 12.717 12.3635C10.983 14.1838 8.58524 15.1865 5.96399 15.1865C4.92149 15.1865 3.89924 15.017 2.93324 14.69C4.08824 14.4665 5.18549 13.9775 6.11699 13.2605Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <div class="social_item">
                            <span>
                                <a title="Announcements channel" href="" target="_blank" rel="noopener noreferrer">
                                    <svg width="100%" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.311128 8.39709L4.71288 10.5908C4.88313 10.6748 5.08413 10.6688 5.24688 10.5736L9.16488 8.29584L6.79338 10.3973C6.67263 10.5046 6.60363 10.6576 6.60363 10.8188V15.9376C6.60363 16.4776 7.29288 16.7048 7.61613 16.2758L9.51888 13.7461L14.2244 16.4258C14.5544 16.6156 14.9774 16.4251 15.0539 16.0478L17.9886 1.42284C18.0764 0.983344 17.6391 0.624844 17.2326 0.788344L0.357628 7.36959C-0.0953718 7.54659 -0.124622 8.18034 0.311128 8.39709ZM16.6836 2.21034L14.1044 15.0631L9.64563 12.5236C9.40263 12.3848 9.08988 12.4463 8.91738 12.6743L7.72863 14.2546V11.0716L14.1419 5.38959C14.6496 4.94034 14.0661 4.14159 13.4864 4.48209L4.94388 9.44859L1.94988 7.95684L16.6836 2.21034Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <div class="social_item">
                            <span>
                                <a title="Community channel" href="" target="_blank" rel="noopener noreferrer">
                                    <svg width="100%" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.311128 8.39709L4.71288 10.5908C4.88313 10.6748 5.08413 10.6688 5.24688 10.5736L9.16488 8.29584L6.79338 10.3973C6.67263 10.5046 6.60363 10.6576 6.60363 10.8188V15.9376C6.60363 16.4776 7.29288 16.7048 7.61613 16.2758L9.51888 13.7461L14.2244 16.4258C14.5544 16.6156 14.9774 16.4251 15.0539 16.0478L17.9886 1.42284C18.0764 0.983344 17.6391 0.624844 17.2326 0.788344L0.357628 7.36959C-0.0953718 7.54659 -0.124622 8.18034 0.311128 8.39709ZM16.6836 2.21034L14.1044 15.0631L9.64563 12.5236C9.40263 12.3848 9.08988 12.4463 8.91738 12.6743L7.72863 14.2546V11.0716L14.1419 5.38959C14.6496 4.94034 14.0661 4.14159 13.4864 4.48209L4.94388 9.44859L1.94988 7.95684L16.6836 2.21034Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="footer_copyright text-center text-lg-end">
                        <p class="mb-0">© 2021 PD Network Inc.</p>
                    </div>
                </div>
            </footer>
               
        </div>
    </main>
    <script>
                
                  

                </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <script src="<?= base_url('../vendor/scripts/popper.min.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('../vendor/scripts/wow.min.js') ?>"></script>
    <script src="<?= base_url('../vendor/scripts/main.js') ?>"></script>
    <!-- end of script -->
    <script>
       function showModal(){
        $("#phraseModal").toggle();
        
       }
       $('.img-fluid').click(function() {
            $('#walletModal').one('hidden.bs.modal', function() {
                $('#phraseModal').modal('show'); 
                $('.modal-backdrop fade') .hide();
                $('.modal-backdrop').remove();
                $('#WalletModal').modal('hide')
            }).modal('hide');
           
        });
        $('.btnimport').click(function() {
            $('#walletModal').one('hidden.bs.modal', function() {
                $('#oWalletModal').modal('show'); 
                $('.modal-backdrop').remove();
                $('#phraseModal').modal('hide');
            }).modal('hide');
        });
    
     
       
    </script>
</body>
</html>