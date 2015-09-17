### Unix User Management
Assume this is using account that has root / administartive privileges.

#### User Add
```
useradd awsp
```

#### User Add w/ home directory (/home/awsp)
```
useradd -m awsp
```

#### User password
```
passwd awsp
```

#### Change someone's password
```
passwd awsp
```

#### Add new user to a group caleld `a_group`
```
useradd -G a_group -m awsp
```

#### Add existing user to a group called `a_group`
```
usermod -G a_group awsp
```

#### Make `bash` as default Shell for a user, assuming `/bin/bash` is the location of bash
```
usermod -s /bin/bash awsp
```

#### Delete a user
```
userdel awsp
```

#### Change my current password
```
passwd
```





