#!/bin/sh

#tr对输入的内容进行字符替换、字符删除以及重复字符压缩
#语法：tr [–c/d/s/t] [SET1] [SET2]
#SET1: 字符集1
#SET2：字符集2
#-c:complement，用SET2替换SET1中没有包含的字符
#-d:delete，删除SET1中所有的字符，不转换
#-s: squeeze-repeats，压缩SET1中重复的字符
#-t: truncate-set1，将SET1用SET2转换，一般缺省为-t

#将连续的几个相同字符压缩为一个字符
echo "aaaannggg" | tr -s [a-z] 

#删除文件中多余的换行符
#cat test.txt | tr -s ["\n"]

#大小写转换
echo "XIONGCHAO" | tr [A-Z] [a-z]

#对数字加密
echo 123456 | tr [0-9] [987654321]
#解密
echo 876543 | tr [987654321] [0-9]

#删除字符串中的数字
echo "xiongchao886" | tr -d [0-9]

#只保留字符串中的数字和换行符
echo "sdsdssda232" | tr -c -d '0-9 \n'

#-c：用换行符替换掉除了字母外的所有字符；-s：删除多余的换行符
cat test.txt|tr -cs  "[a-z][A-Z]" "\n"

#备注：
#常用字符类如下：
#alnum：字母和数字
#alpha：字母
#cntrl：控制（非打印）字符
#digit：数字
#graph：图形字符
#lower：小写字母
#upper：大写字母
#print：可打印字符
#punct：标点符号
#space：空白字符
#xdigit：十六进制字符

#使用字符类转换大小写
echo "sdsds" | tr '[:lower:]' '[:upper:]'
#去掉标签符号
echo "xiong,chao" | tr -d '[:punct:]'
