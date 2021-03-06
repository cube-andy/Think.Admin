<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3ef7a459e4b29cdf35865d01f6cf929
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
        'cc56288302d9df745d97c934d6a6e5f0' => __DIR__ . '/..' . '/topthink/think-queue/src/common.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\mongo\\' => 12,
            'think\\helper\\' => 13,
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
            'think\\' => 6,
        ),
        'W' => 
        array (
            'Wechat\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\mongo\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-mongo/src',
        ),
        'think\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/thinkphp/library/think',
            1 => __DIR__ . '/..' . '/topthink/think-queue/src',
        ),
        'Wechat\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qrcode/src',
        ),
    );

    public static $classMap = array (
        'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/Controller/QrCodeController.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\Configuration' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/DependencyInjection/Configuration.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\EndroidQrCodeExtension' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/DependencyInjection/EndroidQrCodeExtension.php',
        'Endroid\\QrCode\\Bundle\\EndroidQrCodeBundle' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/EndroidQrCodeBundle.php',
        'Endroid\\QrCode\\Bundle\\Twig\\Extension\\QrCodeExtension' => __DIR__ . '/..' . '/endroid/qrcode/src/Bundle/Twig/Extension/QrCodeExtension.php',
        'Endroid\\QrCode\\Exceptions\\DataDoesntExistsException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/DataDoesntExistsException.php',
        'Endroid\\QrCode\\Exceptions\\FreeTypeLibraryMissingException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/FreeTypeLibraryMissingException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionFailedException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageFunctionFailedException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionUnknownException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageFunctionUnknownException.php',
        'Endroid\\QrCode\\Exceptions\\ImageSizeTooLargeException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageSizeTooLargeException.php',
        'Endroid\\QrCode\\Exceptions\\ImageTypeInvalidException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/ImageTypeInvalidException.php',
        'Endroid\\QrCode\\Exceptions\\VersionTooLargeException' => __DIR__ . '/..' . '/endroid/qrcode/src/Exceptions/VersionTooLargeException.php',
        'Endroid\\QrCode\\Factory\\QrCodeFactory' => __DIR__ . '/..' . '/endroid/qrcode/src/Factory/QrCodeFactory.php',
        'Endroid\\QrCode\\QrCode' => __DIR__ . '/..' . '/endroid/qrcode/src/QrCode.php',
        'Ip2Region' => __DIR__ . '/..' . '/zoujingli/ip2region/Ip2Region.php',
        'Qiniu\\Auth' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Auth.php',
        'Qiniu\\Config' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Config.php',
        'Qiniu\\Etag' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Etag.php',
        'Qiniu\\Http\\Client' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Client.php',
        'Qiniu\\Http\\Error' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Error.php',
        'Qiniu\\Http\\Request' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Request.php',
        'Qiniu\\Http\\Response' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Response.php',
        'Qiniu\\Processing\\ImageUrlBuilder' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/ImageUrlBuilder.php',
        'Qiniu\\Processing\\Operation' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/Operation.php',
        'Qiniu\\Processing\\PersistentFop' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/PersistentFop.php',
        'Qiniu\\Storage\\BucketManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/BucketManager.php',
        'Qiniu\\Storage\\FormUploader' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/FormUploader.php',
        'Qiniu\\Storage\\ResumeUploader' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/ResumeUploader.php',
        'Qiniu\\Storage\\UploadManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/UploadManager.php',
        'Qiniu\\Zone' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Zone.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/AccessException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/ExceptionInterface.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/MissingOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Options' => __DIR__ . '/..' . '/symfony/options-resolver/Options.php',
        'Symfony\\Component\\OptionsResolver\\OptionsResolver' => __DIR__ . '/..' . '/symfony/options-resolver/OptionsResolver.php',
        'Wechat\\Lib\\Cache' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/Lib/Cache.php',
        'Wechat\\Lib\\Common' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/Lib/Common.php',
        'Wechat\\Lib\\Tools' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/Lib/Tools.php',
        'Wechat\\Loader' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/Loader.php',
        'Wechat\\WechatCard' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatCard.php',
        'Wechat\\WechatCustom' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatCustom.php',
        'Wechat\\WechatDevice' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatDevice.php',
        'Wechat\\WechatExtends' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatExtends.php',
        'Wechat\\WechatMedia' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatMedia.php',
        'Wechat\\WechatMenu' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatMenu.php',
        'Wechat\\WechatOauth' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatOauth.php',
        'Wechat\\WechatPay' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatPay.php',
        'Wechat\\WechatPoi' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatPoi.php',
        'Wechat\\WechatReceive' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatReceive.php',
        'Wechat\\WechatScript' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatScript.php',
        'Wechat\\WechatService' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatService.php',
        'Wechat\\WechatUser' => __DIR__ . '/..' . '/zoujingli/wechat-php-sdk/Wechat/WechatUser.php',
        'think\\App' => __DIR__ . '/../..' . '/thinkphp/library/think/App.php',
        'think\\Build' => __DIR__ . '/../..' . '/thinkphp/library/think/Build.php',
        'think\\Cache' => __DIR__ . '/../..' . '/thinkphp/library/think/Cache.php',
        'think\\Collection' => __DIR__ . '/../..' . '/thinkphp/library/think/Collection.php',
        'think\\Config' => __DIR__ . '/../..' . '/thinkphp/library/think/Config.php',
        'think\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/Console.php',
        'think\\Controller' => __DIR__ . '/../..' . '/thinkphp/library/think/Controller.php',
        'think\\Cookie' => __DIR__ . '/../..' . '/thinkphp/library/think/Cookie.php',
        'think\\Db' => __DIR__ . '/../..' . '/thinkphp/library/think/Db.php',
        'think\\Debug' => __DIR__ . '/../..' . '/thinkphp/library/think/Debug.php',
        'think\\Env' => __DIR__ . '/../..' . '/thinkphp/library/think/Env.php',
        'think\\Error' => __DIR__ . '/../..' . '/thinkphp/library/think/Error.php',
        'think\\Exception' => __DIR__ . '/../..' . '/thinkphp/library/think/Exception.php',
        'think\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/File.php',
        'think\\Hook' => __DIR__ . '/../..' . '/thinkphp/library/think/Hook.php',
        'think\\Lang' => __DIR__ . '/../..' . '/thinkphp/library/think/Lang.php',
        'think\\Loader' => __DIR__ . '/../..' . '/thinkphp/library/think/Loader.php',
        'think\\Log' => __DIR__ . '/../..' . '/thinkphp/library/think/Log.php',
        'think\\Model' => __DIR__ . '/../..' . '/thinkphp/library/think/Model.php',
        'think\\Paginator' => __DIR__ . '/../..' . '/thinkphp/library/think/Paginator.php',
        'think\\Process' => __DIR__ . '/../..' . '/thinkphp/library/think/Process.php',
        'think\\Queue' => __DIR__ . '/..' . '/topthink/think-queue/src/Queue.php',
        'think\\Request' => __DIR__ . '/../..' . '/thinkphp/library/think/Request.php',
        'think\\Response' => __DIR__ . '/../..' . '/thinkphp/library/think/Response.php',
        'think\\Route' => __DIR__ . '/../..' . '/thinkphp/library/think/Route.php',
        'think\\Session' => __DIR__ . '/../..' . '/thinkphp/library/think/Session.php',
        'think\\Template' => __DIR__ . '/../..' . '/thinkphp/library/think/Template.php',
        'think\\Url' => __DIR__ . '/../..' . '/thinkphp/library/think/Url.php',
        'think\\Validate' => __DIR__ . '/../..' . '/thinkphp/library/think/Validate.php',
        'think\\View' => __DIR__ . '/../..' . '/thinkphp/library/think/View.php',
        'think\\cache\\Driver' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/Driver.php',
        'think\\cache\\driver\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/File.php',
        'think\\cache\\driver\\Lite' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Lite.php',
        'think\\cache\\driver\\Memcache' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Memcache.php',
        'think\\cache\\driver\\Memcached' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Memcached.php',
        'think\\cache\\driver\\Redis' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Redis.php',
        'think\\cache\\driver\\Sqlite' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Sqlite.php',
        'think\\cache\\driver\\Wincache' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Wincache.php',
        'think\\cache\\driver\\Xcache' => __DIR__ . '/../..' . '/thinkphp/library/think/cache/driver/Xcache.php',
        'think\\captcha\\Captcha' => __DIR__ . '/..' . '/topthink/think-captcha/src/Captcha.php',
        'think\\captcha\\CaptchaController' => __DIR__ . '/..' . '/topthink/think-captcha/src/CaptchaController.php',
        'think\\composer\\Plugin' => __DIR__ . '/..' . '/topthink/think-installer/src/Plugin.php',
        'think\\composer\\ThinkExtend' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkExtend.php',
        'think\\composer\\ThinkFramework' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkFramework.php',
        'think\\composer\\ThinkTesting' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkTesting.php',
        'think\\config\\driver\\Ini' => __DIR__ . '/../..' . '/thinkphp/library/think/config/driver/Ini.php',
        'think\\config\\driver\\Json' => __DIR__ . '/../..' . '/thinkphp/library/think/config/driver/Json.php',
        'think\\config\\driver\\Xml' => __DIR__ . '/../..' . '/thinkphp/library/think/config/driver/Xml.php',
        'think\\console\\Command' => __DIR__ . '/../..' . '/thinkphp/library/think/console/Command.php',
        'think\\console\\Input' => __DIR__ . '/../..' . '/thinkphp/library/think/console/Input.php',
        'think\\console\\Output' => __DIR__ . '/../..' . '/thinkphp/library/think/console/Output.php',
        'think\\console\\command\\Build' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Build.php',
        'think\\console\\command\\Clear' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Clear.php',
        'think\\console\\command\\Help' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Help.php',
        'think\\console\\command\\Lists' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Lists.php',
        'think\\console\\command\\Make' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/Make.php',
        'think\\console\\command\\make\\Controller' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/make/Controller.php',
        'think\\console\\command\\make\\Model' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/make/Model.php',
        'think\\console\\command\\optimize\\Autoload' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Autoload.php',
        'think\\console\\command\\optimize\\Config' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Config.php',
        'think\\console\\command\\optimize\\Route' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Route.php',
        'think\\console\\command\\optimize\\Schema' => __DIR__ . '/../..' . '/thinkphp/library/think/console/command/optimize/Schema.php',
        'think\\console\\input\\Argument' => __DIR__ . '/../..' . '/thinkphp/library/think/console/input/Argument.php',
        'think\\console\\input\\Definition' => __DIR__ . '/../..' . '/thinkphp/library/think/console/input/Definition.php',
        'think\\console\\input\\Option' => __DIR__ . '/../..' . '/thinkphp/library/think/console/input/Option.php',
        'think\\console\\output\\Ask' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Ask.php',
        'think\\console\\output\\Descriptor' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Descriptor.php',
        'think\\console\\output\\Formatter' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Formatter.php',
        'think\\console\\output\\Question' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/Question.php',
        'think\\console\\output\\descriptor\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/descriptor/Console.php',
        'think\\console\\output\\driver\\Buffer' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/driver/Buffer.php',
        'think\\console\\output\\driver\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/driver/Console.php',
        'think\\console\\output\\driver\\Nothing' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/driver/Nothing.php',
        'think\\console\\output\\formatter\\Stack' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/formatter/Stack.php',
        'think\\console\\output\\formatter\\Style' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/formatter/Style.php',
        'think\\console\\output\\question\\Choice' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/question/Choice.php',
        'think\\console\\output\\question\\Confirmation' => __DIR__ . '/../..' . '/thinkphp/library/think/console/output/question/Confirmation.php',
        'think\\controller\\Rest' => __DIR__ . '/../..' . '/thinkphp/library/think/controller/Rest.php',
        'think\\controller\\Yar' => __DIR__ . '/../..' . '/thinkphp/library/think/controller/Yar.php',
        'think\\db\\Builder' => __DIR__ . '/../..' . '/thinkphp/library/think/db/Builder.php',
        'think\\db\\Connection' => __DIR__ . '/../..' . '/thinkphp/library/think/db/Connection.php',
        'think\\db\\Query' => __DIR__ . '/../..' . '/thinkphp/library/think/db/Query.php',
        'think\\db\\builder\\Mysql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Mysql.php',
        'think\\db\\builder\\Pgsql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Pgsql.php',
        'think\\db\\builder\\Sqlite' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Sqlite.php',
        'think\\db\\builder\\Sqlsrv' => __DIR__ . '/../..' . '/thinkphp/library/think/db/builder/Sqlsrv.php',
        'think\\db\\connector\\Mysql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Mysql.php',
        'think\\db\\connector\\Pgsql' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Pgsql.php',
        'think\\db\\connector\\Sqlite' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Sqlite.php',
        'think\\db\\connector\\Sqlsrv' => __DIR__ . '/../..' . '/thinkphp/library/think/db/connector/Sqlsrv.php',
        'think\\db\\exception\\BindParamException' => __DIR__ . '/../..' . '/thinkphp/library/think/db/exception/BindParamException.php',
        'think\\db\\exception\\DataNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/db/exception/DataNotFoundException.php',
        'think\\db\\exception\\ModelNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/db/exception/ModelNotFoundException.php',
        'think\\debug\\Console' => __DIR__ . '/../..' . '/thinkphp/library/think/debug/Console.php',
        'think\\debug\\Html' => __DIR__ . '/../..' . '/thinkphp/library/think/debug/Html.php',
        'think\\exception\\ClassNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ClassNotFoundException.php',
        'think\\exception\\DbException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/DbException.php',
        'think\\exception\\ErrorException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ErrorException.php',
        'think\\exception\\Handle' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/Handle.php',
        'think\\exception\\HttpException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/HttpException.php',
        'think\\exception\\HttpResponseException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/HttpResponseException.php',
        'think\\exception\\PDOException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/PDOException.php',
        'think\\exception\\RouteNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/RouteNotFoundException.php',
        'think\\exception\\TemplateNotFoundException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/TemplateNotFoundException.php',
        'think\\exception\\ThrowableError' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ThrowableError.php',
        'think\\exception\\ValidateException' => __DIR__ . '/../..' . '/thinkphp/library/think/exception/ValidateException.php',
        'think\\helper\\Arr' => __DIR__ . '/..' . '/topthink/think-helper/src/Arr.php',
        'think\\helper\\Hash' => __DIR__ . '/..' . '/topthink/think-helper/src/Hash.php',
        'think\\helper\\Str' => __DIR__ . '/..' . '/topthink/think-helper/src/Str.php',
        'think\\helper\\Time' => __DIR__ . '/..' . '/topthink/think-helper/src/Time.php',
        'think\\helper\\hash\\Bcrypt' => __DIR__ . '/..' . '/topthink/think-helper/src/hash/Bcrypt.php',
        'think\\helper\\hash\\Md5' => __DIR__ . '/..' . '/topthink/think-helper/src/hash/Md5.php',
        'think\\log\\driver\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/log/driver/File.php',
        'think\\log\\driver\\Socket' => __DIR__ . '/../..' . '/thinkphp/library/think/log/driver/Socket.php',
        'think\\log\\driver\\Test' => __DIR__ . '/../..' . '/thinkphp/library/think/log/driver/Test.php',
        'think\\model\\Collection' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Collection.php',
        'think\\model\\Merge' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Merge.php',
        'think\\model\\Pivot' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Pivot.php',
        'think\\model\\Relation' => __DIR__ . '/../..' . '/thinkphp/library/think/model/Relation.php',
        'think\\model\\relation\\BelongsTo' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/BelongsTo.php',
        'think\\model\\relation\\BelongsToMany' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/BelongsToMany.php',
        'think\\model\\relation\\HasMany' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/HasMany.php',
        'think\\model\\relation\\HasManyThrough' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/HasManyThrough.php',
        'think\\model\\relation\\HasOne' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/HasOne.php',
        'think\\model\\relation\\MorphMany' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/MorphMany.php',
        'think\\model\\relation\\MorphOne' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/MorphOne.php',
        'think\\model\\relation\\MorphTo' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/MorphTo.php',
        'think\\model\\relation\\OneToOne' => __DIR__ . '/../..' . '/thinkphp/library/think/model/relation/OneToOne.php',
        'think\\mongo\\Builder' => __DIR__ . '/..' . '/topthink/think-mongo/src/Builder.php',
        'think\\mongo\\Connection' => __DIR__ . '/..' . '/topthink/think-mongo/src/Connection.php',
        'think\\mongo\\Query' => __DIR__ . '/..' . '/topthink/think-mongo/src/Query.php',
        'think\\paginator\\driver\\Bootstrap' => __DIR__ . '/../..' . '/thinkphp/library/think/paginator/driver/Bootstrap.php',
        'think\\process\\Builder' => __DIR__ . '/../..' . '/thinkphp/library/think/process/Builder.php',
        'think\\process\\Utils' => __DIR__ . '/../..' . '/thinkphp/library/think/process/Utils.php',
        'think\\process\\exception\\Failed' => __DIR__ . '/../..' . '/thinkphp/library/think/process/exception/Failed.php',
        'think\\process\\exception\\Timeout' => __DIR__ . '/../..' . '/thinkphp/library/think/process/exception/Timeout.php',
        'think\\process\\pipes\\Pipes' => __DIR__ . '/../..' . '/thinkphp/library/think/process/pipes/Pipes.php',
        'think\\process\\pipes\\Unix' => __DIR__ . '/../..' . '/thinkphp/library/think/process/pipes/Unix.php',
        'think\\process\\pipes\\Windows' => __DIR__ . '/../..' . '/thinkphp/library/think/process/pipes/Windows.php',
        'think\\queue\\CallQueuedHandler' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/CallQueuedHandler.php',
        'think\\queue\\Connector' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Connector.php',
        'think\\queue\\Job' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Job.php',
        'think\\queue\\Listener' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Listener.php',
        'think\\queue\\Queueable' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Queueable.php',
        'think\\queue\\ShouldQueue' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/ShouldQueue.php',
        'think\\queue\\Worker' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/Worker.php',
        'think\\queue\\command\\Listen' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Listen.php',
        'think\\queue\\command\\Restart' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Restart.php',
        'think\\queue\\command\\Subscribe' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Subscribe.php',
        'think\\queue\\command\\Work' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/command/Work.php',
        'think\\queue\\connector\\Database' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Database.php',
        'think\\queue\\connector\\Redis' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Redis.php',
        'think\\queue\\connector\\Sync' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Sync.php',
        'think\\queue\\connector\\Topthink' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/connector/Topthink.php',
        'think\\queue\\job\\Database' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Database.php',
        'think\\queue\\job\\Redis' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Redis.php',
        'think\\queue\\job\\Sync' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Sync.php',
        'think\\queue\\job\\Topthink' => __DIR__ . '/..' . '/topthink/think-queue/src/queue/job/Topthink.php',
        'think\\response\\Json' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Json.php',
        'think\\response\\Jsonp' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Jsonp.php',
        'think\\response\\Redirect' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Redirect.php',
        'think\\response\\View' => __DIR__ . '/../..' . '/thinkphp/library/think/response/View.php',
        'think\\response\\Xml' => __DIR__ . '/../..' . '/thinkphp/library/think/response/Xml.php',
        'think\\session\\driver\\Memcache' => __DIR__ . '/../..' . '/thinkphp/library/think/session/driver/Memcache.php',
        'think\\session\\driver\\Memcached' => __DIR__ . '/../..' . '/thinkphp/library/think/session/driver/Memcached.php',
        'think\\session\\driver\\Redis' => __DIR__ . '/../..' . '/thinkphp/library/think/session/driver/Redis.php',
        'think\\template\\TagLib' => __DIR__ . '/../..' . '/thinkphp/library/think/template/TagLib.php',
        'think\\template\\driver\\File' => __DIR__ . '/../..' . '/thinkphp/library/think/template/driver/File.php',
        'think\\template\\taglib\\Cx' => __DIR__ . '/../..' . '/thinkphp/library/think/template/taglib/Cx.php',
        'think\\view\\driver\\Php' => __DIR__ . '/../..' . '/thinkphp/library/think/view/driver/Php.php',
        'think\\view\\driver\\Think' => __DIR__ . '/../..' . '/thinkphp/library/think/view/driver/Think.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3ef7a459e4b29cdf35865d01f6cf929::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3ef7a459e4b29cdf35865d01f6cf929::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf3ef7a459e4b29cdf35865d01f6cf929::$classMap;

        }, null, ClassLoader::class);
    }
}
