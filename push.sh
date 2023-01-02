#!/bin/bash
while true; do
  git add .
  git commit -m "New-UPDATE"
  git push origin master
  sleep 300
done

