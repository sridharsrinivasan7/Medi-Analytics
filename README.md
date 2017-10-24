# Medi-Analytics
## Introduction:

Predicting the further requirements/needs is one of the toughest job to deal with. Such predictions in the field of medical would drastically improve the current vision on viewing few things. Here comes analytics into the picture where analyzing data for better adaptability in handling the further circumstances. 
As a part of this project, we attempt in predicting the future requirements by collecting first hand patient data. The data collected is demographically aligned taking consideration factors such as age, Health-issues diet, etc. 
The system proposed leverages this data in spreading awareness with the help of modern day analytical methods.
Requirement Analysis:
Data Collection: Hospital-REP would enter the data of each patients manually in a form and that information would be stored in the database based of certain logics.
We’d store details in a table named PatientDetails( PatientID (VARCHAR2) PRIMARY KEY, PName (Varchar2), Age (integer), POB varchar2, gender(varchar), HealthID (integer) FOREIGN KEY REFERENCES HealthIssues(HealthID))
Another table HealthIssues(HealthID(integer) PRIMARY KEY, diabetes(Varchar2), Shortsight(Varchar2), cholesterol(Varchar2)) this stores the Health Problems information.
In the Backend, this information is accessible to both Hospital-REP and Analytics Team.
Hospital-REP can Insert, edit, delete, update a patient Information. 
Analytics Team would do analytics and try to improve the current process in more sophisticated ways.

## Requirement Analysis in terms of business rules.
Hospital-REP enters the Patient Details and each PatientID should be unique. 
Hospital-REP can edit the Patient Details if and only if he’s having the PatientID.
There could be any number of patient records. Single patient should have at least one issue.
Analytics Team would generate Graphs based on the Age and HealthID factors.

## Technical Specification:

Front End: HTML, CSS.
Business Logic: PHP
Database: MySQL 5.7.17
Server: Apache 2.0 server
## Application Design:
### Users:
1)	Hospital-REP:
Are assigned to collect patients’ data and feed it to the database. Each of the representative is posed with a login page when attempting to gain access to the system. Successful access is gained after system authenticates the credentials provide by these representatives.
2)	Analytics Team:
Similar to the team of representatives, the analytics team is required to login to the system, to access the historical data in order to perform analytics.
3)	Admin: 
An admin overlooks creation and maintenance of system and its users.
All three users would be using the same web application.

### Components:
a.	Hospital-REP:
1)	Login (authentication) for Representatives. 
2)	Options – Add / Update 
3)	Patient Details Screen.
b.	Analytics Team:
1)	Login
2)	Analytics(Draw graphs)

