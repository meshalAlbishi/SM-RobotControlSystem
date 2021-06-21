# SM-RobotControlSystem
a website that enable you to control the robot arm that designed in [RobotArmCircuitDiagram](https://github.com/meshalAlbishi/SM-RobotArmCircuitDiagram)


## What is the Task?
the repository will include the following tasks:
1. Design the control panel UI
2. Create a database to control the robot arm, I'll use MySQL
3. Connect teh database with control panel
4. Create a php page to connect the database with the actual hardware 


# Database Design
The database contains 4 table
1. Arm -> This table to monitor the power of the arm if it's (on/off)
2. Motors -> This table to add the motor which containt the following:
    - motor id
    - last saved degree
    - Forigen key to the Arm they belong to
    
3. Arm log -> to keep tracking the arm status and the date of last modify 
4. Motor log ->  to keep tracking each motor status and the date of last modify


## Demo
it will be available to demo from here: 
http://meshal-robot-control-system-v2.great-site.net/

but it's still in progress :')
