<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<HEAD>
		<title>Sakura</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!--MVA_SCRIPT-->
		<script src="../style/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
		<script src="../style/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="../js/author.js"></script>
		<link rel="stylesheet" type="text/css" href="../style/jquery-ui-1.10.3.custom/css/ui-darkness/jquery-ui-1.10.3.custom.css">
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</HEAD>
	<BODY LEFTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">
		<table width="800" height="600" border="0" cellpadding="0" cellspacing="0" background="Skin_Img/sakura.jpg">
			<tr>
				<td width="608" height="468" rowspan="3" align="center" valign="middle">
				<div align="center" id="player2">
					<!--MVA_PPT-->
				</div></td>
				<td width="192" height="121">&nbsp;</td>
			</tr>
			<tr>
				<td height="146" align="center" valign="middle">
				<div align="center" id="player">
					<!--MVA_VIDEO-->
				</td>
			</tr>
			<tr>
				<td height="199">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
		</table>
		<div id="MVA_TIME" name="MVA_TIME" style="position:absolute; width:179px; height:23px; z-index:7; left: 615px; top: 283px;"></div>
		<div class="button" id="Play" style="position:absolute; width:59px; height:58px; z-index:1; left: 613px; top: 317px;"><img src="Skin_Img/btn_play.jpg" name="MVA_BTN_PLAY" width="59" height="58" id="MVA_BTN_PLAY">
		</div>
		<div class="button" id="Pause" style="position:absolute; width:60px; height:58px; z-index:2; left: 673px; top: 317px;"><img src="Skin_Img/btn_pause.jpg" name="MVA_BTN_PAUSE" width="60" height="58" id="MVA_BTN_PAUSE">
		</div>
		<div class="button" id="Stop" style="position:absolute; width:59px; height:58px; z-index:3; left: 734px; top: 317px;"><img src="Skin_Img/btn_stop.jpg" name="MVA_BTN_STOP" width="59" height="58" id="MVA_BTN_STOP">
		</div>
		<div class="button" id="Previous" style="position:absolute; width:52px; height:49px; z-index:4; left: 653px; top: 377px;"><img src="Skin_Img/btn_previous.jpg" name="MVA_BTN_PREVIOUS" width="52" height="49" id="MVA_BTN_PREVIOUS">
		</div>
		<div class="button" id="Next" style="position:absolute; width:51px; height:49px; z-index:5; left: 705px; top: 377px;"><img src="Skin_Img/btn_next.jpg" name="MVA_BTN_NEXT" width="51" height="49" id="MVA_BTN_NEXT">
		</div>

		<div id="AdditionalButton">
			<input type="button" value="Tag" onclick="javascript:newLink()">
			<button type="button" onclick="javascript:saveAll()">
				Save
			</button>
		</div>

		<div id="MVA_PPT_SUBIMAGE" name="MVA_PPT_SUBIMAGE" style="width:686px; height:125px; left: 57px; top: 485px;"></div>
	</BODY>
</HTML>
