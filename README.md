# Google Workspace Subdomain HSTS Redirect Script

This PHP script provides a simple yet effective way to manage subdomain redirects for various Google Workspace services such as Docs, Drive, Calendar, Sites, and Groups. It's especially useful in environments where HTTP Strict Transport Security (HSTS) is enforced, ensuring that these redirects work seamlessly without security warnings.

## Features

- **Automatic Subdomain Detection**: The script automatically detects the subdomain from the HTTP request and redirects to the corresponding Google Workspace service.
- **Support for Custom Google Workspace Domains**: Easily integrate with your custom Google Workspace domain.
- **HSTS Compatible**: Works effectively even when HSTS is enabled.
- **Supports Major Google Workspace Services**: Includes redirects for Google Docs, Drive, Calendar, Sites, and Groups, with a default redirect to Gmail.

## Installation

1. **Clone the repository**:

   ```bash
   git clone git@github.com:cpierce/hsts-redirect.git
   ```

2. **Upload the script**: Place the script on your web server, ideally at the root directory to catch all subdomain requests.

3. **Configure your web server**: Ensure your web server is configured to handle PHP scripts and redirect requests to this script.

## Usage

- Once installed, the script will automatically handle redirects based on the accessed subdomain. It is recommended to use LetsEncrypt certificates for these subdomains.
- For example:
  - `docs.yourdomain.com` will redirect to Google Docs.
  - `drive.yourdomain.com` will redirect to Google Drive.
  - Other supported subdomains include `calendar`, `sites`, and `groups`.
  - Any other subdomain defaults to Gmail.

## Customization

- You can modify the `array` in the top of the script to add or change redirection rules.
- Ensure the domain names in the redirect URLs match your Google Workspace setup.

## Requirements

- A web server with PHP support.
- A certbot installation on the server. Since we are stapling we assume that we want this for the subdomains we are creating. #TODO - Add Example of my nginx conf.
- A Google Workspace account with a custom domain.

## Security Notes

- The script uses 301 redirects, which are permanent. Be cautious when testing.
- Ensure your server is secure, especially if enforcing HSTS.

## Contributing

- Contributions are welcome! Feel free to submit pull requests or open issues for any improvements or bug fixes.

## License

- This project is open-source and available under MIT License.
