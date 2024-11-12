<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
    
         <!--Main Slider-->
         <section>
            <div class="featured-hero">
              <div class="img-content">
                <h3>Empower your Ministry</h3>
                <span>Prepare for impactful ministry and teaching careers.</span>
              </div>
            </div>
        </section>
        <!--Main Slider  end-->
        <!-- about top -->
        <div class="abouttop">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-8">
                        <h2 class="featured-heading-text1">Apply Now</h2>
                        <!-- <h2 class="featured-heading-text2">Admission Procedures</h2> -->
                        <hr>
                        <p class="featured-heading-textp">

                        Spirit Brood Theological Seminary has a rolling admission policy. This 
                        means that prospective students are not limited to just enrolling in the fall,
                        spring or summer. You can enroll in any of our programs right now, if you
                        are ready to start. <br>
                        
                        To enroll in any of our degree programs, you may complete the New
                        Student Application Enrollment Form below. The admission office will
                        reach out to you as soon as your application is reviewed.


                            <!-- Spirit Brood Theological Seminary employs a rolling admission policy, this means that prospective
                                students are not limited to just enrolling in the fall, spring or summer. <br> <br>
                                With rolling admission, students can enroll in any of our programs whenever they are ready to start. <br> <br>
                                To enroll in one of our degree programs, you may complete the New Student Application
                                Enrollment Form by clicking the button below. <br> <br>
                                Please, note that there is an application fee of $50. You will be required to add a copy of your
                                receipt to the application form. <br> <br>
                                You would also need to attach copies of all required Certificates,
                                Degrees and Diplomas along with one passport size photo. <br> <br>
                            Once this is complete and we review your application, if accepted, you will receive an admission  -->
                          </p>
                          <hr>
                          <div class="container" id="contact-info-form">
                            <h2>New Student Enrollment Form</h2>
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Middle Name*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name*" name="firstname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Address*" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Phone Number*" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" name="finduson">
                                              <option value="Sex" disabled selected>Sex*</option>
                                              <option value="Femle">Female</option>
                                              <option value="Male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" name="finduson">
                                              <option value="Sex" disabled selected>Marital Status*</option>
                                              <option value="Single">Single</option>
                                              <option value="married">Married</option>
                                                <option value="divorced">Divorced</option>
                                                <option value="widowed">Widowed</option>
                                                <option value="separated">Separated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                           
                                            <input type="date" class="form-control" placeholder="Date of Birth*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Age*" name="firstname" required>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="SSN*" name="firstname" required>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City*" name="firstname" required>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="State*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country*" name="firstname" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postal / Zip Code*" name="firstname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"><h3>What Program are you applying for?</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h3>Level of Study</h3>
                                            <label><input type="checkbox" name="interests" value="technology"> Master</label><br>
                                            <label><input type="checkbox" name="interests" value="science"> Bachelor</label><br>
                                            <label><input type="checkbox" name="interests" value="arts"> Doctorate</label><br>
                                            <label><input type="checkbox" name="interests" value="music"> Certificate</label>
                                            <br><br>
                                            <h3>Daul Degree Program</h3>
                                            <label><input type="checkbox" name="interests" value="technology"> Masters / Doctorate</label><br>
                                            <label><input type="checkbox" name="interests" value="science"> Bachelor / Masters</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h3>Course of Study*</h3>
                                            <label><input type="checkbox" name="interests" value="arts"> Ministry</label><br>
                                            <label><input type="checkbox" name="interests" value="music"> Theology</label><br>
                                            <label><input type="checkbox" name="interests" value="sports"> Divinity</label>
            
                                            <br><br>
                                            <h3>Course of Study*</h3>
                                            <label><input type="checkbox" name="interests" value="arts"> Ministry</label><br>
                                            <label><input type="checkbox" name="interests" value="music"> Theology</label><br>
                                            <label><input type="checkbox" name="interests" value="sports"> Divinity</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row"><h3 style="margin-left: 15px;">College Degree Program Study*</h3>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><input type="checkbox" name="interests" value="technology"> College</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <h3>Course of Study</h3>
                                            <label><input type="checkbox" name="interests" value="sports"> Ministry & Advocacy</label> <br>
                                            <label><input type="checkbox" name="interests" value="technology">Christian Professionals & Researchers</label><br>
                                            <label><input type="checkbox" name="interests" value="science"> Biblical Studies & Church History</label><br>
                                        <label><input type="checkbox" name="interests" value="sports">heology & Philosophy</label><br>
                                            <label><input type="checkbox" name="interests" value="sports">Management & Leadership</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <h4 style="margin-left: 10px;">Please upload the following documents: (Your Certificates, Degrees / Diplomas, <br> One passport-sized photo)
                                        Ensure each file is in PDF or JPEG format and clearly legible.</h4>
                                    <div class="col-md-5">
                                        <div class="file-upload" id="file-upload">
                                            <label for="file-input"> Upload Passport here
                                                <div style="color: #d8913f;">Drag & Drop Files Here</div>
                                                <div>or</div>
                                                <div style="color: #d8913f;">Browse Files</div>
                                            </label>
                                            <input id="file-input" type="file" accept=".jpg" />
                                            <div class="file-name" id="file-name">0 of 1</div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="file-upload file-upload-many" id="file-upload-many">
                                            <label for="file-input">Upload your Certificates, Diplomas and Degree here
                                                <div style="color: #d8913f;">Drag & Drop Files Here</div>
                                                <div>or</div>
                                                <div style="color: #d8913f;">Browse Files</div>
                                            </label>
                                            <input id="file-input-many" type="file" accept=".jpg,.pdf" multiple />
                                            <div class="file-names" id="file-names">0 of 10 files selected</div>
                                            
                                        </div>
                                    </div>
                                </div>
                              
                            <div class="form-group">
                                <textarea name="text" class="form-control" placeholder="Please share your reasons for enrolling in this degree program. Kindly limit your response to 150 words or fewer." cols="50" rows="40"></textarea>
                            </div>
                                <button type="submit" name="submit" class="btn btn-contact-info btn-block">Apply Now</button>
                            </form>
                           </div>
                    
                        </div>
                      
                         <div class="col-md-4"><h2 style="font-weight: 400; margin-top: 60px !important;">Academics</h2>
                       <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading active-panel">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Certficate Programs
									</a>
								  </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body" style=" font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Certificate Programs</b> <br>
                                            <a href="updates/relevant/christian-administrator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Administrator</a><br>
                                            <a href="updates/relevant/christian-caregiver"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Caregiver</a><br>
                                            <a href="updates/relevant/christian-counselor"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Counselor</a><br>
                                            <a href="updates/relevant/christian-life-coach"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Life Coach</a><br>
                                            <a href="updates/relevant/christian-mediator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Mediator </a><br>
                                            <a href="updates/relevant/christian-philosopher-analyst"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Philosopher/Analyst</a><br>
                                            <a href="updates/relevant/corporate-chaplaincy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Corporate Chaplaincy</a><br>
                                       </div>
                                        
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                        
                          <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        License Programs
									</a>
								  </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body" style=" font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>License Programs</b> <br>
                                              <a href="/updates/relevant/licensed-christian-administrator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Administrator</a><br>
                                            <a href="/updates/relevant/licensed-christian-caregiver"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Caregiver</a><br>
                                            <a href="/updates/relevant/licensed-christian-counselor"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Counselor</a><br>
                                            <a href="/updates/relevant/licensed-christian-life-coach"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Life Coach</a><br>
                                            <a href="/updates/relevant/licensed-christian-mediator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Mediator </a><br>
                                            <a href="/updates/relevant/licensed-christian-philosopher-analyst"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Christian Philosopher/Analyst</a><br>
                                            <a href="/updates/relevant/licensed-christian-chaplain"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Licensed Corporate Chaplain</a><br>
                                   
                                        </div>
                                        
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                       <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Bachelor's Degree Programs
									</a>
								  </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Theology (B.Th.) Programs</b> <br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-biblical-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Biblical Studies</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-apologetics"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Apologetics</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-counseling/"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Counseling</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-christian-philosophy"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Christian Philosophy</a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-ecumenical-theology"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Ecumenical Theology
                                            </a><br>
                                            <a href="updates/relevant/bachelor-of-theology-b-th-in-systematic-theology"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Th. Systematic Theology
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Ministry (B.Min.) Programs</b> <br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-christian-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  B.Min. Christian Leadership</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-christian-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  B.Min. Church Administration</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Educational Management </a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-evangelism-and-missions"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Evangelism and Missions</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-music-and-worship"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Music and Worship</a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-pastoring-and-discipleship"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Pastoring and Discipleship </a><br>
                                            <a href="updates/relevant/bachelor-of-ministry-b-min-in-youth-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Min. Youth Ministry </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Bachelor of Divinity (B.Div.) Programs</b> <br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-church-history"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Church History </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-community-development/"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Community Development</a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-corporate-chaplaincy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Corporate Chaplaincy </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-human-resource-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>
                                                B.Div. Human Resource Management </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-religious-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Religious Studies </a><br>
                                            <a href="updates/relevant/bachelor-of-divinity-b-div-in-restorative-justice"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> B.Div. Restorative Justice</a><br>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        Master's Degree Programs
									</a>
								  </h4>
                                    </div>
                                       <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Theology (M.Th.) Programs </b> <br>
                                            <a href="updates/relevant/master-of-theology-m-th-in-christian-apologetics"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Christian Apologetics</a><br>
                                            <a href="updates/relevant/master-of-theology-m-th-in-christian-counseling"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Christian Counseling</a><br>
                                            <a href="updates/relevant/master-of-theology-m-th-in-historical-theology"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Historical Theology</a><br>
                                            <a href="updates/relevant/master-of-theology-m-th-in-philosophy-and-theological-studies"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Th. Philosophy and Theological Studies</a><br>
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Ministry (M.Min.) Programs </b> <br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  M.Min. Educational Management </a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-pastoral-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Pastoral Ministry </a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-strategic-leadership"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Strategic Leadership</a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-worship-and-reative-arts"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Worship and Creative Arts </a><br>
                                            <a href="updates/relevant/master-of-ministry-m-min-in-youth-and-family-ministry"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Min. Youth and Family Ministry </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Master of Divinity (M.Div.) Programs </b> <br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-community-development-and-missions"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Community Development and Missions </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-comparative-religion"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Comparative Religion </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-corporate-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Corporate Management</a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-new-testament-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. New Testament Studies </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-old-testament-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Old Testament Studies </a><br>
                                            <a href="updates/relevant/master-of-divinity-m-div-in-restorative-justice"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> M.Div. Restorative Justice</a><br>
                                        </div>
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                        <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                        Doctorate Degree Programs
									</a>
								  </h4>
                                    </div>
                                     <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Theology (Th.D.) Programs </b> <br>
                                            <a href="updates/relevant/doctor-of-theology-th-d-in-interfaith-studies"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Interfaith Studies </a><br>
                                            <a href="updates/relevant/doctor-of-theology-th-d-in-patristics-and-early-Christianity"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Patristics and Early Christianity </a><br>
                                            <a href="updates/relevant/doctor-of-theology-th-d-in-practical-theology-and-counseling"> <i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> Th.D. Practical Theology and Counseling </a><br>
                                           
                                            </a>
                                        </div>

                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Ministry (D.Min.) Programs </b> <br>
                                            <a href="updates/relevant/doctor-of-ministry-d-min-in-educational-management"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Min. Educational Management </a><br>
                                            <a href="updates/relevant/doctor-of-ministry-d-min-in-practical-ministry-and-the-arts"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Min. Practical Ministry and the Arts </a><br>
                                        </div>
                                        <hr>
                                        <div class="panel-body" style="font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Doctor of Divinity (D.Div.) Programs </b> <br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-biblical-exegesis"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Biblical Exegesis </a><br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-christian-ethics-and-philosophy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Christian Ethics and Philosophy </a><br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-justice-and-social-advocacy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Justice and Social Advocacy </a><br>
                                            <a href="updates/relevant/doctor-of-divinity-d-div-in-leadership-and-organizational-development"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i> D.Div. Leadership and Organizational Development </a><br>
                                        </div>
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- about top  end-->

       
  <?php 
    include($IPATH."footer.html"); ?>





















