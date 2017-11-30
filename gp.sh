#!/bin/sh
out = `git add .`
nowtime=`date +%Y%m%d"-%H:%M:%S"`
echo $out
git commit -m $nowtime
git push -u origin master

