list=`cat $1`
#list=`ls o.*`
for ele in $list
do

    #cat out.basic | grep $ele >> log

  
    #echo "<li><a href=\"$ele.html\">$ele</a></li>"
    #cp index.html $ele.html
    course=`echo $ele | cut -d# -f2`
    filename=`echo $ele | cut -d# -f3`
    coursename=`echo $ele | cut -d# -f4`
    professor=`echo $ele | cut -d# -f5`

    institute=`echo $ele | cut -d# -f8`

    #echo $course $coursename $professor 
    #echo $institute


    echo "<div class=\"grid\">" >> o.$filename
    echo "<div class=\"preview\">" >> o.$filename
    echo "<a href=\"video-play.php?vid=/hdd1/NPTEL/PhaseII/$course\" title=\"\"><img src=\"/hdd1/NPTEL/Phase1_Video/$course/image.jpg\" alt=\"#\"></a>" >> o.$filename
    echo "</div>">> o.$filename
    echo "<div class=\"data\">">> o.$filename
    echo "<h3><a href=\"video-play.php?vid=/hdd1/NPTEL/PhaseII/$course\">$coursename</a></h3>">> o.$filename
    echo "<div class=\"category\"><span class=\"icon\">$professor</span> </div>">> o.$filename
    echo "</div>">> o.$filename
    echo "</div>">> o.$filename

if false
then 
    echo "<div class=\"grid\">"
    echo "<div class=\"preview\">"
    echo "<a href=\"video-play.php?vid=/hdd2/NPTEL/Phase2_Video/$course\" title=\"\"><img src=\"/hdd1/NPTEL/Phase1_Video/$course/image.jpg\" alt=\"#\"></a>"
    echo "<div class=\"data\">"
    echo "<h3><a href=\"video-play.php?vid=/hdd2/NPTEL/Phase2_Video/$course\">$coursename</a></h3>"
    echo "<div class=\"category\"><span class=\"icon\">$professor</span> </div>"
    echo "</div>"
    echo "</div>"
fi
done




