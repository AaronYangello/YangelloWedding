#!/bin/bash
for d in ./*; 
do 
    echo "listing contents of dir: $d";  
    magick convert "$d" -print "('date', 'engagement-photos', '%w','%h', '$d', '%t'),\n" /dev/null >> names.txt;
	let "count++";
done 