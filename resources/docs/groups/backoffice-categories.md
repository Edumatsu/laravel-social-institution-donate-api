# Backoffice / Categories
APIs for managing categories

## List
Fetch all categories

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/categories',
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
    "http://localhost/v1/backoffice/categories"
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
    -G "http://localhost/v1/backoffice/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
<div id="execution-results-GETv1-backoffice-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-categories"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-categories"></code></pre>
</div>
<form id="form-GETv1-backoffice-categories" data-method="GET" data-path="v1/backoffice/categories" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-categories" onclick="tryItOut('GETv1-backoffice-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-categories" onclick="cancelTryOut('GETv1-backoffice-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/categories</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-categories" data-component="header"></label>
</p>
</form>


## Detail
Detail the category

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/categories/est',
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
    "http://localhost/v1/backoffice/categories/est"
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
    -G "http://localhost/v1/backoffice/categories/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (404):

```json
{
    "message": "api.resource.not.found"
}
```
<div id="execution-results-GETv1-backoffice-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-categories--category-"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-categories--category-"></code></pre>
</div>
<form id="form-GETv1-backoffice-categories--category-" data-method="GET" data-path="v1/backoffice/categories/{category}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-categories--category-" onclick="tryItOut('GETv1-backoffice-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-categories--category-" onclick="cancelTryOut('GETv1-backoffice-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/categories/{category}</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-categories--category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-categories--category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETv1-backoffice-categories--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Create
Create a new category

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/backoffice/categories',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'Apoio à Criança e Adolescente',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Apoio \u00e0 Crian\u00e7a e Adolescente"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/backoffice/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Apoio \u00e0 Crian\u00e7a e Adolescente"}'

```


<div id="execution-results-POSTv1-backoffice-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-backoffice-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-backoffice-categories"></code></pre>
</div>
<div id="execution-error-POSTv1-backoffice-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-backoffice-categories"></code></pre>
</div>
<form id="form-POSTv1-backoffice-categories" data-method="POST" data-path="v1/backoffice/categories" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-backoffice-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-backoffice-categories" onclick="tryItOut('POSTv1-backoffice-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-backoffice-categories" onclick="cancelTryOut('POSTv1-backoffice-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-backoffice-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/backoffice/categories</code></b>
</p>
<p>
<label id="auth-POSTv1-backoffice-categories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTv1-backoffice-categories" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTv1-backoffice-categories" data-component="body" required  hidden>
<br>
The category name.
</p>

</form>


## Update
Update the category

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/v1/backoffice/categories/illum',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'Apoio à Criança e Adolescente',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/categories/illum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Apoio \u00e0 Crian\u00e7a e Adolescente"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X PUT \
    "http://localhost/v1/backoffice/categories/illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Apoio \u00e0 Crian\u00e7a e Adolescente"}'

```


<div id="execution-results-PUTv1-backoffice-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTv1-backoffice-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTv1-backoffice-categories--category-"></code></pre>
</div>
<div id="execution-error-PUTv1-backoffice-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTv1-backoffice-categories--category-"></code></pre>
</div>
<form id="form-PUTv1-backoffice-categories--category-" data-method="PUT" data-path="v1/backoffice/categories/{category}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTv1-backoffice-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTv1-backoffice-categories--category-" onclick="tryItOut('PUTv1-backoffice-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTv1-backoffice-categories--category-" onclick="cancelTryOut('PUTv1-backoffice-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTv1-backoffice-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>v1/backoffice/categories/{category}</code></b>
</p>
<p>
<label id="auth-PUTv1-backoffice-categories--category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTv1-backoffice-categories--category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTv1-backoffice-categories--category-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTv1-backoffice-categories--category-" data-component="body" required  hidden>
<br>
The category name.
</p>

</form>


## Delete
Delete the category

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/v1/backoffice/categories/adipisci',
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
    "http://localhost/v1/backoffice/categories/adipisci"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```bash
curl -X DELETE \
    "http://localhost/v1/backoffice/categories/adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (204, No Content):

```json
<Empty response>
```
<div id="execution-results-DELETEv1-backoffice-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEv1-backoffice-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEv1-backoffice-categories--category-"></code></pre>
</div>
<div id="execution-error-DELETEv1-backoffice-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEv1-backoffice-categories--category-"></code></pre>
</div>
<form id="form-DELETEv1-backoffice-categories--category-" data-method="DELETE" data-path="v1/backoffice/categories/{category}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEv1-backoffice-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEv1-backoffice-categories--category-" onclick="tryItOut('DELETEv1-backoffice-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEv1-backoffice-categories--category-" onclick="cancelTryOut('DELETEv1-backoffice-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEv1-backoffice-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>v1/backoffice/categories/{category}</code></b>
</p>
<p>
<label id="auth-DELETEv1-backoffice-categories--category-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEv1-backoffice-categories--category-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="DELETEv1-backoffice-categories--category-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEv1-backoffice-categories--category-" data-component="url" required  hidden>
<br>
The ID of the category
</p>
</form>



