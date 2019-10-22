<input type="hidden" id="profile" value="{{url('/')}}/profile"><style>
.signin .g-signin2
{
    margin-top: 9px;
    width: 100%;
}
.abcRioButtonIcon
{
    padding: 13px !important;
}
.abcRioButtonBlue {
    height: 46px !important;
    width: 100% !important;
}
</style>
<script type="text/javascript">
function liAuth(){
   IN.User.authorize(function(){
       callback();
   });
}
var accessToken11 = null;
var authenticateInstagram = function(instagramClientId, instagramRedirectUri, callback) {
  //alert(instagramClientId);
  //alert(instagramRedirectUri);
  //alert(callback);
// Pop-up window size, change if you want
var popupWidth = 700,
popupHeight = 500,
popupLeft = (window.screen.width - popupWidth) / 2,
popupTop = (window.screen.height - popupHeight) / 2;
// Url needs to point to instagram_auth.php
var popup = window.open('', '', 'width='+popupWidth+',height='+popupHeight+',left='+popupLeft+',top='+popupTop+'');
//popup.onload = function() {
// Open authorize url in pop-up
//alert(window.location.hash.length);
if(window.location.hash.length == 0) {
popup.open('https://instagram.com/oauth/authorize/?client_id='+instagramClientId+'&redirect_uri='+instagramRedirectUri+'&scope=basic+likes+comments+relationships+follower_list&response_type=token', '_self');
}
// An interval runs to get the access token from the pop-up
var interval = setInterval(function() {
 
try { 
// Check if hash exists
if(popup.location.hash.length) {
    //popup.close();
// Hash found, that includes the access token
clearInterval(interval);
accessToken = popup.location.hash.slice(14); //slice #access_token= from string
//alert(accessToken);
popup.close();
if(callback != undefined && typeof callback == 'function'){
callback();
}

}

}
catch(evt) {
// Permission denied
}
}, 100);
//};
};

function instagramLogin(){
    //alert();
    authenticateInstagram(
        '13530c1e0eb640dea839b8b0069872cc',//client_id
        'https://leadovate.com/staging/',// Redirect url
        login_callback //optional - a callback function
    );
    return false;
}
  
function login_callback(){
    
   /// alert("You are successfully logged in! Access Token: "+accessToken);
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        url: "https://api.instagram.com/v1/users/self/?access_token="+accessToken,
        success: function(response){
            //alert('hh');
            // Change button and show status
            //$('.instagramLoginBtn').attr('onclick','instagramLogout()');
            //$('.btn-text').text('Logout from Instagram');
            //$('#status').text('Thanks for logging in, ' + response.data.username + '!');
           
         response.token = accessToken11;
        saveUserData(response);
        }
      });
}
// Authenticate instagram


