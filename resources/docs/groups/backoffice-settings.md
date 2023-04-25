# Backoffice / Settings
APIs for managing settings

## List
Fetch all settings

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/settings',
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
    "http://localhost/v1/backoffice/settings"
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
    -G "http://localhost/v1/backoffice/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
<div id="execution-results-GETv1-backoffice-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-settings"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-settings"></code></pre>
</div>
<form id="form-GETv1-backoffice-settings" data-method="GET" data-path="v1/backoffice/settings" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-settings" onclick="tryItOut('GETv1-backoffice-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-settings" onclick="cancelTryOut('GETv1-backoffice-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/settings</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-settings" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-settings" data-component="header"></label>
</p>
</form>


## Detail
Detail the setting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/settings/voluptatem',
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
    "http://localhost/v1/backoffice/settings/voluptatem"
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
    -G "http://localhost/v1/backoffice/settings/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (404):

```json
{
    "message": "api.resource.not.found"
}
```
<div id="execution-results-GETv1-backoffice-settings--setting-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-settings--setting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-settings--setting-"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-settings--setting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-settings--setting-"></code></pre>
</div>
<form id="form-GETv1-backoffice-settings--setting-" data-method="GET" data-path="v1/backoffice/settings/{setting}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-settings--setting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-settings--setting-" onclick="tryItOut('GETv1-backoffice-settings--setting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-settings--setting-" onclick="cancelTryOut('GETv1-backoffice-settings--setting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-settings--setting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/settings/{setting}</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-settings--setting-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-settings--setting-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>setting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="setting" data-endpoint="GETv1-backoffice-settings--setting-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update
Update the setting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/v1/backoffice/settings/provident',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'value' => 'test',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/settings/provident"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "value": "test"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X PUT \
    "http://localhost/v1/backoffice/settings/provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"value":"test"}'

```


<div id="execution-results-PUTv1-backoffice-settings--setting-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTv1-backoffice-settings--setting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTv1-backoffice-settings--setting-"></code></pre>
</div>
<div id="execution-error-PUTv1-backoffice-settings--setting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTv1-backoffice-settings--setting-"></code></pre>
</div>
<form id="form-PUTv1-backoffice-settings--setting-" data-method="PUT" data-path="v1/backoffice/settings/{setting}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTv1-backoffice-settings--setting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTv1-backoffice-settings--setting-" onclick="tryItOut('PUTv1-backoffice-settings--setting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTv1-backoffice-settings--setting-" onclick="cancelTryOut('PUTv1-backoffice-settings--setting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTv1-backoffice-settings--setting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>v1/backoffice/settings/{setting}</code></b>
</p>
<p>
<label id="auth-PUTv1-backoffice-settings--setting-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTv1-backoffice-settings--setting-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>setting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="setting" data-endpoint="PUTv1-backoffice-settings--setting-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="PUTv1-backoffice-settings--setting-" data-component="body" required  hidden>
<br>
The setting value.
</p>

</form>



