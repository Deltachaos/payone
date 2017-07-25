<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Payone\Business\Payment;

use Generated\Shared\Transfer\PayoneStartPaypalExpressCheckoutRequestTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use SprykerEco\Zed\Payone\Business\Api\Request\Container\GenericPaymentContainer;

interface GenericPaymentMethodMapperInterface
{

    /**
     * @param \Generated\Shared\Transfer\PayoneStartPaypalExpressCheckoutRequestTransfer $requestTransfer
     *
     * @return \SprykerEco\Zed\Payone\Business\Api\Request\Container\GenericPaymentContainer
     */
    public function mapRequestTransferToGenericPayment(
        GenericPaymentContainer $genericPayment,
        PayoneStartPaypalExpressCheckoutRequestTransfer $requestTransfer
    );

    /**
     * @param \SprykerEco\Zed\Payone\Business\Api\Request\Container\GenericPaymentContainer $genericPayment
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \SprykerEco\Zed\Payone\Business\Api\Request\Container\GenericPaymentContainer
     */
    public function mapQuoteTransferToGenericPayment(
        GenericPaymentContainer $genericPayment,
        QuoteTransfer $quoteTransfer
    );

    /**
     * @return \SprykerEco\Zed\Payone\Business\Api\Request\Container\GenericPaymentContainer
     */
    public function createBaseGenericPaymentContainer();

}