// Save user data to the database
function saveUserData(userData){
   // console.log(userData);
//alert(userData);
    var insta_id = JSON.stringify(userData.data.id);
    var insta_username = JSON.stringify(userData.data.username);
    var follwers = JSON.stringify(userData.data.counts);
    var token= JSON.stringify(userData.token);   
    var follwer = JSON.parse(follwers);
    var followers = follwer.followed_by;
   //  alert(insta_id);
   //  alert(insta_username);
     //alert(insta_id);
     
   $.ajax({
headers: {
'X-CSRF-TOKEN': $('input[name="_token"]').val()
},
            type:'POST',
            url:'{{url("user/instalogin")}}',
            data: {insta_id:insta_id,username:insta_username},
            success:function(hack)
            {   
              
   hack=JSON.parse(hack);        

if(hack.erro==101)
{
$('.as1').html(hack.message).show(); 
var next=hack.url;
setTimeout(function(){ $('.as1').hide();

     window.location.href= next; 
    
    
}, 2000);

}
else
{ 
$('.dg1').html(hack.message).show(); 
setTimeout(function(){ $('.dg1').hide(); }, 5000);
}

              var obj = $.parseJSON(hack);
                    
              if(obj.vac_check == '3'){
                            $('#vacation_checkbox').prop('disabled', false);
                            $('#vacation_checkbox').prop('checked', false);
                            //$('#instagramhypeModal').modal('hide');
                            $('#instasuccessMessage').html('Instagram linked successfully.');
                            $("#instasuccessMessage").show();
                            $('#wrapper').append(obj.html);
                            $('.instagram_connect').css('display', 'none');
                             setTimeout(function() {
                            $("#instasuccessMessage").hide('blind', {}, 500);
                            
                            //pinterestajax(value);
                        
                             }, 2000);

              }else if(obj.vac_check == '1'){
                       $('#instasuccessMessage').html('Instagram linked successfully.But Kyndex data not fetched successfully because your followers are not more than 1000.');
                       
                         $("#instasuccessMessage").show();
                         $('#wrapper').append(obj.html);
                         $('.instagram_connect').css('display', 'none');
                         setTimeout(function() {
                            $("#instasuccessMessage").hide('blind', {}, 500);
                            
                            //pinterestajax(value);
                        
                        }, 2000);
                
              }else if(obj.vac_check == '4'){
                       $('#instasuccessMessage').html('Instagram linked successfully. We are processing your request, your report will updated in approx 1 hour.');
                       
                         $("#instasuccessMessage").show();
                         $('#wrapper').append(obj.html);
                         $('.instagram_connect').css('display', 'none');
                         setTimeout(function() {
                            $("#instasuccessMessage").hide('blind', {}, 500);
                            
                            //pinterestajax(value);
                        
                        }, 2000);
                
              }else if(obj.vac_check == '2' || !obj.vac_check){
                        $('#instasuccessMessage').html('Instagram linked successfully.');
                        //$('#instagramhypeModal').modal('hide');
                         $("#instasuccessMessage").show();
                         $('#wrapper').append(obj.html);
                         $('.instagram_connect').css('display', 'none');
                         setTimeout(function() {
                            $("#instasuccessMessage").hide('blind', {}, 500);
                            
                            //pinterestajax(value);
                        
                        }, 2000);
              }
                
            }
        }); 
}
// Display user profile details
function displayUserProfileData(userData){
    $('#userData').html('<p><b>Instagram ID:</b> '+userData.id+'</p><p><b>Name:</b> '+userData.full_name+'</p><p><b>Picture:</b> <img src="'+userData.profile_picture+'"/></p><p><b>Instagram Profile:</b> <a target="_blank" href="https://www.instagram.com/'+userData.username+'">click to view profile</a></p>');
}
// Get user data from session storage
$(document).ready(function(){
    if(typeof(Storage) !== "undefined"){
        var userLoggedIn = sessionStorage.getItem("userLoggedIn");
        if(userLoggedIn == '1'){
            // Get user data from session storage
            var provider = sessionStorage.getItem("provider");
            var userInfo = sessionStorage.getItem("userData");
            var userData = $.parseJSON(userInfo);
            
            // Change button and show status
            $('.instagramLoginBtn').attr('onclick','instagramLogout()');
            $('.btn-text').text('Logout from Instagram');
            $('#status').text('Thanks for logging in, ' + userData.username + '!');
            
            // Display user data
            displayUserProfileData(userData);
        }
    }else{
        console.log("Sorry, your browser does not support Web Storage...");
    }
});
// Logout from instagram
function instagramLogout() {
    // Remove user data from sessionStorage
    sessionStorage.removeItem("userLoggedIn");
    sessionStorage.removeItem("provider");
    sessionStorage.removeItem("userData");
    sessionStorage.clear();
    
    $('.instagramLoginBtn').attr('onclick','instagramLogin()');
    $('.btn-text').text('Login with Instagram');
    $('#status').text('You have successfully logout from Instagram.');
    $('#userData').html('');
}
$("#instasuccessMessage").hide();
</script>


