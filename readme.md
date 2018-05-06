# Project 4 - Roster Maker
+ By: Gerald Derrick
+ Production URL: <https://p4.gaderrick.me>

## Database
*The following is example info taken from Foobooks; delete and replace with your own info.*

Primary tables:
  + `participants`
  + `organizations`
  + `rosters`
  
Pivot table(s):
  + `participant_roster`

## CRUD
*Describe what action I need take in order to see an example of all 4 CRUD operations in your app. I've filled this out with examples from the Foobooks app - delete this and replace with your own info. If one operation is performed multiple times (e.g. Read), you only need to provide 1 example.*

__Create__
  + Visit <http://p4.gaderrick.me/books/create>
  + Fill out form
  + Click *Add new book*
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
  + Reviewed documentation at [Let's Encrypt](https://letsencrypt.org/) and implemented SSL using the Let's Encrypt libraries.
  + Laravel authentication [documentation](https://laravel.com/docs/5.6/authentication#authentication-quickstart).
  + Integrated and modified a [Laravel Socialite github project](https://github.com/saqueib/social-auth) to implement social media authentication using this [documentation](http://www.qcode.in/oauth-login-using-facebook-google-twitter-and-github-with-laravel-socialite/).
  + Circle icons for social media links from [here](https://plus.google.com/u/0/+MohdSaquibAnsari) and [here](https://github.com/logos).
  + Downloaded [icons for tables](https://freeiconshop.com/)
  + Downloaded [add user icon](https://icons8.com/)
  + Used the site [www.generatedata.com](https://www.generatedata.com/) to create data sets for db seeders
  + List of state's and their abbreviations from [pastebin.com](https://pastebin.com/eJvwuHqC)
  + Looked up how to [pass a variable parameter](https://stackoverflow.com/questions/34556484/laravel-5-2-named-route-usage-with-variable-parameter) to a named route in a hyperlink.
  + Looked up how to [disable auto insert](https://stackoverflow.com/questions/19937565/disable-laravels-eloquent-timestamps) of Laravel timestamp fields
  + Looked up how to validate email addresses in [Laravel](https://laravel.com/docs/5.0/validation)
  + Leveraged code to create a [random 10 character string](http://www.xeweb.net/2011/02/11/generate-a-random-string-a-z-0-9-in-php/)
  + Looked up how to make [responsive HTML tables](https://www.w3schools.com/bootstrap/bootstrap_ref_css_tables.asp)
  
## Code style divergences
* List any divergences from PSR-1/PSR-2 and course guidelines on code style*

## Notes for instructor
* In order for this project to work correctly (due to authentication w/ some of the social media oauth services), you have to use `https://` vs. `http://`. 