#!/bin/bash
updatetime=`date +%Y%m%d_%H%M%S`
deployfolder="/www/wwwroot/muamaster-tag/ghadminmua_${updatetime}"


echo "create deploy folder ${deployfolder}"
mkdir -p ${deployfolder}
cd ${deployfolder}

git clone --depth=1 --branch qingqing-20221011 http://47.94.84.89:10000/build/gh-adminmua.git
cp -fR ${deployfolder}/gh-adminmua  /www/wwwroot/muamaster-tag/
echo "admin updated"


echo "create config link in /opt/game"
ln -fs /www/wwwroot/muamaster-tag/adminmua-config-prod/ghconfig/config.php /www/wwwroot/muamaster-tag/gh-adminmua/application/config.php
ln -fs /www/wwwroot/muamaster-tag/adminmua-config-prod/ghconfig/database.php /www/wwwroot/muamaster-tag/gh-adminmua/application/database.php
# chmod -R 775 /www/wwwroot/muamaster-tag/gh-adminmua-config-prod/
# chmod -R 775 /www/wwwroot/muamaster-tag/gh-adminmua/jobby.php
chmod 777 /www/wwwroot/muamaster-tag/gh-adminmua/public/
chmod 775 /www/wwwroot/muamaster-tag/gh-adminmua/think
mkdir -p /www/wwwroot/muamaster-tag/gh-adminmua/runtime/jobby/logs
chmod 777 /www/wwwroot/muamaster-tag/gh-adminmua/runtime/
chmod -R 777 /www/wwwroot/muamaster-tag/gh-adminmua/runtime/jobby/logs

rm -fr ${deployfolder}
echo "deploy folder deleted"
echo "---succ---"