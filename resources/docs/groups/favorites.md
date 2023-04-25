# Favorites


## List
List user favorite institutions.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/favorites/nihil',
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
    "http://localhost/v1/app/favorites/nihil"
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
    -G "http://localhost/v1/app/favorites/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Casa Abrigo Amorada",
            "mainCategory": "Crianças e Adolescentes",
            "description": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
            "logoUrl": "...logo.png",
            "isFavorite": true
        },
        {
            "id": 2,
            "name": "Abrigo do Idoso",
            "mainCategory": "Crianças e Adolescentes",
            "description": "a casa abrigo do idoso tem como objetivo apoiar a comunidade cuidando dos idosos...",
            "logoUrl": "...logo.png",
            "isFavorite": true
        }
    ],
    "total": 2
}
```
<div id="execution-results-GETv1-app-favorites--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-favorites--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-favorites--user-"></code></pre>
</div>
<div id="execution-error-GETv1-app-favorites--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-favorites--user-"></code></pre>
</div>
<form id="form-GETv1-app-favorites--user-" data-method="GET" data-path="v1/app/favorites/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-favorites--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-favorites--user-" onclick="tryItOut('GETv1-app-favorites--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-favorites--user-" onclick="cancelTryOut('GETv1-app-favorites--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-favorites--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/favorites/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETv1-app-favorites--user-" data-component="url" required  hidden>
<br>

</p>
</form>


## Toggle Favorite
Add or Remove from favorite.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/app/favorites/dolores/toggle',
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
    "http://localhost/v1/app/favorites/dolores/toggle"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/app/favorites/dolores/toggle" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (204, No Content):

```json
<Empty response>
```
<div id="execution-results-POSTv1-app-favorites--institution--toggle" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-app-favorites--institution--toggle"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-app-favorites--institution--toggle"></code></pre>
</div>
<div id="execution-error-POSTv1-app-favorites--institution--toggle" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-app-favorites--institution--toggle"></code></pre>
</div>
<form id="form-POSTv1-app-favorites--institution--toggle" data-method="POST" data-path="v1/app/favorites/{institution}/toggle" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-app-favorites--institution--toggle', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-app-favorites--institution--toggle" onclick="tryItOut('POSTv1-app-favorites--institution--toggle');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-app-favorites--institution--toggle" onclick="cancelTryOut('POSTv1-app-favorites--institution--toggle');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-app-favorites--institution--toggle" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/app/favorites/{institution}/toggle</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>institution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="institution" data-endpoint="POSTv1-app-favorites--institution--toggle" data-component="url" required  hidden>
<br>

</p>
</form>



