#!/bin/bash

read -p "Kasutaja: " user
read -sp "Parool: " password
read -p "Grupp: " group

echo "Kasutaja on $user ja parool on $password ning grupp $group"

groupadd $group
useradd -m -g $group $user
echo "$user:$password" | chpasswd


mkdir -p /home/"$user"/salajane
chown -R "$user":"$group" /home/"$user"/salajane

echo "Tere tulemast, $user!" > /home/"$user"/salajane/teretulemast_"$user".txt
# echo "Fail asub: /home/$user/salajane/teretulemast_${user}.txt"


"sdfsdf" > "asf.txt"











