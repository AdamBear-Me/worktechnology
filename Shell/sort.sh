#!/bin/sh
#默认以第一列排序，升序asc
sort uid_time_new.txt

#在输出中去掉重复行
sort -u uid_time_new.txt

#降序 desc
sort -u -r uid_time_new.txt

#-o是为了防止输出到原文件时原文件为空，因为如果重定向 > 原文件时原文件内容会变空
sort -u -r uid_time_new.txt -o uid_time_new.txt

#-n是以数值来排序，默认是以字符排序
sort -n number

#-k是用来指定列排序 -t是来指定列的分隔符
sort -t$'\t' -n -k2 uid_time_new.txt

#首先以第二列排序，在第二列相同的值中以第三列排序，以第三列相同的值中以第一列排序
sort -t$'\t' -n -k2 -k3 -k1 uid_time_new.txt

#从第一列的第二个字符开始排序  备注：-k的语法格式：[ FStart [ .CStart ] ] [ Modifier ] [ , [ FEnd [ .CEnd ] ][ Modifier ] ] 
#FStart表示使用的域，CStart表示域中第几个字符，Modifier表示其它参数，FEnd表示排序的域尾，CEnd表示域尾的第几个字符，注：若省略FEnd则表示排序到本域的最后一个字符
sort -t$' ' -k1.2 weibo.txt

#只以第一列的第三个字符排序，如果第一列相同则对第三列倒序排序
sort -t$' ' -k 1.2,1.2 -k3rn weibo.txt

#首先只以第一列排序，第一列若相同只以第二列倒序排序，第二列再相同以第三列排序
sort -t$'\t' -k1,1n -k2,2rn -k3,3n uid_time_new.txt

#其它常用参数
-f会将小写字母都转换为大写字母来进行比较，亦即忽略大小写
-c会检查文件是否已排好序，如果乱序，则输出第一个乱序的行的相关信息，最后返回1
-C会检查文件是否已排好序，如果乱序，不输出内容，仅返回1
-M会以月份来排序，比如JAN小于FEB等等
-b会忽略每一行前面的所有空白部分，从第一个可见字符开始比较。