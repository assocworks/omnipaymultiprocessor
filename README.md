# CiviCRM OmniPay Multiprocessor with PayFast driver

This package:
- enables single and recurring Payfast payments that are integrated into CiviCRM. 
- adds security checks recommended by Payfast
- uses curl rather than guzzle as suggested in the PayFast documentation.

This extension is a fork of Eileen McNaughton's OmniPay Multiprocessor extension. See https://github.com/eileenmcnaughton/nz.co.fuzion.omnipaymultiprocessor for more information and instructions.

This package adds a PayFast driver to Eileen's extension. The code is edited from the files at https://github.com/thephpleague/omnipay-payfast/releases.

## File changes

Changes are commented and labelled with 'aiden'.

New file:
- Added an .mgd file for PayFast to Eileen's extension's Metadata folder. /Metadata/omnipay_PayFast.mgd.php

Edited files:
- /CRM/Core/Payment/OmnipayMultiProcessor.php
- /vendor/omnipay/payfast/src/Gateway.php
- /vendor/omnipay/payfast/src/Message/CompletePurchaseRequest.php
- /vendor/omnipay/payfast/src/Message/PurchaseRequest.php
- /vendor/omnipay/payfast/src/Message/PurchaseResponse.php
