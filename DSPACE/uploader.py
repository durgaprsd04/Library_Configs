import os
import sys

rootdir = sys.argv[1]
final_path_string=""
fp = open("/home/dspace/Documents/bis.sh",'wb')
for root, subFolders, files in os.walk(rootdir):
    outfileName = os.path.join(root, "dspace.py")
    base_path = os.getcwd()
    print "Copying to path " + outfileName
    if files != []:
        os.system("cp "+ "/home/dspace/Documents/dspace.py "+outfileName)
        os.chdir(root)
        os.system("python dspace.py")
        path = os.getcwd()
        list_of_paths = path.split('/')
        for l in list_of_paths:
                final_path_string = final_path_string+l
        fp.write("./dspace import --add --eperson=nalanda_dspace@nitc.ac.in --collection=123456789/578 --source="+os.getcwd()+"/"+"working"+"/"+" --mapfile=/home/dspace/Documents/"+final_path_string+'\n')
        final_path_string=""
    os.chdir(base_path)
    for folder in subFolders:
        print "%s has subdirectory %s" % (root, folder)
fp.close()

