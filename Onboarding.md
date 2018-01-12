# Infrastructure and application setup for new clients

*Welcome to the process of setting up your infrastructure and your application!*

Details about [infrastructure and source code management](/master/CV.md)

### Choose infrastructure providers

- Domain registrar (AWS, Gandi, noip, dyn, Rackforest/.hu)
- DNS provider (AWS, HE, Cloudflare, [Google](https://cloud.google.com/dns/pricing), Rackforest/.hu)
- Server provider (UpCloud)
- SSL certificate provider for HTTPS ([Cheapsslsecurity.com](https://cheapsslsecurity.com/rapidssl/rapidsslcertificate.html), [SSLMate](https://sslmate.com/), DigiCert)
- CDN provider (AWS, KeyCDN)
- Transactional email provider (AWS, SparkPost)
- Storage provider (AWS, Backblaze B2, Selectel)
- Incoming ESP (G Suite, [Protonmail](https://protonmail.com/signup))

[.hu domain regisztrátorok](http://www.domain.hu/domain/)

[Google Cloud Platform Premium Support for $150/mo](https://cloud.google.com/support/?options=premium-support#options)

[AWS certificates for internal usage only](https://aws.amazon.com/certificate-manager/faqs/#services_used)

### UpCloud registration

- Referral URL
- My Account / Billing / MANUAL
- My Account / Billing / AUTOMATED / Credit Card drop-down
- Servers / Deploy a server
- Servers / Server listing / (server name) / IP ADDRESSES / REVERSE DNS NAME Public IPv4 + IPv6
- Document server IP + password

### Amazon Web Services registration

- https://aws.amazon.com/
- Account type: Professional
- Support Plan: Basic
- Route53 / Domain + DNS
- CloudFront / CDN
- SES / Domain + SMTP credentials
  + [Move Out of the Sandbox](https://docs.aws.amazon.com/ses/latest/DeveloperGuide/request-production-access.html)
  + Bounce notification
- S3 / Server backup bucket
- IAM / Route53 API user + CloudFront API user + S3 API user
- Document credentials

### Infrastructure setup

- Document in hosting.yml / server.yml
- Gain access to providers (web based sub-account or API)
- Manage migrations
- PTR/IPv4, PTR/IPv6 records
- DNS records (check, clean up, monitor)
- Incoming ESP and bounce notification
- My email address: `webmaster@COMPANY.TLD`
- Whitelisted IP-s (office)

### Application setup

- 3rd parties (document, gain access, set up)
- User names and SSH keys
- Git repository, branch usage (git flow)
- Issue tracker
- Paid plugins, libraries (updates, gain access, support)
- Application environment definition
- Set up CI
- Write deploy script
- Notifications (email, chat, SMS)