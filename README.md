# `php-order-form`

## "Language: PHP"

---

## Learning objectives :computer:

- Be able to tell the difference between the superglobals $_GET, $_POST, $_COOKIE and $_SESSION variable.
- Be able to write basic validation for PHP.
- Be able to send an email with PHP
This is the repository for the exercise: https://github.com/becodeorg/gnt-yu-3-21/tree/master/3.The-Mountain/3.Order-form


## The Mission

You need to make a form for a webshop, and add validation to the form. The customer can order various sandwiches, and then both the restaurant owner and the customer receive an e-mail with the details of the order.

You will add a counter at the bottom of the page that shows the total amount of money that has been spent on this page for this user. This counter should keep going up even when the user closes his browser.

You can start modifying index.php and form-view.php, they already contain some code to help you on your way.

## Must-have features

- Step 1: Validation
- Step 2: Make sure the address is saved
- Step 3: Switch between drinks and food
- Step 4: Calculate the delivery time
- Step 5: Total revenue counter
- Step 6: Send the e-mail

---

## Tips :wrench:

+ You can use filter_var($email, FILTER_VALIDATE_EMAIL) to filter for e-mails.
+ To check if an input is a number you can use is_numeric($number)
+ If the mail() function doesn't work you might need to install sendmail
+ When you are stuck try to run the function whatIsHappening(), it might provide you with information how to access your input data. Or even better: use xdebug!
+ If you want to beter understand sessions, go to the php.net documentation.
+ Do not use private browsing during this excersise, it will make it more difficult to get everything working.
+ You do not set cookies the same way you set other variables. Google how to do it!
+ You can use // TODO: something you need to remember in your code when you need to remember to change stuff

## Author :black_nib:
:star: Powered by Ezgi
