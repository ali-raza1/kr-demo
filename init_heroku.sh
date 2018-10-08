#!/usr/bin/env bash

# set -o errexit # exit on errors

m_id=$(grep "\$ID = " index.php | grep "kr_\([a-zA-Z0-9_\-]\+\)" -o)

if [ "x$m_id" = "x" ]; then
  echo "[-] Please edit 'index.php' to change \$ID. Then run me again"
  exit 1
fi

if [ ! -d "common" ]; then
  rm -rf .git
  git clone git@bitbucket.org:kaamandroffler/smcp-dp-common.git common && rm -rf common/.git
fi

if [ -d "HTML/images/kr_" ]; then
  mv -v "HTML/images/kr_" "HTML/images/$m_id"
fi

composer install

git init .
git add .
git commit -am "init"

heroku apps:create --region eu --remote heroku
heroku access:add gabriel@kaam.fr
heroku git:remote --remote heroku

git push -u heroku master master
