Exercise 2.1

Commands:
a. telnet <IP address> port
b. SSH username@hostname port
c. df -h
d. df -i
e. ls -la
f. 
   Using SCP: scp source_file username@hostname:destination_folder
   Using FTP: 
	-> ftp open <domainname>
        -> Enter username and password
        -> Connection Established
        -> cd target-directory
	-> ls -l target-directory // check for the permissions
        -> binary //set the transfer type
	-> put filename //source file name to copy
        -> bye //close the connection

Note :
port = port number
source_file = file to be copied stored at local/client machine.
destination_folder = path to which the file has to be copied.

Below are the steps to excute the php script. I have tried on AWS server (domain name: http://sonaliagrawal.co.in/) using the pem file provided.
1. Download the folder
2. Cd <folder>
3. Execute the script(telnetscript.sh) as per the OS. 
4. Enter hostname: ubuntu@ec2-18-224-172-144.us-east-2.compute.amazonaws.com
5. Enter PEM file name: jiyaansh28.pem
6. Now, script will run and display disk usage, inode usage and will prompt for the file to copy from local to remote server.
7. Enter the filename (file1) present in the same folder or you can give the path of other files.
8. Now, it will copy the file in the folder sonali. You can check by ls command (cd /home/ubuntu/sonali)
9. Attached output screenshot (output.png)
