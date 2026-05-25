#!/bin/bash
# Copy custom nginx config before Azure starts nginx
cp /home/site/wwwroot/default /etc/nginx/sites-enabled/default
