<?php
$lang->cmd_advanced_mailer = 'Advanced Mailer (with SMS)';
$lang->cmd_advanced_mailer_general_config = 'General settings';
$lang->cmd_advanced_mailer_is_enabled = 'Enable module';
$lang->cmd_advanced_mailer_is_enabled_yes = 'Enabled';
$lang->cmd_advanced_mailer_is_enabled_no = 'Disabled';
$lang->cmd_advanced_mailer_logging = 'Logging';
$lang->cmd_advanced_mailer_log_mail = 'Log Mail';
$lang->cmd_advanced_mailer_log_mail_errors = 'Log Mail Errors';
$lang->cmd_advanced_mailer_log_sms = 'Log SMS';
$lang->cmd_advanced_mailer_log_sms_errors = 'Log SMS Errors';
$lang->cmd_advanced_mailer_log_yes = 'Yes';
$lang->cmd_advanced_mailer_log_no = 'No';
$lang->cmd_advanced_mailer_sending_method_config = 'Default Sending Method';
$lang->cmd_advanced_mailer_about_sending_method_config = 'Please fill all of the boxes.';
$lang->cmd_advanced_mailer_sending_method = 'Sending method';
$lang->cmd_advanced_mailer_about_sending_method = 'You can change the default sending method in the <a href="index.php?module=admin&act=dispAdminConfigNotification" target="_blank">Notification Settings</a> screen.';
$lang->cmd_advanced_mailer_sending_method_default = 'Default sending method';
$lang->cmd_advanced_mailer_sending_method_exceptions = 'Exceptions';
$lang->cmd_advanced_mailer_smtp_manual_entry = 'Manual entry';
$lang->cmd_advanced_mailer_smtp_host = 'SMTP host';
$lang->cmd_advanced_mailer_smtp_port = 'SMTP port';
$lang->cmd_advanced_mailer_smtp_security = 'SMTP security';
$lang->cmd_advanced_mailer_smtp_security_ssl = 'SSL';
$lang->cmd_advanced_mailer_smtp_security_tls = 'TLS (STARTTLS)';
$lang->cmd_advanced_mailer_smtp_security_none = 'None';
$lang->cmd_advanced_mailer_smtp_user = 'Username';
$lang->cmd_advanced_mailer_smtp_pass = 'Password';
$lang->cmd_advanced_mailer_api_key = 'API key';
$lang->cmd_advanced_mailer_api_secret = 'API secret';
$lang->cmd_advanced_mailer_api_domain = 'Domain';
$lang->cmd_advanced_mailer_api_token = 'API token';
$lang->cmd_advanced_mailer_api_type = 'API type';
$lang->cmd_advanced_mailer_api_type_free = 'Free account';
$lang->cmd_advanced_mailer_api_type_paid = 'Paid account';
$lang->cmd_advanced_mailer_api_user = 'Username';
$lang->cmd_advanced_mailer_api_pass = 'Password';
$lang->cmd_advanced_mailer_sender_key = 'Sender key';
$lang->cmd_advanced_mailer_sender_identity = 'Sender Identity';
$lang->cmd_advanced_mailer_about_sender_identity = 'You can change the sender\'s name and e-mail address in the <a href="index.php?module=admin&act=dispAdminConfigNotification" target="_blank">Notification Settings</a> screen.';
$lang->cmd_advanced_mailer_sender_name = 'Sender\'s name';
$lang->cmd_advanced_mailer_sender_email = 'Sender\'s email';
$lang->cmd_advanced_mailer_reply_to = 'Reply-To email';
$lang->cmd_advanced_mailer_force_sender = 'Always Use This Email';
$lang->cmd_advanced_mailer_about_force_sender = 'Automatically change to the email address above if another module tries to send from a different address.';
$lang->cmd_advanced_mailer_about_force_sender_caution_line_1 = 'Caution: If you use SMTP with a free e-mail service, the sender\'s address must correspond to the SMTP login credentials.';
$lang->cmd_advanced_mailer_about_force_sender_caution_line_2 = 'The original sender\'s address will be used as Reply-To for your convenience.';
$lang->cmd_advanced_mailer_spf_dkim_setting = 'SPF/DKIM Setting Guide';
$lang->cmd_advanced_mailer_about_spf_dkim_setting = 'This is only applicable when sending emails from your own domain. Some APIs are not supported.';
$lang->cmd_advanced_mailer_not_applicable_because_sender_domain = 'Not applicable to the sender\'s domain.';
$lang->cmd_advanced_mailer_not_applicable_because_sending_method = 'Not applicable to the selected sending method.';
$lang->cmd_advanced_mailer_domain_count = '%d domains';
$lang->cmd_advanced_mailer_dns_hostname = 'DNS hostname';
$lang->cmd_advanced_mailer_txt_record = 'TXT record';
$lang->cmd_advanced_mailer_check = 'Check';
$lang->cmd_advanced_mailer_nothing_to_check = 'There is nothing to check.';
$lang->cmd_advanced_mailer_check_failure = 'Check failure.';
$lang->cmd_advanced_mailer_check_no_records = 'has no TXT records.';
$lang->cmd_advanced_mailer_check_result = 'has the following TXT records.';
$lang->cmd_advanced_mailer_other_info = 'Note';
$lang->cmd_advanced_mailer_other_info_mail_spf = 'In order to send mail to Korean recipients from your own server, please register a <a href="https://www.kisarbl.or.kr/" target="_blank">white domain</a> with KISA.';
$lang->cmd_advanced_mailer_other_info_ses_dkim = 'Please create three CNAME records according to the directions found in your AWS management console.';
$lang->cmd_advanced_mailer_other_info_mailgun_dkim = 'The DKIM hostname may be different from what is shown here.';
$lang->cmd_advanced_mailer_other_info_postmark_dkim = 'Please see the Sender Signatures page of your Postmark account for the exact DKIm hostname to use.';
$lang->cmd_advanced_mailer_other_info_woorimail_dkim = 'Please log into Woorimail to see your DKIM settings.';
$lang->cmd_advanced_mailer_ellipsis = '(see API for full value)';
$lang->cmd_advanced_mailer_mail_test = 'Mail Test';
$lang->cmd_advanced_mailer_recipient_name = 'Recipient\'s name';
$lang->cmd_advanced_mailer_recipient_email = 'Recipient\'s email';
$lang->cmd_advanced_mailer_send = 'Send';
$lang->cmd_advanced_mailer_test_result = 'Test result';
$lang->cmd_advanced_mailer_exception_domains = 'Exception domains';
$lang->cmd_advanced_mailer_exception_disabled = 'Use default';
$lang->cmd_advanced_mailer_exception_domains_list = 'List of domains';
$lang->cmd_advanced_mailer_about_exception_domains_list = 'Domains should be separated by commas or line breaks. (Example: gmail.com, yahoo.com)';
$lang->cmd_advanced_mailer_about_exception_domains = 'When sending to domains listed here, the specified sending method will be used instead of the default.';
$lang->cmd_advanced_mailer_exception_group = 'Exception Group';
$lang->cmd_advanced_mailer_use_exceptions = 'Exception domains';
$lang->cmd_advanced_mailer_use_exceptions_yes = 'Test with exceptions as configured';
$lang->cmd_advanced_mailer_use_exceptions_no = 'Ignore exceptions and only test the default sending method';
$lang->msg_advanced_mailer_about_dummy = 'Dummy does not actually send any email. It only records them. Use this option for testing.';
$lang->msg_advanced_mailer_about_dummy_exceptions = 'Caution: if you have set up exception domains, email will be sent to those domains.';
$lang->msg_advanced_mailer_sending_method_is_invalid = 'Please select a valid sending method.';
$lang->msg_advanced_mailer_sending_method_is_not_configured = 'The selected sending method (%s) has not been fully configured. Please return to General Settings and finish configuring it.';
$lang->msg_advanced_mailer_smtp_host_is_invalid = 'Please enter a valid SMTP server name.';
$lang->msg_advanced_mailer_smtp_port_is_invalid = 'Please enter a valid SMTP port number.';
$lang->msg_advanced_mailer_smtp_security_is_invalid = 'Please select a valid SMTP security scheme.';
$lang->msg_advanced_mailer_username_is_empty = 'Please enter a username for the sending method you selected.';
$lang->msg_advanced_mailer_password_is_empty = 'Please enter a password for the sending method you selected.';
$lang->msg_advanced_mailer_aws_region_is_invalid = 'Please select a valid AWS Region.';
$lang->msg_advanced_mailer_aws_access_key_is_empty = 'Please enter a valid AWS Access Key.';
$lang->msg_advanced_mailer_aws_secret_key_is_empty = 'Please enter a valid AWS Secret Key.';
$lang->msg_advanced_mailer_domain_is_empty = 'Please enter a valid domain.';
$lang->msg_advanced_mailer_api_key_is_empty = 'Please enter a valid API Key.';
$lang->msg_advanced_mailer_sender_name_is_empty = 'Please enter the sender\'s name.';
$lang->msg_advanced_mailer_sender_email_is_empty = 'Please enter the sender\'s email address.';
$lang->msg_advanced_mailer_sender_email_is_invalid = 'The sender\'s email address is invalid.';
$lang->msg_advanced_mailer_reply_to_is_invalid = 'The Reply-To email address is invalid.';
$lang->msg_advanced_mailer_recipient_name_is_empty = 'Please enter the recipient\'s name.';
$lang->msg_advanced_mailer_recipient_email_is_empty = 'Please enter the recipient\'s email address.';
$lang->msg_advanced_mailer_recipient_email_is_invalid = 'The recipient\'s email address is invalid.';
$lang->msg_advanced_mailer_test_success = 'The test was successful. Please check your email.';
$lang->msg_advanced_mailer_google_account_security = 'Either your login credentials are incorrect, or the SMTP connection was blocked by Google account security settings.<br />Please <a href="https://support.google.com/mail/answer/14257" target="_blank">see here</a> for more information.';
$lang->msg_advanced_mailer_naver_smtp_disabled = 'Either your login credentials are incorrect, or POP3/SMTP is not enabled on your Naver account.';
$lang->msg_advanced_mailer_unknown_error = 'An unknown error occurred.';
$lang->msg_advanced_mailer_log_is_empty = 'There are no entries to display.';
$lang->cmd_advanced_mailer_status_sender = 'Sender';
$lang->cmd_advanced_mailer_status_recipient = 'Recipient';
$lang->cmd_advanced_mailer_status_subject = 'Subject';
$lang->cmd_advanced_mailer_status_content = 'Content';
$lang->cmd_advanced_mailer_status_sending_method = 'Method';
$lang->cmd_advanced_mailer_status_time = 'Time';
$lang->cmd_advanced_mailer_status = 'Status';
$lang->cmd_advanced_mailer_status_success = 'Success';
$lang->cmd_advanced_mailer_status_error = 'Error';
$lang->cmd_advanced_mailer_status_error_msg = 'Error message';
$lang->cmd_advanced_mailer_status_calling_script = 'Called from';
$lang->cmd_advanced_mailer_clear_log_condition_all = 'Everything';
$lang->cmd_advanced_mailer_clear_log_condition = 'Over %d days';
$lang->cmd_advanced_mailer_clear_log_button = 'Clear old logs';
$lang->cmd_advanced_mailer_sms_test = 'SMS Test';
$lang->cmd_advanced_mailer_recipient_number = 'Recipient\'s number';
$lang->cmd_advanced_mailer_country_code = 'Country code';
$lang->cmd_advanced_mailer_country_code_help = 'Please leave the country code empty if you are sending to a domestic number.';
$lang->cmd_advanced_mailer_test_content = 'This is an SMS test from Rhymix.';
$lang->msg_advanced_mailer_recipient_number_is_empty = 'Please enter a phone number for the recipient.';
$lang->msg_advanced_mailer_content_is_empty = 'Please enter the content for your test SMS.';
$lang->msg_advanced_mailer_test_success_sms = 'The test was successful. Please check your SMS.';