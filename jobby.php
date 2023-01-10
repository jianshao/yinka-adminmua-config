<?php

/**
 * 定时脚本任务
 */
$dir = __DIR__ . "/../adminmua";
require_once $dir . '/vendor/autoload.php';
$logFile = $dir . '/runtime/jobby/logs/jobs-' . date('Y-m-d', time()) . '.log';

$config = [
    'output' => $logFile,
    'maxRuntime' => null,
];

$jobby = new \Jobby\Jobby($config);

/**
 * 【公告定时发布脚本】
 * 回帖消息
 */

$jobby->add('noticeTimingCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think noticeTimingCommand',
    'schedule' => '* * * * *',
    'enabled' => false,
));

/* 【用户封禁及解封脚本】
 * 回帖消息
 */
$jobby->add('memberBlackRedisCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think memberBlackRedisCommand',
    'schedule' => '* * * * *',
    'enabled' => false,
));
/*【热度值生效与失效】
 * 回帖消息
 */
$jobby->add('vsitorExternnumberCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think vsitorExternnumberCommand',
    'schedule' => '* * * * *',
    'enabled' => true,
));
/*【BI后台数据】
 * 后台数据
 */
$jobby->add('bIDataCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think bIDataCommand',
    'schedule' => '0 6 * * *',
    'enabled' => true,
));

//【房间内数据统计脚本】
$jobby->add('roomTountCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think roomTountCommand',
    'schedule' => '15 00 * * *',
    'enabled' => false,
));

/*【房间内用户数据统计】
 * 后台数据
 */
$jobby->add('roomuserTountCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think roomuserTountCommand',
    'schedule' => '15 00 * * *',
    'enabled' => false,
));

/*【渠道数据统计】
 * 后台数据
 */
//$jobby->add('channelDataCommand', array(
//    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think channelDataCommand',
//    'schedule' => '15 00 * * *',
//    'enabled' => true,
//));

/*【//充值率统计数据】
 * 后台数据
 */
$jobby->add('bIChargeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think bIChargeCommand',
    'schedule' => '17 00 * * *',
    'enabled' => false,
));

$jobby->add('MemberBlackCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think MemberBlackCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
$jobby->add('BillDetailCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think BillDetailCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => true,
));
$jobby->add('ChannelKeepCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think ChannelKeepCommand',
    'schedule' => '0 6 * * *',
    'enabled' => false,
));

/*【热云数据统计】
 * * 后台数据
 * */
