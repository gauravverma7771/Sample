<?php
	/*-------- Download images from gallery --------*/
	if(isset($_GET["imgname"]))
	{
		  $file = $_GET["imgname"];
		  header('Content-Description: File Transfer');
		  header('Content-Type: application/octet-stream');
		  header('Content-Disposition: attachment; filename='.basename($file));
		  header('Content-Transfer-Encoding: binary');
		  header('Expires: 0');
		  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		  header('Pragma: public');
		  ob_clean();
		  flush();
		  readfile($file);
		  exit;
	}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Homepage | 125 LONDON WALL</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" media="screen" href="../css/style.css" >
<link rel="stylesheet" media="screen" href="../css/jquery.fancybox-1.3.4.css" >
<script src="../js/libs/modernizr-2.0.6.min.js"></script>
<script type="text/javascript" src="../js/libs/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
function loaded()
{
	$(".big_image img").show().css({"visibility":"visible"});
}
$(document).ready(function() {
	$(".lpdf_fp").click(function(){
		var str = $(".london_floorplan a.footer_tab_selected").attr("rel");
		str = "index.php?imgname=../pdfs/125LW_MiniSite/floorplans/"+str+".pdf"
		$(".lpdf_fp").attr('href', str);
	});
	$(".lpdf_sp").click(function(){
		var str = $(".london_footerspaceplan a.footer_tab_selected").attr("rel");
		str = "index.php?imgname=../pdfs/125LW_MiniSite/spaceplans/"+str+".pdf"
		$(".lpdf_sp").attr('href', str);
	});
});
</script>

