# Users


## Show
Show user.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/users/nobis',
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
    "http://localhost/v1/app/users/nobis"
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
    -G "http://localhost/v1/app/users/nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
{
    "id": 1,
    "firstName": "Eduardo",
    "lastName": "da Silva Santos",
    "photo_url": "https:\/\/photo.jpg",
    "following": 0,
    "followers": 0,
    "donations": 0,
    "institutionsDonated": 0
}
```
<div id="execution-results-GETv1-app-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-users--user-"></code></pre>
</div>
<div id="execution-error-GETv1-app-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-users--user-"></code></pre>
</div>
<form id="form-GETv1-app-users--user-" data-method="GET" data-path="v1/app/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-users--user-" onclick="tryItOut('GETv1-app-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-users--user-" onclick="cancelTryOut('GETv1-app-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETv1-app-users--user-" data-component="url" required  hidden>
<br>

</p>
</form>


## Following
People when user is following.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/users/nam/following',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'search_term' => 'Eduardo',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/users/nam/following"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search_term": "Eduardo"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X GET \
    -G "http://localhost/v1/app/users/nam/following" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search_term":"Eduardo"}'

```


> Example response (200):

```json
{
    "data": [
        {
            "id": 6,
            "firstName": "Rose",
            "lastName": "Santos",
            "photoUrl": "",
            "following": 0,
            "followers": 0,
            "imFollowing": false
        },
        {
            "id": 5,
            "firstName": "Eduardo",
            "lastName": "Soares",
            "photoUrl": "",
            "following": 0,
            "followers": 0,
            "imFollowing": false
        }
    ],
    "pagination": {
        "total": 2,
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
<div id="execution-results-GETv1-app-users--user--following" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-users--user--following"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-users--user--following"></code></pre>
</div>
<div id="execution-error-GETv1-app-users--user--following" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-users--user--following"></code></pre>
</div>
<form id="form-GETv1-app-users--user--following" data-method="GET" data-path="v1/app/users/{user}/following" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-users--user--following', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-users--user--following" onclick="tryItOut('GETv1-app-users--user--following');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-users--user--following" onclick="cancelTryOut('GETv1-app-users--user--following');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-users--user--following" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/users/{user}/following</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETv1-app-users--user--following" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search_term</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search_term" data-endpoint="GETv1-app-users--user--following" data-component="body"  hidden>
<br>
Search term.
</p>

</form>


## Followed
People following the user.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/users/cum/followers',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'search_term' => 'Eduardo',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/users/cum/followers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search_term": "Eduardo"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X GET \
    -G "http://localhost/v1/app/users/cum/followers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search_term":"Eduardo"}'

```


> Example response (200):

```json
{
    "data": [
        {
            "id": 6,
            "firstName": "Rose",
            "lastName": "Santos",
            "photoUrl": "",
            "following": 0,
            "followers": 0,
            "imFollowing": false
        },
        {
            "id": 5,
            "firstName": "Eduardo",
            "lastName": "Soares",
            "photoUrl": "",
            "following": 0,
            "followers": 0,
            "imFollowing": false
        }
    ],
    "pagination": {
        "total": 2,
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
<div id="execution-results-GETv1-app-users--user--followers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-users--user--followers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-users--user--followers"></code></pre>
</div>
<div id="execution-error-GETv1-app-users--user--followers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-users--user--followers"></code></pre>
</div>
<form id="form-GETv1-app-users--user--followers" data-method="GET" data-path="v1/app/users/{user}/followers" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-users--user--followers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-users--user--followers" onclick="tryItOut('GETv1-app-users--user--followers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-users--user--followers" onclick="cancelTryOut('GETv1-app-users--user--followers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-users--user--followers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/users/{user}/followers</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETv1-app-users--user--followers" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search_term</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search_term" data-endpoint="GETv1-app-users--user--followers" data-component="body"  hidden>
<br>
Search term.
</p>

</form>


## Toggle Follow
Follow or unfollow the user.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/app/users/pariatur/follow/toggle',
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
    "http://localhost/v1/app/users/pariatur/follow/toggle"
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
    "http://localhost/v1/app/users/pariatur/follow/toggle" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (204, No Content):

```json
<Empty response>
```
<div id="execution-results-POSTv1-app-users--user--follow-toggle" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-app-users--user--follow-toggle"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-app-users--user--follow-toggle"></code></pre>
</div>
<div id="execution-error-POSTv1-app-users--user--follow-toggle" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-app-users--user--follow-toggle"></code></pre>
</div>
<form id="form-POSTv1-app-users--user--follow-toggle" data-method="POST" data-path="v1/app/users/{user}/follow/toggle" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-app-users--user--follow-toggle', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-app-users--user--follow-toggle" onclick="tryItOut('POSTv1-app-users--user--follow-toggle');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-app-users--user--follow-toggle" onclick="cancelTryOut('POSTv1-app-users--user--follow-toggle');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-app-users--user--follow-toggle" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/app/users/{user}/follow/toggle</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="POSTv1-app-users--user--follow-toggle" data-component="url" required  hidden>
<br>

</p>
</form>


## Exists
Check if the cell phones of contact list have register and return existants.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/app/users/exists',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'cell_phones' => [
                'velit',
                'omnis',
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/users/exists"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "cell_phones": [
        "velit",
        "omnis"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/app/users/exists" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"cell_phones":["velit","omnis"]}'

```


> Example response (200):

```json
{
    "data": [
        {
            "id": 6,
            "firstName": "Rose",
            "lastName": "Santos",
            "photoUrl": "",
            "following": 0,
            "followers": 0,
            "imFollowing": false
        },
        {
            "id": 5,
            "firstName": "Eduardo",
            "lastName": "Soares",
            "photoUrl": "",
            "following": 0,
            "followers": 0,
            "imFollowing": false
        }
    ],
    "pagination": {
        "total": 2,
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
<div id="execution-results-POSTv1-app-users-exists" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-app-users-exists"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-app-users-exists"></code></pre>
</div>
<div id="execution-error-POSTv1-app-users-exists" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-app-users-exists"></code></pre>
</div>
<form id="form-POSTv1-app-users-exists" data-method="POST" data-path="v1/app/users/exists" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-app-users-exists', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-app-users-exists" onclick="tryItOut('POSTv1-app-users-exists');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-app-users-exists" onclick="cancelTryOut('POSTv1-app-users-exists');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-app-users-exists" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/app/users/exists</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>cell_phones</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="cell_phones.0" data-endpoint="POSTv1-app-users-exists" data-component="body" required  hidden>
<input type="text" name="cell_phones.1" data-endpoint="POSTv1-app-users-exists" data-component="body" hidden>
<br>

</p>

</form>



