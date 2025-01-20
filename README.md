# DDEV NextCloud

Development environment to run [NextCloud](https://nextcloud.com/) in [DDEV](https://ddev.com/).

## Usage

1. Install [DDEV](https://ddev.com/)
2. Clone the repository
   ```
   git clone https://github.com/RobLoach/ddev-nextcloud.git
   cd ddev-nextcloud
   ```
3. Start DDEV   
   ```
   ddev start
   ```
4. Visit the instance in your browser
   ```
   http://nextcloud.ddev.site
   ```
5. Log in...
   ```
   Username: admin
   Password: admin
   ```

## Features

These are a few of the developer features available.

### CLI

The NextCloud [`occ` Command Line Interface](https://docs.nextcloud.com/server/latest/admin_manual/occ_command.html) is available by running...

```
ddev occ
```

### Cron

While NextCloud will run cron via AJAX when browsing, you can run it manually with...

```
ddev cron
```

### Mail

When NextCloud sends emails, it can be reviewed with [DDEV's Mailpit](https://ddev.readthedocs.io/en/stable/users/usage/developer-tools/#email-capture-and-review-mailpit)...

```
http://nextcloud.ddev.site:8026
```

## License

[MIT](LICENSE)
