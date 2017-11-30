#!/bin/sh
git add .
nowtime=`date +%Y%m%d"/%H:%M:%S"`
git commit -m ${*}${owtime}
git push -u origin master
echo $*$nowtime

