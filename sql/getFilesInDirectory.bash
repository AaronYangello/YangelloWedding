#!/bin/bash
declare -i count=1;
for d in ../img/galleries/Engagement_Photos/*; 
do 
    echo "listing contents of dir: $d";  
    magick convert "$d" -print "('$var', '$d', '%t', 'date', 'engagement-photos', '%w','%h'),\n" /dev/null > names.txt
	let "var++"
done 