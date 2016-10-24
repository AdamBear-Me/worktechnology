# -*- coding:utf-8 -*-
__author__ = '超'


def jump(n):
    if n<=2:
        return 1 if n==1 else 2
    return jump(n-1)+jump(n-2)

print jump(5)

