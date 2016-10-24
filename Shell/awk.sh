#!/bin/sh

#当前目录下文件的大小
ll | awk 'BEGIN{size=0;} {size=size+$5;} END{print size}'

#首先将第一个文件的第一列和第二列作为数组a的key，存储第一个文件的整行数据，然后判断第二个文件的前两列是否在数组a中，若在则输出第一个文件的数据及第二个文件的第三列数据
awk '
    BEGIN{FS=OFS="\t"}  
    ARGIND==1{
        a[$1"\t"$2] = $0
    }
    ARGIND==2{
        if($1"\t"$2 in a) print a[$1"\t"$2], $3
    }
' base_feature.txt watch_time.txt > base_data.txt

#统计文件中第二个域去重后的数量
cat test | awk -F'\t' '{if(!seen[$2]++) print $0}' | wc -l

#统计文件第二个域倒数第二个字符为2的数据量   注：substr(字符串，起始位置，长度)
cat clicklog_20161022 | awk -F'\t' 'BEGIN{count=0}{if(substr($2,length($2)-1,1)==2) count++}END{print count}'

#统计文件第二个域倒数第二个字符为2的数据量并且第二个域不重复的数量
cat clicklog_20161022 | awk -F'\t' 'BEGIN{count=0}{if(substr($2,length($2)-1,1)==2 && !seen[$2]++) count++}END{print count}'

#AWK中常用的内置函数-字符串函数

#match：通过正则表达式来匹配子字符串在字符串中第一次出现的位置(RSTART)以及符合条件的子字符串的长度(RLENGTH)，
awk 'BEGIN{match("banana",/(an)+/);print RSTART,RLENGTH}'    #输出2 4

#split：根据指定的分隔符来将字符串分割成数组  类似于PHP中的explode()
awk 'BEGIN{str="root:x:0:0:root:/root:/bin/bash";split(str,array,":");for(one in array) print one,array[one];}'

#sub：将原字符串中第一个(最左边)符合正则表达式的子字符串替换为新字符串。第二个参数“新字符串”中可用”&”来表示“符合条件的字符串”
awk 'BEGIN{A="a6b12anan212.456an12";sub(/(an)+[0-9]*/,"999",A);print A}' #输出：a6b12999.456an12
awk 'BEGIN{A="a6b12anan212.456an12";sub(/(an)+[0-9]*/,"[&]",A);print A}' #输出：a6b12[anan212].456an12

#gsub：与sub类似，不同的是gsub会替换匹配到的所有内容
awk 'BEGIN{A="a6b12anan212.456an12";gsub(/(an)+[0-9]*/,"99",A);print A}' #输出：a6b1299.45699

#AWK中常用的内置函数-数学函数
rand()：返回介于0与1之间的(近似)随机数值
srand([x])：返回介于0与1之间的(近似)随机数值，0 <rand()<1。除非自己指定rand()函数起始的种子，否则每次执行awk程序时，rand()函数都将使用同一个內定的种子，来产生随机数。
int(x)：返回x的整数部分，去掉小数
sqrt(x)：返回x的平方根
exp(x)：将返回e 的x次方
log(x)：返回x以e为底的对数值
sin(x)
cos(x)
atan2(y，x)：返回y/x 的tan反函数之值，返回值系以弧度为单位




