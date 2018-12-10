<?php

//add email_consent col to coupon table:
"ALTER TABLE `coupon` ADD `email_consent` INT(1) NULL COMMENT '0 - not subscribed; 1 - subscribed' AFTER `time_generated`;";

