##############################################
	Project Document
ISTM 6205 Internet Computing 
George Washington University 
	Kaichang Wu
	Dec 2, 2014
###############################################
URL: http://ec2-54-86-65-195.compute-1.amazonaws.com/ 

Public IP: 54.86.65.195
####################
      Summary
###################
My project is to build a simple job tracking board to help graduate students manage their job searching and application process. So by using this web application, users could focus on looking for job opportunities and saving all important information conveniently.
##################
Main Functions:
#####################
 1 Create or add new job position post
￼2 Update existed post
￼3 Delete posts
￼4 Read a specific post or view all job posts by retrieving data from database


###############################################￼￼
6 Data fields stored in database :
###############################################
This project is based on MySQL database. To create a new post, a user needs to provide 6 fields of data, which includes “Position Name”, “Employer”, “ Description”, “Job Type” , “Visa Requirement”, and “Location”.


###############################################
Browser Interface Design:
###############################################
This web application uses media queries in css files to achieve browser responsive design. You can reference the media queries css code in the file of “public/css/jobboard.css” at line 111, 126, 187, and 248.
￼￼￼
###############################################
Programming Style:
###############################################
PHP Server Side Scripting

To keep a good programming style, PHP server side scripting has been kept out of the HTML as possilbe by using "INCLUDE" statements. And all these server side scripting has been put into folder of “include”

Browser Side Codes
All styling (css) and scripting (javascript) have been kept in external files, which was put into “public” folder.

###############################################
Javascript Data Validation:
###############################################
In order to enable data validation work with bootstrap tool kits, a javascript validation library by the name of “jqBootstrapValidation” is adopted. And javascript validation codes to call this library is in file of “validation.js” (public/js/validation.js).
￼￼￼