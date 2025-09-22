#!/bin/bash

read -p "Kasutaja: " user
read -sp "Parool: " password
read -p "Grupp: " group

echo "Kasutaja on $user ja parool on $password ning grupp $group"

# groupadd $group

#kas kasutaja on?
# useradd -m -g $group $user
useradd $user
$user:$password





















mkdir -p /home/"$user"/kataloog
echo "Tere tulemast, $user!" > /home/"$user"/kataloog/teretulemast_"$user".txt
chown -R "$user":"$group" /home/"$user"/kataloog


echo "Fail asub: /home/$user/kataloog/teretulemast_${user}.txt"









