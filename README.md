> IMPORTANT: This code is made available in the hope that it will be useful, but **without any warranty**. See the GNU General Public License included with the code for more details. Automattic or WooCommerce support services are also not available to assist with the use of this code.

# WooCommerce Subscriptions - Preserve Billing Schedule

Using [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/)?

For most subscriptions, the [next payment date will be calculated based on the date of the last payment](https://docs.woocommerce.com/document/subscriptions/renewal-process/#next-payment-date-calculation). This is to ensure the subscriber receives access to the subscription for the full period of each renewal.

For example, if a monthly subscription product is purchased on the 1st of January, when it renews on the 1st of February, the next renewal payment date will be calculated as 1 month from the 1st of February, which means it will be calculated as 1st of March. If the automatic renewal payment fails on the 1st of March and the customer then manually pays for the renewal on the 3rd of March, the next payment date will be calculated as the 3rd of April, not the 1st of April.

With this plugin, the **next renewal payment date will always be calculated from the last scheduled payment date**. This ensures the billing schedule is preserved, even if the payment is late.

> Note: this plugin was originally made available [via a Gist](https://gist.github.com/thenbrent/7a99fe32fd834c1a98fa46d74700367a). It's been moved into this repository because of the discussion and popularity of that gist.

### Early Renewal Calculations

Subscriptions offers the ability to allow your customers to [renew subscriptions before their next payment date](https://docs.woocommerce.com/document/subscriptions/version-2-3/#section-5).

The default behaviour of an early renewal is **extend the next payment date from the existing next payment date**.

For example, consider an annual subscription with the next payment date of June 1 2018. If a customer renews early on the May 1 2019, the next payment date will be rescheduled for June 1 2020, not May 1 2020.

This is the same behaviour this mini-plugin implements, so there is no change to that early renewal behaviour when this plugin is active.

## Requirements

This plugin requires WooCommerce 2.4 or newer and Subscriptions 2.0 or newer.

## Installation

To install:

1. Download the latest version of the plugin [here](https://github.com/Prospress/woocommerce-subscriptions-preserve-billing-schedule/archive/master.zip)
1. Go to **Plugins > Add New > Upload** administration screen on your WordPress site
1. Select the ZIP file you just downloaded
1. Click **Install Now**
1. Click **Activate**

## Reporting Issues

If you find an problem or would like to request this plugin be extended, please [open a new Issue](https://github.com/Prospress/woocommerce-subscriptions-preserve-billing-schedule/issues/new).

---

<p align="center">
	<a href="https://prospress.com/">
		<img src="https://cloud.githubusercontent.com/assets/235523/11986380/bb6a0958-a983-11e5-8e9b-b9781d37c64a.png" width="160">
	</a>
</p>
