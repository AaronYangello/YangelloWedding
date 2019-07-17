#!/bin/bash
declare -i count=1;
str = "";
for d in ./*; 
do 
    echo "listing contents of dir: $d";  
    magick convert "$d" -print "('$count', 'date', 'engagement-photos', '%w','%h', '$d', '%t'),\n" /dev/null >> names.txt;
	let "count++";
done 