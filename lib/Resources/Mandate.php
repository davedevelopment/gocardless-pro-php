<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a mandate, providing access to its
 * attributes
 *
 * @property-read mixed $authorisation_source
 * @property-read mixed $consent_parameters
 * @property-read mixed $consent_type
 * @property-read mixed $created_at
 * @property-read mixed $funds_settlement
 * @property-read mixed $id
 * @property-read mixed $links
 * @property-read mixed $metadata
 * @property-read mixed $next_possible_charge_date
 * @property-read mixed $next_possible_standard_ach_charge_date
 * @property-read mixed $payments_require_approval
 * @property-read mixed $reference
 * @property-read mixed $scheme
 * @property-read mixed $status
 * @property-read mixed $verified_at
 */
class Mandate extends BaseResource
{
    protected $model_name = "Mandate";

    /**
     * This field is ACH specific, sometimes referred to as [SEC
     * code](https://www.moderntreasury.com/learn/sec-codes).
     * 
     * This is the way that the payer gives authorisation to the merchant.
     *   web: Authorisation is Internet Initiated or via Mobile Entry (maps to
     * SEC code: WEB)
     *   telephone: Authorisation is provided orally over telephone (maps to SEC
     * code: TEL)
     *   paper: Authorisation is provided in writing and signed, or similarly
     * authenticated (maps to SEC code: PPD)
     */
    protected $authorisation_source;

    /**
     * (Optional) Payto and VRP Scheme specific information
     */
    protected $consent_parameters;

    /**
     * (Optional) Specifies the type of authorisation agreed between the payer
     * and merchant. It can be set to one-off, recurring or standing for ACH, or
     * single, recurring and sporadic for PAD.
     */
    protected $consent_type;

    /**
     * Fixed [timestamp](#api-usage-dates-and-times), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * This field will decide how GoCardless handles settlement of funds from
     * the customer.
     * 
     * - `managed` will be moved through GoCardless' account, batched, and payed
     * out.
     * - `direct` will be a direct transfer from the payer's account to the
     * merchant where
     *   invoicing will be handled separately.
     */
    protected $funds_settlement;

    /**
     * Unique identifier, beginning with "MD". Note that this prefix may not
     * apply to mandates created before 2016.
     */
    protected $id;

    /**
     * 
     */
    protected $links;

    /**
     * Key-value store of custom data. Up to 3 keys are permitted, with key
     * names up to 50 characters and values up to 500 characters.
     */
    protected $metadata;

    /**
     * The earliest date that can be used as a `charge_date` on any newly
     * created payment for this mandate. This value will change over time.
     */
    protected $next_possible_charge_date;

    /**
     * If this is an an ACH mandate, the earliest date that can be used as a
     * `charge_date` on any newly created payment to be charged through standard
     * ACH, rather than Faster ACH. This value will change over time.
     * 
     * It is only present in the API response for ACH mandates.
     */
    protected $next_possible_standard_ach_charge_date;

    /**
     * Boolean value showing whether payments and subscriptions under this
     * mandate require approval via an automated email before being processed.
     */
    protected $payments_require_approval;

    /**
     * Unique reference. Different schemes have different length and [character
     * set](#appendix-character-sets) requirements. GoCardless will generate a
     * unique reference satisfying the different scheme requirements if this
     * field is left blank.
     */
    protected $reference;

    /**
     * <a name="mandates_scheme"></a>Bank payment scheme to which this mandate
     * and associated payments are submitted. Can be supplied or automatically
     * detected from the customer's bank account.
     */
    protected $scheme;

    /**
     * One of:
     * <ul>
     * <li>`pending_customer_approval`: the mandate has not yet been signed by
     * the second customer</li>
     * <li>`pending_submission`: the mandate has not yet been submitted to the
     * customer's bank</li>
     * <li>`submitted`: the mandate has been submitted to the customer's bank
     * but has not been processed yet</li>
     * <li>`active`: the mandate has been successfully set up by the customer's
     * bank</li>
     * <li>`suspended_by_payer`: the mandate has been suspended by payer</li>
     * <li>`failed`: the mandate could not be created</li>
     * <li>`cancelled`: the mandate has been cancelled</li>
     * <li>`expired`: the mandate has expired due to dormancy</li>
     * <li>`consumed`: the mandate has been consumed and cannot be reused (note
     * that this only applies to schemes that are per-payment authorised)</li>
     * <li>`blocked`: the mandate has been blocked and payments cannot be
     * created</li>
     * </ul>
     */
    protected $status;

    /**
     * [Timestamp](#api-usage-dates-and-times) recording when this mandate was
     * verified.
     */
    protected $verified_at;

}
