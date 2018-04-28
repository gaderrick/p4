# Project 4
+ By: Gerald Derrick
+ Production URL: <https://p4.gaderrick.me>

## Database
*The following is example info taken from Foobooks; delete and replace with your own info.*

Primary tables:
  + `user_details`
  + `organizations`
  + `rosters`
  + `roster_details`  
  
Pivot table(s):
  + `roster_user_detail`

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
  + Integrated and modified a [Laravel Socialite github project](https://github.com/saqueib/social-auth) to implement social media authentication using this [documentation](http://www.qcode.in/oauth-login-using-facebook-google-twitter-and-github-with-laravel-socialite/).  
  + Laravel authentication [documentation](https://laravel.com/docs/5.6/authentication#authentication-quickstart).
  
  + Circle icons for social media links from [here](https://plus.google.com/u/0/+MohdSaquibAnsari) and [here](https://github.com/logos).

## Code style divergences
* List any divergences from PSR-1/PSR-2 and course guidelines on code style*

## Notes for instructor
* In order for this project to work correctly (due to authentication w/ some social media oauth processes), you have to use `https://` vs. `http://`. 