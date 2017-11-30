#!/bin/sh
return = `git add .`
nowtime=`date +%Y%m%d"-%H:%M:%S"`
echo $return
git commit -m $nowtime
git push -u origin master

