<?php

namespace Streamcart\Magento2\ViewModel;

use Streamcart\Magento2\Model\Config\Config;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class MainScript implements ArgumentInterface
{
    private Config $config;

    public function __construct(
        Config $config
    )
    {
        $this->config = $config;
    }

    public function isMainScriptEnabled(): bool
    {
        return $this->config->isMainScriptEnabled();
    }

    public function getPublicKey(): ?string
    {
        return $this->config->getPublicKey();
    }
}
