<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/main.css" type="text/css">
<script src="js/functions.js" type="text/javascript"></script>
<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/formcheck.js"></script>
<script type="text/javascript">
	window.addEvent('domready', function(){check = new FormCheck('third', {
		display : {
			fadeDuration : 500,
			errorsLocation : 1,
			indicateErrors : 1,
			showErrors : 1
		}
	})});
</script>
<!--<script type="text/javascript" src="js/niceforms.js"></script>-->



<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ISPROJ2 FAP System Evaluation Form</title>
</head>

<body>
<div id="tabbed_box_1" class="tabbed_box" align="center">
	<h4 align="center"><img src="images/header.jpg" width="670" height="120" margin=0></h4>
	<div class="tabbed_area" >

      <ul class="tabs">
    <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Final Academic Project Information</a></li>
    <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">System Evaluation Grading</a></li>
    <li><a href="javascript:tabSwitch('tab_4', 'content_4');" id="tab_4">P&D Grade</a>
    <li><a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3">Final Grade</a></li>
</ul>

        <div id="content_1" class="content">
        <form name="form" method="post" id="third" action=""  class="niceform">
    <h1>Group Information</h1>
        <p><!-- Name -->
        <label for="site"><strong><span class="blue"></span>Title of Final Academic Project</strong></label>
          <input id="projectname" name="projname" type="text" class="" size="50" />
          <label for="name"><strong><span class="blue"></span> Project Group Members: </strong></label>
          </p>
        <p>Member 1:</p>
        <p> First Name:
        
  <input id="fname1" name="fname1" type="text" class="validate['required','length[3,-1]','nodigit']"  size="20" value="<?php if(($_POST['fname1']) == "")echo "Name";
  		else
  		echo $_POST['fname1'] ?>" />
        </p>
        <p> 
          Last Name
          <input id="lname1" name="lname1" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['lname1'] ?>" />
        </p>
        <p>Member 2:</p>
        <p> First Name:
  <input id="fname2" name="fname2" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['fname2'] ?>" />
        </p>
        <p>
          Last Name
  <input id="lname2" name="lname2" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['lname2'] ?>"/>
        </p>
        <p>Member 3:</p>
        <p> First Name:
  <input id="fname3" name="fname3" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['fname3'] ?>" />
        </p>
        <p>
          Last Name
  <input id="lname3" name="lname3" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['lname3'] ?>"/>
        </p>
        <p>Member 4:        </p>
        <p> First Name:
          <input id="fname4" name="fname4" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['fname4'] ?>" />
        </p>
        <p>
          Last Name
  <input id="lname4" name="lname4" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['lname4'] ?>" />
        </p>
        <p>&nbsp;</p>
        <p>
          
          
          <!-- Subject -->
          <label for="subject"><strong>Name of Panelist</strong></label>
        </p>
        <p>First Name:
          <input id="pname" name="pname" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['pname'] ?>" />
Last Name
<input id="plname" name="plname2" type="text" class="validate['required','length[3,-1]','nodigit']" size="20" value="<?php echo $_POST['plname2'] ?>" />
          
<!-- Message -->
          <label for="msg"><strong><span class="blue"></span>P&amp;D Date and Time</strong><br>
            <select name="month">
              <option value="1">January
              <option value="2">February
              <option value="3">March
              <option value="4">April
              <option value="5">May
              <option value="6">June
              <option value="7">July
              <option value="8">August
              <option value="9">September
              <option value="10">October
              <option value="11">November
              <option value="12">December
  </select>
            <select name="day">
              <option value="1">1
      <option value="2">2
        <option value="3">3
          <option value="4">4
            <option value="5">5
            <option value="6">6
            <option value="7">7
            <option value="8">8
            <option value="9">9
            <option value="10">10
            <option value="11">11
            <option value="12">12
            <option value="13">13
            <option value="14">14
            <option value="15">15
            <option value="16">16
            <option value="17">17
            <option value="18">18
            <option value="19">19
            <option value="20">20
            <option value="21">21
            <option value="22">22
            <option value="23">23
            <option value="24">24
            <option value="25">25
            <option value="26">26
            <option value="27">27
            <option value="28">28
            <option value="29">29
            <option value="30">30
            <option value="31">31
