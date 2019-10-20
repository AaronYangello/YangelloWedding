#!/bin/bash
declare -i count=1;
for d in ../img/galleries/Yangello_Ever_After/*; 
do 
    echo "listing contents of dir: $d";  
    magick convert "$d" -print "('$var', '$d', '%t', 'date', 'yangello-ever-after', '%w','%h'),\n" /dev/null > names.txt
	let "var++"
done 