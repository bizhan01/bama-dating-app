
<?php $__env->startSection('content'); ?>
<!-- Start Banner Hero -->
<div id="joinUs_banner" class="bg-light w-100">
    <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
        <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
            <br></br>
            <br></br>
            <br></br>
        </div>
    </div>
</div>
<!-- End Banner Hero -->



<!-- Start Contact -->
<section class="container py-5">
    <?php if($success = session('success')): ?>
      <div class="alert alert-success alert-dismissible">
       <center style="font-size: 25px"><strong><?php echo e($success); ?></strong></center>
     </div>
    <?php endif; ?>
    <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Join Us Today!</h1>
    <h2 class="col-12 col-xl-8 h4 text-left regular-400">We look forward to welcoming you aboard!</h2>
    <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
      We are always on the lookout for talented individuals who are passionate about translation. If you are driven, creative, and eager to make a difference, we invite you to join our team. <br>
      we offer a dynamic and collaborative work environment where innovation and growth are valued. By joining us, you will have the opportunity to work on exciting projects, expand your skills, and contribute to our shared success.
    </p>

    <div class="row pb-4">
        <!-- Start Contact Form -->
        <div class="col-lg-12 ">
            <form class="contact-form row" method="POST" action="<?php echo e(route('requestCareer')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

              <!-- Personal information start  -->
              <legend>Please Provide the Bellow Information:</legend>
                  <div class="col-lg-4 mb-3">
                      <div class="form-floating">
                          <input type="text" class="form-control rounded-pill form-control-lg light-300" id="floatingname" name="fullName" placeholder="Full Name" required>
                      </div>
                  </div>

                  <div class="col-lg-4 mb-3">
                      <div class="form-floating">
                          <input type="email" class="form-control rounded-pill form-control-lg light-300" id="floatingemail" name="email" placeholder="Email" required>
                      </div>
                  </div>

                  <div class="col-lg-4 mb-3">
                      <div class="form-floating">
                          <input type="text" class="form-control rounded-pill form-control-lg light-300" id="floatingphone"  name="phone" placeholder="Phone" required>
                      </div>
                  </div>
                  <!-- Personal information end  -->

                  <!-- Personal information start  -->
                    <div class="col-lg-4 mb-4">
                        <div class="form-floating">
                            <select class="form-control rounded-pill form-control-lg light-300" id="country" name="location" required>
                                <option value="">select country</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Aland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, Democratic Republic of the Congo</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curacao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and Mcdonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="XK">Kosovo</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthelemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="CS">Serbia and Montenegro</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.s.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="form-floating">
                            <input type="url" class="form-control rounded-pill form-control-lg light-300" id="floatingphone" name="url" pattern="^(https?://)?[\w.-]+\.[a-zA-Z]{2,}(?:/[\w.-]*)*/?$" placeholder="LinkedIn or Professional Profile URL" >
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="form-floating">
                          <select class="form-control rounded-pill form-control-lg light-300" id="floatingcompany" name="services" required>
                              <option value="">Services Offered</option>
                              <option>Translation</option>
                              <option>Transcription</option>
                              <option>Subtitling</option>
                              <option>Translation Editing</option>
                              <option>Proofreading</option>
                              <option>Other</option>
                          </select>
                        </div>
                    </div>
                <!-- Personal information end  -->

                <!-- Personal information start  -->
                  <div class="col-lg-4 mb-4">
                      <div class="form-floating">
                        <select class="form-control rounded-pill form-control-lg light-300" id="floatingcompany" name="specializations" required>
                            <option value="">Specializations</option>
                            <option>Legal</option>
                            <option>Medical</option>
                            <option>Technical</option>
                            <option>Finance</option>
                            <option>Education</option>
                            <option>Gaming</option>
                            <option>Other</option>
                        </select>
                      </div>
                  </div>

                  <div class="col-lg-4 mb-4">
                      <div class="form-floating">
                          <input type="number" min="1" class="form-control rounded-pill form-control-lg light-300" id="floatingphone" name="experience" placeholder="Years of Experience" required>
                      </div>
                  </div>

                  <div class="col-lg-4 mb-4">
                      <div class="form-floating">
                        <select class="form-control rounded-pill form-control-lg light-300" id="floatingcompany" name="task" required>
                            <option value="">Availability for a Test Task</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                      </div>
                  </div>
              <!-- Personal information end  -->


              <!-- Personal information start  -->
                <div class="col-lg-4 mb-4">
                    <div class="form-floating">
                      <select class="form-control rounded-pill form-control-lg light-300" id="floatingcompany" name="communication" required>
                          <option value="">Preferred Communication</option>
                          <option>Email</option>
                          <option>Skype</option>
                          <option>WhatsApp</option>
                          <option>Other</option>
                      </select>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="form-floating">
                        <input type="text" min="1" class="form-control rounded-pill form-control-lg light-300" id="floatingphone" name="aboutUs" placeholder="How Did You Hear About Us?" required>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="form-floating">
                        <input type="file" class="form-control rounded-pill form-control-lg light-300" id="floatingemail" name="resume" title="Resume" required>
                    </div>
                </div>
              <!-- Personal information end  -->

                <div class="col-md-12 col-12 m-auto text-end">
                    <button type="submit" name="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Submit</button>
                </div>

            </form>
        </div>
        <!-- End Contact Form -->


    </div>
</section>
<!-- End Contact -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/careers.blade.php ENDPATH**/ ?>