<div class="container" id="contact-info-form">
                            <h2>New Student Enrollment Form</h2>
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Middle Name*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name*" name="firstname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Address*" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Phone Number*" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" name="finduson">
                                              <option value="Sex" disabled selected>Sex*</option>
                                              <option value="Femle">Female</option>
                                              <option value="Male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" name="finduson">
                                              <option value="Sex" disabled selected>Marital Status*</option>
                                              <option value="Single">Single</option>
                                              <option value="married">Married</option>
                                                <option value="divorced">Divorced</option>
                                                <option value="widowed">Widowed</option>
                                                <option value="separated">Separated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                           
                                            <input type="date" class="form-control" placeholder="Date of Birth*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Age*" name="firstname" required>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="SSN*" name="firstname" required>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City*" name="firstname" required>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="State*" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country*" name="firstname" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postal / Zip Code*" name="firstname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"><h3>What Program are you applying for?</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h3>Level of Study</h3>
                                            <label><input type="checkbox" name="interests" value="technology"> Master</label><br>
                                            <label><input type="checkbox" name="interests" value="science"> Bachelor</label><br>
                                            <label><input type="checkbox" name="interests" value="arts"> Doctorate</label><br>
                                            <label><input type="checkbox" name="interests" value="music"> Certificate</label>
                                            <br><br>
                                            <h3>Daul Degree Program</h3>
                                            <label><input type="checkbox" name="interests" value="technology"> Masters / Doctorate</label><br>
                                            <label><input type="checkbox" name="interests" value="science"> Bachelor / Masters</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h3>Course of Study*</h3>
                                            <label><input type="checkbox" name="interests" value="arts"> Ministry</label><br>
                                            <label><input type="checkbox" name="interests" value="music"> Theology</label><br>
                                            <label><input type="checkbox" name="interests" value="sports"> Divinity</label>
            
                                            <br><br>
                                            <h3>Course of Study*</h3>
                                            <label><input type="checkbox" name="interests" value="arts"> Ministry</label><br>
                                            <label><input type="checkbox" name="interests" value="music"> Theology</label><br>
                                            <label><input type="checkbox" name="interests" value="sports"> Divinity</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row"><h3 style="margin-left: 15px;">College Degree Program Study*</h3>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><input type="checkbox" name="interests" value="technology"> College</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <h3>Course of Study</h3>
                                            <label><input type="checkbox" name="interests" value="sports"> Ministry & Advocacy</label> <br>
                                            <label><input type="checkbox" name="interests" value="technology">Christian Professionals & Researchers</label><br>
                                            <label><input type="checkbox" name="interests" value="science"> Biblical Studies & Church History</label><br>
                                        <label><input type="checkbox" name="interests" value="sports">heology & Philosophy</label><br>
                                            <label><input type="checkbox" name="interests" value="sports">Management & Leadership</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <h4 style="margin-left: 10px;">Please upload the following documents: (Your Certificates, Degrees / Diplomas, <br> One passport-sized photo)
                                        Ensure each file is in PDF or JPEG format and clearly legible.</h4>
                                    <div class="col-md-5">
                                        <div class="file-upload" id="file-upload">
                                            <label for="file-input"> Upload Passport here
                                                <div style="color: #d8913f;">Drag & Drop Files Here</div>
                                                <div>or</div>
                                                <div style="color: #d8913f;">Browse Files</div>
                                            </label>
                                            <input id="file-input" type="file" accept=".jpg" />
                                            <div class="file-name" id="file-name">0 of 1</div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="file-upload file-upload-many" id="file-upload-many">
                                            <label for="file-input">Upload your Certificates, Diplomas and Degree here
                                                <div style="color: #d8913f;">Drag & Drop Files Here</div>
                                                <div>or</div>
                                                <div style="color: #d8913f;">Browse Files</div>
                                            </label>
                                            <input id="file-input-many" type="file" accept=".jpg,.pdf" multiple />
                                            <div class="file-names" id="file-names">0 of 10 files selected</div>
                                            
                                        </div>
                                    </div>
                                </div>
                              
                            <div class="form-group">
                                <textarea name="text" class="form-control" placeholder="Please share your reasons for enrolling in this degree program. Kindly limit your response to 150 words or fewer." cols="50" rows="40"></textarea>
                            </div>
                                <button type="submit" name="submit" class="btn btn-contact-info btn-block">Apply Now</button>
                            </form>
                           </div>
                    
                        </div>
                      
                         <div class="col-md-4"><h2 style="font-weight: 400; margin-top: 60px !important;">Academics</h2>
                       <div class="servdtlaccord margbtm40">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading active-panel">
                                        <h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Certficate Programs
									</a>
								  </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body" style=" font-size: 16px; font-weight: 300; color: rgb(132, 132, 132);">
                                            <b>Certificate Programs</b> <br>
                                            <a href="updates/relevant/christian-administrator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Administrator</a><br>
                                            <a href="updates/relevant/christian-caregiver"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Caregiver</a><br>
                                            <a href="updates/relevant/christian-counselor"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Counselor</a><br>
                                            <a href="updates/relevant/christian-life-coach"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Life Coach</a><br>
                                            <a href="updates/relevant/christian-mediator"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Mediator </a><br>
                                            <a href="updates/relevant/christian-philosopher-analyst"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Christian Philosopher/Analyst</a><br>
                                            <a href="updates/relevant/corporate-chaplaincy"><i class='bx bx-link-alt' style=" font-size: 16px; color: rgb(132, 132, 132);"></i>  Certified Corporate Chaplaincy</a><br>
                                       </div>
                                        
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>