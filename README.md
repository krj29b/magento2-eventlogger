## magento2-eventlogger

### Simple Magneto 2 module for logging events.

#### Installation:
copy to {{magento_root}}/app/code/

```bash
php bin/magento module:enable JKrawczyk_EventLogger
php bin/magento setup:upgrade
php bin/magento setup:di:compile
```
#### Logging:
Event log is created in {{magento_root}}/var/log/event_logger.log

Please use it for debug only - be sure to disable it afterwards.  
Magento event logs consume a lot of disk space.

