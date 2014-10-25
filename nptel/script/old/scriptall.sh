cd ../web
list=`ls *.html`
for ele in $list
do
	tail -n +63 $ele >> ../script/final
done