import os
os.system("ls *.PDF > files.txt")
os.system("ls *.pdf >> files.txt")
os.system("mkdir working")
base_path = os.getcwd() + "/" + "working/"
os.chdir(base_path)
length = 1
fp = open("../files.txt", "rb")
for line in fp.readlines():
    print "Moving file ", line[:-1], " to ", "working/item", str(length)
    try:
        os.stat("item"+str(length))
    except:
        os.mkdir("item"+str(length))
        os.system("mv ../" + line[:-1] + "  " + "item"+str(length) + "/")
        os.chdir(base_path + "/" + "item" + str(length) + "/")
        fp1 = open("dublin_core.xml", "wb")
        fp1.write('<dublin_core>\n')
        fp1.write('\t<dcvalue element="title" qualifier="none">'+line[:-1]+'</dcvalue>\n')
        fp1.write('</dublin_core>\n')
        fp1.close()
        fp1 = open("metadata_etd.xml", "wb")
        fp1.write('<?xml version="1.0" encoding="UTF-8"?>\n')
        fp1.write('<dublin_core schema="etd">\n')
        fp1.write('\t<dcvalue element="title" qualifier="none">'+line[:-1]+'</dcvalue>\n')
        fp1.write('</dublin_core>\n')
        fp1.close()
        fp1 = open("contents","wb")
        fp1.write(line.encode("ascii","ignore"))
        os.system("iconv -f utf-8 -t ascii contents -o contents")
        fp1.close()
        os.chdir(base_path)
    length = length + 1