<script>
var access_token='';
  function statusChangeCallback(response) {
      
    console.log('statusChangeCallback');
    access_token = response.authResponse.accessToken;;
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
     /* document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';*/
    }
  }
   window.fbAsyncInit = function() {
    FB.init({
      appId      : '2276479122610429',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v3.2' // use graph api version 2.8 v2.8
    });
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    }); 
  };
 function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=id,name,first_name,last_name,picture,email,permissions', function(response) {
        console.log(response);
        console.log(access_token);
                var picture = response.picture.data.url;
                var data = { fb_id:response.id,first_name:response.first_name,last_name:response.last_name,
                            email:response.email,image:picture}; 
                 var token=$('input[name="_token"]').val();
              
                $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    url:'{{url("user/facebooklogin")}}',
                    type:'post',
                    data: data,
                    dataType:'json',
                    success:function(response2)
                    {
                        console.log(response2);
                        if(response2.erro==101)
                        {
                            $('.as1').html(response2.message).show(); 
                            setTimeout(function(){ $('.as1').hide(); }, 5000);
                            window.location=response2.url;
                            FB.logout(function (response) {
                            window.location=response2.url;
                            });
                        }
                        else
                        { 
                          $('.dg1').html(response2.message).show(); 
                          setTimeout(function(){ $('.dg1').hide(); }, 5000);
                        }
                       
                    }
                });
    });
  }
  
  
  document.getElementById('fbloginbtn').addEventListener('click', function() {
    //do the login
  FB.login(statusChangeCallback);
}, false);
  
  
    
  
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
         googleUser.getBasicProfile().getName();
              console.log(googleUser.getBasicProfile());
              
            var email=  googleUser.getBasicProfile().getEmail();
            var first_name = googleUser.getBasicProfile().ofa;
            var  last_name = googleUser.getBasicProfile().wea;
            var picture=    googleUser.getBasicProfile().getImageUrl();
            var profile = googleUser.getBasicProfile();
              $.ajax({
                   headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    url:'{{url("user/googlelogin")}}',
                    type:'post',
                 data:{g_id:profile.getId(),email:email,image:picture,first_name:first_name,last_name:last_name},dataType:'json',
                  success:function(response)
                  {
                     
                      console.log(response);
                      //alert(response);
                      if(response.erro==101)
                        {
                            $('.as1').html(response.message).show(); 
                            setTimeout(function(){ $('.as1').hide(); }, 5000);
                            var auth2 = gapi.auth2.getAuthInstance();
                            auth2.signOut().then(function () {
                            //console.log('User signed out.');
                            location.href=response.url;
                            //var nextPage = response.url;
                            //location.href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue='+nextPage;
                            });
                            
                         /* $('#successreg').html(response.message).show(); 
                           setTimeout(function(){ $('#successreg').hide(); }, 5000);
                                    var nextPage = '{{url('')}}'+response.redirect;
                            location.href='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue='+nextPage;
                              /*location.href=nextPage; */
                        }
                        else
                        { 
                          $('.dg1').html(response.message).show(); 
                          setTimeout(function(){ $('.dg1').hide(); }, 5000);
                        }
                  }
              });
      };
    </script>
    
    <script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: "86ykoyctpdkqkm"
    authorize: false
  onLoad: onLinkedInLoad
</script>
 <script type="text/javascript">

 
  // Setup an event listener to make an API call once auth is complete
  function onLinkedInLoad() {
   IN.Event.on(IN, "auth", getProfileData);
  }

  // Logout user
  // function logout(){
  //   IN.User.logout(onLogout);
  // }

  // function onLogout(){
  //   console.log('Logout successfully');
  // }

  // Use the API call wrapper to request the member's basic profile data
  // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }
    
    // Destroy the session of linkedin
    function logout(){
        IN.User.logout(removeProfileData);
    }
    
    // Remove profile data from page
    function removeProfileData(){
        document.getElementById('profileData').remove();
    }
   function displayProfileData(data){
        var user = data.values[0];
        document.getElementById("picture").innerHTML = '<img src="'+user.pictureUrl+'" />';
        document.getElementById("name").innerHTML = user.firstName+' '+user.lastName;
        document.getElementById("intro").innerHTML = user.headline;
        document.getElementById("email").innerHTML = user.emailAddress;
        document.getElementById("location").innerHTML = user.location.name;
        document.getElementById("link").innerHTML = '<a href="'+user.publicProfileUrl+'" target="_blank">Visit profile</a>';
        document.getElementById('profileData').style.display = 'block';
    }
  function getProfileData() {
 
   IN.API.Profile("me").fields("id","following","first-name", "last-name", "email-address","public-profile-url","num-connections","picture-url").result(function (data) {
       console.log(data);
    
    var userdata = data.values[0];
    var profile = userdata.publicProfileUrl;
    var connections = userdata.numConnections;
    $.ajax({
            type:'POST',
            url:'cccc',
            data: {profile:profile,connections:connections},
            success:function(hack)
            {
                

                     $('#instasuccessMessage').html('LinkedIn linked successfully.');
                     $("#instasuccessMessage").show();
                     $('#wrapper').append(hack);
                      $('.linkedin_connect').css('display', 'none');
                      setTimeout(function() {
                            $("#instasuccessMessage").hide('blind', {}, 500);
                            //location.reload();
                        }, 2000);
                
            }
        }); 

  }).error(function (data) {
    console.log(data);
  });
 }
 function liAuth(){
   IN.User.authorize(function(){
       callback();
   });
 }


