#encoding=utf-8
__author__ = '超'

def f(s):
    return s[0].upper()+s[1:].lower()

print map(f,['admin','LIST','bar'])
