#encoding=utf-8
__author__ = '超'

# name = raw_input("what's your name?")
#
# print "Hello" + name +"!"

a = raw_input().split(" ")
print len(a)
a.pop(0)
print a
for i in a:
    print int(i)