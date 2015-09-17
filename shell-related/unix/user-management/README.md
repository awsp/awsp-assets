### Unix User Management
Assume this is using account that has root / administartive privileges.

#### User Add
```
useradd <username>
```

#### User Add w/ home directory (/home/awsp)
```
useradd -m <username>
```

#### User password
```
passwd <username>
```

#### Change someone's password
```
passwd <username>
```

#### Add new user to a group called `a_group`
```
useradd -G a_group -m <username>
```

#### Add existing user to a group called `a_group`
```
usermod -G a_group <username>
```

#### Make `bash` as default Shell for a user, assuming `/bin/bash` is the location of bash
```
usermod -s /bin/bash <username>
```

#### Delete a user
```
userdel <username>
```

#### Change my current password
```
passwd
```

#### Add user to sudo group to allow them to do sudo
```
usermod -a -G sudo <username>
```