</select>
  
  <select name="year">
    <option value="2012">2012
      <option value="2013">2013
  </select>
          </label>
           </div>
          <!-- Spam Check <br /><br />
          <input type="submit" name = "submit" class="buttonSubmit" value="Submit " />-->
           
         
          
        <div id="content_2" class="content">
   		  <p>&nbsp;</p>
   		  <h1>System Evaluation Group Grading		</h1>
          
            <?php
			
			if (!isset($_POST['$submit'])) {
				
			  if (isset($_POST['fname1'])) { 
  				$firstn1 = $_POST['fname1']; 
				} 
				if (isset($_POST['lname1'])) { 
  				$lastn1 = $_POST['lname1']; 
				} 
	   
	   if (isset($_POST['fname2'])) { 
  				$firstn2 = $_POST['fname2']; 
				} 
				if (isset($_POST['lname2'])) { 
  				$lastn2 = $_POST['lname2']; 
				} 
				
				if (isset($_POST['fname3'])) { 
  				$firstn3 = $_POST['fname3']; 
				} 
				if (isset($_POST['lname3'])) { 
  				$lastn3 = $_POST['lname3']; 
				} 
				
				if (isset($_POST['fname4'])) { 
  				$firstn4 = $_POST['fname4']; 
				} 
				if (isset($_POST['lname4'])) { 
  				$lastn4 = $_POST['lname4']; 
				} 
	   
			
			
		    
	   
			
		  
       $completion = $_POST['se_grade_com'];
		$prod_stability = $_POST['se_grade_prod'];
		$ui_score = $_POST['se_grade_ui'];
		$code_quality = $_POST['se_grade_code'];
		
		$pcompletion = $_POST['p_completion_score'];
		$pmaterial = $_POST['p_material_score'];
		$pvalue = $_POST['b_value_score'];
		$ptime = $_POST['t_management_score'];
		
		//individual
		$qa1 = $_POST['m1_qa'];
		$qa2 = $_POST['m2_qa'];
		$qa3 = $_POST['m3_qa'];
		$qa4 = $_POST['m4_qa'];
		
		$deli1 = $_POST['m1_delivery'];
		$deli2 = $_POST['m2_delivery'];
		$deli3 = $_POST['m3_delivery'];
		$deli4 = $_POST['m4_delivery']; 
		
		$deco1 = $_POST['m1_decorum'];
		$deco2 = $_POST['m2_decorum'];
		$deco3 = $_POST['m3_decorum'];
		$deco4 = $_POST['m4_decorum']; 
		
		$vb1 = $_POST['m1_vb_skills'];
		$vb2 = $_POST['m2_vb_skills'];
		$vb3 = $_POST['m3_vb_skills'];
		$vb4 = $_POST['m4_vb_skills'];
		
		$dress1 = $_POST['m1_dresscode'];
		$dress2 = $_POST['m2_dresscode'];
		$dress3 = $_POST['m3_dresscode'];
		$dress4 = $_POST['m4_dresscode'];
		
		
		
		
			
			

		
			//system evaluation
			$se_completion = $completion * .4;	
			$se_stability = $prod_stability * .3;
			$se_ui = $ui_score * .15;
			$se_code = $code_quality *.15;
			$overall = $se_completion + $se_stability + $se_ui +
			$se_code;
			
			if($overall >= 70)
			{
				$status = "Passed";	
			}
			else if($overall >= 50 && $overall < 70)
			{
				$status = "Deferred";	
			}
			else
			{
				$status = "Failed";
			}
			
			//p&d group
			$pd_comp = $pcompletion * .15;
			$pd_material = $pmaterial * .10;
			$pd_value = $pvalue * .15;
			$pd_time = $ptime * .05;
			$pd_groupgrade = $pd_comp + $pd_material + $pd_value + 		$pd_time;
			//individual grade
			$i_qa1 = $qa1 * .3;
			$i_qa2 = $qa2 * .3;
			$i_qa3 = $qa3 * .3;
			$i_qa4 = $qa4 * .3;
			
			$i_deli1 = $deli1 * .1;
			$i_deli2 = $deli2 * .1;
			$i_deli3 = $deli3 * .1;
			$i_deli4 = $deli4 * .1;
			
			$i_deco1 = $deco1 * .05;
			$i_deco2 = $deco2 * .05;
			$i_deco3 = $deco3 * .05;
			$i_deco4 = $deco4 * .05;
			
			$i_vb1 = $vb1 * .05;
			$i_vb2 = $vb2 * .05;
			$i_vb3 = $vb3 * .05;
			$i_vb4 = $vb4 * .05;
			
			$i_dress1 = $dress1 * .05;
			$i_dress2 = $dress2 * .05;
			$i_dress3 = $dress3 * .05;
			$i_dress4 = $dress4 * .05;
			
			$m1_grade = $i_qa1 + $i_deli1 +$i_deco1 + $i_vb1 +$i_dress1;
			$m2_grade = $i_qa2 + $i_deli2 +$i_deco2 + $i_vb2 +			$i_dress2;
			$m3_grade = $i_qa3 + $i_deli3 +$i_deco3 + $i_vb3 +	$i_dress3;
			$m4_grade = $i_qa4 + $i_deli4 +$i_deco4 + $i_vb4 +		$i_dress4;
			
			$documentation = $overall * .6;
			$m1_final = $documentation + ($pd_groupgrade + $m1_grade) * .4;
			$m2_final = $documentation + ($pd_groupgrade + $m2_grade) * .4;
			$m3_final = $documentation + ($pd_groupgrade + $m3_grade) * .4;
			$m4_final = $documentation + ($pd_groupgrade + $m4_grade) * .4;
			
		}
			
		

		  ?>
          
		<table width="406" border="1" bordercolor="#FFFFFF"  >
          <tr>
            <td width="56">Component</td>
            <td width="55">Weight(%)</td>
            <td width="184" align="center">Score</td>
            <td width="75" align="center">Weighted Score</td>
          </tr>
          <tr>
            <td height="28">Completion</td>
            <td align="center">40</td>
            <td align="center">
            <select name="se_grade_com">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><!--<input name="comp_grade" type="text" size="10">--><?php print $se_completion; ?></td>
          </tr>
          <tr>
            <td>Product Stability</td>
            <td align="center">30</td>
            <td align="center"><select name="se_grade_prod">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><?php print $se_stability;?></td>
          </tr>
          <tr>
            <td>User Interface Design</td>
            <td align="center">15</td>
            <td align="center"><select name="se_grade_ui">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><?php print $se_ui;?></td>
          </tr>
          <tr>
            <td>Code Quality</td>
            <td align="center">15</td>
            <td align="center"><select name="se_grade_code">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><?php print $se_code;?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Overall Product Evaluation Grade:</td>
            <td align="center"><?php print $overall;?></td>
          </tr>
          <tr>
            <td>Status:  <b style="font-size: 18px"><?php print $status;?>      </b>           </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
       

          <!-- Spam Check --><br />
          
          <br />
          		

          <!-- Niceforms: mouse over effect -->
          <!-- Do not remove the line below -->        </p>
