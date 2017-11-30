#!/bin/sh
git add .
nowtime=`date`
# echo $nowtime
git commit -m nowtime
git push -u origin master

