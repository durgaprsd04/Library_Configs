#!/bin/bash
# Installl ffmpegthumbnailer
# Run this script inside these folders
#	/hdd2/NPTEL/Phase2_Video/
#	/hdd1/NPTEL/Phase1_Video/
#	/hdd1/NPTEL/PhaseII/


folderlist=`ls -d */`
for folder in $folderlist
do
	cd $folder
	filelist=`ls *.mp4`
	for file in $filelist
	do
		ffmpegthumbnailer -i $file -t 30% -o $file.png 2> /dev/null
	done
	cd ..
done