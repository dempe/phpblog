#!/usr/bin/env zsh

find ./output -type f ! -name '.git'
rm -rf ./output/notes
wget --directory-prefix=output/ -k -E -r -l 10 -p -N -F -nH http://0.0.0.0:2048
for f in $(find ./output -type f ! -name '.git'); do mv "$f" $(echo $f | sed 's/\.php\.html/.html/'); done
for f in $(find ./output -type f ! -name '.git'); do sed -i '' 's/\.php\.html/.html/g' "$f"; done
