<?php

namespace CastleIt\Streamcart\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    public const XML_PATH_MAIN_SCRIPT_ACTIVE = 'castleit_streamcart/main_script/active';
    public const XML_PATH_MAIN_SCRIPT_PUBLIC_KEY = 'castleit_streamcart/main_script/public_key';

    private ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isMainScriptEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(Config::XML_PATH_MAIN_SCRIPT_ACTIVE);
    }

    public function getPublicKey(): ?string
    {
        return $this->scopeConfig->getValue(Config::XML_PATH_MAIN_SCRIPT_PUBLIC_KEY);
    }

}
