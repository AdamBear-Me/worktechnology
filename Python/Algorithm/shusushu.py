#encoding=utf-8
__author__ = '超'

# m = raw_input("请输入一个整数")
#
# def is_sushu(n):
#     count = 0
#     for i in range(2,int(n)):
#         if (int(n)%i)==0:
#             count+=1
#
#     if count == 0:
#         print n+"是素数"
#     else:
#         print n+"不是素数"
#
# is_sushu(m)

a = raw_input().split(" ")
m = a[0]
n = a[1]

def is_sushu(n):
    count = 0
    for i in range(2,int(n)):
        if (int(n)%i)==0:
            count+=1

    if count == 0:
        return 0
    else:
        return 1

a = []
for i in range(1,10000):
    if is_sushu(i) == 0:
        a.append(i)
    if len(a)==(int(n)+1):
        break

#print a[5:]
for j in range(1,(int(n)+1-int(m))/10+2):
    x = 0
    for i in a[int(m)+10*(j-1):int(m)+10*j]:
        x += 1
        if x<10:
            print i,
        if x==10:
            print i
    #print('\n')

# for i in a[int(m)+10:int(m)+20]:
#     print i,
#     print " ",
# print('\n')
#
# for i in a[int(m)+20:]:
#     print i,
#     print " ",
