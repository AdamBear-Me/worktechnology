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

#统计文件第二个域倒数第二个字符为2的数据量   
cat clicklog_20161022 | awk -F'\t' 'BEGIN{count=0}{if(substr($2,length($2)-1,1)==2) count++}END{print count}'

#统计文件第二个域倒数第二个字符为2的数据量并且第二个域不重复的数量
cat clicklog_20161022 | awk -F'\t' 'BEGIN{count=0}{if(substr($2,length($2)-1,1)==2 && !seen[$2]++) count++}END{print count}'