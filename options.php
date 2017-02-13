<?php

	$yt_channel_name = "yt_channel";
	$yt_api_name = "yt_apikey";
	$yt_status1_name = "yt_status1";
	$yt_status2_name = "yt_status2";
	$yt_player_width = "yt_width";
	$yt_player_height = "yt_height";
	$yt_player_style = "yt_style";
 
	if(isset($_POST["submit"])){ 
    	$yt_channel_show = $_POST[$yt_channel_name];
    	update_option($yt_channel_name, $yt_channel_show);
		$yt_apikey_show = $_POST[$yt_api_name];
    	update_option($yt_api_name, $yt_apikey_show);
		$yt_status1_show = $_POST[$yt_status1_name];
    	update_option($yt_status1_name, $yt_status1_show);
		$yt_status2_show = $_POST[$yt_status2_name];
    	update_option($yt_status2_name, $yt_status2_show);
		$yt_width_show = $_POST[$yt_player_width];
    	update_option($yt_player_width, $yt_width_show);
		$yt_height_show = $_POST[$yt_player_height];
    	update_option($yt_player_height, $yt_height_show);
		$yt_style_show = $_POST[$yt_player_style];
    	update_option($yt_player_style, $yt_style_show);
	 
    echo '<div id="message" class="updated fade"><p>Options Updates</p></div>';
}
	else{
    	$yt_channel_show = get_option($yt_channel_name);
		$yt_apikey_show = get_option($yt_api_name);
		$yt_status1_show = get_option($yt_status1_name);
		$yt_status2_show = get_option($yt_status2_name);
		$yt_width_show = get_option($yt_player_width);
		$yt_height_show = get_option($yt_player_height);
		$yt_style_show = get_option($yt_player_style);
}

?>

	<h2>YouTube Live Stream Auto Embed Free</h2>
	<div class="ytl-form-container">
	<form action="#" method="post">
    <fieldset>
  <div class="ytl-help-accordion">
    <label for="ytl-help-tm" class="accordionitem"><h4>YouTube API Key <span class="ytl-help-arrow">&raquo;</span></h4></label>
    <input type="checkbox" id="ytl-help-tm"/>
    <p class="ytl-help-hiddentext">
    <br /><br />
    <br />
