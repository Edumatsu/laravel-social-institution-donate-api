# Institution
APIs for list institutions

Class InstitutionController

## List
Fetch all institutions




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/institutions',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'search' => 'Instituto',
            'page' => 2,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/institutions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "Instituto",
    "page": 2
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X GET \
    -G "http://localhost/v1/app/institutions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"Instituto","page":2}'

```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Casa Abrigo Amorada",
            "mainCategory": "Maoe Crianças e Adolescentes",
            "description": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
            "logoUrl": "...logo.png",
            "isFavorite": false
        }
    ],
    "pagination": {
        "total": 1,
        "current_page": 1,
        "first_page": 1,
        "prev_page": null,
        "next_page": null,
        "last_page": 1,
        "per_page": 15,
        "is_last_page": true
    }
}
```
<div id="execution-results-GETv1-app-institutions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-institutions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-institutions"></code></pre>
</div>
<div id="execution-error-GETv1-app-institutions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-institutions"></code></pre>
</div>
<form id="form-GETv1-app-institutions" data-method="GET" data-path="v1/app/institutions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-institutions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-institutions" onclick="tryItOut('GETv1-app-institutions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-institutions" onclick="cancelTryOut('GETv1-app-institutions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-institutions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/institutions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETv1-app-institutions" data-component="body"  hidden>
<br>
The search term.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETv1-app-institutions" data-component="body"  hidden>
<br>
Use for paginate results.
</p>

</form>


## Detail
Detail the institution




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/institutions/maiores',
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
    "http://localhost/v1/app/institutions/maiores"
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
    -G "http://localhost/v1/app/institutions/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Casa Abrigo Amorada",
    "categories": "Crianças e Adolescentes, Apoio a idosos",
    "about": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
    "document": "1235667810",
    "phone": "+551412345678",
    "cellphone": "+5514998887777",
    "logoUrl": "https:\/\/files-stg.causas.app.br\/user\/ebbfd58f-4b31-4125-a082-7aaf5cf6d700.png",
    "website": "https:\/\/casaabrigoamorada.com.br",
    "facebook": "https:\/\/www.facebook.com",
    "instagram": "https:\/\/www.instagram.com",
    "payment_token": "",
    "special_donate_text": "texto para doação <strong>especial<\/strong>",
    "special_donate_url": "https:\/\/www.casaabrigoamorada.com.br\/doacaoespecial",
    "voluntary_text": "texto para <strong>voluntarios<\/strong>",
    "voluntary_url": "https:\/\/www.casaabrigoamorada.com.br\/voluntario",
    "money_donate": true,
    "isFavorite": false,
    "images": [
        {
            "url": "...photo.png"
        },
        {
            "url": "...photo2.jpg"
        },
        {
            "url": "...photo3.jpg"
        }
    ]
}
```
<div id="execution-results-GETv1-app-institutions--institution-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-institutions--institution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-institutions--institution-"></code></pre>
</div>
<div id="execution-error-GETv1-app-institutions--institution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-institutions--institution-"></code></pre>
</div>
<form id="form-GETv1-app-institutions--institution-" data-method="GET" data-path="v1/app/institutions/{institution}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-institutions--institution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-institutions--institution-" onclick="tryItOut('GETv1-app-institutions--institution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-institutions--institution-" onclick="cancelTryOut('GETv1-app-institutions--institution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-institutions--institution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/institutions/{institution}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>institution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="institution" data-endpoint="GETv1-app-institutions--institution-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETv1-app-institutions--institution-" data-component="url" required  hidden>
<br>
The ID of the institution
</p>
</form>


## Random Institution Recommended
Show Monthly recommended institution




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/recommendation/random',
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
    "http://localhost/v1/app/recommendation/random"
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
    -G "http://localhost/v1/app/recommendation/random" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Casa Abrigo Amorada",
    "mainCategory": "Maoe Crianças e Adolescentes",
    "description": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
    "logoUrl": "...logo.png",
    "isFavorite": false
}
```
<div id="execution-results-GETv1-app-recommendation-random" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-recommendation-random"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-recommendation-random"></code></pre>
</div>
<div id="execution-error-GETv1-app-recommendation-random" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-recommendation-random"></code></pre>
</div>
<form id="form-GETv1-app-recommendation-random" data-method="GET" data-path="v1/app/recommendation/random" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-recommendation-random', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-recommendation-random" onclick="tryItOut('GETv1-app-recommendation-random');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-recommendation-random" onclick="cancelTryOut('GETv1-app-recommendation-random');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-recommendation-random" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/recommendation/random</code></b>
</p>
</form>



