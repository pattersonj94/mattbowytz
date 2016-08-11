<section id="inClass" class="inclass content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 centered">
        <h1>In Class Exercises</h1>
        <p class="med">To be demonstarated in class</p>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 1</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements:
          </li>
          <li>
            Start your XAMPP (or other) web browser on your laptop or class machine
          </li>
          <li>
            Open a copy of handout ex5.php from the CS 1520 handouts via your server
          </li>
          <li>
            Show resulting page to the instructor
          </li>
        </ul>
        <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      </div>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 2</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: Write scripts and run them using your Web Server, according to the following specifications:
          </li>
          <li>
            Create 2 php scripts. One will act as an HTML view and the other will act as an include file.
          </li>
          <li>
            The included file may contain any PHP functionality that will affect the view
          </li>
          <li>
            Use a minimum of 3 variables
          </li>
          <li>
            At least one array
          </li>
          <li>
            A simple conditional statement
          </li>
          <li>
            Use part of one of the global PHP variables we spoke about in class
          </li>
          <li>
            In the view, iterate through the array(s) and display their output via HTML
          </li>
          <li>
            Compress the two files and email them to me by 1.27.16 or 2.1.16, depending on what section you are in
          </li>
        </ul>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 3</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: Write a script and run it using your Web Server, according to the following specifications:
          </li>
          <li>
            The initial page, "ex3.html", should have a form with an input called "name". It should ask the user to register his / her name. Upon submission, the page should request the script "ex3.php".
          </li>
          <li>
            The script "ex3.php" should extract the name, then read in the contents of a file called "names.txt". The file "names.txt" will have a single name on each line of the file. 
            If the name submitted by the user matches any of the names in the file, the script should output "[Name], you've already been registered". 
            Otherwise, the script should append the new name to the end of the "names.txt" file and output "Congratulations [Name], you've been registered!". 
            Hint:You may want to make use of the rtrim() function. Look it up to see why.
          </li>
          <li>
            Style the form and output. You don't have to go crazy, just make sure it looks presentable.
          </li>
          <li>
            Create a .zip file with your files and email them to me. The .zip file should be named [name]_exercise3.zip.
          </li>
          <li>
            Feel free to use class example files as a reference, but do not reuse any of the code in the way it appears in those files.
          </li>
        </ul>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 4</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: Write a script and run it using your Web Server, according to the following specifications:
          </li>
          <li>
            A user logs into the site through the login.php script. This script initially checks the $_SESSION["error"] variable. If it exists, it prints out the error. It then shows a form that prompts the user for a name and password. Upon submission, the script requests the process.php script.
          </li>
          <li>
            The process.php script will extract the POST variables for name and password and compare them with entries in a file called "users.txt". The "users.txt" file will be formatted as "username:password". There will be one entry per line.
          </li>
          <li>
            If the user and password are found, the process.php script should set $_SESSION variables storing the user's name and that he/she has successfully logged in, then redirect to script home.php
          </li>
          <li>
            If the user is not found, the process.php script should set the $_SESSION["error"] variable to the string "Your id or password is incorrect. Please try again". It should then redirect to the login.php script.
          </li>
          <li>
            The home.php script should initially test a $_SESSION variable to see if the user has logged in.
          </li>
          <li>
            If the $_SESSION variable is not set, set $_SESSION["error"] to "You have not logged in. Please log in first" and then redirect to login.php.
          </li>
          <li>
            Text to be used in display is just a suggestion. You can word it however you like.
          </li>
          <li>
            If the $_SESSION variable is set, extract the user's name and simply show a page welcoming the user to your site
          </li>
          <li>
            Dont' forget to add some styling to the user facing portions of the exercise. As usual, don't go overboard, just make it look a little better.
          </li>
          <li>
            Create a .zip file with your files and email them to me. The .zip file should be named [name]_exercise4.zip.
          </li>
          <li>
            Feel free to use class example files as a reference, but do not reuse any of the code in the way it appears in those files.
          </li>
        </ul>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 5</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: Demonstrate that your MySQL access is established on your XAMPP servers by implementing two scripts: (naming and verbiage can be customized if you like)
          </li>
          <li>
            The first script will create a new table in your DB called "People" with two columns (both text) called LName and FName
          </li>
          <li>
            The second script will do the following:
          </li>
          <li>
            Initially it shows a form that asks the user for their first and last names (separate fields)
          </li>
          <li>
            If both names match an entry already in the People table, it should tell the user that they are already entered
          </li>
          <li>
            Otherwise, it should add the user's names in a new entry in the table
          </li>
          <li>
            Regardless of whether the user was previously in the table or not, your script should show all of the entries in the table to the user, and should show the form again (so another name can be entered)
          </li>
          <li>
            Be sure to demonstrate the functionality as it should be to the instructor. Also, as always, make sure to add some CSS to the user facing portions.
          </li>
          <li>
            Create a .zip file with your files and email them to me. The .zip file should be named [name]_exercise5.zip.
          </li>
          <li>
            Feel free to use class example files as a reference, but do not reuse any of the code in the way it appears in those files.
          </li>
        </ul>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 6</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: Write a PHP / Javascript script that does the following:
          </li>
          <li>
            NOTE: you may use jQuery if you care comfortable doing so, otherwise, 'vanilla' javascript will do just fine
          </li>
          <li>
            Shows the user a form with a single text field requesting a search for a computer science course.
          </li>
          <li>
            The course must be formatted as follows: CSXYYY
            <ul>
              <li>
                where C is an either upper or lower case 'C' character
              </li>
              <li>
                where S is an either upper or lower case 'S' character
              </li>
              <li>
                where X is either a 0, 1, 2 or 3
              </li>
              <li>
                where YYY are digits between 0 and 9
              </li>
            </ul>
          </li>
          <li>
            Before the form is submitted, a Javascript function should be called to verify the data entered in the text field. If the data is formatted correctly, the submission should go through. Otherwise, an alert showing the error should be generated, the submission should be rejected and the focus should revert back to the text field
          </li>
          <li>
            If the field is valid, the form should be submitted to the same script that generated it. This script should respond that the submission was accepted, and it should produce the same form again so that the user can try another course
          </li>
          <li>
            I will be testing by looking for both scenarios of a correct or incorrect scenario
          </li>
          <li>
            Submissions can be via zip file with the same format as the other assignments
          </li>
        </ul>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 7</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: toggle file data using AJAX. This should be written as a PHP script
          </li>
          <li>
            You can find the necessary files <a href="/deliverables/ajax.zip">here</a> (this zip file has the files needed for exercises 7, 8 and 9)
          </li>
          <li>
            Initially your script will display a single button, saying "Toggle Data". However, the HTML on your page will also include an empty <code>div</code> tag identified by an id
          </li>
          <li>
            A click on the button will first check to see if the data has already been downloaded from the server. If not, it will download it using an AJAX call. The response to the call will use DOM to add the result as a text node within the div. The script on the server will send the contents of a file as a single string. In your call you should specify the file name "file1.txt". See: getData.php
          </li>
          <li>
            If the data has already been downloaded then it should be stored / maintained on the client. In other words, the first click of the button should cause an AJAX call to getData.php but successive clicks will not use AJAX, since the data will already be stored in the client web tree
          </li>
          <li>
            A click on the button will first check to see if the data has already been downloaded from the server. If not, it will download it using an AJAX call. The response to the call will use DOM to add the result as a text node within the div. The script on the server will send the contents of a file as a single string. In your call you should specify the file name "file1.txt".
          </li>
          <li>
            However, successive clicks of the button will toggle the visibility of the data, making it disappear and then reappear on the screen. This can be done using DOM and the "style" value with Javascript
          </li>
          <li>
            Submissions can be via zip file with the same format as the other assignments
          </li>
        </ul>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 8</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: toggle file data using AJAX. This should be written as a PHP script
          </li>
          <li>
             Initially show an .html page that has a single button that when clicked will display a quiz to the viewer
          </li>
          <li>
            When the button is clicked, your script should request via AJAX / GET, the following XML document: <a href="/deliverables/ajax.zip">(download here, files for exercises 7, 8 and 9)</a>.  This document contains a number of quiz questions in XML format.  Look at the file to see the tags and nesting so that you can parse it correctly
          </li>
          <li>
            Once returned to your script via your XMLHttpRequest object, the XML document should be parsed and displayed as a sequence of questions with answers shown as options in an html select
          </li>
          <li>
            When the user selects either the right or wrong answer, a block of text should be displayed to let them know
          </li>
          <li>
            Keep track of the users score, as it can be dynamically updated without refreshing the page
          </li>
          <li>
            NOTE: there is no server funcitonality here, if you refresh the page, it will go back to it's original state
          </li>
          <li>
            You could use Javascript to set a cookie as well, if you were so inclined
          </li>
          <li>
            Submissions can be via zip file with the same format as the other assignments
          </li>
        </ul>
      </div>
      <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
      <div class="col-lg-12 centered">
        <p class="uc red-txt bold">Exercise 9</p>
        <ul class="ex-list">
          <li class="requirements">
            Requirements: (read below) - The fllowing link should let you download the zip file containing resources for exercises 7, 8 and 9) - <a href="/deliverables/ajax.zip">FILES HERE</a>
          </li>
          <li class="requirements">
            You may need to do some troubleshooting to get the db part to work properly.
          </li>
          <li>
            Start with an empty table and a button on the page
          </li>
          <li>
            Each time the user clicks the button, an AJAX request for a word is made to the script "getWords.php".  This script will request and return a random word from a database in XML format.  In order for this script to work, some other files are required
            <ol>
              <li>
                "setWords.php" – this is a script to initialize the database    
              </li>
              <li>
                "testwords.txt" – this is a file of words used by the setWords.php script             
              </li>
              <li>
                "wordStyle.css" – simple style sheet to format the words (do us both a favor and make this look better)
              </li>
            </ol>
          </li>
          <li>
            When the word is received back, its XML is parsed and processed in the following way:
            <ul>
              <li>
                If the word has not yet been seen, add it to an array of words / counts and also add it and its count to the table
              </li>
              <li>
                If the word has already been seen, increment its count in the array and also in the table
              </li>
            </ul>
          </li>
          <li>
            You may use plain Javascript or jQuery
          </li>
          <li>
            Continue this process indefinitely
          </li>
          <li>
            Here are some hints if you get caught up:
            <ul>
              <li>
                Attach a click handler to the button that will fire a function called getWord() or something like that
              </li>
              <li>
                getWord() will make an ajax request to getWords.php, with a function that processes the word in the following way:
                <ul>
                  <li>
                    It extracts the word from the XML result data
                  </li>
                  <li>
                    It checks to see if the word is already in an array of words (stored in a Javascript variable)
                  </li>
                  <li>
                    If present, it increments the count for the word in the HTML table
                  </li>
                  <li>
                    If not present, it appends the word to the HTML table and sets its count to 1
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            Submissions can be via zip file with the same format as the other assignments
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>