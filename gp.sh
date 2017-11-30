#!/bin/sh
git add .
nowtime=`date +%Y%m%d"-%H:%M:%S"`
echo $nowtime
git commit -m $nowtime
git push -u origin master

