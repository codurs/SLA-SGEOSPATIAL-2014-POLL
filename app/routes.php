<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    $data = array();
    $pageLiked = false;
    $hasVoted = false;

    if (Auth::check()) {
        $data = Auth::user();
        $hasVoted = \Vote::where('user_id', $data->id)->count() > 0;
        $facebook = new Facebook(Config::get('facebook'));

        $result = $facebook->api(array(
            "method"    => "fql.query",
            "query"     => "SELECT uid FROM page_fan WHERE uid=" . $facebook->getUser() . " AND page_id=" . Config::get('facebook')['oneMapId']));
        if(count($result)){
            $pageLiked = true;
        }
    } 
     return View::make('user', array('data' => $data, 'pageLiked' => $pageLiked, 'poll' => Poll::find(1), 'hasVoted' => $hasVoted));
});


Route::post('vote/{id}', function($id)
{
    EasyPoll::voteForOption($id);
});


Route::get('login/fb', function () {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email, publish_actions',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});

Route::get('login/fb/callback', function () {
    $code = Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();

    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

    $accessToken = $facebook->getAccessToken();

    $me = $facebook->api('/me');

    $profile = Profile::whereUid($uid)->first();

    if (empty($profile)) {
        $user = new User;
        $user->name = $me['first_name'] . ' ' . $me['last_name'];
        $user->email = $me['email'];
        $user->photo = 'https://graph.facebook.com/' . $me['id'] . '/picture?type=large';

        $user->save();

        $profile = new Profile();
        $profile->uid = $uid;
        $profile->username = $me['id'];
        $profile = $user->profiles()->save($profile);
    }
    $profile->access_token = $accessToken;
    $profile->save();

    $user = $profile->user;

    Auth::login($user);

    return Redirect::to('/')->with('message', 'Logged in with Facebook');
});


Route::get('logout', function () {
    Auth::logout();
    return Redirect::to('/');
});