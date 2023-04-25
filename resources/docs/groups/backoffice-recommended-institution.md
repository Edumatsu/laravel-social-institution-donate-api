# Backoffice / Recommended Institution
APIs for managing recommended institutions

## List
Fetch all categories

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/recommendations',
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
    "http://localhost/v1/backoffice/recommendations"
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
    -G "http://localhost/v1/backoffice/recommendations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
<div id="execution-results-GETv1-backoffice-recommendations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-recommendations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-recommendations"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-recommendations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-recommendations"></code></pre>
</div>
<form id="form-GETv1-backoffice-recommendations" data-method="GET" data-path="v1/backoffice/recommendations" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-recommendations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-recommendations" onclick="tryItOut('GETv1-backoffice-recommendations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-recommendations" onclick="cancelTryOut('GETv1-backoffice-recommendations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-recommendations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/recommendations</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-recommendations" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-recommendations" data-component="header"></label>
</p>
</form>


## Detail
Detail the recommended institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/recommendations/illo',
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
    "http://localhost/v1/backoffice/recommendations/illo"
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
    -G "http://localhost/v1/backoffice/recommendations/illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (404):

```json
{
    "message": "api.resource.not.found"
}
```
<div id="execution-results-GETv1-backoffice-recommendations--recommendedInstitution-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-recommendations--recommendedInstitution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-recommendations--recommendedInstitution-"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-recommendations--recommendedInstitution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-recommendations--recommendedInstitution-"></code></pre>
</div>
<form id="form-GETv1-backoffice-recommendations--recommendedInstitution-" data-method="GET" data-path="v1/backoffice/recommendations/{recommendedInstitution}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-recommendations--recommendedInstitution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-recommendations--recommendedInstitution-" onclick="tryItOut('GETv1-backoffice-recommendations--recommendedInstitution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-recommendations--recommendedInstitution-" onclick="cancelTryOut('GETv1-backoffice-recommendations--recommendedInstitution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-recommendations--recommendedInstitution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/recommendations/{recommendedInstitution}</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-recommendations--recommendedInstitution-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-recommendations--recommendedInstitution-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recommendedInstitution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recommendedInstitution" data-endpoint="GETv1-backoffice-recommendations--recommendedInstitution-" data-component="url" required  hidden>
<br>

</p>
</form>


## Create
Create a new recommended institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/backoffice/recommendations',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'month' => 12,
            'year' => 2021,
            'institution_id' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/recommendations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "month": 12,
    "year": 2021,
    "institution_id": 1
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/backoffice/recommendations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"month":12,"year":2021,"institution_id":1}'

```


<div id="execution-results-POSTv1-backoffice-recommendations" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-backoffice-recommendations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-backoffice-recommendations"></code></pre>
</div>
<div id="execution-error-POSTv1-backoffice-recommendations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-backoffice-recommendations"></code></pre>
</div>
<form id="form-POSTv1-backoffice-recommendations" data-method="POST" data-path="v1/backoffice/recommendations" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-backoffice-recommendations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-backoffice-recommendations" onclick="tryItOut('POSTv1-backoffice-recommendations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-backoffice-recommendations" onclick="cancelTryOut('POSTv1-backoffice-recommendations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-backoffice-recommendations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/backoffice/recommendations</code></b>
</p>
<p>
<label id="auth-POSTv1-backoffice-recommendations" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTv1-backoffice-recommendations" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>month</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="month" data-endpoint="POSTv1-backoffice-recommendations" data-component="body" required  hidden>
<br>
The recommendation month.
</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="year" data-endpoint="POSTv1-backoffice-recommendations" data-component="body" required  hidden>
<br>
The recommendation year.
</p>
<p>
<b><code>institution_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="institution_id" data-endpoint="POSTv1-backoffice-recommendations" data-component="body" required  hidden>
<br>
The institution id.
</p>

</form>


## Update
Update the recommended institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/v1/backoffice/recommendations/iusto',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'month' => 12,
            'year' => 2021,
            'institution_id' => 1,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/recommendations/iusto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "month": 12,
    "year": 2021,
    "institution_id": 1
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X PUT \
    "http://localhost/v1/backoffice/recommendations/iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"month":12,"year":2021,"institution_id":1}'

```


