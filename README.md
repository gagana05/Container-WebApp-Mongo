## OBJECTIVE:
Deploy a web application with a NoSQL (MongoDB) backend on two different
containers, to ensure proper communication between them using suitable mechanisms.

## PROCEDURE AND CONFIGURATION:
• Created a new resource group that is used to hold all resources for the assignment.

• Created a new virtual network (Virtual-Network-1) to host the VMs required, the IP range for this Virtual Network is 10.0.0.0/16. Also, a default subnet was created.

• Create a new a Virtual Machine (VM) and attach it to the above subnet. The following is the VM configuration: (not necessary to follow the same).

	o OS image: Ubuntu Server 18.04 LTS – Gen1
	o Size: Standard B1ms– 1vCPU, 2GiB Memory
	o Allowed public inbound ports: 22(SSH), 80(HTTP), 443(HTTPS)
	o Public IP: VM-1-ip (13.68.130.186)
	o Private IP: 10.0.0.6

• Now to configure the VM to host the web application. SSH into the VM and perform
the following steps

	o Install docker:
    
    sudo apt install docker.io

	o Install container with apache-php:
	
		docker run -tid -p 80:80 --name apache_server php:7-apache

	o Create the required .php files to run the web application after exec into docker container - (PHP files present in another forlder in the current repo).
  
	o Install MongoDB driver in apache_server container and other configurations:

		pecl install mongodb

• Create another Virtual Machine (VM-Mongo) by following the same steps as VM but
replacing VM to VM-Mongo as required.

	o Public IP: VM-Mongo-ip (20.55.40.30)
	o Private IP: 10.0.0.4
	o Allowed public inbound ports: 22(SSH), 27017(Port_MongoDocker)

• Now to configure the VM-Mongo to host MongoDB. SSH into the VM and perform
the following steps.

	o Install docker:

    sudo apt install docker.io

	o Install container with MongoDB:
  
		docker run -it -v mongodata:/data/db -p 27017:27017 --name mongodb -d mongo
    
	o Create new database (ImageDB) for storing the image metadata.

## LOGIN/SSH DETAILS:
• The web application is created with guest and admin login

	o Use guest as username and password under GUEST USER.
  
• The two VM’s created can be connected using SSH for verification.

	o Use root as username and password as mentioned below
  
		▪ ssh root@13.68.130.186 (IP of your web server container).
		▪ To view docker container apache_server

			docker exec -it apache_server bash

		▪ ssh root@20.55.40.30 (IP of mongoDB container)
		▪ To view docker container mongodb

			docker exec -it mongodb bash
      
## WORKING
    You can now use the IP of your web server on your browser to see the working of this set-up.
			
## NOTE:

	The naming,configuration and IP details are just given for reference.

## ARCHITECTURE

![Screenshot from 2021-07-27 13-45-04](https://user-images.githubusercontent.com/63281605/127120852-3e2978a0-0568-4de6-9a97-17f2f681caab.png)

