<?php

namespace Espay\Pg\Model\Invoice\Total;

use Magento\Sales\Model\Order\Invoice\Total\AbstractTotal;

class Fee extends AbstractTotal
{
    /**
     * @param \Magento\Sales\Model\Order\Invoice $invoice
     * @return $this
     */
    public function collect(\Magento\Sales\Model\Order\Invoice $invoice)
    {
        $invoice->setEspayfee(0);

        $amount = $invoice->getOrder()->getEspayfee();
        $invoice->setEspayfee($amount);

        $invoice->setGrandTotal($invoice->getGrandTotal() + $invoice->getEspayfee());
        $invoice->setBaseGrandTotal($invoice->getBaseGrandTotal() + $invoice->getEspayfee());

        return $this;
    }
}
