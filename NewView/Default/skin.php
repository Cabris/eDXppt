<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<HEAD>
		<title>Default</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!--MVA_SCRIPT-->
		<script src="../style/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
		<script src="../style/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="../js/author.js"></script>
		<link rel="stylesheet" type="text/css" href="../style/jquery-ui-1.10.3.custom/css/ui-darkness/jquery-ui-1.10.3.custom.css">
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</HEAD>
	<BODY LEFTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">
		<table width="800" height="600" border="0" cellpadding="0" cellspacing="0" background="Skin_Img/basic_green.jpg">
			<tr>
				<td width="16" rowspan="4">&nbsp;</td>
				<td width="154" height="102">&nbsp;</td>
				<td width="31" rowspan="4">&nbsp;</td>
				<td width="572" rowspan="3" valign="middle">
				<div align="center" id="player2">
					<!--MVA_PPT-->
				</div></td>
				<td width="27" rowspan="4">&nbsp;</td>
			</tr>
			<tr>
				<td width="154" height="130" valign="middle">
				<div align="center" id="player">
					<!--MVA_VIDEO-->
				</div></td>
			</tr>
			<tr>
				<td height="225">&nbsp; </td>
			</tr>
			<tr>
				<td width="154">&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<div id="MVA_TIME" name="MVA_TIME" style="position:absolute; width:152px; height:23px; z-index:7; left: 19px; top: 247px;"></div>
		<div class="button" id="Play" style="position:absolute; width:50px; height:23px; z-index:1; left: 18px; top: 292px;"><img src="Skin_Img/btn_play.jpg" name="MVA_BTN_PLAY" width="50" height="23" id="MVA_BTN_PLAY">
		</div>
		<div class="button" id="Pause" style="position:absolute; width:50px; height:23px; z-index:2; left: 69px; top: 292px;" ><img src="Skin_Img/btn_pause.jpg" name="MVA_BTN_PAUSE" width="50" height="23" id="MVA_BTN_PAUSE">
		</div>
		<div class="button" id="Stop" style="position:absolute; width:49px; height:23px; z-index:3; left: 120px; top: 292px;" ><img src="Skin_Img/btn_stop.jpg" name="MVA_BTN_STOP" width="49" height="23" id="MVA_BTN_STOP">
		</div>
		<div class="button" id="Previous" style="position:absolute; width:59px; height:26px; z-index:4; left: 36px; top: 326px;"><img src="Skin_Img/btn_previous.jpg" name="MVA_BTN_PREVIOUS" width="59" height="26" id="MVA_BTN_PREVIOUS">
		</div>
		<div class="button" id="Next" style="position:absolute; width:58px; height:26px; z-index:5; left: 95px; top: 326px;"><img src="Skin_Img/btn_next.jpg" name="MVA_BTN_NEXT" width="58" height="26" id="MVA_BTN_NEXT">
		</div>

		<div id="AdditionalButton" style="left: 15px;top: 400px;">
			<input type="button" value="Tag" onclick="javascript:newLink()">
			<button type="button" onclick="javascript:saveAll()">
				Save
			</button>
		</div>

		<div id="MVA_PPT_SUBIMAGE" name="MVA_PPT_SUBIMAGE" style="width: 700px;height: 125px;left: 53px;top: 476px;"></div>
	</BODY>
</HTML>
