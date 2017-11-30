#!/bin/sh
git add .
nowtime=date --date='0 days ago' "+%Y-%m-%d %H:%M:%S"
git commit -m nowtime

