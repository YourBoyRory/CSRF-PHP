**Project 4 \- CSRF \- Cross Site Request Forgery**

In the project, an attacker will be taking advantage of a few facts:

* A user is still logged into a session in a website  
* A website’s form is written in plain HTML making its format/code available for all

The project consists of the creation of four(ish) php pages:

1. The first page will set a session, request a username and push that username to the server   
2. The second page will save that username in a session and generate a form to conduct a poll on someone’s favorite color (at least 3 colors with radio buttons)  
3. The third page will process and display the results of the form on the second page.  Make sure to indicate who just voted so you can ensure that your session cookie is being received.  You can store all votes in a file. (globals would be a bad idea)  Make sure you can retrieve the session variable for the username so you can store the username and their vote to ensure only one vote is cast per user.  
4. The fourth page is malicious and will generate fake data to send to the third page to process automatically on page load without user interaction.  This attack will work because the session cookie still exists within the browser.  This fourth page must work from your neighbor’s computer attacking your third page as well.  Based on the description, this attack will only work for someone who visited the page, but did not vote.

(demonstrate before fixing)

The fix is to use a CSRF token.  Generate a random number to be included as a hidden input in your form before sending the form to a user.  Also store this number in a SameSite cookie or session.  When the user submits a form, check the form’s random number against the one stored in the user’s cookie/session.  If they are the same, it should be a valid submission.

(Demonstrate after fixing)