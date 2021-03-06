<?php

namespace XiaoZhu\RabbitXzBundle\Command;

class ConsumerCommand extends BaseConsumerCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setDescription('Executes a consumer');
        $this->setName('rabbitmq:consumer');
    }

    protected function getConsumerService()
    {
        return 'xiao_zhu_rabbit_xz.%s_consumer';
    }
}
