# HSTS Redirector
if you use Google Workspace for your domain and want to redirect to custom
domains you aren't allowed to if your domain is set up with an HSTS security
measure.  You can check at [https://hstspreload.org](https://hstspreload.org).

This means that setting a custom domain like mail.example.comm won't work for
you. This solution fixes the limitation by checking the hostname of the
request and the redirecting to the correct gmail location for that hostname.
