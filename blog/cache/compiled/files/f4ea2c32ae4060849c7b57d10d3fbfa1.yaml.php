<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shanegring/GitHub/blog/user/plugins/login/languages/en.yaml',
    'modified' => 1523548644,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Username',
            'EMAIL' => 'Email',
            'USERNAME_EMAIL' => 'Username/Email',
            'PASSWORD' => 'Password',
            'ACCESS_DENIED' => 'Access denied...',
            'LOGIN_FAILED' => 'Login failed...',
            'LOGIN_SUCCESSFUL' => 'You have been successfully logged in.',
            'BTN_LOGIN' => 'Login',
            'BTN_LOGOUT' => 'Logout',
            'BTN_FORGOT' => 'Forgot',
            'BTN_REGISTER' => 'Register',
            'BTN_RESET' => 'Reset Password',
            'BTN_SEND_INSTRUCTIONS' => 'Send Reset Instructions',
            'RESET_LINK_EXPIRED' => 'Reset link has expired, please try again',
            'RESET_PASSWORD_RESET' => 'Password has been reset',
            'RESET_INVALID_LINK' => 'Invalid reset link used, please try again',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Instructions to reset your password have been sent via email',
            'FORGOT_FAILED_TO_EMAIL' => 'Failed to email instructions, please try again later',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Cannot reset password for %s, no email address is set',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'User with username <b>%s</b> does not exist',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Cannot reset password. This site is not configured to send emails',
            'FORGOT_EMAIL_SUBJECT' => '%s Password Reset Request',
            'FORGOT_EMAIL_BODY' => '<h1>Password Reset</h1><p>Dear %1$s,</p><p>A request was made on <b>%4$s</b> to reset your password.</p><p><br /><a href="%2$s" class="btn-primary">Click this to reset your password</a><br /><br /></p><p>Alternatively, copy the following URL into your browser\'s address bar:</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Kind regards,<br /><br />%3$s</p>',
            'SESSION' => '&ldquo;Remember Me&rdquo;-Session',
            'REMEMBER_ME' => 'Remember Me',
            'REMEMBER_ME_HELP' => 'Sets a persistent cookie on your browser to allow persistent-login authentication between sessions.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Someone else has used your login information to access this page! All sessions were logged out. Please log in with your credentials and check your data.',
            'BUILTIN_CSS' => 'Use built in CSS',
            'BUILTIN_CSS_HELP' => 'Include the CSS provided by the admin plugin',
            'ROUTE' => 'Login path',
            'ROUTE_HELP' => 'Custom route to a custom login page that your theme provides',
            'ROUTE_REGISTER' => 'Registration path',
            'ROUTE_REGISTER_HELP' => 'Route to the registration page. Set this if you want to use the built-in registration page. Leave it empty if you have your own registration form',
            'USERNAME_NOT_VALID' => 'Username should be between 3 and 16 characters, including lowercase letters, numbers, underscores, and hyphens. Uppercase letters, spaces, and special characters are not allowed',
            'USERNAME_NOT_AVAILABLE' => 'Username %s already exists, please pick another username',
            'EMAIL_NOT_AVAILABLE' => 'Email address %s already exists, please pick another email address',
            'PASSWORD_NOT_VALID' => 'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters',
            'PASSWORDS_DO_NOT_MATCH' => 'Passwords do not match. Double-check you entered the same password twice',
            'USER_NEEDS_EMAIL_FIELD' => 'The user needs an email field',
            'EMAIL_SENDING_FAILURE' => 'An error occurred while sending the email',
            'ACTIVATION_EMAIL_SUBJECT' => 'Activate your account on %s',
            'ACTIVATION_EMAIL_BODY' => '<h1>Account Activation</h1><p>Hi %1$s, </p><p>Your account has been successfully created on <b>%3$s</b>, but you cannot login until it is activated.</p><p><br/><a href="%2$s" class="btn-primary">Activate Your Account Now</a><br/><br/></p><p>Alternatively, copy the following URL into your browser\'s address bar:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Kind regards,<br/><br/>%4$s</p>',
            'ACTIVATION_NOTICE_MSG' => 'Hi %s, your account is created, please check your email to fully activate it',
            'WELCOME_EMAIL_SUBJECT' => 'Welcome to %s',
            'WELCOME_EMAIL_BODY' => '<h1>Account Created</h1><p>Hi %1$s, </p><p>Your account has been successfully created on <b>%3$s</b>.</p><p><br/><a href="%2$s" class="btn-primary">Login Now</a><br/><br/></p><p>Alternatively, copy the following URL into your browser\'s address bar:</p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Kind regards,<br/><br/>%4$s</p>',
            'WELCOME_NOTICE_MSG' => 'Hi %s, your account has been successfully created',
            'NOTIFICATION_EMAIL_SUBJECT' => 'New user on %s',
            'NOTIFICATION_EMAIL_BODY' => '<h1>New User</h1><p>Hi, a new user registered on %1$s.</p><p><ul><li>Username: <b>%2$s</b></li><li>Email: <b>%3$s</b></ul><p><p><br/><a href="%4$s" class="btn-primary">Visit %1$s</a><br/><br/></p>',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => 'Activation link expired',
            'USER_ACTIVATED_SUCCESSFULLY' => 'User activated successfully',
            'INVALID_REQUEST' => 'Invalid request',
            'USER_REGISTRATION' => 'User Registration',
            'USER_REGISTRATION_ENABLED_HELP' => 'Enable the user registration',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Validate double entered password',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Validate and compare two different fields for the passwords, named `password1` and `password2`. Enable this if you have two password fields in the registration form',
            'SET_USER_DISABLED' => 'Set the user as disabled',
            'SET_USER_DISABLED_HELP' => 'Best used along with the `Send activation email` email. Adds the user to Grav, but sets it as disabled',
            'LOGIN_AFTER_REGISTRATION' => 'Login the user after registration',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Immediately login the user after the registration. If email activation is required, the user will be logged in immediately after activating the account',
            'SEND_ACTIVATION_EMAIL' => 'Send activation email',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Sends an email to the user to activate his account. Enable the `Set the user as disabled` option when using this feature, so the user will be set as disabled and an email will be sent to activate the account',
            'SEND_NOTIFICATION_EMAIL' => 'Send notification email',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Notifies the site admin that a new user has registered. The email will be sent to the `To` field in the Email Plugin configuration',
            'SEND_WELCOME_EMAIL' => 'Send welcome email',
            'SEND_WELCOME_EMAIL_HELP' => 'Sends an email to the newly registered user',
            'DEFAULT_VALUES' => 'Default values',
            'DEFAULT_VALUES_HELP' => 'List of field names and values associated, that will be added to the user profile (yaml file) by default, without being configurable by the user. Separate multiple values with a comma, with no spaces between the values',
            'ADDITIONAL_PARAM_KEY' => 'Parameter',
            'ADDITIONAL_PARAM_VALUE' => 'Value',
            'REGISTRATION_FIELDS' => 'Registration fields',
            'REGISTRATION_FIELDS_HELP' => 'Add the fields that will be added to the user Yaml file. Fields not listed here will not be added even if present in the registration form',
            'REGISTRATION_FIELD_KEY' => 'Field name',
            'REDIRECT_AFTER_LOGIN' => 'Redirect after login',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Custom route to redirect after login',
            'REDIRECT_AFTER_LOGOUT' => 'Redirect after logout',
            'REDIRECT_AFTER_LOGOUT_HELP' => 'Custom route to redirect after logout',
            'REDIRECT_AFTER_REGISTRATION' => 'Redirect after registration',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Custom route to redirect after the registration',
            'OPTIONS' => 'Options',
            'EMAIL_VALIDATION_MESSAGE' => 'Must be a valid email address',
            'PASSWORD_VALIDATION_MESSAGE' => 'Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters',
            'TIMEOUT_HELP' => 'Sets the session timeout in seconds when Remember Me is enabled and checked by the user. Minimum is 604800 which means 1 week',
            'GROUPS_HELP' => 'List of groups the new registered user will be part of, if any',
            'SITE_ACCESS_HELP' => 'List of site access levels the new registered user will have. Example: `login` -> `true` ',
            'WELCOME' => 'Welcome',
            'REDIRECT_AFTER_ACTIVATION' => 'Redirect after the user activation',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Used if the user is required to activate the account via email. Once activated, this route will be shown',
            'REGISTRATION_DISABLED' => 'Registration disabled',
            'USE_PARENT_ACL_LABEL' => 'Use parent access rules',
            'USE_PARENT_ACL_HELP' => 'Check for parent access rules if no rules are defined',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Protect a login-protected page media',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'If enabled, media of a login protected page is login protected as well and cannot be seen unless logged in',
            'SECURITY_TAB' => 'Security',
            'MAX_RESETS_COUNT' => 'Max password resets count',
            'MAX_RESETS_COUNT_HELP' => 'Password reset flood protection setting (0 - not limited)',
            'MAX_RESETS_INTERVAL' => 'Max password resets interval',
            'MAX_RESETS_INTERVAL_HELP' => 'The time interval for the max password resets count value',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'Cannot reset password for %s, password reset functionality temporarily blocked, please try later (maximum %s minutes)',
            'MAX_LOGINS_COUNT' => 'Max logins count',
            'MAX_LOGINS_COUNT_HELP' => 'Flood protection setting (0 - not limited)',
            'MAX_LOGINS_INTERVAL' => 'Max logins interval',
            'MAX_LOGINS_INTERVAL_HELP' => 'The time interval for the login count value',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Too many failed login attempted in the configured time (%s minutes)',
            'SECONDS' => 'seconds',
            'RESETS' => 'resets',
            'ATTEMPTS' => 'attempts',
            'ROUTES' => 'Routes',
            'ROUTE_FORGOT' => 'Forgot password route',
            'ROUTE_RESET' => 'Reset password route',
            'ROUTE_PROFILE' => 'User profile route',
            'ROUTE_ACTIVATE' => 'User activation route',
            'LOGGED_OUT' => 'You have been successfully logged out...',
            'PAGE_RESTRICTED' => 'Access is restricted, please login...',
            'DYNAMIC_VISIBILITY' => 'Dynamic Page Visibility',
            'DYNAMIC_VISIBILITY_HELP' => 'Allows dynamic processing of page visibility base on access rules if login.visibility_requires_access is set to true on a page'
        ]
    ]
];
