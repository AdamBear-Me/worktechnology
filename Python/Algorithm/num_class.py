#encoding=utf-8
__author__ = '超'

a = raw_input().split(" ")
a1 = "N"
a2 = "N"
a3 = "N"
a4 = "N"
a5 = "N"
a2_count = 0
a4_count = 0
a.pop(0)
for i in a:
    if (int(i)%10)==0:
        if a1=="N":
            a1 = int(i)
        else:
            a1 += int(i)
    if (int(i)%5)==1:
        if a2=="N":
            a2 = int(i)*pow(-1,a2_count)
        else:
            a2 += int(i)*pow(-1,a2_count)
        a2_count+=1
    if (int(i)%5)==2:
        if a3=="N":
            a3 = 1;
        else:
            a3 += 1
    if (int(i)%5)==3:
        if a4=="N":
            a4 = int(i)
        else:
            a4 += int(i)
        a4_count+=1
    if (int(i)%5)==4:
        if a5=="N":
            a5 = int(i)
        elif int(i)>a5:
            a5 = int(i)

if a4 == "N":
    print "%s %s %s %s %s"%(a1,a2,a3,'N',a5)
else:
    print "%s %s %s %.1f %s"%(a1,a2,a3,float(a4)/a4_count,a5)

