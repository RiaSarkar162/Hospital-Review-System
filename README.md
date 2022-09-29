# Hospital-Review-System

## Table of Contents

#### 1.	Introduction


1.1. Purpose                                              
1.2	. Intended Audience                                                                     
1.3	. Intended Use                                                              
1.4	. Product Scope                                                                   
1.5	. Risk Definition                                                   

#### 2. Overall Description


2.1. User Classes and Characteristics                                             
2.2. User Needs                                                                  
2.3. Operating Environment                                                                 
2.4. Constraints                                                                                       
2.5. Assumptions and Dependencies                                                                            

#### 3. Requirements


3.1. Functional Requirements                                                               
3.2. Non-functional Requirements                                                    
3.3. Platforms                                                                                        

### 1.	 Introduction 

#### 1.1.	Purpose     
•	The Software is for the automation of Hospital Review                                    
•	It maintains two levels of users                                                         
(1) Admin Level                                        
(2) User Level                                                      
•	Providing Doctors overview and review from other users.                                          
•	User can provide their Opinion and review in front of audience.                                  
•	Providing Doctors overview and review from other users.                                   
•	Providing Nearby available doctor status and hospital location.                                                 
•	Providing Top Health News, Ranging depends on satisfaction level.                                                         

#### 1.2.	Intended Audience
This Software Requirements document is intended for:                                                        

	Developers who can review project’s capabilities and more easily understand where their efforts should be targeted to improve or add more features to it (design and code the application – it sets the guidelines for future development).                                                         

	Project Admin can add their data in server and control the whole users.                              

	End Users (not allowed for below 18) of this application who wish to read and they can share their experience, also they can add a number like a score which ensure their satisfaction level.                                          

#### 1.3.	Intended Use
This web application is a platform where patient or attendant provide their satisfaction level in front every user. They can share their experience in a text message in review section.  So, people can get best available nearby doctors easily. Any unethical, unusual comment will be hidden by admin panel, admin panel will monitor every comment which will give a better experience to the users.                        

#### 1.4.	Product Scope
 The product scope can be defined as the features and functions that characterize a product. In the case of a service, product scope focuses on the actual tasks and responsibilities of the personnel delivering the service, also focuses on how it works, how it is physically made and how it can be improved in future iterations.
Features and Function:                                 
•	It mainly has two features. One for admins(developer) and another one for users (patients and attendant).                             
•	It has Feedback mechanism, so that patients or users can give their feedback in a text message or they can rate in number.                                
•	24 X 7 availability.                                    

Actual Tasks and Responsibilities:                                        
•	Secure registration and profile management facilities for the patients and attendant                             
•	Adequate searching mechanisms for easy and quick access to find out nearby hospitals and doctors.                                
•	Strategic data and graphs for hospitals about their services.                                          
•	Maintaining database of regular user of different needs.                                                     
•	Secure access of confidential data (user’s details).                                               
•	Administrators are responsible for internal affairs like add data in server and delete any irrelevant comment of the users.                                  

#### 1.5.	Risk Definition                                       
Risk in healthcare comprises the clinical and administrative systems, processes, and reports employed to detect, monitor, assess, mitigate, and prevent risks.


 
2.	Overall Description
2.1. 	User Classes and Characteristics
User: Admin
•	Functions: The Administrator is the super user and has complete control over all the activities that can be performed. The application notifies the administrator of all reviews and if their unethical issues then the administrator can reject them. 
	Approving/Reject Comment
	Add Data
	Manages the list of Hospital, Doctors, and their location

User: Users
•	Functions:  
	Login/ Signup
	Add/ Delete Comment (with Picture)
	Doctor’s review

User: Visitors
•	Functions:  
	Signup
	Only View

User characteristics	
•	The user should be familiar with new web application.
•	The user should be familiar with the Internet.

2.2.	User Needs
User needs are the needs that a user has of a service, and which that service must satisfy for the user to get the right outcome for them.
Services designed around users and their needs:
are more likely to be used help more people get the right outcome for them - and so achieve their policy intent cost less to operate by reducing time and money spent on resolving problems

2.3.	Operating Environment
This website shall operate in all famous browsers, for a model we are taking Microsoft Internet Explorer versions 7.0, 8.0 and 9.0.

2.4.	Constraints
•	There is no maintainability of back up so availability will get affected. 
•	Limited to HTTP/HTTPS.
•	No multilingual support.

2.5.	Assumptions and Dependencies
It is assumed that alumni data will be made available for the project in some phase of its completion. Until then, test data will be used for providing the demo for the presentations. It is assumed that the user is familiar with an internet browser and also familiar with handling the keyboard and mouse.

Since the application is a web-based application there is a need for the internet browser. It will be assumed that the users will possess decent internet connectivity.

3. Requirements
3.1.	Functional Requirements:
3.1.1. Administrator:
•	Database Management: Control the database and keep track of all record of Doctors and patients’ details
•	 Contact and appointment: Contact with the doctors and get permission for appointment
•	View all details: View the details of all Doctors and control the whole site
•	Advertising the Site: Responsible for making advertisements for the site

      3.1.2 Visitors:
•	Login: Visitors must have a valid login id to enter the site
•	Registration: New user can sign up by creating new ID
•	View and Edit Own Details: Can view/edit his personal details about services provided.
•	Giving Feedback to Consultant Care: Can give feedback to the 24*7 Consultant Care Service center about their impression for the site and services  

        3.1.3 Navigation System:
•	Find Doctors: From here visitors can Find Doctors 
•	About Us: Visitors can learn about the hospital
•	Departments: Visitors can also find Doctors from respective Departments
•	Contact: Visitors can get in touch with the Webpage authority from here.
        
       3.1.4. Short Directory of Appointment Booking System
       3.1.5. Quick Links       
3.2. Nonfunctional requirements
   3.2.1. Performance Requirements
•	The system shall accommodate high number of and users without any fault.
•	Response to view information shall take no longer than 5 seconds to appear on the screen 

   3.2.2. Safety Requirements
•	System use shall not cause any harm to human users

  3.2.3. Security System
•	System will use secured database
•	Normal users can just read information but they cannot edit or modify anything except their personal and some other information.
•	System will have different types of users and every user has access constraints.

3.3. Platforms
   3.3.1. Frontend
•	HTML
•	CSS
•	Java-script (j-query & ajax)
•	Bootstrap

  3.3.2. Backend
•	PHP(Laravel)
•	MySQL
	
