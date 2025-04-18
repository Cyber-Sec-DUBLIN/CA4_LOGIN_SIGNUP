# CA4_LOGIN_SIGNUP
Contributions from both me and Alisha combined into one file. 

Aside from minor fixes regarding database files and adding comments. Other changes include:

* Making home.php accessible without an account (From what I recall there is marks going for having this feature) by changing the header to header2.php. If you don't want this simply remove the 2 
* added new message to home.php telling the user they must log in to use the rest of the site. I cannot get it to only display this message
* Modifying products2.php and cart.php to use the header template instead of a hard coded header. This also lets the "Currently logged in as" message show on all pages. Letting the user know at all times who they are logged in as
* adding index.css, a file previously used for styling just the products page to the header which results in all pages maintaining a consistent style
* added a new header, header_login.php which doens't have the topnav bar. Used for login.php and signup.php as its standard practice to not let users access these sorts of things when signing/logging in
* added a minimum length for password (8 characters). Shows we care about security and all that