<strong>Step 1 -</strong> Go to the <a href="https://console.developers.google.com/project" target="_blank">Google Developers Console</a> and sign in with your Google account, or <a href="https://accounts.google.com/SignUp" target="_blank">create a new one</a>.
<br /><br />
<strong>Step 2 -</strong> Press the "Create Project" button.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/1-google-console-new-project-step-1.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 3 -</strong> On the New Project dialog, enter a project name in the "Project name" field and click the "Create" button (leave the Project ID as it's default).
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/2-google-console-new-project-step-2.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 4 -</strong> Once your project is created, simply select it by clicking the name you chose for it.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/3-google-console-new-project-step-3.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 5 -</strong>From the left menu go to APIs & auth and then APIs. Once you reach the APIs page, filter by searching YouTube and select YouTube Data API v3 from the APIs presented by the console.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/4-google-console-enable-youtube-api-step-1.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 6 -</strong> Once inside the API administration screen, click Enable API button.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/5-google-console-enable-youtube-api-step-2.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 7 -</strong> Having YouTube Data API enabled, you can go on and generate the API key. To do this, from the left menu go to APIs & auth and select Credentials.<br />
Once you reach the credentials page, under Public API access click Create new Key button.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/6-google-console-api-credentials-step-1.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 8 -</strong> After clicking Create new Key button the interface will open a window having several options. From the available options, choose 'Server key'.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/7-google-console-api-credentials-step-2.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 9 -</strong> Next, you will have the option to enter a list of IP addresses that are allowed to query the APIs using this server key.<br />
Leave this field empty and click Create button.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/8-google-console-api-credentials-step-3.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Step 10 -</strong> Last step in the process is to copy the API key generated by the console and enter it into the plugin’s Settings page.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/9-google-console-api-credentials-step-4.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Note:</strong> It can take some time for your API access to become fully enabled, so we recommend waiting about 10 minutes before testing.
    </p>
</div>
  <div class="ytl-help-accordion">
    <label for="ytl-help-to" class="accordionitem"><h4>YouTube Channel ID <span class="ytl-help-arrow">&raquo;</span></h4></label>
    <input type="checkbox" id="ytl-help-to"/>
    <p class="ytl-help-hiddentext">
        <br /><br />
    &nbsp;
    <br />
<strong>Method 1 -</strong> Go to your <a href="https://www.youtube.com/account_advanced" target="_blank">YouTube Account Overview</a>.
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/1-youtube-channel-id-step-1.jpg', dirname(__FILE__) ) . '" > ';
?>
<br /><br />
<strong>Medhod 2 -</strong> Visit a Channels home page and look in the URL bar.
<br /><br />   
<?php
echo '<img src="' . plugins_url( 'admin/img/2-youtube-channel-id-step-2.jpg', dirname(__FILE__) ) . '" > ';
?>    
    </p>
</div>
  <div class="ytl-help-accordion">
    <label for="ytl-help-tn" class="accordionitem"><h4>YouTube Playlist ID <span class="ytl-help-arrow">&raquo;</span></h4></label>
    <input type="checkbox" id="ytl-help-tn"/>
    <p class="ytl-help-hiddentext">
     <br /><br />
    &nbsp;
    <br />
    You have the option to display a 'Selected Playlist' or 'Latest Upload' to a selected Channel. This gives you more control over what is shown when you are not streaming live.
    <br /><br />
<strong>Selected Playlist -</strong> Go to a Channels Playlist page and look in the URL bar. Example: PLG8IrydigQfcOZJVitbBEAHtJL0T7I7_H
<br /><br />
<?php
echo '<img src="' . plugins_url( 'admin/img/1-youtube-playlist-id-step-1.jpg', dirname(__FILE__) ) . '" > ';
?>    
<br /><br />
    </p>
</div>
    </fieldset>
	<p class="ytl-legend"><strong>Note:</strong> Get your YouTube API Key from <a href="https://console.developers.google.com/project" target="_blank">Google Developers Console</a> and Channel ID from <a href="https://www.youtube.com/account_advanced" target="_blank">YouTube Account Overview</a></p>
	<fieldset>
		<legend>YouTube Live Stream</legend>
			<div><label for="<?php echo $yt_api_name; ?>">Youtube API Key: <em>*</em></label> <input type="text" name="<?php echo $yt_api_name; ?>" value="<?php echo $yt_apikey_show; ?>" size="50" placeholder="AIzaSyByOJICV_z68_oEYrOnrpAXalLstIvQ3sA" required="required" /></div>
			<div><label for="<?php echo $yt_channel_name; ?>">Youtube Channel ID: <em>*</em></label> <input type="text" name="<?php echo $yt_channel_name; ?>" value="<?php echo $yt_channel_show; ?>" size="50" placeholder="UCoMdktPbSTixAyNGwb-UYkQ" required="required" /></div>   
	</fieldset>
        <p class="ytl-legend"><strong>Note:</strong> Find your Playlist ID www.youtube.com/playlist?list=<u>YOUR-PLAYLIST-ID</u></p>
	<fieldset>
		<legend>YouTube Video (<a href="http://www.wordpressyoutubelivestream.com/" target="_blank">Pro Version</a>)</legend>
        	<div><label for="channelid">Youtube Channel ID: </label> <input type="text" name="channelid" size="50" placeholder="UCoMdktPbSTixAyNGwb-UYkQ" disabled /></div>
			<div><label for="playlistid">Youtube Playlist ID: </label> <input type="text" name="playlistid" size="50" placeholder="PLG8IrydigQfcOZJVitbBEAHtJL0T7I7_H" disabled /></div>
            
            <div class="controlset">
				<span class="label">Show:</span>
				<input name="switch" id="yt-switch-on" value="embedCodeUploads" type="radio" checked="checked" disabled /> <label for="yt-switch-on"><strike>Latest Video</strike></label>
				<input name="switch" id="yt-switch-off" value="embedCodePlaylist" type="radio" disabled  /> <label for="yt-switch-off"><strike>Playlist</strike></label>
			</div>    
	</fieldset>
	<fieldset>
		<legend>YouTube Player Settings</legend>
			<div><label for="<?php echo $yt_player_width; ?>">Width </label> <input type="text" name="<?php echo $yt_player_width; ?>" value="<?php echo $yt_width_show; ?>" size="4" maxlength="4" placeholder="640"  />  px</div>
			<div><label for="<?php echo $yt_player_height; ?>">Height </label> <input type="text" name="<?php echo $yt_player_height; ?>" value="<?php echo $yt_height_show; ?>" size="4" maxlength="4" placeholder="360"  /> px</div>
			<div class="controlset">
				<span class="label">Player Align:</span>
				<input name="<?php echo $yt_player_style; ?>" id="yt-align-default" value="yt-video-default" type="radio" checked="checked" <?php if($yt_style_show == 'yt-video-default') echo 'checked="checked"'; ?>  /> <label for="yt-align-default">Left &nbsp;</label>
				<input name="<?php echo $yt_player_style; ?>" id="yt-align-center" value="yt-video-align" type="radio" <?php if($yt_style_show == 'yt-video-align') echo 'checked="checked"'; ?>  /> <label for="yt-align-center">Center &nbsp;</label>
				<input name="<?php echo $yt_player_style; ?>" id="yt-responsive" value="yt-video-container" type="radio" <?php if($yt_style_show == 'yt-video-container') echo 'checked="checked"'; ?>  /> <label for="yt-responsive">Responsive (full width)</label>
			</div>
            <div class="controlset">
				<span class="label">Progress Bar:</span>
				<input name="color" id="red" value="red" type="radio" checked="checked" disabled /> <label for="red"><strike>Red</strike> &nbsp;</label>
				<input name="color" id="white" value="white" type="radio" disabled /> <label for="white"><strike>White</strike></label>
			</div> 
	</fieldset>
	<fieldset>
		<legend>Live Stream Player Options (<a href="http://www.wordpressyoutubelivestream.com/" target="_blank">Pro Version</a>)</legend>
			<div class="controlset">
				<span class="label">Video Title Bar:</span>
				<input name="title_live" id="yt-title-on-live" value="1" type="radio" checked="checked" disabled /> <label for="yt-title-on-live"><strike>On</strike></label>
				<input name="title_live" id="yt-title-off-live" value="0" type="radio" disabled /> <label for="yt-title-off-live"><strike>Off</strike></label>
			</div>		
            <div class="controlset">
				<span class="label">Video Controls:</span>
				<input name="controls_live" id="yton-live" value="1" type="radio" checked="checked" disabled /> <label for="yton-live"><strike>On</strike></label>
				<input name="controls_live" id="ytoff-live" value="0" type="radio" disabled /> <label for="ytoff-live"><strike>Off</strike></label>
			</div>	
            <div class="controlset">
				<span class="label">Autoplay Live Video:</span>
				<input name="player_autogo" id="auto-ons" value="1" type="radio" checked="checked" disabled /> <label for="auto-ons"><strike>On</strike></label>
				<input name="player_autogo" id="auto-offs" value="0" type="radio" disabled /> <label for="auto-offs"><strike>Off</strike></label> (Recommended Autoplay: On)
			</div>
            <div class="controlset">
				<span class="label">Autoplay Muted:</span>
				<input name="player_vol" id="vol-on" value="ytmuteplayerlive" type="radio" checked="checked" disabled /> <label for="vol-on"><strike>On</strike></label>
				<input name="player_vol" id="vol-off" value="ytmuteplayerliveoff" type="radio" disabled /> <label for="vol-off"><strike>Off</strike></label>
			</div>
	</fieldset>
	<fieldset>
		<legend>Video Player Options (<a href="http://www.wordpressyoutubelivestream.com/" target="_blank">Pro Version</a>)</legend>
			<div class="controlset">
				<span class="label">Video Title Bar:</span>
				<input name="player_title" id="yt-title-on" value="1" type="radio" checked="checked" disabled /> <label for="yt-title-on"><strike>On</strike></label>
				<input name="player_title" id="yt-title-off" value="0" type="radio" disabled /> <label for="yt-title-off"><strike>Off</strike></label>
			</div>
            <div class="controlset">
				<span class="label">Video Controls:</span>
				<input name="player_controls" id="yton" value="1" type="radio" checked="checked" disabled /> <label for="yton"><strike>On</strike></label>
				<input name="player_controls" id="ytoff" value="0" type="radio" disabled /> <label for="ytoff">Off</strike></label>
			</div>
            <div class="controlset">
				<span class="label">Autoplay Video:</span>
				<input name="player_autostart" id="auto-on" value="1" type="radio" checked="checked" disabled /> <label for="auto-on"><strike>On</strike></label>
				<input name="player_autostart" id="auto-off" value="0" type="radio" disabled /> <label for="auto-off"><strike>Off</strike></label> (Recommended Autoplay: Off)
			</div>
            <div class="controlset">
				<span class="label">Autoplay Muted:</span>
				<input name="player_muted" id="muted-on" value="ytmuteplayer" type="radio" checked="checked" disabled /> <label for="muted-on"><strike>On</strike></label>
				<input name="player_muted" id="muted-off" value="ytmuteplayeroff" type="radio" disabled /> <label for="muted-off"><strike>Off</strike></label>
			</div> 
	</fieldset>  	
	<div class="buttonrow">
		<input type="submit" value="Save" class="button" name="submit" />
	</div>
         <fieldset>
		<legend>How to display the Youtube Live Player</legend>
             <div class="controlset">
                 <p>Copy & Paste this shortcode into a page or post: [youtube-live]</p>
			</div>
	</fieldset> 
    		<br />
        <fieldset> 
            <div class="ytl-help-accordion">
    			<label for="ytl-help-tj" class="accordionitem"><h4>YouTube Live Status <span class="ytl-help-arrow">&raquo;</span></h4></label>
    			<input type="checkbox" id="ytl-help-tj"/>
    		<p class="ytl-help-hiddentext">
     		<br />
    		&nbsp;
    		<br />
   				 The YouTube Live Status shortcode will automatically display the content you enter into the text boxes below. You can use full HTML including Shortcodes for other plugins. The content will automatically switch when streaming live and not live. Embed the content into a page or post using the shortcode: [youtube-live-status]
    		<br /><br />
				<strong>Example:</strong> We are currently streaming live! <?php echo '<img src="' . plugins_url( 'assets/images/status-live.gif', dirname(__FILE__) ) . '" > '; ?> 
			<br />
				<strong>Example:</strong> Sorry we are not currently streaming live <?php echo '<img src="' . plugins_url( 'assets/images/status-not-live.png', dirname(__FILE__) ) . '" > '; ?> 
   			<br />
    		</p>
			</div>
    </fieldset>                
    <fieldset>
    	<legend>Automatically Display Content (<a href="http://www.wordpressyoutubelivestream.com/" target="_blank">Pro Version</a>)</legend>
			<div class="ytl-text">
        		<p>Show the content below when streaming live:</p>
       		 	<br />
    			<?php
					$mytext_var= stripslashes($yt_status1_show); 
					wp_editor($mytext_var,"$yt_status1_name", array('textarea_rows'=>5, 'editor_class'=>'mytext_class'));
				?>
			</div>
        	<div class="ytl-text">
        		<p>Show the content below when <u>NOT</u> streaming live:</p>
        		<br />
        		<?php
					$mytext_var= stripslashes($yt_status2_show); 
					wp_editor($mytext_var,"$yt_status2_name", array('textarea_rows'=>5, 'editor_class'=>'mytext_class'));
				?>
			</div>
    </fieldset>
    		<div class="buttonrow">
				<input type="submit" value="Save" class="button" name="submit" />
			</div>
    <fieldset>
		<legend>How to display the Youtube Live Status</legend>
             <div class="controlset">
                 <p>Copy & Paste this shortcode into a page or post to display the status: [youtube-live-status]</p>
			</div>
	</fieldset> 
    <fieldset>
		<legend>Known Issues:</legend>
             <div class="controlset">
                 <p>The free version currently uses JavaScript to auto embed the YouTube Live Player, which is great and works perfectly. But it may not show if your website loads other JavaScript files that cause a conflict with the embed code, people also have the ability to disable javascript from running in their web browsers, we have recoded the Pro Version in PHP solving this problem.</p>
			</div>
	</fieldset>
     <fieldset>
		<legend>Why get the pro version?</legend>
             <div class="controlset">
                 <p>Need a featurre added? <a href="http://www.wordpressyoutubelivestream.com/contact/" target="_blank">Just ask</a>. The Pro Version automatically embeds any YouTube Live Stream then switches automatically and embeds the latest video or selected playlist when the Live Stream stops [youtube-live]. You can also display HTML content that will also automatically change when it detects a live stream using a seperate shortcode [youtube-live-status].
                 <br /><br />
                 <a href="http://www.wordpressyoutubelivestream.com/" target="_blank">Click Here To Go Pro</a>
                 
                 </p>
			</div>
	</fieldset> 
    </form>
	</div>
    
	<p id="copyright">Created by SykeMedia. YouTube Live Stream Auto Embed. <a href="http://www.wordpressyoutubelivestream.com/contact/" target="_blank">Plugin Support</a></p>
