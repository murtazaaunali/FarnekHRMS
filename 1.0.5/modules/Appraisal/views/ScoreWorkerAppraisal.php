<div class="row">
    <div class="col-md-12">
        <form action="<?php echo site_url('Appraisal/ConfirmWorkerAppraisal');?>" enctype="multipart/form-data" method="post">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Personal Details</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Employee's Number</label>
                                <input type="text" class="form-control" id="regnum" name="regnum" class="regnum">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Employee's Name</label>
                                <input type="text" class="form-control" id="empname" name="empname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="jobtitle">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Section / Department</label>
                                <select class="form-control" name="department" id="department">
                                    <option>Select Department</option>
                                    <option>Head office</option>
                                    <option>Cleaning_Services</option>
                                    <option>Security</option>
                                    <option>Technical_Services</option>
                                    <option>HG_Soft_Services</option>
                                    <option>HG_Special_Cleaning</option>
                                    <option>HG_Call_Outs</option>
                                    <option>HG_Projects</option>
                                    <option>XLNT</option>
                                    <option>AUH_Cleaning_Serivces</option>
                                    <option>AUH_Technical_Services</option>
                                    <option>Burj_Khalifa</option>
                                    <option>Citywalk-Cleaning</option>
                                    <option>Citywalk-Maintenance</option>
                                    <option>DPR-Cleaning</option>
                                    <option>DPR-Maintenance</option>
                                    <option>Logistics</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Line Manager's Name</label>
                                <?php 
                            $user = $this->ion_auth->user()->row();
                            ?>
                                    <input type="text" class="form-control" id="lmname" name="lmname" value="<?php echo $user->first_name;?> <?php echo $user->last_name;?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" id="lmjobtitle" name="lmjobtitle" value="<?php echo $user->company;?>" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Performance Appraisal Period</label>
                                <input type="text" class="form-control" id="appraisalperiod" name="appraisalperiod" value="2016" disabled>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Site</label>
                                <select class="form-control" name="site" id="site">
                                    <option>Select Site</option>
                                    <option>Head_Office</option>
                                    <option>Mobile_team</option>
                                    <option>Mckinsey_&_Company,_Inc._International</option>
                                    <option>Sofitel_Luxury_Hotels</option>
                                    <option>Emirates</option>
                                    <option>Jumeirah_English_Speaking_School</option>
                                    <option>Ahmed_Seddiqi_&_Sons</option>
                                    <option>Pepsi-Cola</option>
                                    <option>Henkel</option>
                                    <option>Seddiqi_Investment_LLC</option>
                                    <option>Pepsi-Cola</option>
                                    <option>King_Field</option>
                                    <option>DU</option>
                                    <option>MBC</option>
                                    <option>Prime_Minister_Office</option>
                                    <option>Dubai_Airport_Terminal_2</option>
                                    <option>Oracle_Building</option>
                                    <option>ALMA_901_AHAQS</option>
                                    <option>Meydan_offices</option>
                                    <option>NIKKI_BEACH_CLUB</option>
                                    <option>Molecule_Restaurant</option>
                                    <option>Rakbank</option>
                                    <option>Millennium_Tower</option>
                                    <option>Wadi_Al_Rawda_Trading,_Business_Pt.</option>
                                    <option>Emirates_Hills,_Villa_P27</option>
                                    <option>Serco_Middle_East</option>
                                    <option>The_Jumeirah_Restaurants_LLC</option>
                                    <option>Zeenah_Building_Plot_No._129-165</option>
                                    <option>Damas_Jewellery_LLC_DMCc_Damas_Vault</option>
                                    <option>The_Dubai_Mall</option>
                                    <option>Souq_Extra_-_Al_Barsha</option>
                                    <option>U-Bora_Tower_</option>
                                    <option>United_Insurance_Building</option>
                                    <option>Ministry_of_Cabinet_Affairs</option>
                                    <option>I-Rise_Tower,_TECOM</option>
                                    <option>Deloitte</option>
                                    <option>Mashreq_Office_and_Branch</option>
                                    <option>Mohamed_Al_Hashemi_Enterprises_LLC</option>
                                    <option>IMG_World_of_Adventure_Theme_Park,_City_of_Arabia_Dubai</option>
                                    <option>Swiss_International_Scientific_School</option>
                                    <option>Marina_Heights_Project</option>
                                    <option>Al_Gurg_Fosroc_LLC_____</option>
                                    <option>Al_Sherouq,_Karama</option>
                                    <option>Twin_Tower,_Deira</option>
                                    <option>Dubai_Airport_Freezone</option>
                                    <option>Element_WH,_Al_Quoz</option>
                                    <option>Blue_Wave_Residence,_Bur_Dubai</option>
                                    <option>Al_Mahdi_Bldg,_Al_Barsha</option>
                                    <option>Al_Tayer_Villa,_Plot_192,_Umm_Suqueim,_Jumeirah</option>
                                    <option>Sunset_Mall,_Jumeirah</option>
                                    <option>Schaeffler_Middle_East_FZE_</option>
                                    <option>Hawk_Freight_Services_FZE_</option>
                                    <option>Mohammed_Bin_Rashid_Space_Centre</option>
                                    <option>Abdul_Hameed_Seddiqi</option>
                                    <option>Desert_Palm_LLC_</option>
                                    <option>Jumeirah_Villa,_Jumeirah</option>
                                    <option>Pictet_&_Cie_</option>
                                    <option>Dubai_College</option>
                                    <option>Burj_Al_Salam_Tower,_Sheikh_Zayed_Road</option>
                                    <option>New_World_School_Private</option>
                                    <option>Dubai_Arabian_American_Private_School</option>
                                    <option>Al_Nada_&_Omega_Building</option>
                                    <option>Sigma_Warehouse_&_Office,_DIP_1</option>
                                    <option>Ahmed_Bin_Sulayem_Villa#_37,Abu_Baker_Al_Siddiq_Road</option>
                                    <option>Royal_Prince_Hotel,_Al_Sabhka_Road,_Deira</option>
                                    <option>AVANI_Deira_Dubai_Hotel</option>
                                    <option>Al_Ghazal_Complex</option>
                                    <option>La_Riviera_Tower</option>
                                    <option>Jumeirah_Palm_Residence</option>
                                    <option>Lakeview_Apt._</option>
                                    <option>Riviera_Dreams,_International_City</option>
                                    <option>Riviera_Residence,_International_City</option>
                                    <option>Seddiqi_Investment_LLC</option>
                                    <option>Capricorn_Tower</option>
                                    <option>Saratoga_Building,_Al_Barsha</option>
                                    <option>Al_Shirawi_Bld</option>
                                    <option>Emerald_Residence</option>
                                    <option>The_Centre_Residence</option>
                                    <option>Nakheel_PJSC</option>
                                    <option>Farnek_Camp_&_Accommodation</option>
                                    <option>The_Developing_Child_Centre_</option>
                                    <option>UAB_Headquarters_&_UAB_Branches</option>
                                    <option>Liberty_House,_DIFC</option>
                                    <option>Central_Park</option>
                                    <option>Global_Lakeview</option>
                                    <option>Cummins_Middle_East</option>
                                    <option>Al_Khair_Tower,_Al_Quoz</option>
                                    <option>McCormick_Middle_East_FZE,_Jebel_Ali_Free_Zone</option>
                                    <option>The_Edge,_Media_City</option>
                                    <option>RAK_Diabetes_Center,_Jumeirah_</option>
                                    <option>Dubai_Future_Foundation</option>
                                    <option>Mohammed_Bin_Rashid_Al_Maktoum_City,_District_One</option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Appraisal</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>CRITERIA</th>
                                        <th>N/A</th>
                                        <th>5</th>
                                        <th>4</th>
                                        <th>3</th>
                                        <th>2</th>
                                        <th>1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Team work & Cooperation</td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Communication</td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quality</td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" checked value="NA">

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Documentation</td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Initiative</td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Technical Knowledge</td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Productivity</td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Safety & Housekeeping</td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Learning Skills</td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teaching Skills</td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leadership</td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="1" checked>

                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total Score</th>
                                        <th></th>
                                        <th id="total_score"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="5">Performance (%)</th>
                                        <th></th>
                                        <th id="total_percent"></th>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Manager’s and Employee’s comments </h3>
                </div>
                <div class="panel-body">
                    <p><strong>Manager's Comment</strong>
                        <br>Use the space below to record any other significant achievements outside the immediate role requirements and in addition to specific objectives. Indicate why these were significant.
                    </p>
                    <textarea class="form-control" id="manager_comments" name="manager_comments" rows="5"></textarea>
                    <p><strong>Employee's Comment</strong>
                        <br>Please add any comments or additional information you may wish to include in respect of your performance appraisal and development.

                    </p>
                    <textarea class="form-control" id="employee_comments" name="employee_comments" rows="5"></textarea>
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success pull-right">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>