<div id="stylesheetTest"></div>

	
		      
          
          <!-- Niceforms: mouse over effect -->
          <!-- Do not remove the line below -->
        </p>
        <div id="stylesheetTest"></div>

	
  </div>
  <div id="content_4" class="content">
  <h1>P&amp;D Group Grading		</h1>
        
       
		<table width="406" border="1" bordercolor="#FFFFFF" align="center"  >
          <tr>
            <td width="56">Component</td>
            <td width="55">Weight(%)</td>
            <td width="184" align="center">Score</td>
            <td width="75" align="center">Weighted Score</td>
          </tr>
          <tr>
            <td height="28">Presentation Completion</td>
            <td align="center">15</td>
            <td align="center">
            <select name="p_completion_score">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><?php print $pd_comp;?></td>
          </tr>
          <tr>
            <td>Presentation Materials</td>
            <td align="center">10</td>
            <td align="center"><select name="p_material_score">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><?php print $pd_material;?></td>
          </tr>
          <tr>
            <td>Business Value of the Presentation</td>
            <td align="center">15</td>
            <td align="center"><select name="b_value_score">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><?php print $pd_value;?></td>
          </tr>
          <tr>
            <td>Time Management</td>
            <td align="center">5</td>
            <td align="center"><select name="t_management_score">
              <option>0</option>
              <option>35</option>
              <option>70</option>
              <option>80</option>
              <option>90</option>
              <option>100</option>
            </select></td>
            <td align="center"><?php print $pd_time;?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>P&amp;D Group Grade(45):</td>
            <td align="center"><?php print $pd_groupgrade;?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
       <h1>P&amp;D Individual Grading		</h1>
        
       
		<table width="619" border="1" bordercolor="#FFFFFF"  >
          <tr>
            <td width="57">Component</td>
            <td width="55">Weight(%)</td>
            <td width="71" align="center">&nbsp;</td>
            <td width="146" align="center">Score</td>
            <td width="249" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td height="28">Q&amp;A Performance</td>
            <td align="center">30</td>
            <td align="center" bgcolor="#666666"><p>Member 1:</p>
              <p>
                <select name="m1_qa">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 2:
                <select name="m2_qa">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 3:
                <select name="m3_qa">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 4:
                <select name="m4_qa">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>              
            &nbsp;</p></td>
            <td align="center" bgcolor="#666666">Member 1:
             <p> <?php print $i_qa1;?></p>
              Member 2:
             <p> <?php print $i_qa2;?> </p>
            Member 3:
           <p> <?php print $i_qa3;?></p>
              Member 4:
           <p> <?php print $i_qa4;?></p></td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td>Delivery</td>
            <td align="center">10</td>
            <td align="center" bgcolor="#0000FF"><p>Member 1:</p>
              <p>
                <select name="m1_delivery">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 2:
                <select name="m2_delivery">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 3:
                <select name="m3_delivery">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 4:
                <select name="m4_delivery">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
            </p></td>
            <td align="center" bgcolor="#0000FF">Member 1: 
       
              <p> <?php print $i_deli1;?></p>