</script>

<?php
function post_curl2($url,$param="")
{
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
if($param!="")
curl_setopt($ch,CURLOPT_POSTFIELDS,$param);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

return $result;
}
function post_curl($url,$param="")
{
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
if($param!="")
curl_setopt($ch,CURLOPT_POSTFIELDS,$param);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);

return $result;
}
if(isset($_GET['code'])) // get code after authorization
{
   // echo $_GET['code'];
    $utl=url('/');
    $url = 'https://www.linkedin.com/uas/oauth2/accessToken'; 
    $param = 'grant_type=authorization_code&code='.$_GET['code'].'&redirect_uri='.$utl.'&client_id=86ykoyctpdkqkm&client_secret=qXEKdJ0eUCIGGDZN';
    $return = (json_decode(post_curl($url,$param),true)); // Request for access token
  
     $url = 'https://api.linkedin.com/v2/me/?&oauth2_access_token='.$return['access_token'];
     $User = json_decode(post_curl($url)); // Request user information on received token
     $myArray = json_decode(json_encode($User), true);
     $id=$myArray['id'];
     $last=$myArray['localizedLastName'];
     $first=$myArray['localizedFirstName'];
     $utl=url('/');
     $url2 =$utl.'/user/linked_login'; 
      $param2  = '_token=qYkLKbfETvE7oADOHUoFYIHwbkEr6tP5im4H7NYf&linkedin_id='.$id.'&first_name='.$first.'&last_name='.$last.'';
	  
	  $exist=\App\User::where('linkedin_id',$id)->where('status','!=','0')->first();
	  
	  $data=array('linkedin_id'=>$id,'first_name'=>$first,'last_name'=>$last);
	//$existblock=\App\User::where('linkedin_id',$id)->where('status','0')->first();
	  if(!empty($id))
	  {
		$condition3 = [['linkedin_id','=',$id],['status','!=','2']];
        $d5 = \App\User::getUsermatchdb($condition3);
		
		if(count($d5) > 0)
        {  
		$condition4 = [['linkedin_id','=',$id],['status','!=','0']];
        $d6 = \App\User::getUsermatch($condition4);

		if(count($d6) > 0)
		{
		    	$userdatas = \App\User::getbycondition(array('linkedin_id'=>$id));
			 foreach($userdatas as $u){
                                            $users = $u;
                                            }
			 $userdata = array(
                                            'id'=> $users->id ,
                                            'first_name' => $users->first_name ,
                                            'last_name' => $users->last_name ,
                                            'email' => $users->email ,
                                            );
                                           Session::put('user',$userdata);
                                           Session::put('userid', $users->id);
                                           Session::save(); 
		echo "<script>var next=$('#profile').val();
		$('.as1').html('Registered Successfully..!').show(); 
		setTimeout(function(){ $('.as1').hide();  window.location.href= next;}, 3000);</script>";

	    }else
		{
			
		 echo "<script>
			var next=$('#base_url').val();
			$('.as1').html('Your profile is exists, but your account is inactive!').show(); 
            setTimeout(function(){ $('.as1').hide(); 
			 window.location.href= next; }, 3000);</script>";	
		}
		}else
		{
			
			$insert=\App\User::insertUser($data);
			
			$userdatas = \App\User::getbycondition(array('linkedin_id'=>$id));
			 foreach($userdatas as $u){
                                            $users = $u;
                                            }
			 $userdata = array(
                                            'id'=> $users->id ,
                                            'first_name' => $users->first_name ,
                                            'last_name' => $users->last_name ,
                                            'email' => $users->email ,
                                            );
                                           Session::put('user',$userdata);
                                           Session::put('userid', $users->id);
                                           Session::save(); 
			echo "<script>var next=$('#profile').val();
		$('.as1').html('Registered Successfully..!').show(); 
		setTimeout(function(){ $('.as1').hide();  window.location.href= next;}, 3000);</script>";
		}
			
		
		
		
   
}}

?>

