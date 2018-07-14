#!/bin/bash

IFS_BACKUP=$IFS
IFS=$'\n'
LF=$'\\\x0A'

CSV_FILE=20180618_works.csv

for line in `cat ${CSV_FILE}`
do
 colmun1=`echo ${line} | cut -d ',' -f 1`
 colmun2=`echo ${line} | cut -d ',' -f 2`
 colmun3=`echo ${line} | cut -d ',' -f 3`
 colmun3a=`echo ${colmun3} | sed 's/@@@/'"$LF"'/g'`
 colmun4=`echo ${line} | cut -d ',' -f 4`
 colmun5=`echo ${line} | cut -d ',' -f 5`
 colmun6=`echo ${line} | cut -d ',' -f 6`

 ATTACHMENT_ID="$(wp media import picture/${colmun1} --porcelain)"
 POST_ID="$(wp post create --post_type=works --post_title=${colmun2} --post_status=publish --porcelain)"
 wp post meta set $POST_ID description "${colmun3a}"
 wp post meta set $POST_ID img "${ATTACHMENT_ID}"
 wp post term set $POST_ID category "${colmun4}"
 wp post term add $POST_ID post_tag "${colmun5}"
 wp post term add $POST_ID post_tag "${colmun6}"

# echo "項目1:${cwd}"
 echo "項目1:${colmun1}"
 echo "項目2:${colmun2}"
 echo "項目3:${colmun3a}"
 echo "項目4:${colmun4}"
 echo "項目5:${colmun5}"
 echo "項目6:${colmun6}"
# echo "行終了"

done

IFS=$IFS_BACKUP