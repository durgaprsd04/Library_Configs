list=`cat $1`
for ele in $list
do
	cat export2.csv | grep $ele
done
