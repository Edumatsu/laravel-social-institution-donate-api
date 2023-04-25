# Backoffice / Authentication


## Login
Get a JWT via given credentials.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/backoffice/auth',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'user' => 'causas',
            'password' => 'causas123',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user": "causas",
    "password": "causas123"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/backoffice/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user":"causas","password":"causas123"}'

```


> Example response (200):

```json
{
    "token": "eyJ0e..."
}
```
> Example response (401):

```json
{
    "message": "These credentials do not match our records."
}
```
<div id="execution-results-POSTv1-backoffice-auth" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-backoffice-auth"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-backoffice-auth"></code></pre>
</div>
<div id="execution-error-POSTv1-backoffice-auth" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-backoffice-auth"></code></pre>
</div>
<form id="form-POSTv1-backoffice-auth" data-method="POST" data-path="v1/backoffice/auth" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-backoffice-auth', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-backoffice-auth" onclick="tryItOut('POSTv1-backoffice-auth');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-backoffice-auth" onclick="cancelTryOut('POSTv1-backoffice-auth');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-backoffice-auth" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/backoffice/auth</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="POSTv1-backoffice-auth" data-component="body" required  hidden>
<br>
The username.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTv1-backoffice-auth" data-component="body" required  hidden>
<br>
The user password.
</p>

</form>



