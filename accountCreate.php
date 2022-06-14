<?php

include('includes/db.php');
if (isset($_SESSION["phoneNumber"])) {
    $phone = $_SESSION['phoneNumber'];
}





?>

<!DOCTYPE html>
<html lang="en">




<body style="background-image: linear-gradient(#3378bf, #5791cb); height:100vh;">
    <div>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color fixed-top " style="background: #3378bf;">
            <a class="navbar-brand" href="#">SBH Seller Hub</a>
        </nav>
        <!--/.Navbar -->
    </div>

    <div class="container">
        <div class="row" style="padding: 50px 0px 0px 0px">
            <div class="col-lg-6 col-md-12 col-xs-12 float-left">
                <div class="card shadowCard animated pulse slow">
                    <div class="cardHeader">
                        <h5 class="modal-title" id="ModalTitle">Create your Seller Account</h5>
                    </div>
                    <div class="text-center">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post" data-validate="parsley" style="padding: 30px">
                            <div class="form-group accountCreateForm" style="padding-bottom: 13px">
                                <input type="email" class="form-control createAccountForm" aria-describedby="email" placeholder="Enter your email address" required>
                            </div>
                            <div class="form-group accountCreateForm">
                                <input type="text" placeholder="Enter your mobile number" value="<?php if (isset($phone))  echo $phone ?>" class="form-control" name="quantity" id="quantity" maxlength="10" />&nbsp;<span id="errmsg"></span>
                            </div>
                            <div class="form-group accountCreateForm" style="padding-bottom: 13px">
                                <input type="text" placeholder="Enter Your Full Name" class="form-control" name="fullName" id="fullName" required>
                            </div>
                            <div class="form-group accountCreateForm" style="padding-bottom: 13px">
                                <div class="form-row">
                                    <div class="col-10">
                                        <input type="password" class="form-control createAccountForm" placeholder="Set password" id="password" required>
                                    </div>
                                    <div class="col">
                                        <input type="button" class="form-control" value="Show" onclick="showPassword()">
                                    </div>
                                    <br><span style="padding-left:10px;  margin-bottom:15px;" class="text-muted">Minimum 4 characters</span><br>

                                </div>
                                <div class="form-group accountCreateForm" style="padding-bottom: 13px">
                                    <div class="form-row">
                                        <br><span class="text-muted">By filling this form, I agree to <a href="#" data-toggle="modal" data-target="#terms">Terms of Use</a></span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block rounded-0 pull-right" style="background:  #3392f3; color:seashell">Submit</button>
                                <p class="text-mute">Already a Seller?
                                    <a href="welcome.php" class="pull-left" for="InputPassword" id="labelForLogin">Login Here</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="hidden col-lg-6 col-md-12 col-xs-12" style="padding-left: 50px">
                <div class="crheader">
                    Sell to crores of customers on Smart Branded Hub, right from your doorstep!
                </div>
                <div class="crheaderdescription">
                    All you need to sell on Smart Branded Hub is
                </div>
                <div class="row text-center" style="padding: 15px">
                    <div class="col-3">
                        <svg width="30px" viewBox="0 0 27 32">
                            <g id="Page-2" stroke="none" stroke-width="1" fill="#FFFFFF00" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="A00_Step-1-Copy-152" transform="translate(-798.000000, -247.000000)" stroke="#FFFFFF" stroke-width="1.25">
                                    <g id="Group" transform="translate(760.000000, 193.000000)">
                                        <g id="Group-22" transform="translate(25.000000, 51.000000)">
                                            <g id="Group-20" transform="translate(0.000000, 4.000000)">
                                                <g id="Group-18" transform="translate(14.000000, 0.000000)">
                                                    <path d="M25.1530357,28.2107388 C25.1530357,29.1278294 24.4021016,29.8698781 23.4753709,29.8698781 L1.67657967,29.8698781 C0.750934066,29.8698781 -2.06057393e-12,29.1267555 -2.06057393e-12,28.2107388 L-2.06057393e-12,1.66021325 C-2.06057393e-12,0.74312262 0.750934066,3.02691205e-12 1.67657967,3.02691205e-12 L17.2476099,3.02691205e-12 L25.1530357,7.82319117 L25.1530357,28.2107388 Z" id="Stroke-25"></path>
                                                    <polygon id="Stroke-27" points="17.2475014 0.000536938298 17.2475014 7.8237281 25.1529272 7.8237281"></polygon>
                                                    <path d="M4.31233654,8.53495659 L12.9350563,8.53495659" id="Stroke-29"></path>
                                                    <path d="M4.31233654,13.5131264 L20.8404821,13.5131264" id="Stroke-31"></path>
                                                    <path d="M4.31233654,18.4912963 L20.8404821,18.4912963" id="Stroke-33"></path>
                                                    <path d="M4.31233654,23.4695735 L20.8404821,23.4695735" id="Stroke-35"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <br>
                        <div class="svgdesc">GSTIN*</div>
                    </div>
                    <div class="vertical"></div>
                    <div class="col-3">
                        <svg width="60px" viewBox="0 0 56 49">
                            <g id="Page-2" stroke="none" stroke-width="1" fill="#FFFFFF00" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="A00_Step-1-Copy-152" transform="translate(-931.000000, -245.000000)" stroke="#FFFFFF">
                                    <g id="Group" transform="translate(760.000000, 193.000000)">
                                        <g id="Group-22" transform="translate(25.000000, 51.000000)">
                                            <g id="Group-21" transform="translate(122.000000, 1.000000)">
                                                <g id="12--check-sheet-paper-payment-2" transform="translate(25.000000, -0.000000)">
                                                    <path d="M34.8923077,40.7076923 L36.5538462,44.0307692" id="Stroke-1"></path>
                                                    <g id="Group-54">
                                                        <path d="M29.42346,44.198001 C28.71486,42.9873625 29.11866,41.4322041 30.32346,40.7244925 L36.86586,36.876951" id="Stroke-2"></path>
                                                        <path d="M50.42754,36.2737398 C49.52694,36.8037706 48.36474,36.5014122 47.83314,35.5955414 C47.30514,34.6872614 47.60754,33.5223983 48.51114,32.9923675 C49.41534,32.4599275 52.19514,33.0297106 52.19514,33.0297106 C52.19514,33.0297106 51.33114,35.7437091 50.42754,36.2737398 Z" id="Stroke-4"></path>
                                                        <path d="M31.3377,47.4776266 C30.7377,47.8347951 29.9619,47.6300105 29.6091,47.0264982 L28.9713,45.9327074 C28.6185,45.3255812 28.8183,44.5510135 29.4237,44.1980612 L45.9555,34.4701897 C46.1961,34.3280451 46.4835,34.2882928 46.7529,34.3575582 C47.0235,34.4280282 47.2551,34.603902 47.3955,34.8460297 L48.2463,36.3048189 C48.5427,36.8083482 48.3735,37.4552266 47.8707,37.751562 L31.3377,47.4776266 Z" id="Stroke-6"></path>
                                                        <path d="M49.68396,20.9637408 L31.17576,25.0696724" id="Stroke-8"></path>
                                                        <path d="M24.97734,14.5362745 C24.91854,14.2628268 24.96834,13.9767307 25.11714,13.7388192 C25.26894,13.5051238 25.50654,13.3382845 25.78014,13.2756445 L45.93174,8.80832838 C46.49694,8.68063915 47.06094,9.04202377 47.18454,9.61361377 L48.09414,13.7388192 C48.21894,14.3110115 47.86134,14.8747715 47.29374,15.0000515 L27.14154,19.4691745 C26.57334,19.5944545 26.01174,19.2354792 25.88694,18.6656961 L24.97734,14.5362745 Z" id="Stroke-10"></path>
                                                        <path d="M46.14138,4.86465854 L41.20638,5.95844931" id="Stroke-12"></path>
                                                        <path d="M10.074,23.2538352 L10.62,25.731729" id="Stroke-14"></path>
                                                        <path d="M12.54378,22.7068193 L13.08738,25.1829062" id="Stroke-16"></path>
                                                        <path d="M15.00876,22.1599239 L15.55476,24.6360108" id="Stroke-18"></path>
                                                        <path d="M17.47854,21.6108602 L18.02334,24.0887541" id="Stroke-20"></path>
                                                        <path d="M19.94592,21.0640251 L20.49072,23.5419189" id="Stroke-22"></path>
                                                        <path d="M4.99392,29.5769215 L22.26852,25.7462446" id="Stroke-24"></path>
                                                        <path d="M7.06116,21.3228367 L20.63316,18.3125028" id="Stroke-26"></path>
                                                        <path d="M4.60842,10.1753862 L47.99622,0.55593 C48.56562,0.43065 49.12422,0.792034615 49.25262,1.36001077 L53.97402,22.8256546 C54.10182,23.3978469 53.74242,23.9616069 53.17422,24.0886938 L9.78702,33.70815 C7.74462,34.1610854 5.72022,32.8649192 5.26782,30.8128569 C4.87722,29.0402654 5.79042,27.2803223 7.36602,26.5437 C7.81602,26.3346992 8.05482,25.8420115 7.94982,25.3583585 L3.24702,3.98366308 C3.17022,3.63733615 2.92782,3.35364923 2.60022,3.22355077 C2.27082,3.09646385 1.90122,3.14223923 1.61142,3.34521692 C0.39882,4.20290308 -0.25098,5.73517385 0.09042,7.2819 L5.26782,30.8128569" id="Stroke-28"></path>
                                                        <path d="M27.7635,15.4338335 L28.0371,16.6715758" id="Stroke-30"></path>
                                                        <path d="M31.46424,14.6134904 L31.73784,15.8512327" id="Stroke-32"></path>
                                                        <path d="M33.93048,14.066595 L34.20408,15.3043373" id="Stroke-34"></path>
                                                        <path d="M36.4002,13.5195792 L36.6726,14.7573215" id="Stroke-36"></path>
                                                        <path d="M40.10274,12.6991758 L40.37514,13.9369182" id="Stroke-38"></path>
                                                        <path d="M42.56892,12.1502928 L42.84252,13.3904444" id="Stroke-40"></path>
                                                        <path d="M45.0363,11.6054453 L45.3063,12.8431876" id="Stroke-42"></path>
                                                        <path d="M19.5879,13.5655955 C19.6485,13.8414524 19.5975,14.1269462 19.4487,14.3630508 C19.2981,14.5991555 19.0587,14.7659947 18.7875,14.8268278 L6.2451,17.6070801 L5.4261,13.8914439 L17.9703,11.1105893 C18.5379,10.9853093 19.0995,11.3442847 19.2255,11.9146701 L19.5879,13.5655955 Z" id="Stroke-44"></path>
                                                        <path d="M35.49432,24.1118827 C34.47372,24.3371458 33.46032,23.6902673 33.23592,22.6651396 C33.01032,21.638205 33.65532,20.6215096 34.67952,20.3938373 C35.70132,20.1685742 36.71292,20.8178619 36.93732,21.8423873" id="Stroke-46"></path>
                                                        <path d="M44.20548,19.5819265 C44.42928,20.6088612 43.78488,21.6231473 42.76248,21.8508196" id="Stroke-48"></path>
                                                        <path d="M37.0746,22.4605357 C36.846,21.435408 37.4946,20.4211218 38.5158,20.1934495" id="Stroke-50"></path>
                                                        <path d="M40.15662,21.7779404 C39.93222,20.7510058 40.57782,19.7361173 41.60082,19.5108542" id="Stroke-52"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <br>
                        <div class="svgdesc">Bank Account</div>
                    </div>
                    <div class="vertical"></div>
                    <div class="col-4">
                        <svg width="60px" viewBox="0 0 56 37">
                            <g id="Page-2" stroke="none" stroke-width="1" fill="#FFFFFF00" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="A00_Step-1-Copy-152" transform="translate(-1078.000000, -243.000000)" stroke="#FFFFFF">
                                    <g id="Group" transform="translate(760.000000, 193.000000)">
                                        <g id="Group-22" transform="translate(25.000000, 51.000000)">
                                            <g id="05--sneakers" transform="translate(294.000000, 0.000000)">
                                                <path d="M27,21 L24,21" id="Stroke-1"></path>
                                                <polyline id="Stroke-2" points="38 21 49 21 49 25"></polyline>
                                                <g id="Group-37">
                                                    <path d="M38.3997912,21.259 L48.737978,21.259 C49.3611099,21.259 49.8706154,20.7502931 49.8706154,20.1287414 L49.8706154,18.9984828 C49.8706154,18.376931 49.3611099,17.8682241 48.737978,17.8682241 L24.9586374,17.8682241 C24.3264396,17.8682241 23.8266044,18.376931 23.8266044,18.9984828 L23.8266044,20.1287414 C23.8266044,20.7502931 24.3264396,21.259 24.9586374,21.259 L27.7031978,21.259" id="Stroke-3"></path>
                                                    <path d="M13.7541099,13.0024397 L11.3099341,12.5655431" id="Stroke-5"></path>
                                                    <path d="M11.6127967,15.8674914 L9.24598352,15.4432672" id="Stroke-7"></path>
                                                    <path d="M17.5439725,18.6407586 L29.2499066,10.5032586 L32.9760055,7.92291379 L34.3721593,9.92877586 C34.6743571,10.3620517 34.5607308,10.9558448 34.1364451,11.2479138" id="Stroke-9"></path>
                                                    <path d="M12.5636319,22.0877155 C12.5539615,22.0877155 12.5539615,22.0877155 12.5636319,22.0973707 L0.432807692,30.516681 L1.82896154,32.5321983 C2.13055495,32.9467672 2.71560989,33.0505603 3.14956593,32.7675431" id="Stroke-11"></path>
                                                    <path d="M12.5636319,22.0877155 C12.5539615,22.0877155 12.5539615,22.0877155 12.5636319,22.0973707 L0.432807692,30.516681 C-0.152247253,29.6784914 -0.142576923,28.5675431 0.451543956,27.7384052 L6.45137912,19.3565086 L9.24308242,15.4479741 L11.3089066,12.5659052 L13.5258297,9.45814655 C13.836489,9.02487069 14.4312143,8.90237069 14.9213791,9.12866379 C15.9591264,9.63676724 18.0533571,10.0229741 21.1944011,7.83788793 C24.5898956,5.48383621 24.7319286,3.23297414 24.5524231,2.15943966 C24.4768736,1.71650862 24.6847857,1.28323276 25.0522582,1.02918103 L25.2976429,0.859612069 C26.3166538,0.143318966 27.731544,0.397974138 28.4483571,1.42443966 L32.9758846,7.92297414 L29.2497857,10.503319 L17.5438516,18.640819" id="Stroke-13"></path>
                                                    <path d="M29.252989,10.507181 C27.8278242,8.45606034 28.3324945,5.6379569 30.3862308,4.20959483 L32.9724396,7.92381897 L29.252989,10.507181 Z" id="Stroke-15"></path>
                                                    <path d="M12.5636319,22.0877155 C12.5539615,22.0877155 12.5539615,22.0877155 12.5636319,22.0973707 L0.432807692,30.516681 C-0.152247253,29.6784914 -0.142576923,28.5675431 0.451543956,27.7384052 L6.45137912,19.3565086 L7.14885165,20.3455603 C7.50725824,20.863319 8.20533516,20.985819 8.72390659,20.6279741 L12.4409396,18.0476293 C13.8842363,17.0398707 15.8364341,17.3222845 16.9587967,18.6221121" id="Stroke-17"></path>
                                                    <path d="M33.4483407,24.3767759 L35.2071319,22.6201379" id="Stroke-19"></path>
                                                    <path d="M36.8451044,25.5016034 L38.5452692,23.8077241" id="Stroke-21"></path>
                                                    <path d="M54.3956044,31.160681 L14.7665934,31.160681 L14.7665934,33.6070603 C14.7665934,34.1242155 15.1836264,34.5472328 15.7100549,34.5472328 L53.4527473,34.5472328 C53.9713187,34.5472328 54.3956044,34.1242155 54.3956044,33.6070603 L54.3956044,31.160681 Z" id="Stroke-23"></path>
                                                    <path d="M52.7966758,28.8890603 L31.6089835,21.3369052 C31.099478,21.1528534 30.5470604,21.3845776 30.2781044,21.8582845 C29.7111813,22.861819 28.2146978,24.3764741 24.3912912,24.3764741 C20.2499725,24.3764741 18.8417308,22.6083707 18.3787637,21.6229397 C18.1901923,21.2240603 17.769533,20.9802672 17.3259066,20.9802672 L17.0297527,20.9802672 C15.7792582,20.9802672 14.7662912,21.9964741 14.7662912,23.2425948 L14.7662912,31.1604397 L54.3959066,31.1604397 C54.3959066,30.1406121 53.7552473,29.2348362 52.7966758,28.8890603 Z" id="Stroke-25"></path>
                                                    <path d="M19.2958132,31.160681 C19.2958132,28.658181 17.265044,26.6354224 14.7664725,26.6354224 L14.7664725,31.160681 L19.2958132,31.160681 Z" id="Stroke-27"></path>
                                                    <path d="M52.7966758,28.8890603 L43.0731593,25.42225 L43.0731593,26.6357845 C43.0731593,27.2621638 42.5666758,27.7678534 41.9423352,27.7678534 L37.4099725,27.7678534 C35.5369505,27.7678534 34.0126648,29.2806983 34.0126648,31.1604397 L54.3959066,31.1604397 C54.3959066,30.1406121 53.7552473,29.2348362 52.7966758,28.8890603 Z" id="Stroke-29"></path>
                                                    <path d="M12.412533,26.3353276 L3.14956593,32.7680862" id="Stroke-31"></path>
                                                    <path d="M34.1365659,11.2476121 L20.5527747,20.6752845" id="Stroke-33"></path>
                                                    <path d="M24.958456,22.0030517 L24.958456,21.259" id="Stroke-35"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <br>
                        <div class="svgdesc">Products to sell</div>
                    </div>
                </div>
                <hr style="background-color: white">
                <div class="crheaderdescription">
                    How will this information be used?
                </div>
                <div class="crdescription">
                    You can use your email address or mobile number as 'Username' to login to your Smart Branded Hub Seller Account.
                </div>
                <div class="crdescription">
                    Please note, the 'Username' and 'Password' used here are only to access your Smart Branded Hub Seller Account and can’t be used on Smart Branded Hub.com shopping destination.
                </div>
                <hr style="background-color: white">
            </div>
        </div>
    </div>



    <!-- Terms Modal -->

    <!-- Modal -->
    <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="terms" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="overflow-auto" style="overflow-y: auto; height:25rem">
                        <h5 style="font-size: 13px; font-weight:bold;">Seller Terms of Use:</h5>
                        <p>This document is an electronic record in terms of Information Technology Act, 2000 (“IT Act, 2000”), the applicable rules thereunder and the provisions pertaining to electronic records in various statutes as amended by the Information Technology Act, 2000. This electronic record is generated by a computer system and does not require any physical or digital signatures.</p>
                        <hr>
                        <p>This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries Guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and Terms of Use for access to or usage of www.smartbrandedhub.com website.</p>
                        <hr>
                        <p>The domain name www.smartbrandedhub.com, including the related mobile site as well as the seller portal www.smartbrandedhub.com/seller (hereinafter referred to as “Platform”) is owned and operated by Smart Branded Hub Private Limited (hereinafter referred to as 'SBH'), a company incorporated under the Companies Act, 1956, with its registered office at Flat no. 1705, Tower No. Cs-2, Supertech Capetown, Noida, sector 74, U.P, pincode-201301 India.</p>
                        <hr>
                        <p>For the purpose of the Terms of Use (hereinafter referred to as “ToU”), wherever the context so requires, ‘you’ and ‘your’ shall relate to any natural or legal person who has agreed to become a seller on the Platform by providing registration data while registering on the Platform using computer systems. The word ‘user’ shall collectively imply a seller, a buyer, and any visitor on the Platform and the terms ‘we’, ‘us’ and ‘our’ shall mean Smart Branded Hub.</p>
                        <hr>
                        <p>Your use of the Platform and the features therein is governed by the following terms and conditions (ToU) including applicable policies available on the Platform, notifications and communications sent to you on the Platform which are incorporated herein by way of reference. If you transact on the Platform, you shall be subject to the policies that are applicable to the Platform for such a transaction. By mere use of the Platform you shall be contracting with Smart Branded Hub, and these terms and conditions including the policies constitute your binding obligations to Smart Branded Hub.</p>
                        <hr>
                        <p>When you use any current or future services provided by us through the Platform you will be subject to the rules, guidelines, policies, terms and conditions applicable to such services and they shall be deemed incorporated into the ToU and considered a part and parcel of the ToU. We reserve the right, at our sole discretion, to change, modify, add, or remove portions of the ToU at any time. We will notify you through any of the communication modes as mentioned in this ToU in case of any changes or updates to the ToU that materially impact your use of the Platform. Your continued use of the Platform following the changes or updates will mean that you accept and agree to the revisions. As long as you comply with the ToU, we grant you a personal, non-exclusive, non-transferable, and limited privilege to enter and use the Platform.</p>
                        <hr>
                        <p>ACCESSING, BROWSING, OR OTHERWISE USING THE PLATFORM INDICATES YOUR AGREEMENT WITH ALL THE TERMS AND CONDITIONS UNDER THE TOU. PLEASE READ THE TOU CAREFULLY BEFORE PROCEEDING. By impliedly or expressly accepting the ToU, you also accept and agree to be bound by all of Smart Branded Hub’s policies applicable to you, as amended, from time to time.</p>
                        <hr>
                        <h5 style="font-size: 13px; font-weight:bold;">Seller Eligibility</h5>
                        <p>The use of the Platform is available only to persons who can form legally binding contracts under the Indian Contract Act, 1872. Persons who are "incompetent to contract" within the meaning of the Indian Contract Act, 1872 including minors, un-discharged insolvents etc. are not eligible to use the Platform. If you are a minor i.e. under the age of 18 years, you shall not register as a seller on the Platform, transact or use the Platform. Smart Branded Hub reserves the right to terminate your registration and/or refuse you access to the Platform if it is brought to Smart Branded Hub’s notice or discovered that you are under the age of 18 years. If you register as a business entity, you represent that you are duly authorized by the business entity to accept the ToU and you have the authority to bind the business entity to the ToU.</p>
                        <hr>
                        <h5 style="font-size: 13px; font-weight:bold;">Your Account and Registration Obligations</h5>
                        <p>In the course of your use of the Platform, you agree to furnish your details and information as requested by us from time to time. You shall remain responsible for maintaining confidentiality of this information, as well as your display name, login and password details. You agree that if you provide any information which is untrue, inaccurate, not current, or incomplete or we have reasonable grounds to suspect that such information is untrue, inaccurate, not current, incomplete, or not in accordance with the ToU, we shall have the right to suspend or terminate your account on the Platform or indefinitely block you from accessing the Platform.</p>
                        <hr>
                        <h5 style="font-size: 13px; font-weight:bold;">Seller Account Deactivation:</h5>
                        <p>As per our policy, if a seller requests for a closure of the account, the account will be put on hold for a period of 90 days to ensure smooth closure of transactions which have been made prior to his closure request and this will be available the said seller to download payment and taxation reports, if required. After 90 days, the seller would be required to reach out to us confirming that he has downloaded the reports and requesting for a deactivation again. Upon receiving this confirmation, the seller’s account will be deactivated provided there is no outstanding payments due from the seller, with certain information being retained by Smart Branded Hub at all times, such as registered mobile number, registered email ID, GSTIN and other transaction related information. Such information is being retained for audit purposes and to prevent fraudulent acts by the sellers in the future. If a seller decides to commence his business with Smart Branded Hub again, he/she will not be able to create a new account but the older account can be restored if its required.</p>
                        <h5 style="font-size: 13px; font-weight:bold;">Communications</h5>
                        <p>When you use the Platform or send emails, other data, information, or communication to us, you agree and understand that you are communicating with us through electronic records and you consent to receive communications via electronic records from us periodically or as and when required. We may communicate with you by email or any other mode of communication, electronic or otherwise.</p>
                        <h5 style="font-size: 13px; font-weight:bold;">Platform for Transaction and Communication</h5>
                        <p>The Platform is a platform that users utilize to independently meet and interact with one another for their transactions. Smart Branded Hub is not and cannot be a party to any transaction or dispute between users on the Platform.</p>
                        <hr>
                        <p>Consequently</p>
                        <p>1. All commercial/contractual terms are offered by you and agreed upon between you and buyers alone. The commercial/contractual terms include (without limitation) price, shipping costs, payment methods and terms, date, period, and mode of delivery, and warranties and after-sales services related to products and services. Smart Branded Hub does not determine, advice, have any control, or in any way involve itself in the offering or acceptance of such commercial/contractual terms between you and buyers.</p>
                        <hr>
                        <p>2. Smart Branded Hub does not make any representations or warranties regarding specifics (such as quality, value, and salebility) of the products or services proposed to be sold, offered to be sold or purchased on the Platform. Smart Branded Hub does not implicitly or explicitly support or endorse the sale or purchase of any products and services on the Platform. Smart Branded Hub accepts no liability for any errors or omissions of third parties in relation to the products and services.</p>
                        <hr>
                        <p>3. Smart Branded Hub is not responsible for any non-performance or breach of any contract between you and buyers. Smart Branded Hub cannot and does not guarantee that you and buyers concerned will perform transaction(s) concluded on the Platform. Smart Branded Hub shall not and is not required to mediate or resolve disputes or disagreements between you and buyers.</p>
                        <hr>
                        <p>4. Smart Branded Hub does not make any representations or warranties regarding item-specifics (such as legal title, creditworthiness, identity, etc.) of any of its users. You are advised to independently verify the bona fides of any particular buyer you choose to deal with on the Platform and use your best judgment in that regard.</p>
                        <hr>
                        <p>5. Smart Branded Hub does not at any point in time during a transaction between you and a buyer on the Platform come into or take possession of any of the products or services offered by you, gain title to or have any rights or claims over the products or services offered by you to the buyer.</p>
                        <hr>
                        <p>6. At no time shall Smart Branded Hub hold any right/title to or interest in the items nor have any obligations or liabilities with respect to such a contract. Smart Branded Hub is not responsible for unsatisfactory or delayed performance of services, damages, or delays as a result of items which are out of stock, unavailable, or back-ordered.</p>
                        <hr>
                        <p>7. The Platform is only a platform that can be utilized by you to reach a larger customer base to sell items or services. Smart Branded Hub only provides a platform for communication and it is agreed that the contract for sale of any products or services shall be a strictly bipartite contract between you and the buyer.</p>
                        <hr>
                        <p>8. You release and indemnify Smart Branded Hub and/or any of its officers and representatives from any cost, damage, liability or other consequence of any of the actions of the users on the Platform and specifically waive any claims that you may have in this behalf under any applicable law. Notwithstanding its reasonable efforts in that behalf, Smart Branded Hub cannot control the information provided by other users which is made available on the Platform. You may find other user's information to be offensive, harmful, inaccurate or deceptive. Please use caution and practice safe trading when using the Platform. Please note that there may be risks in dealing with underage persons or people acting under false pretence.</p>
                        <hr>
                        <h5 style="font-size: 13px; font-weight:bold;">Use of the Platform</h5>
                        <hr>
                        <p>You agree and understand that Smart Branded Hub and the Platform merely provide hosting services to its registered users and persons browsing/visiting the Platform. All items advertised / listed and the contents therein are advertised and listed by registered users and are third party user generated contents. Smart Branded Hub shall bear no responsibility or liability in relation to or arising out of third party user generated content. Smart Branded Hub neither originates nor initiates the transmission nor selects the sender and receiver of the transmission nor selects nor modifies the information contained in the transmission. Smart Branded Hub is merely an intermediary and does not interfere in the transaction between buyers and sellers.</p>
                        <hr>
                        <p>You agree, undertake and confirm that your use of the Platform shall be strictly governed by the following binding principles:</p>
                        <p>1. You shall not host, display, upload, modify, publish, transmit, update or share any information or image which:</p>
                        <p>a. belongs to another person and over which you have no right;</p>
                        <p>(b) is grossly harmful, harassing, blasphemous, defamatory, bigotry, obscene, pornographic, paedophilic, libellous, invasive of another’s privacy, hateful, or racially, ethnically objectionable, disparaging, relating to or encouraging money laundering or gambling, or otherwise unlawful in any manner whatever, or unlawfully threatening or harassing, including but not limited to ‘indecent representation of women’ within the meaning of the Indecent Representation of Women (Prohibition) Act, 1986;</p>
                        <p></p>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <input type="button" value="destroy session" onclick="<?php session_destroy() ?>">

</body>