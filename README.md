# Steps to use this Slim skeleton web project
## AWS / EC2 amazon linux deploy

1. Create Instance t2.micro with Amazon Linux; Free tier
2. Allow SSH and HTTP access at least through your own IPV4 address
3. Access via SSH to the server as Root
4. Install PHP use as references https://docs.aws.amazon.com/es_es/elasticbeanstalk/latest/dg/php-development-environment.html
* If you have any proble with composer installation try this: https://gist.github.com/asugai/6694502
5. Modify httpd config, move to etc/httpd/conf and open httpd.conf
  * Change each AllowOverride From None to All
  ```
  #
# Deny access to the entirety of your server's filesystem. You must
# explicitly permit access to web content directories in other 
# <Directory> blocks below.
#
<Directory />
    AllowOverride All
    Require all denied
</Directory>

#
# Relax access to content within /var/www.
#
<Directory "/var/www">
    AllowOverride All
    # Allow open access:
    Require all granted
</Directory>

# Further relax access to the default document root:
<Directory "/var/www/html">
    #
    # Possible values for the Options directive are "None", "All",
    # or any combination of:
    #   Indexes Includes FollowSymLinks SymLinksifOwnerMatch ExecCGI MultiViews
    #
    Options Indexes FollowSymLinks

    #
    # AllowOverride controls what directives may be placed in .htaccess files.
    # It can be "All", "None", or any combination of the keywords:
    #   Options FileInfo AuthConfig Limit
    #
    AllowOverride All

    #
    # Controls who can get stuff from this server.
    #
    Require all granted
</Directory>

  ```

6. Restart or start httpd services, 
> systemctl restart httpd
7. Check httpd service status
> systemctl status httpd
*Eg:
```
[xxx@ip-xxx.xxx.xxx.xxx ec2-user]# systemctl status httpd
● httpd.service - The Apache HTTP Server
     Loaded: loaded (/usr/lib/systemd/system/httpd.service; disabled; preset: d>
    Drop-In: /usr/lib/systemd/system/httpd.service.d
             └─php-fpm.conf
     Active: active (running) since Mon 2077-xx-xx 15:19:13 UTC; 20min ago
       Docs: man:httpd.service(8)
   Main PID: 2580 (httpd)
     Status: "Total requests: 8; Idle/Busy workers 100/0;Requests/sec: 0.0065; >
      Tasks: 177 (limit: 1114)
     Memory: 18.9M
```
8. Move to httpd root folder, 
> cd etc/www/html
9. Install git to clone this base project
