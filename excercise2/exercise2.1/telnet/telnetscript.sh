#!/bin/bash

#build ssh command 

echo "Enter host name"
read hostname

echo "Enter Pem file name"
read filename

echo "Connecting to Remote server..."

#Add all the commands that needs to be executed on remote server
SCRIPT="echo 'DISK UTILIZATION is as follows';
df -h;

echo 'Inode details are as follows';
df -i; 

echo 'List of files are as follows';
ls -la;
exit;"

#Now SSH to remote server
ssh -i "$filename" $hostname "${SCRIPT}"

#Now copy files from local to remote server securely using scp
echo "Enter file name to copy"
read filetocopy

scp -i "$filename" $filetocopy $hostname:/home/ubuntu/sonali

