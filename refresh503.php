<?php
function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';

    return 'Other';
}

$browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);
if($browser != "Other") {
	//This is a real browser call
	echo '<script type="text/javascript">location.reload(true);</script>';
}
//Otherwise this is an API call and the 503 error should not be handled (let's get it through...)