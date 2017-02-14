<?php
require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$twitter = new TwitterOAuth('d56ljLTS29JSbYw8F7k5aWYxH', 'GPr1r77T45HogVJiuymPtI3HM6V7xu2zqLpYNAiJCjkSsOV0D0', '828476136128589825-A54msJ3fTakWrMBCFWoGFZdbhGY7mia', 'xYkMIsMW9WBnUKuP87VK1REw3RiN0hVk2hDdxgiyjPQNg');
$twitter->ssl_verifypeer = true;

if(!empty($tweets)) {
    foreach($tweets as $tweet) {
        # Access as an object
        $tweetText = $tweet['text'];
        # Make links active
        $tweetText = preg_replace("#(http://|(www.))(([^s<]{4,68})[^s<]*)#", '<a href="http://$2$3" target="_blank">$1$2$4</a>', $tweetText);
        # Linkify user mentions
        $tweetText = preg_replace("/@(w+)/", '<a href="http://www.twitter.com/$1" target="_blank">@$1</a>', $tweetText);
        # Linkify tags
        $tweetText = preg_replace("/#(w+)/", '<a href="http://search.twitter.com/search?q=$1" target="_blank">#$1</a>', $tweetText);
        # Output
        echo $tweetText;
    }
}
# Put this after fetching Tweets
$twitter = '';
# Create the HTML output
if(!empty($tweets)) {
    foreach($tweets as $tweet) {
        $twitter .= '<article>
            <aside class="avatar">
                <a href="http://twitter.com/'.$tweet['from_user'].'" target="_blank">
                    <img alt="'.$tweet['from_user'].'" src="'.$tweet['user']['profile_image_url'].'" />
                </a>
            </aside>
            <p>'.$tweet['created_at'].'</p>
            <p>'.$tweet['text'].'</p>
        </article>';
    }
}

?>
