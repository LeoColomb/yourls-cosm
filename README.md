Cosm-for-Yourls
==================

Puch to Cosm [YOURLS](http://yourls.org) data

Description
-----------

*Cosm for Yourls* put to Cosm YOURLS data, 
to get datastreams of number of clicks and links 
in your YOURLS installation.

Requirements
------------

* A [YOURLS instance v1.5.1+](http://code.google.com/p/yourls/)
* cURL library installed

Installation
------------

### Git

1. SSH into your server and `cd [YOURLS_ROOT]/user/plugins`
2. `git clone git://github.com/LeoColomb/Cosm-for-Yourls.git cosm-data`
3. Activate the plugin from the YOURLS dashboard

Updating is also really simple: Just `git pull origin` to update the plugin.

### Manual

1. Download *Cosm for Yourls*
2. In `/user/plugins`, create a new folder named `cosm-data`
3. Unzip and copy files in this new directory
4. Activate the plugin from YOURLS' dashboard