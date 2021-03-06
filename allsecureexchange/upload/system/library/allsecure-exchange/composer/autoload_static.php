<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita76a5ede5180613cf5fd08504eb2048923f960c3065c7c7baec38b9c1e393de4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'AllsecureExchange\\Client\\' => 27,
            'AllsecureExchange\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'AllsecureExchange\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/client',
        ),
        'AllsecureExchange\\' => 
        array (
            0 => __DIR__ . '/..' . '/plugin',
        ),
    );

    public static $classMap = array (
        'AllsecureExchange\\Client\\Callback\\ChargebackData' => __DIR__ . '/..' . '/client/Callback/ChargebackData.php',
        'AllsecureExchange\\Client\\Callback\\ChargebackReversalData' => __DIR__ . '/..' . '/client/Callback/ChargebackReversalData.php',
        'AllsecureExchange\\Client\\Callback\\Result' => __DIR__ . '/..' . '/client/Callback/Result.php',
        'AllsecureExchange\\Client\\Client' => __DIR__ . '/..' . '/client/Client.php',
        'AllsecureExchange\\Client\\CustomerProfile\\CustomerData' => __DIR__ . '/..' . '/client/CustomerProfile/CustomerData.php',
        'AllsecureExchange\\Client\\CustomerProfile\\DeleteProfileResponse' => __DIR__ . '/..' . '/client/CustomerProfile/DeleteProfileResponse.php',
        'AllsecureExchange\\Client\\CustomerProfile\\GetProfileResponse' => __DIR__ . '/..' . '/client/CustomerProfile/GetProfileResponse.php',
        'AllsecureExchange\\Client\\CustomerProfile\\PaymentData\\CardData' => __DIR__ . '/..' . '/client/CustomerProfile/PaymentData/CardData.php',
        'AllsecureExchange\\Client\\CustomerProfile\\PaymentData\\IbanData' => __DIR__ . '/..' . '/client/CustomerProfile/PaymentData/IbanData.php',
        'AllsecureExchange\\Client\\CustomerProfile\\PaymentData\\PaymentData' => __DIR__ . '/..' . '/client/CustomerProfile/PaymentData/PaymentData.php',
        'AllsecureExchange\\Client\\CustomerProfile\\PaymentData\\WalletData' => __DIR__ . '/..' . '/client/CustomerProfile/PaymentData/WalletData.php',
        'AllsecureExchange\\Client\\CustomerProfile\\PaymentInstrument' => __DIR__ . '/..' . '/client/CustomerProfile/PaymentInstrument.php',
        'AllsecureExchange\\Client\\CustomerProfile\\UpdateProfileResponse' => __DIR__ . '/..' . '/client/CustomerProfile/UpdateProfileResponse.php',
        'AllsecureExchange\\Client\\Data\\CreditCardCustomer' => __DIR__ . '/..' . '/client/Data/CreditCardCustomer.php',
        'AllsecureExchange\\Client\\Data\\Customer' => __DIR__ . '/..' . '/client/Data/Customer.php',
        'AllsecureExchange\\Client\\Data\\Data' => __DIR__ . '/..' . '/client/Data/Data.php',
        'AllsecureExchange\\Client\\Data\\IbanCustomer' => __DIR__ . '/..' . '/client/Data/IbanCustomer.php',
        'AllsecureExchange\\Client\\Data\\Item' => __DIR__ . '/..' . '/client/Data/Item.php',
        'AllsecureExchange\\Client\\Data\\Request' => __DIR__ . '/..' . '/client/Data/Request.php',
        'AllsecureExchange\\Client\\Data\\Result\\CreditcardData' => __DIR__ . '/..' . '/client/Data/Result/CreditcardData.php',
        'AllsecureExchange\\Client\\Data\\Result\\IbanData' => __DIR__ . '/..' . '/client/Data/Result/IbanData.php',
        'AllsecureExchange\\Client\\Data\\Result\\PhoneData' => __DIR__ . '/..' . '/client/Data/Result/PhoneData.php',
        'AllsecureExchange\\Client\\Data\\Result\\ResultData' => __DIR__ . '/..' . '/client/Data/Result/ResultData.php',
        'AllsecureExchange\\Client\\Data\\Result\\WalletData' => __DIR__ . '/..' . '/client/Data/Result/WalletData.php',
        'AllsecureExchange\\Client\\Exception\\ClientException' => __DIR__ . '/..' . '/client/Exception/ClientException.php',
        'AllsecureExchange\\Client\\Exception\\InvalidValueException' => __DIR__ . '/..' . '/client/Exception/InvalidValueException.php',
        'AllsecureExchange\\Client\\Exception\\RateLimitException' => __DIR__ . '/..' . '/client/Exception/RateLimitException.php',
        'AllsecureExchange\\Client\\Exception\\TimeoutException' => __DIR__ . '/..' . '/client/Exception/TimeoutException.php',
        'AllsecureExchange\\Client\\Exception\\TypeException' => __DIR__ . '/..' . '/client/Exception/TypeException.php',
        'AllsecureExchange\\Client\\Http\\ClientInterface' => __DIR__ . '/..' . '/client/Http/ClientInterface.php',
        'AllsecureExchange\\Client\\Http\\CurlClient' => __DIR__ . '/..' . '/client/Http/CurlClient.php',
        'AllsecureExchange\\Client\\Http\\CurlExec' => __DIR__ . '/..' . '/client/Http/CurlExec.php',
        'AllsecureExchange\\Client\\Http\\Exception\\ClientException' => __DIR__ . '/..' . '/client/Http/Exception/ClientException.php',
        'AllsecureExchange\\Client\\Http\\Exception\\ResponseException' => __DIR__ . '/..' . '/client/Http/Exception/ResponseException.php',
        'AllsecureExchange\\Client\\Http\\Response' => __DIR__ . '/..' . '/client/Http/Response.php',
        'AllsecureExchange\\Client\\Http\\ResponseInterface' => __DIR__ . '/..' . '/client/Http/ResponseInterface.php',
        'AllsecureExchange\\Client\\Json\\DataObject' => __DIR__ . '/..' . '/client/Json/DataObject.php',
        'AllsecureExchange\\Client\\Json\\ErrorResponse' => __DIR__ . '/..' . '/client/Json/ErrorResponse.php',
        'AllsecureExchange\\Client\\Json\\ResponseObject' => __DIR__ . '/..' . '/client/Json/ResponseObject.php',
        'AllsecureExchange\\Client\\Schedule\\ScheduleData' => __DIR__ . '/..' . '/client/Schedule/ScheduleData.php',
        'AllsecureExchange\\Client\\Schedule\\ScheduleError' => __DIR__ . '/..' . '/client/Schedule/ScheduleError.php',
        'AllsecureExchange\\Client\\Schedule\\ScheduleResult' => __DIR__ . '/..' . '/client/Schedule/ScheduleResult.php',
        'AllsecureExchange\\Client\\StatusApi\\StatusRequestData' => __DIR__ . '/..' . '/client/StatusApi/StatusRequestData.php',
        'AllsecureExchange\\Client\\StatusApi\\StatusResult' => __DIR__ . '/..' . '/client/StatusApi/StatusResult.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\AbstractTransaction' => __DIR__ . '/..' . '/client/Transaction/Base/AbstractTransaction.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\AbstractTransactionWithReference' => __DIR__ . '/..' . '/client/Transaction/Base/AbstractTransactionWithReference.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\AddToCustomerProfileInterface' => __DIR__ . '/..' . '/client/Transaction/Base/AddToCustomerProfileInterface.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\AddToCustomerProfileTrait' => __DIR__ . '/..' . '/client/Transaction/Base/AddToCustomerProfileTrait.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\AmountableInterface' => __DIR__ . '/..' . '/client/Transaction/Base/AmountableInterface.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\AmountableTrait' => __DIR__ . '/..' . '/client/Transaction/Base/AmountableTrait.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\ItemsInterface' => __DIR__ . '/..' . '/client/Transaction/Base/ItemsInterface.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\ItemsTrait' => __DIR__ . '/..' . '/client/Transaction/Base/ItemsTrait.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\OffsiteInterface' => __DIR__ . '/..' . '/client/Transaction/Base/OffsiteInterface.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\OffsiteTrait' => __DIR__ . '/..' . '/client/Transaction/Base/OffsiteTrait.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\ScheduleInterface' => __DIR__ . '/..' . '/client/Transaction/Base/ScheduleInterface.php',
        'AllsecureExchange\\Client\\Transaction\\Base\\ScheduleTrait' => __DIR__ . '/..' . '/client/Transaction/Base/ScheduleTrait.php',
        'AllsecureExchange\\Client\\Transaction\\Capture' => __DIR__ . '/..' . '/client/Transaction/Capture.php',
        'AllsecureExchange\\Client\\Transaction\\Debit' => __DIR__ . '/..' . '/client/Transaction/Debit.php',
        'AllsecureExchange\\Client\\Transaction\\Deregister' => __DIR__ . '/..' . '/client/Transaction/Deregister.php',
        'AllsecureExchange\\Client\\Transaction\\Error' => __DIR__ . '/..' . '/client/Transaction/Error.php',
        'AllsecureExchange\\Client\\Transaction\\Payout' => __DIR__ . '/..' . '/client/Transaction/Payout.php',
        'AllsecureExchange\\Client\\Transaction\\Preauthorize' => __DIR__ . '/..' . '/client/Transaction/Preauthorize.php',
        'AllsecureExchange\\Client\\Transaction\\Refund' => __DIR__ . '/..' . '/client/Transaction/Refund.php',
        'AllsecureExchange\\Client\\Transaction\\Register' => __DIR__ . '/..' . '/client/Transaction/Register.php',
        'AllsecureExchange\\Client\\Transaction\\Result' => __DIR__ . '/..' . '/client/Transaction/Result.php',
        'AllsecureExchange\\Client\\Transaction\\VoidTransaction' => __DIR__ . '/..' . '/client/Transaction/VoidTransaction.php',
        'AllsecureExchange\\Client\\Xml\\Generator' => __DIR__ . '/..' . '/client/Xml/Generator.php',
        'AllsecureExchange\\Client\\Xml\\Parser' => __DIR__ . '/..' . '/client/Xml/Parser.php',
        'AllsecureExchange\\AllsecureExchangeGateway' => __DIR__ . '/..' . '/plugin/gateway.php',
        'AllsecureExchange\\AllsecureExchangePlugin' => __DIR__ . '/..' . '/plugin/plugin.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita76a5ede5180613cf5fd08504eb2048923f960c3065c7c7baec38b9c1e393de4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita76a5ede5180613cf5fd08504eb2048923f960c3065c7c7baec38b9c1e393de4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita76a5ede5180613cf5fd08504eb2048923f960c3065c7c7baec38b9c1e393de4::$classMap;

        }, null, ClassLoader::class);
    }
}
