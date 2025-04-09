# CA4_LOGIN_SIGNUP
NOTE
DO DRAG AND DROP THE INDEX.PHP FILE INTO YOUR VERSION OF THE PROJECT IT IS A BLANK PAGE

aside from that feel free to drag and drop all the files found to the current version of the project

the main change compared to the old login/signup is the usage of a class called ACCOUNT_ACCESS which has two functions for sending data to the sql database and checking the sql database for matching details before redirecting the user to the index page.
It also has support for sessions and also includes a new header called header2.php which does not check to see if the user is logged in letting the user access pages (I.e the home page) without an account. Note that the orignal header.php will require you to be logged in to access the page so you may run into some issues but simply changing the pages header from header.php to header2.php should fix this
