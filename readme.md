# Project 4 - Roster Maker
+ By: Gerald Derrick
+ Production URL: <https://p4.gaderrick.me>

## Database
Primary tables:
  + `participants`
  + `organizations`
  + `rosters`
  
Pivot table(s):
  + `participant_roster`

## CRUD
*All of the below instructions assume that the user has logged into the application by either registering a new account, 
authenticating with social media credentials (Oauth), or logging in with an email/password. Authentication is enforced 
across all application features and verified before each action.*

__Create__
  + Visit <https://p4.gaderrick.me/participant/create>
  + Fill out form
  + Click *Add Participant*
  + Observe confirmation message
  
__Read__
  + Visit <http://p4.gaderrick.me/books> see a listing of all books
  
__Update__
  + Visit <http://p4.gaderrick.me/books>; choose the Edit button next to one of the books
  + Make some edit to form
  + Click *Save changes*
  + Observe confirmation message
  
__Delete__
  + Visit <http://p4.gaderrick.me/books>; choose the Delete button next to one of the books
  + Confirm deletion
  + Observe confirmation message

## Outside resources
#### Authentication
  + Reviewed documentation at [Let's Encrypt](https://letsencrypt.org/) and implemented SSL using the Let's Encrypt libraries.
  + Laravel authentication [documentation](https://laravel.com/docs/5.6/authentication#authentication-quickstart).
  + Integrated and modified a [Laravel Socialite github project](https://github.com/saqueib/social-auth) to implement social 
  media authentication using this [documentation](http://www.qcode.in/oauth-login-using-facebook-google-twitter-and-github-with-laravel-socialite/).
#### Assets & Data
  + Circle icons for social media links from [here](https://plus.google.com/u/0/+MohdSaquibAnsari) and [here](https://github.com/logos).
  + Downloaded [icons for tables](https://freeiconshop.com/)
  + Downloaded [add user icon](https://icons8.com/)
  + Used the site [www.generatedata.com](https://www.generatedata.com/) to create data sets for db seeders
  + List of state's and their abbreviations from [pastebin.com](https://pastebin.com/eJvwuHqC)
#### PHP and HTML Help
  + Looked up how to [pass a variable parameter](https://stackoverflow.com/questions/34556484/laravel-5-2-named-route-usage-with-variable-parameter) 
  to a named route in a hyperlink.
  + Looked up how to [disable auto insert](https://stackoverflow.com/questions/19937565/disable-laravels-eloquent-timestamps) 
  of Laravel timestamp fields
  + Looked up how to [validate email addresses](https://laravel.com/docs/5.0/validation) in Laravel
  + Leveraged code to create a [random 10 character string](http://www.xeweb.net/2011/02/11/generate-a-random-string-a-z-0-9-in-php/)
  + Looked up how to make [responsive HTML tables](https://www.w3schools.com/bootstrap/bootstrap_ref_css_tables.asp)
## Code style divergences
  + I used tabs instead of spaces in my code

## Notes for instructor
  + In order for this project to work correctly (due to authentication w/ some of the social media oauth services), you 
  have to use `https://` in the URL. 
  + When you log into the web application, there are several ways to login:
    + Login with the email `susanbuck@fas.harvard.edu` and the password `testpassword`
    + Login/authenticate with one of the social media Oauth logins
    + `Register` a new account (w/ an email other than `susanbuck@fas.harvard.edu`)
  + There is data seeded for your email address `susanbuck@fas.harvard.edu`. If you authenticate with a social media login 
  associated with your email, it will correctly map to the email account.
  + I did not have time to finish the email feature I wanted to complete, but a transparent icon is there as a placeholder