<div id="execution-results-PUTv1-backoffice-recommendations--recommendedInstitution-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTv1-backoffice-recommendations--recommendedInstitution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTv1-backoffice-recommendations--recommendedInstitution-"></code></pre>
</div>
<div id="execution-error-PUTv1-backoffice-recommendations--recommendedInstitution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTv1-backoffice-recommendations--recommendedInstitution-"></code></pre>
</div>
<form id="form-PUTv1-backoffice-recommendations--recommendedInstitution-" data-method="PUT" data-path="v1/backoffice/recommendations/{recommendedInstitution}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTv1-backoffice-recommendations--recommendedInstitution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTv1-backoffice-recommendations--recommendedInstitution-" onclick="tryItOut('PUTv1-backoffice-recommendations--recommendedInstitution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTv1-backoffice-recommendations--recommendedInstitution-" onclick="cancelTryOut('PUTv1-backoffice-recommendations--recommendedInstitution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTv1-backoffice-recommendations--recommendedInstitution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>v1/backoffice/recommendations/{recommendedInstitution}</code></b>
</p>
<p>
<label id="auth-PUTv1-backoffice-recommendations--recommendedInstitution-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTv1-backoffice-recommendations--recommendedInstitution-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recommendedInstitution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recommendedInstitution" data-endpoint="PUTv1-backoffice-recommendations--recommendedInstitution-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>month</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="month" data-endpoint="PUTv1-backoffice-recommendations--recommendedInstitution-" data-component="body"  hidden>
<br>
The recommendation month.
</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="year" data-endpoint="PUTv1-backoffice-recommendations--recommendedInstitution-" data-component="body"  hidden>
<br>
The recommendation year.
</p>
<p>
<b><code>institution_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="institution_id" data-endpoint="PUTv1-backoffice-recommendations--recommendedInstitution-" data-component="body"  hidden>
<br>
The institution id.
</p>

</form>


## Delete
Delete the recommended institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/v1/backoffice/recommendations/eius',
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
    "http://localhost/v1/backoffice/recommendations/eius"
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
    "http://localhost/v1/backoffice/recommendations/eius" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (204, No Content):

```json
<Empty response>
```
<div id="execution-results-DELETEv1-backoffice-recommendations--recommendedInstitution-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEv1-backoffice-recommendations--recommendedInstitution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEv1-backoffice-recommendations--recommendedInstitution-"></code></pre>
</div>
<div id="execution-error-DELETEv1-backoffice-recommendations--recommendedInstitution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEv1-backoffice-recommendations--recommendedInstitution-"></code></pre>
</div>
<form id="form-DELETEv1-backoffice-recommendations--recommendedInstitution-" data-method="DELETE" data-path="v1/backoffice/recommendations/{recommendedInstitution}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEv1-backoffice-recommendations--recommendedInstitution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEv1-backoffice-recommendations--recommendedInstitution-" onclick="tryItOut('DELETEv1-backoffice-recommendations--recommendedInstitution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEv1-backoffice-recommendations--recommendedInstitution-" onclick="cancelTryOut('DELETEv1-backoffice-recommendations--recommendedInstitution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEv1-backoffice-recommendations--recommendedInstitution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>v1/backoffice/recommendations/{recommendedInstitution}</code></b>
</p>
<p>
<label id="auth-DELETEv1-backoffice-recommendations--recommendedInstitution-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEv1-backoffice-recommendations--recommendedInstitution-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>recommendedInstitution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="recommendedInstitution" data-endpoint="DELETEv1-backoffice-recommendations--recommendedInstitution-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEv1-backoffice-recommendations--recommendedInstitution-" data-component="url" required  hidden>
<br>
The ID of the recommended institution
</p>
</form>



