Vsftpd

#### Installation
```
sudo apt-get install vsftpd
```

#### Configuration
```
anonymous_enable=NO
local_enable=YES
local_umask=022    -- file permission
chown_uploads=YES
chown_username=www-data
chown_upload_mode=0644
```
