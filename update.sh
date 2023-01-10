#!/bin/bash
updatetime=`date +%Y%m%d_%H%M%S`
deployfolder="/www/wwwroot/muamaster-tag/adminmua_${updatetime}"


echo "create deploy folder ${deployfolder}"
mkdir -p ${deployfolder}
cd ${deployfolder}

git clone --depth=1 --branch qingqing-20221011 http://47.94.84.89:10000/root/adminmua.git
cp -fR ${deployfolder}/adminmua  /www/wwwroot/muamaster-tag/
echo "admin updated"


echo "create config link in /opt/game"
ln -fs /www/wwwroot/muamaster-tag/adminmua-config-prod/config /www/wwwroot/muamaster-tag/adminmua/config
ln -fs /www/wwwroot/muamaster-tag/adminmua-config-prod/jobby.php /www/wwwroot/muamaster-tag/adminmua/jobby.php
# chmod -R 775 /www/wwwroot/muamaster-tag/adminmua-config-prod/
# chmod -R 775 /www/wwwroot/muamaster-tag/adminmua/jobby.php
chmod -R 777 /www/wwwroot/muamaster-tag/adminmua/public/
chmod 775 /www/wwwroot/muamaster-tag/adminmua/think
mkdir -p /www/wwwroot/muamaster-tag/adminmua/runtime/jobby/logs
chmod 777 /www/wwwroot/muamaster-tag/adminmua/runtime/
chmod -R 777 /www/wwwroot/muamaster-tag/adminmua/runtime/jobby/logs

rm -fr ${deployfolder}
echo "deploy folder deleted"
echo "---succ---"
