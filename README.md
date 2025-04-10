# CA4_LOGIN_SIGNUP
NOTE
DO DRAG AND DROP THE INDEX.PHP FILE INTO YOUR VERSION OF THE PROJECT IT IS A BLANK PAGE

aside from that feel free to drag and drop all the files found to the current version of the project

the main change compared to the old login/signup is the usage of a class called ACCOUNT_ACCESS which has three functions for sending data to the sql database (signup) checking the sql database for matching details before redirecting the user to the index page (login) and deleting all session data currently being held (logout). It also has support for sessions (i.e for showing the users name on pages) and also includes a new header called header2.php which does not check to see if the user is logged in letting the user access pages (I.e the home page) without an account. 

* Note that pages with orignal header.php will require you to be logged in to access the page so you may run into some issues with pre-existing pages but simply changing the pages header from header.php to header2.php should fix this.

Furthermore The page's design remains rather barebones on account of me not being good with CSS and fearing that any changes I make will mess up the rest of the page.


