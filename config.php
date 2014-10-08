<?php
class redditConfig{
    //standard, oauth token fetch, and api request endpoints
    static $ENDPOINT_STANDARD = 'http://www.reddit.com';
    static $ENDPOINT_OAUTH = 'https://oauth.reddit.com';
    static $ENDPOINT_OAUTH_AUTHORIZE = 'https://ssl.reddit.com/api/v1/authorize';
    static $ENDPOINT_OAUTH_TOKEN = 'https://ssl.reddit.com/api/v1/access_token';
    static $ENDPOINT_OAUTH_REDIRECT = 'http://mirror-sodabit.rhcloud.com/';
    
    //access token configuration from https://ssl.reddit.com/prefs/apps
    static $CLIENT_ID = 'nl2CEhe3WDE1vg';
    static $CLIENT_SECRET = '3510aj_YQNSWNricdjtwtgBwjJI';
    
    //access token request scopes
    //full list at http://www.reddit.com/dev/api/oauth
    static $SCOPES = 'read';
}
?>
