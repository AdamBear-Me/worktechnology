#encoding=utf-8
__author__ = '超'


# def g():
#     print 'g()...'
#
# def f():
#     print 'f()...'
#     return g()
#
# f()

# def f():
#     print 'f()...'
#     def g():
#         print 'g()...'
#     return g()
#
# f()

def count():
    fs = []
    for i in range(1, 4):
        def f(j):
            def g():
                return j*j
            return g
        r = f(i)
        fs.append(r)
    return fs
f1, f2, f3 = count()
print f1(), f2(), f3()