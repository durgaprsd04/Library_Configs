import os
fp = open('listoffiles.txt','rb')
fp2 = open('ffmpegcmd.txt','wb')
for line in fp.readlines():
    t = line.split('\n');
    t = t[0].split('/')
    print t

    filepath = "/var/www/html/" + t[3] +"/" +t[4] + "/" + t[5] +"/"+t[6] +  "/"
    c='ls '+ filepath + ' > listofvideos.txt'
    print c
    fp1 = open("listofvideos.txt")
    for line1 in fp1.readlines():
        t1 = "ffmpegthumnailer -i " + filepath + line1 +  "-t 30% -o" + t[6]+line1.png
        fp2.write(t1+"\n")


