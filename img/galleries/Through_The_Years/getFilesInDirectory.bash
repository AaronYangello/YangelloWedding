#!/bin/bash
declare -i count=1;
for d in ./*; 
do 
	if [[ "$d" != *"thumb"* ]]; then
		echo "listing contents of dir: img\\galleries\\Through_The_Years\\$d";  
		magick convert "$d" -print "('$count', 'date', 'through-the-years', '%w','%h', 'img\\\\\\\\galleries\\\\\\\\Through_The_Years\\\\\\\\%f', '%t'),\n" /dev/null >> names.txt;
		let "count++";
	fi
done 