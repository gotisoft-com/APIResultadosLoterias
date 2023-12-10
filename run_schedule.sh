#!/bin/bash
cd /var/www/html/loteriaapi && php artisan schedule:run >> /dev/null 2>&1
