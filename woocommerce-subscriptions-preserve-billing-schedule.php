<?php
/**
 * Plugin Name: WooCommerce Subscriptions - Preserve Billing Schedule
 * Plugin URI: https://github.com/Prospress/woocommerce-subscriptions-preserve-billing-schedule
 * Description: By default, WooCommerce Subscriptions will calculate the next payment date for a subscription from the time of the last payment. This plugin changes it to calculate the next payment date from the scheduled payment date, not the time the payment was actually processed.
 * Author: Prospress Inc.
 * Author URI: http://prospress.com/
 * Version: 1.0.0
 * License: GPLv3
 *
 * GitHub Plugin URI: Prospress/woocommerce-subscriptions-preserve-billing-schedule
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Brent Shepherd
 * @since 1.0.0
 */

add_filter( 'wcs_calculate_next_payment_from_last_payment', '__return_false' );