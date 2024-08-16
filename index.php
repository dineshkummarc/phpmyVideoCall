<?php
//index.php : embeds app

include_once('settings.php');

//access existing room or create a new one as performer
//all IDs generated randomly for demonstrative purposes; on integrations should be from database

$roomID = intval($_GET['r'] ?? 0);

if (!$roomID)
{
$roomID = rand(9000, 9999);
$isPerformer = 1;
$userID = 10000 + $roomID;
}
else
{
$userID = $roomID;
$isPerformer = 0;
}

$sessionID = $userID;
$sessionKey = $userID;

//setcookie('userID', $userID);


//embed the app: all integrations should contain this part
$dataCode = "window.VideoWhisper = {userID: $userID, sessionID: $sessionID, sessionKey: '$sessionKey', roomID: $roomID, performer: $isPerformer, serverURL: '" . VW_H5V_CALL . "', modeVersion: ''}";

$bodyCode = <<<HTMLCODE
<!--VideoWhisper.com - HTML5 Videochat web app - uid:$userID p:$isPerformer s:$sessionID-->
<noscript>You need to enable JavaScript to run this app.</noscript>
<div style="display:block;min-height:600px;background-color:#eee;position:relative;z-index:102!important;"><div style="display:block;width:100%; height:100%; position:absolute;z-index:102!important;" id="videowhisperVideochat"></div></div>
<script>$dataCode;</script>
HTMLCODE;

//app requires semantic ui
$headCode = '<link href="//cdn.jsdelivr.net/npm/fomantic-ui@2.8.5/dist/semantic.min.css" rel="stylesheet" type="text/css">';

//app css & js
$CSSfiles = scandir(dirname(  __FILE__ ) . '/static/css/');
foreach($CSSfiles as $filename)
	if (strpos($filename,'.css')&&!strpos($filename,'.css.map'))
		$headCode .= '<link href="' . VW_H5V_URL . 'static/css/' . $filename . '" rel="stylesheet" type="text/css">';

$JSfiles = scandir(dirname(  __FILE__ ) . '/static/js/');
foreach ($JSfiles as $filename)
	if ( strpos($filename,'.js') && !strpos($filename,'.js.map'))
		$bodyCode .= '<script src="' . VW_H5V_URL . 'static/js/' . $filename. '" type="text/javascript"></script>';


//room link
$roomURL = $_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0] . '?r=' . $roomID;
if (!isset($_GET['r']))
{
$bodyCode .= '<div class="ui segment"><h4 class="ui header">Invite URL</h4>Invite the other person (client) with this call room URL:<br>' . $roomURL ;
$bodyCode .= '<br><a class="ui button" href="' . $roomURL . '" target="_answer"><i class="phone icon"></i> Answer </a> - Use a different device or browser to answer! Camera works only from 1 tab in same browser.';
$bodyCode .= '</div>';
}
?>
<head>
<?php echo $headCode ?>
</head>
<body>
<?php echo $bodyCode ?>
<div class="ui segment"><h4 class="ui header"> VideoCall 2 Way - HTML5 Videochat - Standalone PHP </h4>This setup implements a 2 way video call room and text chat. This is a simple embedding preview edition, with simple scripts to embed app and showcase few features.
<br> + Official Live Demos for 2 Way Videocall / HTML5 Videochat : <a href="https://demo.videowhisper.com/videocall-html5-videochat-php/">VideoCall on WowzaSE</a> | <a href="https://demo.videowhisper.com/p2p-html5-videocall/">P2P Video Call on VideoWhisper WebRTC</a>
<br> + Download: <a href="https://github.com/videowhisper/VideoCall-HTML5-Videochat-PHP">GitHub: VideoCall HTML5 Videochat PHP </a>
<br> + All Plain PHP Demos: <a href="https://demo.videowhisper.com/p2p-html5-videocall/">P2P Video Call</a> | <a href="https://demo.videowhisper.com/videocall-html5-videochat-php/">Video Call on Wowza SE</a> | <a href="https://demo.videowhisper.com/html5-videochat-php/">Live Streaming on Wowza SE</a> | <a href="https://demo.videowhisper.com/vws-html5-livestreaming/">Live Streaming on VideoWhisper WebRTC</a>  | <a href="https://demo.videowhisper.com/cam-recorder-html5-video-audio/">Cam/Mic Recorder</a>
<br> + Server GitHub: <a href="https://github.com/videowhisper/videowhisper-webrtc">VideoWhisper WebRTC signaling server</a> (NodeJS, supports using STUN/TURN serverlike CoTURN)
<br> + For testing, get a Free plan from <a href="https://webrtchost.com/hosting-plans/#WebRTC-Only">WebRTC Host: P2P</a>.
<br> + By default application starts in demo mode, for free testing with low resources by site visitors.
<br> + Technical support & turnkey site plans: <a href="https://consult.videowhisper.com">Consult VideoWhisper</a>
<br> + Turnkey Cam Site Solution as WP plugins: <a href="https://paidvideochat.com/html5-videochat/">Turnkey HTML5 Videochat Site</a>.
</div>

<?php
	include_once('clean_older.php')
?>
</body>