$jobby->add('ReYunCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think ReYunCommand',
    'schedule' => '0 0 * * *',
    'enabled' => false,
));
$jobby->add('ReYunListCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think ReYunListCommand',
    'schedule' => '0 0 * * *',
    'enabled' => false,
));
$jobby->add('ReYunListNewCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think ReYunListNewCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));
$jobby->add('ReYunNewCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think ReYunNewCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));
$jobby->add('UsersRetainedNewCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UsersRetainedNewCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));
$jobby->add('UsersRetainedCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UsersRetainedCommand',
    'schedule' => '* 1 * * *',
    'enabled' => false,
));
$jobby->add('AttireActiveCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think AttireActiveCommand',
    'schedule' => '* 0 * * *',
    'enabled' => false,
));
$jobby->add('BannerOpenCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think BannerOpenCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
$jobby->add('PromoteDataCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think PromoteDataCommand',
    'schedule' => '15 0 * * *',
    'enabled' => false,
));

$jobby->add('CalculateUserGetAndSendGiftsCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserGetAndSendGiftsCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));

$jobby->add('CalculateUserGetAndSendGiftsByGiftTypeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserGetAndSendGiftsByGiftTypeCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));
//跑量配置脚本
$jobby->add('CalcultePromoteRoomDataCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalcultePromoteRoomDataCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));
//跑量配置日数据脚本
$jobby->add('CalcultePromoteRoomDataByDayCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalcultePromoteRoomDataByDayCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));
$jobby->add('CalculateUserStatsByFiveMinutesCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserStatsByFiveMinutesCommand',
    'schedule' => '* * * * *',
    'enabled' => false,
));
$jobby->add('CalculateUserStatsByDayCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserStatsByDayCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));
$jobby->add('CalculateStatsByRegChannelCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateStatsByRegChannelCommand',
    'schedule' => '*/30 * * * *',
    'enabled' => true,
));
$jobby->add('NewUserByRegChannelAndSourceCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewUserByRegChannelAndSourceCommand',
    'schedule' => '*/30 * * * *',
    'enabled' => true,
));
$jobby->add('CalcultePromoteRoomTimesDataCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalcultePromoteRoomTimesDataCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
//新宝箱
$jobby->add('CalculateUserBox2Command', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserBox2Command',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
//老宝箱
$jobby->add('CalculateUserBox1Command', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserBox1Command',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));
$jobby->add('CalcultePromoteCodeRoomDataCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalcultePromoteCodeRoomDataCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));
$jobby->add('CalculteDowloadDataCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculteDowloadDataCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
//邀请码修复脚本
$jobby->add('FixInvitcodeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think FixInvitcodeCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
//淘金用户每日数据
$jobby->add('CalculateUserTaojinCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserTaojinCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
$jobby->add('CalculatePaoliangCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculatePaoliangCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => false, //老的跑量2022-01-25停掉此脚本
));
$jobby->add('CalculteUserDataByDayCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculteUserDataByDayCommand',
    'schedule' => '0 5 * * *',
    'enabled' => false,
));
$jobby->add('TurntableOutputCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think TurntableOutputCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));
//日活维度数据用户留存用户付费等
$jobby->add('NewDailyDayCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewDailyDayCommand',
    'schedule' => '0 4 * * *',
    'enabled' => true,
));

//华为数据维度数据用户留存用户付费等
$jobby->add('NewHwChannelAndSourceCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewHwChannelAndSourceCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => true,
));

//解析api的华为包数据到bi_channel_huawei表中
$jobby->add('NewHuaweiChannel', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewHuaweiChannel',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));

//渠道数据
$jobby->add('CalculateMarketChannelDatasCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateMarketChannelDatasCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));

//渠道数据新版
$jobby->add('CalculateMarketChannelDatasNewCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateMarketChannelDatasNewCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));

//ios数据维度数据用户留存用户付费等
$jobby->add('NewAppstoreChannelAndSourceCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewAppstoreChannelAndSourceCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => true,
));

//渠道，平台留存数据
$jobby->add('CalculateUserRetentionCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserRetentionCommand',
    'schedule' => '35 0 * * *',
    'enabled' => false,
));

//每日首冲数据
$jobby->add('NewFirstChargeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewFirstChargeCommand',
    'schedule' => '0 7 * * *',
    'enabled' => true,
));

//用户每日游戏数据
$jobby->add('CalculateUserGopherCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CalculateUserGopherCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => true,
));

//用户每日充值金额
$jobby->add('NewDayUserChargeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewDayUserChargeCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));

//每隔1小时修复金流数据
$jobby->add('NewOmitUserStateByIdCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewOmitUserStateByIdCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => false,
));

//用户每日凌晨2点房间收礼送礼
$jobby->add('NewDayUserGiftCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewDayUserGiftCommand',
    'schedule' => '0 2 * * *',
    'enabled' => false,
));

//每5分钟执行1次
$jobby->add('NewUserStatsByTimeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewUserStatsByTimeCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));

//按用户活动礼物维度统计产出量
$jobby->add('UserActivityGiftRewardCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UserActivityGiftRewardCommand',
    'schedule' => '0 5 * * *',
    'enabled' => false,
));

//房间推荐 判断是否到期
$jobby->add('RoomSpecialCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think RoomSpecialCommand',
    'schedule' => '*/1 * * * *',
    'enabled' => true,
));

//用户多维度留存的基础数据
$jobby->add('UserKeepDayCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UserKeepDayCommand',
    'schedule' => '0 10 * * *',
    'enabled' => true,
));

//用户在麦时长统计
$jobby->add('UserRoomMicCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UserRoomMicCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));

//invitcode丢失问题(用户注册后 暂时无获取用户的推广code,用户如果没有其他的任何行为 导致invitcode无法更新成功)
$jobby->add('SolveCodeLoseCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think SolveCodeLoseCommand',
    'schedule' => '55 23 * * *',
    'enabled' => true,
));

//根据注册ip解析注册区域问题
$jobby->add('UserRegisterByAreaCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UserRegisterByAreaCommand',
    'schedule' => '0 10 * * *',
    'enabled' => true,
));

//房间封禁 判断是否到期
$jobby->add('RoomCloseCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think RoomCloseCommand',
    'schedule' => '*/1 * * * *',
    'enabled' => true,
));

//房间隐藏
$jobby->add('RoomHideCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think RoomHideCommand',
    'schedule' => '*/1 * * * *',
    'enabled' => true,
));

//房间消费情况
$jobby->add('RoomEverydayConsumeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think RoomEverydayConsumeCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => false,
));

//asa房间引流
$jobby->add('AsaPromoteCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think AsaPromoteCommand',
    'schedule' => '*/15 * * * *',
    'enabled' => true,
));

//asa关键词汇总
$jobby->add('AsaKeywordDayCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think AsaKeywordDayCommand',
    'schedule' => '0 11 * * *',
    'enabled' => true,
));

//主播cp直刷礼物
$jobby->add('AnchorBindUserSendGiftCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think AnchorBindUserSendGiftCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));

//身份证验证-添加自由职业者
$jobby->add('IdentifyWithdrawalCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think IdentifyWithdrawalCommand',
    'schedule' => '*/1 * * * *',
    'enabled' => true,
));

//活动自动开启脚本
$jobby->add('ActivityCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think ActivityCommand',
    'schedule' => '*/1 * * * *',
    'enabled' => true,
));

//房间消费留存 入库bi_user_keep_day
$jobby->add('RoomConsumeKeepDayCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think RoomConsumeKeepDayCommand',
    'schedule' => '30  10 * * *',
    'enabled' => true,
));

//(派单)标签码绑定用户跑量数据
$jobby->add('QrcodeBindUserDataCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think QrcodeBindUserDataCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));

//(派单)房间消费用户白名单积分
$jobby->add('AnchorPromotePointCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think AnchorPromotePointCommand',
    'schedule' => '30 00 * * *',
    'enabled' => true,
));

//assetlog into es
$jobby->add('UserAssetLogInesByTimeCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UserAssetLogInesByTimeCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => true,
));

// oppo归因数据
$jobby->add('NewOppoChannelAndSourceCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think NewOppoChannelAndSourceCommand',
    'schedule' => '0 */1 * * *',
    'enabled' => true,
));


// 分表
$jobby->add('CreateTableNameCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think CreateTableNameCommand',
    'schedule' => '0 0 1 * *',
    'enabled' => true,
));


//新的在麦时长
$jobby->add('UserRoomOnMicCommand', array(
    'command' => 'php /www/wwwroot/muamaster-tag/adminmua/think UserRoomOnMicCommand',
    'schedule' => '*/5 * * * *',
    'enabled' => false,
));

$jobby->run();