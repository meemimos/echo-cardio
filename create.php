<?php
include 'layouts/header.php';
include 'layouts/nav.php';
?>


<div class='image-container set-full-height'>
	<div class="container">
        <div class="row">
            <div class='col-sm-8 col-sm-offset-2'>
                <div class="wizard-container">				
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <div class="wizard-header margin-top">
                            <h3 class="wizard-title text-center">
                                Echocardiogram and Colour Doppler Report
                            </h3>
                            <h5 class="text-center">Empresa HQ 33, Baneshwor-10 Kathmandu</h5>
                        </div>

                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#patients-info" data-toggle="tab">Patients Information</a></li>
                                <li><a href="#2d-findings" data-toggle="tab">2D Findings</a></li>  
                                <li><a href="#doppler-findings" data-toggle="tab">Doppler Findings</a></li> 
                            </ul>
                        </div>

                        <?php
                            require_once('model/connection.php');
                            require_once('controller/recordscontroller.php');
                            include 'model/records.php';
                        ?>
                        <form action="confirm.php" method="post">
                            <input type="text" value="create" name="action" style="display:none;">
                            <div class="record-create">
                                <div class="tab-content">
                                    <!-- patients info -->
                                    <div class="tab-pane" id="patients-info">
                                        <div class="row">                        
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First Name</label>
                                                        <input name="first_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Middle Name</label>
                                                        <input name="middle_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last Name</label>
                                                        <input name="last_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">    
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Age</label>
                                                        <input name="age" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">wc</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Gender</label>
                                                        <select name="gender" class="form-control">
                                                            <option selected=""></option>
                                                            <option value="1"> Male </option>
                                                            <option value="2"> Female </option>
                                                            <option value="9"> Other </option>
                                                        </select>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">send</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Referred by</label>
                                                        <input name="referred_by" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2d-findings -->
                                        <div class="tab-pane margin-large-bottom" id="2d-findings">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h4 class="info-text">Diastole</h4>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="info-text">Systole</h4>
                                                </div>
                                            </div>    
                                            <div class="row">                                        
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">RVID</label>
                                                        <input name="drvid" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">RVID</label>
                                                        <input name="srvid" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">AORTA</label>
                                                        <input name="aorta" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">IVS</label>
                                                        <input name="divs" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">IVS</label>
                                                        <input name="sivs" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">LA</label>
                                                        <input name="la" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">LVID</label>
                                                        <input name="dlvid" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">LVID</label>
                                                        <input name="slvid" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">ACS</label>
                                                        <input name="acs" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                        
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">PW</label>
                                                        <input name="dpw" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">PW</label>
                                                        <input name="spw" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">EDV</label>
                                                        <input name="edv" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">FS</label>
                                                        <input name="dfs" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">FS</label>
                                                        <input name="sfs" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">ESV</label>
                                                        <input name="esv" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">EF</label>
                                                        <input name="def" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">EF</label>
                                                        <input name="sef" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">EF</label>
                                                        <input name="ef" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- doopler-findings -->
                                        <div class="tab-pane" id="doppler-findings">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <h4 class="info-text">A Doppler ultrasound test uses reflected sound waves to see how blood flows through a blood vessel.</h4>
                                                </div>
                                            </div>
                                            <div class="row">                                        
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Pulmonary Value</label>
                                                        <select class="form-control">
                                                            <option value="normal">Normal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Velocity</label>
                                                        <input name="mean_velocity" id="mean_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Gradient</label>
                                                        <input name="mean_gradient" id="mean_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Peak Velocity</label>
                                                        <input name="peak_velocity" id="peak_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Peak Gradient</label>
                                                        <input name="peak_gradient" id="peak_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Pulmonary Regurgitation</label>
                                                        <select class="form-control">
                                                            <option value="normal">TRACE</option>
                                                            <option value="normal">NIL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Mitral Valve -->
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p class="txt-bold">
                                                        <br>
                                                        <br>Mitral Valve</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">AML</label>
                                                        <select class="form-control">
                                                            <option value="normal">Normal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">PML</label>
                                                        <select class="form-control">
                                                            <option value="normal">Normal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="">
                                                        <br>
                                                        <br>Mitral Valve Area:</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Plainimetry</label>
                                                        <input name="plainimetry" id="plainimetry" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Pressure Half Time</label>
                                                        <input name="pressure_half_time" id="pressure_half_time" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Velocity</label>
                                                        <input name="mv_mean_velocity" id="mv_mean_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Gradient</label>
                                                        <input name="mv_mean_gradient" id="mv_mean_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">                                        
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">E Velocity</label>
                                                        <input name="e_velocity" id="e_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">E Gradient</label>
                                                        <input name="e_gradient" id="e_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">A Velocity</label>
                                                        <input name="a_velocity" id="a_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">A Gradient</label>
                                                        <input name="a_gradient" id="a_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mitral Regurgitation</label>
                                                        <select class="form-control">
                                                            <option value="trace">TRACE</option>
                                                            <option value="nil">NIL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Aortic Valve -->
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <p class="txt-bold">
                                                        <br>
                                                        <br>Aortic Valve</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <select class="form-control">
                                                            <option value="normal">Normal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Velocity</label>
                                                        <input name="av_mean_velocity" id="av_mean_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Gradient</label>
                                                        <input name="av_mean_gradient" id="av_mean_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">    
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Peak Velocity</label>
                                                        <input name="av_peak_velocity" id="av_peak_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Peak Gradient</label>
                                                        <input name="av_peak_gradient" id="av_peak_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Aortic Regurgitation</label>
                                                        <select class="form-control">
                                                            <option value="trace">TRACE</option>
                                                            <option value="nil">NIL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <!-- Tricuspid Valve -->
                                            <div class="row">    
                                                <div class="col-sm-2">
                                                    <p class="txt-bold">
                                                        <br>Tricuspid Valve</p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <select class="form-control">
                                                            <option value="normal">Normal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Velocity</label>
                                                        <input name="tv_mean_velocity" id="tv_mean_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mean Gradient</label>
                                                        <input name="tv_mean_gradient" id="tv_mean_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">    
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Peak Velocity</label>
                                                        <input name="tv_peak_velocity" id="tv_peak_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Peak Gradient</label>
                                                        <input name="tv_peak_gradient" id="tv_peak_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">    
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Tricuspid Regurgitation</label>
                                                        <select class="form-control">
                                                            <option value="trace">TRACE</option>
                                                            <option value="nil">NIL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">TR Velocity</label>
                                                        <input name="tr_velocity" id="tr_velocity" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">TR Pressure Gradient</label>
                                                        <input name="tr_pressure_gradient" id="tr_pressure_gradient" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">    
                                                <div class="col-sm-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Intra-atrial Septum</label>
                                                        <select class="form-control">
                                                            <option value="intact">Intact</option>
                                                            <option value="no">No regional wall motion abnormality seen</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Intra-ventricular Septum</label>
                                                        <select class="form-control">
                                                            <option value="intact">Intact</option>
                                                            <option value="no">No regional wall motion abnormality seen</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Pericardium</label>
                                                        <select class="form-control">
                                                            <option value="normal">Normal</option>
                                                            <option value="no">No effusion seen</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Wall Motion</label>
                                                        <select class="form-control">
                                                            <option value="intact">Intact</option>
                                                            <option value="no">No regional wall motion abnormality seen</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Final Impression</label>
                                                        <textarea class="form-control" placeholder="" rows="5"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6">
                                                                <label class="control-label">Dr.Deewakar Sharma</label>
                                                                <p class="description">Senior Consultant Cardiologist</p>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                    <input type="submit" class="btn btn-success pull-right" value="Submit"> 
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    <!-- <input type="submit" class="btn btn-success pull-right">  -->

                                </div>				
                            </div>
                        </form>

                    </div>
                </div>
			</div>
		</div>
        </div>
	</div>
	
</div>

<?php
include 'layouts/footer.php';
?>