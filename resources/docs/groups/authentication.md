# Authentication


## Login
Get a JWT via given credentials.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/app/auth',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'cell_phone' => '+5511988887777',
            'fb_token' => '123456',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cell_phone": "+5511988887777",
    "fb_token": "123456"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/app/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cell_phone":"+5511988887777","fb_token":"123456"}'

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
<div id="execution-results-POSTv1-app-auth" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-app-auth"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-app-auth"></code></pre>
</div>
<div id="execution-error-POSTv1-app-auth" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-app-auth"></code></pre>
</div>
<form id="form-POSTv1-app-auth" data-method="POST" data-path="v1/app/auth" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-app-auth', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-app-auth" onclick="tryItOut('POSTv1-app-auth');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-app-auth" onclick="cancelTryOut('POSTv1-app-auth');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-app-auth" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/app/auth</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>cell_phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cell_phone" data-endpoint="POSTv1-app-auth" data-component="body" required  hidden>
<br>
The user cell phone.
</p>
<p>
<b><code>fb_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="fb_token" data-endpoint="POSTv1-app-auth" data-component="body" required  hidden>
<br>
The firebase user token.
</p>

</form>


## Register
Register a new user.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/app/register',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'first_name',
                'contents' => 'Eduardo'
            ],
            [
                'name' => 'last_name',
                'contents' => 'da Silva Santos'
            ],
            [
                'name' => 'cell_phone',
                'contents' => '+5511988887777'
            ],
            [
                'name' => 'email',
                'contents' => 'eduardo@example.com'
            ],
            [
                'name' => 'confirmation_code',
                'contents' => '123456'
            ],
            [
                'name' => 'attachmentBase64[name]',
                'contents' => 'joao.jpg'
            ],
            [
                'name' => 'attachmentBase64[content]',
                'contents' => 'base64:lifeisloka...'
            ],
            [
                'name' => 'attachment',
                'contents' => fopen('/tmp/phpATT7yC', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/register"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('first_name', 'Eduardo');
body.append('last_name', 'da Silva Santos');
body.append('cell_phone', '+5511988887777');
body.append('email', 'eduardo@example.com');
body.append('confirmation_code', '123456');
body.append('attachmentBase64[name]', 'joao.jpg');
body.append('attachmentBase64[content]', 'base64:lifeisloka...');
body.append('attachment', document.querySelector('input[name="attachment"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/app/register" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "first_name=Eduardo" \
    -F "last_name=da Silva Santos" \
    -F "cell_phone=+5511988887777" \
    -F "email=eduardo@example.com" \
    -F "confirmation_code=123456" \
    -F "attachmentBase64[name]=joao.jpg" \
    -F "attachmentBase64[content]=base64:lifeisloka..." \
    -F "attachment=@/tmp/phpATT7yC" 
```


> Example response (201):

```json
{
    "id": 1,
    "firstName": "Eduardo",
    "lastName": "da Silva Santos",
    "cellPhone": "+5511988887777",
    "email": "eduardo@example.com",
    "photoUrl": "https:\/\/photo.jpg",
    "following": 0,
    "followers": 0,
    "donations": 0,
    "donationsAmount": 0,
    "institutionsDonated": 0
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "cell_phone": [
            "The cell phone has already been taken."
        ]
    }
}
```
<div id="execution-results-POSTv1-app-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-app-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-app-register"></code></pre>
</div>
<div id="execution-error-POSTv1-app-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-app-register"></code></pre>
</div>
<form id="form-POSTv1-app-register" data-method="POST" data-path="v1/app/register" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-app-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-app-register" onclick="tryItOut('POSTv1-app-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-app-register" onclick="cancelTryOut('POSTv1-app-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-app-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/app/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTv1-app-register" data-component="body" required  hidden>
<br>
The user first name.
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTv1-app-register" data-component="body"  hidden>
<br>
The user surname.
</p>
<p>
<b><code>cell_phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cell_phone" data-endpoint="POSTv1-app-register" data-component="body" required  hidden>
<br>
The user cell phone.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTv1-app-register" data-component="body" required  hidden>
<br>
The user email The value must be a valid email address.
</p>
<p>
<b><code>confirmation_code</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="confirmation_code" data-endpoint="POSTv1-app-register" data-component="body" required  hidden>
<br>
The firebase SMS confirmation code.
</p>
<p>
<b><code>attachment</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="attachment" data-endpoint="POSTv1-app-register" data-component="body"  hidden>
<br>
The value must be a file.
</p>
<p>
<details>
<summary>
<b><code>attachmentBase64</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>attachmentBase64.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="attachmentBase64.name" data-endpoint="POSTv1-app-register" data-component="body"  hidden>
<br>
The name of attachment (with extension).
</p>
<p>
<b><code>attachmentBase64.content</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="attachmentBase64.content" data-endpoint="POSTv1-app-register" data-component="body"  hidden>
<br>
The content of attachment.
</p>
</details>
</p>

</form>


## Me
Show the logged user.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/users',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```bash
curl -X GET \
    -G "http://localhost/v1/app/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
{
    "id": 1,
    "firstName": "Eduardo",
    "lastName": "da Silva Santos",
    "cellPhone": "+5511988887777",
    "email": "eduardo@example.com",
    "photoUrl": "https:\/\/photo.jpg",
    "following": 0,
    "followers": 0,
    "donations": 0,
    "donationsAmount": 0,
    "institutionsDonated": 0
}
```
<div id="execution-results-GETv1-app-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-users"></code></pre>
</div>
<div id="execution-error-GETv1-app-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-users"></code></pre>
</div>
<form id="form-GETv1-app-users" data-method="GET" data-path="v1/app/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-users" onclick="tryItOut('GETv1-app-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-users" onclick="cancelTryOut('GETv1-app-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/users</code></b>
</p>
</form>


## Update
Update user.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/app/users',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'first_name',
                'contents' => 'Eduardo'
            ],
            [
                'name' => 'last_name',
                'contents' => 'da Silva Santos'
            ],
            [
                'name' => 'email',
                'contents' => 'eduardo@example.com'
            ],
            [
                'name' => 'attachmentBase64[name]',
                'contents' => 'consectetur'
            ],
            [
                'name' => 'attachmentBase64[content]',
                'contents' => 'magni'
            ],
            [
                'name' => 'attachment',
                'contents' => fopen('/tmp/phpaVcett', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/users"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('first_name', 'Eduardo');
body.append('last_name', 'da Silva Santos');
body.append('email', 'eduardo@example.com');
body.append('attachmentBase64[name]', 'consectetur');
body.append('attachmentBase64[content]', 'magni');
body.append('attachment', document.querySelector('input[name="attachment"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/app/users" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "first_name=Eduardo" \
    -F "last_name=da Silva Santos" \
    -F "email=eduardo@example.com" \
    -F "attachmentBase64[name]=consectetur" \
    -F "attachmentBase64[content]=magni" \
    -F "attachment=@/tmp/phpaVcett" 
```


> Example response (204, No Content):

```json
<Empty response>
```
<div id="execution-results-POSTv1-app-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-app-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-app-users"></code></pre>
</div>
<div id="execution-error-POSTv1-app-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-app-users"></code></pre>
</div>
<form id="form-POSTv1-app-users" data-method="POST" data-path="v1/app/users" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-app-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-app-users" onclick="tryItOut('POSTv1-app-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-app-users" onclick="cancelTryOut('POSTv1-app-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-app-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/app/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="first_name" data-endpoint="POSTv1-app-users" data-component="body"  hidden>
<br>
The user first name.
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="last_name" data-endpoint="POSTv1-app-users" data-component="body"  hidden>
<br>
The user surname.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTv1-app-users" data-component="body"  hidden>
<br>
The user email The value must be a valid email address.
</p>
<p>
<b><code>attachment</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="attachment" data-endpoint="POSTv1-app-users" data-component="body"  hidden>
<br>
The value must be a file.
</p>
<p>
<details>
<summary>
<b><code>attachmentBase64</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>attachmentBase64.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="attachmentBase64.name" data-endpoint="POSTv1-app-users" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>attachmentBase64.content</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="attachmentBase64.content" data-endpoint="POSTv1-app-users" data-component="body"  hidden>
<br>

</p>
</details>
</p>

</form>