Member 2:
<p><?php print $i_deli2;?></p>
Member 3:
<p><?php print $i_deli3;?></p>
Member 4:
<p><?php print $i_deli4;?></p></td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td>Decorum</td>
            <td align="center">5</td>
            <td align="center" bgcolor="#00CC33"><p>Member 1:</p>
              <p>
                <select name="m1_decorum">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 2:
                <select name="m2_decorum">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 3:
                <select name="m3_decorum">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 4:
                <select name="m4_decorum">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
            </p></td>
            <td align="center" bgcolor="#00CC33">Member 1:
              <p> <?php print $i_deco1;?></p>
Member 2:
<p> <?php print $i_deco2;?></p>
Member 3:
<p> <?php print $i_deco3;?></p>
Member 4:
<p> <?php print $i_deco4;?></p></td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td>Verbal Skills</td>
            <td align="center">5</td>
            <td align="center" bgcolor="#3399CC"><p>Member 1:</p>
              <p>
                <select name="m1_vb_skills">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 2:
                <select name="m2_vb_skills">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 3:
                <select name="m3_vb_skills">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 4:
                <select name="m4_vb_skills">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
            </p></td>
            <td align="center" bgcolor="#3399CC">Member 1:
              <p> <?php print $i_vb1;?></p>
Member 2:
<p> <?php print $i_vb2;?></p>
Member 3:
<p> <?php print $i_vb3;?></p>
Member 4:
<p> <?php print $i_vb4;?></p></td>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td>Dress Code</td>
            <td align="center">5</td>
            <td align="center" bgcolor="#993399"><p>Member 1:</p>
              <p>
                <select name="m1_dresscode">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 2:
                <select name="m2_dresscode">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 3:
                <select name="m3_dresscode">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
              </p>
              <p>Member 4:
                <select name="m4_dresscode">
                  <option>0</option>
                  <option>35</option>
                  <option>70</option>
                  <option>80</option>
                  <option>90</option>
                  <option>100</option>
                </select>
            </p></td>
            <td align="center" bgcolor="#993399">Member 1:
              <p> <?php print $i_dress1;?></p>
Member 2:
<p> <?php print $i_dress2;?></p>
Member 3:
<p> <?php print $i_dress3;?></p>
Member 4:
<p> <?php print $i_dress4;?></p></td>
           <td align="center">&nbsp;</td>&nbsp;<td width="1"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>P&amp;D Individual Grade(55):</td>
            <td align="center"><p>Member 1:
              <?php print $m1_grade;?>
            </p>
              <p>Member 2:
               <?php print $m2_grade;?>
              </p>
              <p>Member 3:
                <?php print $m3_grade;?>
              </p>
              <p>Member 4:
                <?php print $m4_grade;?>
            </p></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
       
       
          <input type="submit" name="submit" class="buttonSubmit" value="Submit" />
         
          </div>
  </div>
        <div id="content_3" class="content">
        
        <table width="458" border="1" bordercolor="#FFFFFF"  >
          <tr>
            <td width="127">Project Group Member</td>
            <td width="92" align="center">Documentation Grade(Multiply by .60)</td>
            <td width="78" align="center">P&D Group Grade</td>
            <td width="76" align="center">P&amp;D Individual Grade</td>
            <td width="51" align="center">Final Grade</td>
          </tr>
          <tr>
            <td height="28" align="center"><?php print $firstn1." ".$lastn1;?></td>
           <td align="center"><?php print $documentation;?></td>
            <td align="center"><?php print $pd_groupgrade;?></td>
            <td align="center"><?php print $m1_grade;?></td>
            <td align="center"><?php print $m1_final;?></td>
          </tr>
          <tr>
            <td align="center"><?php print $firstn2." ".$lastn2;?></td>
            <td align="center"><?php print $documentation;?></td>
            <td align="center"><?php print $pd_groupgrade;?></td>
            <td align="center"><?php print $m2_grade;?></td>
            <td align="center"><?php print $m2_final;?></td>
          </tr>
          <tr>
            <td align="center"><?php print $firstn3." ".$lastn3;?></td>
            <td align="center"><?php print $documentation;?></td>
            <td align="center"><?php print $pd_groupgrade;?></td>
            <td align="center"><?php print $m3_grade;?></td>
            <td align="center"><?php print $m3_final;?></td>
          </tr>
          <tr>
            <td align="center"><?php print $firstn4." ".$lastn4;?></td>
            <td align="center"><?php print $documentation;?></td>
            <td align="center"><?php print $pd_groupgrade;?></td>
            <td align="center"><?php print $m4_grade;?></td>
            <td align="center"><?php print $m4_final;?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
        
        	
   	  </div>
            
            
            
</div>

    </div>

</div>




</body>
</html>