</head>
<body>
<div class="container_44" dir="ltr">
  <div id="main" role="main">
    <section class="grid_39_user"> <a href="../index.php"><img class="top_left_logo alpha" src="../img/London-Wall-Logo.jpg"  alt="London Wall" /></a> <img class="top_right_logo omega" src="../img/Finsbury-Logo_1.jpg" alt="Finsbury Dials" />
      <div class="clear"></div>
      <div class="middle_logo">s <img src="../img/logo.jpg" alt="JP Morgan Portfolio" /> </div>
      <img class="bottom_left_logo alpha" src="../img/Wood-Street-Logo_1.jpg" alt="100 Wood Street" />
      <aside class="grid_37_user" id="bigContent1">
        <h2 class="prefix_1"><a class="london_back" href="index.php"></a></h2>
        <div class="clear"></div>
        <div id="london_menu" class="grid_6 prefix_1">
          <ul>
            <li class="selected"><a rel="london_home" href="Javascript:void(0)">Home</a> </li>
            <li><a rel="london_location" href="Javascript:void(0)">Location</a></li>
            <li><a rel="london_soa" href="Javascript:void(0)">Schedule of Areas</a></li>
            <li id="fp_menu"> <a rel="london_floorplans" href="Javascript:void(0)">Floor Plans</a></li>
            <li><a rel="london_spaceplan" href="Javascript:void(0)">Space Plans</a></li>
            <li class="last"><a rel="london_contact" href="Javascript:void(0)">Contact</a></li>
          </ul>
          <div class="bottom_logo"> <a class="bottom_logo_image" href="../index.php"></a>
            <div id="backtoHome"><span>Back to Portfolio</span><span>Home Page</span></div>
          </div>
        </div>
        <img class="left_close_button" src="../img/close_btn.png" alt="Close Button" />
        <div id="london_home" class="pageContent"> <span class="big_image"><img style="display:none" onload="loaded();" src="../img/125LW_MiniSite/Homepage-Rollover_big.jpg" alt="125 London Wall" /></span>
          <div class="text2">
            <h4>From a global institution.<br />
              Office space to make your mark.</h4>
            <p>A major City building, 125 London Wall provides a total of 371,240 sq ft of flexible, efficient, Grade A space over twenty floors, ideally suited to a full range of financial, legal and corporate occupiers.</p>
            <p>Available from June 2012.</p>
          </div>
        </div>
        <div id="london_location" class="pageContent"> <img class="loc_image" src="../img/125LW_MiniSite/map.jpg" alt="Location" /> </div>
        <div id="london_soa" class="pageContent">
          <div id="londonwall" class="soa_table">
            <h1>SCHEDULE OF AREAS</h1>
            <h4>125 London Wall</h4>
            <ul>
              <li  class="li_border"><span class="title">FLOOR</span><span class="sqft">SQ FT</span><span class="sqm">SQ M</span></li>
              <li id="LW_18"><span class="title">18</span><span class="sqft">4,867</span><span class="sqm">452</span></li>
              <li id="LW_17"><span class="title">17</span><span class="sqft">15,683</span><span class="sqm">1,457</span></li>
              <li id="LW_16"><span class="title">16</span><span class="sqft">18,091</span><span class="sqm">1,681</span></li>
              <li id="LW_15"><span class="title">15</span><span class="sqft">20,938</span><span class="sqm">1,945</span></li>
              <li id="LW_14"><span class="title">14</span><span class="sqft">23,316</span><span class="sqm">2,166</span></li>
              <li id="LW_13"><span class="title">13</span><span class="sqft">21,418</span><span class="sqm">1,990</span></li>
              <li id="LW_12"><span class="title">12</span><span class="sqft">22,799</span><span class="sqm">2,118</span></li>
              <li id="LW_11"><span class="title">11</span><span class="sqft">18,693</span><span class="sqm">1,737</span></li>
              <li id="LW_10"><span class="title">10</span><span class="sqft">20,464</span><span class="sqm">1,901</span></li>
              <li id="LW_09"><span class="title">09</span><span class="sqft">19,669</span><span class="sqm">1,827</span></li>
              <li id="LW_08"><span class="title">08</span><span class="sqft">21,802</span><span class="sqm">2,025</span></li>
              <li id="LW_07"><span class="title">07</span><span class="sqft">20,188</span><span class="sqm">1,876</span></li>
              <li id="LW_06"><span class="title">06</span><span class="sqft">25,628</span><span class="sqm">2,381</span></li>
              <li id="LW_05"><span class="title">05</span><span class="sqft">26,679</span><span class="sqm">2,479</span></li>
              <li id="LW_04"><span class="title">04</span><span class="sqft">27,974</span><span class="sqm">2,599</span></li>
              <li id="LW_03"><span class="title">03</span><span class="sqft">27,538</span><span class="sqm">2,558</span></li>
              <li><span class="title">02</span><span class="sqft">4,034</span><span class="sqm">375</span></li>
              <li><span class="title">01</span><span class="sqft">3,446</span><span class="sqm">320</span></li>
              <li><span class="title">Basements</span><span class="sqft">20,041</span><span class="sqm">1,862</span></li>
              <li class="li_border"><span class="title">TOTAL</span><span class="sqft">363,268</span><span class="sqm">33,749</span></li>
            </ul>
          </div>
          <div class="soa_table soa_westwing">
            <h4>130 London Wall (West Wing)</h4>
            <ul>
              <li class="li_border"><span class="title">FLOOR</span><span class="sqft">SQ FT</span><span class="sqm">SQ M</span></li>
              <li><span class="title">07</span><span class="sqft">3,565</span><span class="sqm">331</span></li>
              <li><span class="title">06</span><span class="sqft">4,259</span><span class="sqm">396</span></li>
              <li><span class="title">03</span><span class="sqft">73</span><span class="sqm">7</span></li>
              <li><span class="title">01</span><span class="sqft">75</span><span class="sqm">7</span></li>
              <li class="li_border"><span class="title">TOTAL</span><span class="sqft">7,972</span><span class="sqm">741</span></li>
              <li class="li_border london_total"><span class="title">OVERALL TOTAL</span><span class="sqft">371,240</span><span class="sqm">34,489</span></li>
            </ul>
          </div>
        </div>
        <div id="london_floorplans" class="pageContent">
          <div class="floorplan">
            <h1 class="lfp_head">THIRD FLOOR PLAN</h1><a class="various1 enlarge london_en" href="#inline101">Enlarge</a>
            <h1 class="lfp_area change_color">16,241 sq ft (1,509 sq m)</h1>
            <span class="london_fp"><img class="london_floorimage" src="../img/125LW_MiniSite/largefloorplan/LW_03.jpg" alt="" height="356"/></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div><a href="index.php?imgname=LW_03.jpg" class="downloadpdf lpdf_fp">Download Plan</a>
              <div class="london_floorplan footer_tabs"> <a href="JavaScript:void(0)" title="THIRD FLOOR PLAN"  rel="LW_03" class="footer_tab_selected">03</a> <a href="JavaScript:void(0)" title="FOURTH FLOOR PLAN"  rel="LW_04">04</a> <a href="JavaScript:void(0)" title="FIFTH FLOOR PLAN"  rel="LW_05">05</a> <a href="JavaScript:void(0)" title="SIXTH FLOOR PLAN"  rel="LW_06">06</a> <a href="JavaScript:void(0)" title="SEVENTH FLOOR PLAN"  rel="LW_07">07</a> <a href="JavaScript:void(0)" title="EIGHTH FLOOR PLAN"  rel="LW_08">08</a> <a href="JavaScript:void(0)" title="NINTH FLOOR PLAN"  rel="LW_09">09</a> <a href="JavaScript:void(0)" title="TENTH FLOOR PLAN"  rel="LW_10">10</a> <a href="JavaScript:void(0)" title="ELEVENTH FLOOR PLAN"  rel="LW_11">11</a> <a href="JavaScript:void(0)" title="TWELFTH FLOOR PLAN"  rel="LW_12">12</a> <a href="JavaScript:void(0)" title="THIRTEENTH FLOOR PLAN"  rel="LW_13">13</a> <a href="JavaScript:void(0)" title="FOURTEENTH FLOOR PLAN"  rel="LW_14">14</a> <a href="JavaScript:void(0)" title="FIFTEENTH FLOOR PLAN"  rel="LW_15">15</a> <a href="JavaScript:void(0)" title="SIXTEENTH FLOOR PLAN"  rel="LW_16">16</a> <a href="JavaScript:void(0)" title="SEVENTEENTH FLOOR PLAN"  rel="LW_17">17</a> <a href="JavaScript:void(0)" title="EIGHTEENTH FLOOR PLAN"  rel="LW_18">18</a> </div>
            </div>
          </div>
          <div style="display: none;">
		<div id="inline101" style="width:816px;height:575px;overflow:auto; background:#fff;">
          <div class="floorplan">
            <h1 class="lfp_head">THIRD FLOOR PLAN</h1>
            <h1 class="lfp_area change_color">16,241 sq ft (1,509 sq m)</h1>
            <span class="london_fp london_fp_big"><img class="london_floorimage" src="../img/125LW_MiniSite/largefloorplan/LW_03.jpg" alt="" width="651" height="505" /></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div><a href="index.php?imgname=LW_03.jpg" class="downloadpdf lpdf_fp">Download Plan</a>
              <div class="london_floorplan footer_tabs"> <a href="JavaScript:void(0)" title="THIRD FLOOR PLAN"  rel="LW_03" class="footer_tab_selected">03</a> <a href="JavaScript:void(0)" title="FOURTH FLOOR PLAN"  rel="LW_04">04</a> <a href="JavaScript:void(0)" title="FIFTH FLOOR PLAN"  rel="LW_05">05</a> <a href="JavaScript:void(0)" title="SIXTH FLOOR PLAN"  rel="LW_06">06</a> <a href="JavaScript:void(0)" title="SEVENTH FLOOR PLAN"  rel="LW_07">07</a> <a href="JavaScript:void(0)" title="EIGHTH FLOOR PLAN"  rel="LW_08">08</a> <a href="JavaScript:void(0)" title="NINTH FLOOR PLAN"  rel="LW_09">09</a> <a href="JavaScript:void(0)" title="TENTH FLOOR PLAN"  rel="LW_10">10</a> <a href="JavaScript:void(0)" title="ELEVENTH FLOOR PLAN"  rel="LW_11">11</a> <a href="JavaScript:void(0)" title="TWELFTH FLOOR PLAN"  rel="LW_12">12</a> <a href="JavaScript:void(0)" title="THIRTEENTH FLOOR PLAN"  rel="LW_13">13</a> <a href="JavaScript:void(0)" title="FOURTEENTH FLOOR PLAN"  rel="LW_14">14</a> <a href="JavaScript:void(0)" title="FIFTEENTH FLOOR PLAN"  rel="LW_15">15</a> <a href="JavaScript:void(0)" title="SIXTEENTH FLOOR PLAN"  rel="LW_16">16</a> <a href="JavaScript:void(0)" title="SEVENTEENTH FLOOR PLAN"  rel="LW_17">17</a> <a href="JavaScript:void(0)" title="EIGHTEENTH FLOOR PLAN"  rel="LW_18">18</a> </div>
            </div>
            </div>
            </div>
            
            
          </div>
        </div>
        
        <!-- london SpacePlan -->
        <div id="london_spaceplan" class="pageContent">
          <div class="floorplan"><a class="various1 enlarge london_en" href="#inline102">Enlarge</a>
            <div class="LW_14_Legal space_details">
              <h1>UK LEGAL SPACE PLAN - FLOOR 14</h1>
              <p>23,316 sq ft  (2,166 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Single Fee Earner Offices </span><span class="numeric">1</span> <span class="character">Double Fee Earner Offices</span><span class="numeric">49</span> <span class="character">Secretaries</span><span class="numeric">25</span> <span class="character">Legal Assistants</span><span class="numeric">7</span> <span class="character">Other</span><span class="numeric">10</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">141</span> </div>
            </div>
            <div class="LW_05_Financial space_details">
              <h1>FINANCIAL SPACE PLAN - FLOOR 17</h1>
              <p>26,679 sq ft  (2,479  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Trader Work Stations </span><span class="numeric">335</span> <span class="character">Cellular Offices</span><span class="numeric">12</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">347</span> </div>
            </div>
            <div class="LW_05_Corporate space_details">
              <h1>CORPORATE OPEN SPACE PLAN - FLOOR 5</h1>
              <p>26,679 sq ft  (2,479  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Open Plan Workstations</span><span class="numeric">234</span> <span class="character">Cellular Offices</span><span class="numeric">8</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">242</span> </div>
            </div>
            <div class="LW_14_CorporateCellular space_details">
              <h1>CORPORATE CELLULAR SPACE PLAN - FLOOR 14</h1>
              <p>23,316  sq ft  (2,166  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Open Plan Workstations</span><span class="numeric">103</span> <span class="character">Cellular Offices</span><span class="numeric">44</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">147</span> </div>
            </div>
            <div class="ClientMeeting space_details" >
              <h1>CLIENT MEETING SUITE SPACE PLAN - FLOOR 17(part) and 18</h1>
              <p>13,521 sq ft  (1,256 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">6 Seat Meeting Room</span><span class="numeric">6 Seats</span> <span class="character">10 Seat Meeting Room</span><span class="numeric">40 Seats</span> <span class="character">12 Seat Meeting Room </span><span class="numeric">24 Seats</span> <span class="character">16 Seat Meeting Room</span><span class="numeric">32 Seats</span> <span class="character">16 Seat Multi-Function Room</span><span class="numeric">32 Seats</span> <span class="character">18 Seat Multi-Function Room</span><span class="numeric">36 Seats</span> </div>
            </div>
            <span class="london_sp"><img class="london_spaceimg" height="356" src="../img/125LW_MiniSite/largespaceplan/LW_14_Legal.jpg" alt="" /></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div><a href="index.php?imgname=LW_03.jpg" class="downloadpdf lpdf_sp">Download Plan</a>
              <div class="london_footerspaceplan footer_tabs"> <a title="UK LEGAL" rel="LW_14_Legal" href="JavaScript:void(0)" class="footer_tab_selected">UK Legal</a> / <a title="FINANCIAL" rel="LW_05_Financial" href="JavaScript:void(0)">Financial</a> / <a title="CORPORATE OPEN" rel="LW_05_Corporate" href="JavaScript:void(0)">Corporate Open</a> / <a title="CORPORATE CELLULAR" rel="LW_14_CorporateCellular" href="JavaScript:void(0)">Corporate Cellular</a> / <a title="CLIENT MEETING SUITE" rel="ClientMeeting" href="JavaScript:void(0)">Client Meeting Suite</a>  </div>
            </div>
          </div>
          
          <!--Popup -->
          <div style="display: none;">
		<div id="inline102" style="width:816px;height:575px;overflow:auto; background:#fff;">
          <div class="floorplan">
            <div class="LW_14_Legal space_details">
              <h1>UK LEGAL SPACE PLAN - FLOOR 14</h1>
              <p>23,316 sq ft  (2,166 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Single Fee Earner Offices </span><span class="numeric">1</span> <span class="character">Double Fee Earner Offices</span><span class="numeric">49</span> <span class="character">Secretaries</span><span class="numeric">25</span> <span class="character">Legal Assistants</span><span class="numeric">7</span> <span class="character">Other</span><span class="numeric">10</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">141</span> </div>
            </div>
            <div class="LW_05_Financial space_details">
              <h1>FINANCIAL SPACE PLAN - FLOOR 17</h1>
              <p>26,679 sq ft  (2,479  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Trader Work Stations </span><span class="numeric">335</span> <span class="character">Cellular Offices</span><span class="numeric">12</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">347</span> </div>
            </div>
            <div class="LW_05_Corporate space_details">
              <h1>CORPORATE OPEN SPACE PLAN - FLOOR 5</h1>
              <p>26,679 sq ft  (2,479  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Open Plan Workstations</span><span class="numeric">234</span> <span class="character">Cellular Offices</span><span class="numeric">8</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">242</span> </div>
            </div>
            <div class="LW_14_CorporateCellular space_details">
              <h1>CORPORATE CELLULAR SPACE PLAN - FLOOR 14</h1>
              <p>23,316  sq ft  (2,166  sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">Open Plan Workstations</span><span class="numeric">103</span> <span class="character">Cellular Offices</span><span class="numeric">44</span> <span class="line"></span> <span class="character last">Total Headcount</span><span class="numeric last">147</span> </div>
            </div>
            <div class="ClientMeeting space_details" >
              <h1>CLIENT MEETING SUITE SPACE PLAN - FLOOR 17(part) and 18</h1>
              <p>13,521 sq ft  (1,256 sq m)</p>
              <span class="down_arrow"></span> <span class="occupancy">View Occupancy Rates</span>
              <div class="space_menu"> <span class="character">6 Seat Meeting Room</span><span class="numeric">6 Seats</span> <span class="character">10 Seat Meeting Room</span><span class="numeric">40 Seats</span> <span class="character">12 Seat Meeting Room </span><span class="numeric">24 Seats</span> <span class="character">16 Seat Meeting Room</span><span class="numeric">32 Seats</span> <span class="character">16 Seat Multi-Function Room</span><span class="numeric">32 Seats</span> <span class="character">18 Seat Multi-Function Room</span><span class="numeric">36 Seats</span> </div>
            </div>
            <span class="london_sp london_sp_big"><img class="london_spaceimg" height="505" width="601" src="../img/125LW_MiniSite/largespaceplan/LW_14_Legal.jpg" alt="" /></span>
            <div class="footer_plans">
              <div class="nottoscale"> <img src="../img/100WoodStreet/nottoscale.jpg" alt="NOT TO SCALE" /> <span>Not to Scale</span> </div><a href="index.php?imgname=LW_03.jpg" class="downloadpdf lpdf_sp">Download Plan</a>
              <div class="london_footerspaceplan footer_tabs"> <a title="UK LEGAL" rel="LW_14_Legal" href="JavaScript:void(0)" class="footer_tab_selected">UK Legal</a> / <a title="FINANCIAL" rel="LW_05_Financial" href="JavaScript:void(0)">Financial</a> / <a title="CORPORATE OPEN" rel="LW_05_Corporate" href="JavaScript:void(0)">Corporate Open</a> / <a title="CORPORATE CELLULAR" rel="LW_14_CorporateCellular" href="JavaScript:void(0)">Corporate Cellular</a> / <a title="CLIENT MEETING SUITE" rel="ClientMeeting" href="JavaScript:void(0)">Client Meeting Suite</a>  </div>
            </div>
          </div>
          </div></div>
          
        </div>
        <div id="london_contact" class="pageContent">
          <div class="contacts">
            <h1>CONTACT</h1>
            <div class="contact_left"> <img id="dtz" src="../img/contact_logo1.jpg" alt="DTZ_logo" />
              <div class="contact_address">
                <h2>JAMES OLIVER</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 3296 2004</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:james.oliver@dtz.com">james.oliver@dtz.com</a></span> </div>
              <div class="contact_address">
                <h2>TIM PLUMBE</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 3296 2005</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:tim.plumbe@dtz.com">tim.plumbe@dtz.com</a></span> </div>
              <div class="contact_address">
                <h2>ALISTAIR BROWN</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 3296 2007</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:alistair.brown@dtz.com">alistair.brown@dtz.com</a></span> </div>
            </div>
            <div class="contact_right"> <img id="cush" src="../img/contact_logo2.jpg" alt="Crushman Workfield" />
              <div class="contact_address">
                <h2>BILL PEACH</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 7152 5373</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:bill.peach@eur.cushwake.com">bill.peach@eur.cushwake.com</a></span> </div>
              <div class="contact_address">
                <h2>JAMES YOUNG</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 7152 5113</span><br />
                <span><span class="char">E</span>&nbsp; <a href="mailto:james.young@eur.cushwake.com">james.young@eur.cushwake.com</a></span> </div>
              <div class="contact_address">
                <h2>REX CONYERS-SILVERTHORN</h2>
                <span><span class="char">T</span>&nbsp; +44 (0)20 7152 5301</span><br />
                <span><span class="char">E</span>&nbsp; <a href="rex.conyers-silverthorn@eur.cushwake.com"> rex.conyers-silverthorn@eur.cushwake.com</a></span> </div>
            </div>
          </div>
        </div>
      </aside>
      <img class="bottom_right_logo omega" src="../img/Moorgate-Logo_1.jpg" alt="20 Moorgate" />
      <hr />
      <div class="clear"></div>
      <footer class="grid_39 alpha">
        <div class="footer_img1"> <a class="dtz_logo" target="_blank" href="http://www.dtz.com"></a> </div>
        <div class="footer_img2"> <a class="cush_logo" target="_blank" href="http://www.cushwake.com"></a> </div>
        <div class="footer_right"> <!--<a href="#"><span>Terms and Conditions</span></a>--> <a href="#"><span>&copy;Wordsearch 2011</span></a> </div>
      </footer>
    </section>
  </div>
</div>
<script defer src="js/plugins.js"></script>
<script defer src="js/script.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			
			$(".various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			
		});
	</script><script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  
</body>
</html>
