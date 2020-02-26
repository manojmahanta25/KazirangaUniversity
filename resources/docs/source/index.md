---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_c91fe29eb8917e9b7e23162e514eb7c1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/school" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/school"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "school_code": "SBS",
            "school_name": "School of Basic Sciences",
            "smeta_key": "School of Basic Sciences, Kaziranga University SBS",
            "sdes_key": null,
            "s_order": 4
        },
        {
            "school_code": "SCS",
            "school_name": "School of Computing Sciences",
            "smeta_key": "School of Computing Sciences, Kaziranga University SCS",
            "sdes_key": null,
            "s_order": 2
        },
        {
            "school_code": "SET",
            "school_name": "School of Engineering and Technology",
            "smeta_key": "School of Engineering and Technology, top universities in india for engineering, private engineering universities in india, engineering universities in india",
            "sdes_key": "Want to be part of one of the top university in india for engineering? Kaziranga University is one of the top universities in India for engineering courses with excellent placement records.",
            "s_order": 1
        },
        {
            "school_code": "SHS",
            "school_name": "School of Health Sciences",
            "smeta_key": "School of Health Sciences, Kaziranga University SHS",
            "sdes_key": null,
            "s_order": 6
        },
        {
            "school_code": "SOB",
            "school_name": "School of Business",
            "smeta_key": "School of Business, Kaziranga University SOB",
            "sdes_key": null,
            "s_order": 3
        },
        {
            "school_code": "SSS",
            "school_name": "School of Social Sciences",
            "smeta_key": "School of Social Sciences, Kaziranga University SSS",
            "sdes_key": null,
            "s_order": 5
        }
    ]
}
```

### HTTP Request
`GET api/school`


<!-- END_c91fe29eb8917e9b7e23162e514eb7c1 -->

<!-- START_ced8ee02101a3fc78fd0c68bed52b309 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/school/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/school/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Not Found!",
    "status": 404
}
```

### HTTP Request
`GET api/school/{id}`


<!-- END_ced8ee02101a3fc78fd0c68bed52b309 -->

<!-- START_2ee6e950ed0e3963bf721bd49e141abf -->
## api/school/{id}/faculty
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/school/1/faculty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/school/1/faculty"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Not Found!",
    "status": 404
}
```

### HTTP Request
`GET api/school/{id}/faculty`


<!-- END_2ee6e950ed0e3963bf721bd49e141abf -->

<!-- START_4fc88e9d8a051f7877c05e4213b22765 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/faculty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/faculty"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "faculty_id": "KU0026",
            "title": "Mr",
            "givenName": "Anil",
            "familyName": "Kumar Bhatia",
            "email": "arak@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0026.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KU0032",
            "title": "Dr",
            "givenName": "Jayanta",
            "familyName": "Kumar Sarmah",
            "email": "jayanta@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0032.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KU0035",
            "title": "Dr",
            "givenName": "Amarjyoti",
            "familyName": "Goswami",
            "email": "amarjyoti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0035.jpg",
            "priority": 3
        },
        {
            "faculty_id": "KU0044",
            "title": "Mr",
            "givenName": "Randhir",
            "familyName": "Phukan",
            "email": "randhir@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0044.jpg",
            "priority": 17
        },
        {
            "faculty_id": "KU0051",
            "title": "Mr",
            "givenName": "Haris",
            "familyName": "Jamal",
            "email": "haris@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0051.jpg",
            "priority": 26
        },
        {
            "faculty_id": "KU0053",
            "title": "Mr",
            "givenName": "Pankaj",
            "familyName": "Bora",
            "email": "pankaj@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0053.jpg",
            "priority": 20
        },
        {
            "faculty_id": "KU0060",
            "title": "Mr",
            "givenName": "Mokhalles",
            "familyName": "Mehdi",
            "email": "mokhalles@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0060.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KU0069",
            "title": "Dr",
            "givenName": "Govinda",
            "familyName": "Prasad Bhandari",
            "email": "govind@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0069.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KU0121",
            "title": "Ms",
            "givenName": "Priyanka",
            "familyName": "Nath",
            "email": "priyankanath@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0121.jpg",
            "priority": 25
        },
        {
            "faculty_id": "KU0153",
            "title": "Dr",
            "givenName": "Ramesh",
            "familyName": "Chandra Borah",
            "email": "rc.borah@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0153.jpg",
            "priority": 11
        },
        {
            "faculty_id": "KU0154",
            "title": "Dr",
            "givenName": "Nabajyoti",
            "familyName": "Saikia",
            "email": "nabajyoti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0154.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KU0157",
            "title": "Mr",
            "givenName": "Amlan",
            "familyName": "Jyoti Baruah",
            "email": "amlan@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0157.jpg",
            "priority": 31
        },
        {
            "faculty_id": "KU0158",
            "title": "Mr",
            "givenName": "Debanuj",
            "familyName": "Khound",
            "email": "debanuj@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0158.jpg",
            "priority": 14
        },
        {
            "faculty_id": "KU0162",
            "title": "Mr",
            "givenName": "Sushanta",
            "familyName": "Kumar Nandi",
            "email": "sushanta@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0162.jpg",
            "priority": 19
        },
        {
            "faculty_id": "KU0165",
            "title": "Dr",
            "givenName": "Monowar",
            "familyName": "Hussain Bhuyan",
            "email": "monowar@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0165.jpg",
            "priority": 13
        },
        {
            "faculty_id": "KU0172",
            "title": "Mr",
            "givenName": "Jagdish",
            "familyName": "Nath",
            "email": "jagdish@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0172.jpg",
            "priority": 10
        },
        {
            "faculty_id": "KU0174",
            "title": "Dr",
            "givenName": "Dimpal",
            "familyName": "Jyoti Mahanta",
            "email": "dimple@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0174.jpg",
            "priority": 3
        },
        {
            "faculty_id": "KU0176",
            "title": "Dr",
            "givenName": "Jyoti",
            "familyName": "Prasad Gogoi",
            "email": "jyoti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0176.jpg",
            "priority": 10
        },
        {
            "faculty_id": "KU0179",
            "title": "Dr",
            "givenName": "Biju",
            "familyName": "Kumar Dutta",
            "email": "biju@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0179.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KU0190",
            "title": "Mr",
            "givenName": "Pulak",
            "familyName": "Bora",
            "email": "pulak@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0190.jpg",
            "priority": 20
        },
        {
            "faculty_id": "KU0208",
            "title": "Dr",
            "givenName": "Debasish",
            "familyName": "Panda",
            "email": "debasish@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0208.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KU0210",
            "title": "Mr",
            "givenName": "Mukut",
            "familyName": "Chandra Medhi",
            "email": "mukut@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0210.jpg",
            "priority": 27
        },
        {
            "faculty_id": "KU0219",
            "title": "Mr",
            "givenName": "Bishnu Prasad",
            "familyName": "Gogoi",
            "email": "bishnu@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0219.jpg",
            "priority": 42
        },
        {
            "faculty_id": "KU0223",
            "title": "Mr",
            "givenName": "Prianku",
            "familyName": "Neog",
            "email": "prianku@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0223.jpg",
            "priority": 44
        },
        {
            "faculty_id": "KU0243",
            "title": "Dr",
            "givenName": "Mdhurayya",
            "familyName": "Deka",
            "email": "madhuryya@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0243.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KU0244",
            "title": "Dr",
            "givenName": "Manish",
            "familyName": "Srivastava",
            "email": "manish@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0244.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KU0246",
            "title": "Mr",
            "givenName": "Politraj",
            "familyName": "Sonowal",
            "email": "politraj@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0246.jpg",
            "priority": 29
        },
        {
            "faculty_id": "KU0249",
            "title": "Mr",
            "givenName": "Abinash",
            "familyName": "Rath",
            "email": "abinash@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0249.jpg",
            "priority": 20
        },
        {
            "faculty_id": "KU0256",
            "title": "Mr",
            "givenName": "Pranobjyoti",
            "familyName": "Lahon",
            "email": "pranobjyoti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0256.jpg",
            "priority": 38
        },
        {
            "faculty_id": "KU0281",
            "title": "Mr",
            "givenName": "Ratan",
            "familyName": "Kumar Saha",
            "email": "ratan@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0281.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KU0284",
            "title": "Dr",
            "givenName": "Hriday",
            "familyName": "Ranjan Kalita",
            "email": "hriday@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0284.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KU0289",
            "title": "Mr",
            "givenName": "Aditya",
            "familyName": "Bhatta",
            "email": "aditya@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0289.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KU0293",
            "title": "Mr",
            "givenName": "Nibir",
            "familyName": "Paban Borah",
            "email": "nibir@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0293.jpg",
            "priority": 23
        },
        {
            "faculty_id": "KU0306",
            "title": "Dr",
            "givenName": "Pallabi",
            "familyName": "Saikia",
            "email": "pallabi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0306.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KU0307",
            "title": "Dr",
            "givenName": "Jyotirmoy",
            "familyName": "Sarma",
            "email": "jyotirmoy@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0307.jpg",
            "priority": 13
        },
        {
            "faculty_id": "KU0310",
            "title": "Dr",
            "givenName": "M K",
            "familyName": "Loganathan",
            "email": "loganathan@kazirangaunversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0310.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KU0311",
            "title": "Ms",
            "givenName": "Priyakshi",
            "familyName": "Bharali",
            "email": "priyakshi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0311.jpg",
            "priority": 35
        },
        {
            "faculty_id": "KU0313",
            "title": "Ms",
            "givenName": "Bandana",
            "familyName": "Thakur",
            "email": "bandana@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0313.jpg",
            "priority": 11
        },
        {
            "faculty_id": "KU0314",
            "title": "Ms",
            "givenName": "Lipika",
            "familyName": "Sarmah",
            "email": "lipika.sarmah@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0314.jpg",
            "priority": 22
        },
        {
            "faculty_id": "KU0315",
            "title": "Dr",
            "givenName": "Prasanta",
            "familyName": "Jyoti Goutam",
            "email": "prasantajyoti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0315.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KU0316",
            "title": "Ms",
            "givenName": "Upasana",
            "familyName": "Kashyap",
            "email": "upasana@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0316.jpg",
            "priority": 20
        },
        {
            "faculty_id": "KU0327",
            "title": "Ms",
            "givenName": "Rhea",
            "familyName": "Mathews",
            "email": "rhea@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0327.jpg",
            "priority": 28
        },
        {
            "faculty_id": "KU0328",
            "title": "Mr",
            "givenName": "Manob",
            "familyName": "Hazarika",
            "email": "manob@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0328.jpg",
            "priority": 39
        },
        {
            "faculty_id": "KU0329",
            "title": "Dr",
            "givenName": "Tushar",
            "familyName": "Kanti Bhattacharyya",
            "email": "tusharkanti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0329.jpg",
            "priority": 10
        },
        {
            "faculty_id": "KU0331",
            "title": "Mr",
            "givenName": "Suman",
            "familyName": "Pran Sonowal",
            "email": "sumanpran@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0331.jpg",
            "priority": 22
        },
        {
            "faculty_id": "KU0335",
            "title": "Dr",
            "givenName": "Purnendu",
            "familyName": "Bikash Acharjee",
            "email": "purnendu@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0335.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KU0365",
            "title": "Dr",
            "givenName": "Swati",
            "familyName": "Baruah",
            "email": "swatibaruah@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0365.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KU0367",
            "title": "Dr",
            "givenName": "Sajal",
            "familyName": "Saha",
            "email": "sajalsaha@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0367.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KU0368",
            "title": "Ms",
            "givenName": "Neha",
            "familyName": "Sharma",
            "email": "neha@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0368.jpg",
            "priority": 27
        },
        {
            "faculty_id": "KU0373",
            "title": "Mr",
            "givenName": "Sarfraz",
            "familyName": "Ahmed",
            "email": "sarfraz@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0373.jpg",
            "priority": 14
        },
        {
            "faculty_id": "KU0392",
            "title": "Ms",
            "givenName": "Samata",
            "familyName": "Saha",
            "email": "samata@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0392.jpg",
            "priority": 15
        },
        {
            "faculty_id": "KU0409",
            "title": "Dr",
            "givenName": "Sweety",
            "familyName": "Kaur",
            "email": "sweety@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0409.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KU0413",
            "title": "Mr",
            "givenName": "Anurag",
            "familyName": "Sharma",
            "email": "anuragsarmah@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0413.jpg",
            "priority": 30
        },
        {
            "faculty_id": "KU0432",
            "title": "Ms",
            "givenName": "Baiarbha",
            "familyName": "Massar",
            "email": "baiarbha@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0432.jpg",
            "priority": 10
        },
        {
            "faculty_id": "KU0434",
            "title": "Dr",
            "givenName": "Bonoshree",
            "familyName": "Saikia",
            "email": "bonoshree@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0434.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KU0437",
            "title": "Mr",
            "givenName": "Abinab",
            "familyName": "Chakravorty",
            "email": "abhinab@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0437.jpg",
            "priority": 24
        },
        {
            "faculty_id": "KU0441",
            "title": "Mr",
            "givenName": "Nazreena",
            "familyName": "Rahman",
            "email": "nazreena@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0441.jpg",
            "priority": 32
        },
        {
            "faculty_id": "KU0445",
            "title": "Dr",
            "givenName": "Jayanta",
            "familyName": "Bhattacharyya",
            "email": "jayanta.b@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0445.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KU0448",
            "title": "Dr",
            "givenName": "Rekha",
            "familyName": "Rani Dutta",
            "email": "rekha@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0448.jpg",
            "priority": 17
        },
        {
            "faculty_id": "KU0451",
            "title": "Ms",
            "givenName": "Mousoomi",
            "familyName": "Bora",
            "email": "mousoomi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0451.jpg",
            "priority": 19
        },
        {
            "faculty_id": "KU0453",
            "title": "Dr",
            "givenName": "Mukulesh",
            "familyName": "Baruah",
            "email": "mukulesh@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0453.jpg",
            "priority": 11
        },
        {
            "faculty_id": "KU0456",
            "title": "Ms",
            "givenName": "Indrani",
            "familyName": "Bezbaruah",
            "email": "indrani.b@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0456.jpg",
            "priority": 43
        },
        {
            "faculty_id": "KU0465",
            "title": "Dr",
            "givenName": "Ashwini",
            "familyName": "Kumar Sharma",
            "email": "ashwinikumar@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0465.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KU0477",
            "title": "Dr",
            "givenName": "Subrat",
            "familyName": "Kotoky",
            "email": "subrat@kairangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0477.jpg",
            "priority": 14
        },
        {
            "faculty_id": "KU0484",
            "title": "Dr",
            "givenName": "Siddhartha",
            "familyName": "Bhattacharyya",
            "email": "s.bhattacharya@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0484.jpg",
            "priority": 11
        },
        {
            "faculty_id": "KU0486",
            "title": "Ms",
            "givenName": "Mridusmita",
            "familyName": "Choudhary",
            "email": "mridusmita@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0486.jpg",
            "priority": 22
        },
        {
            "faculty_id": "KU0488",
            "title": "Ms",
            "givenName": "Manashwi",
            "familyName": "Tamuli",
            "email": "manashwi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0488.jpg",
            "priority": 37
        },
        {
            "faculty_id": "KU0489",
            "title": "Dr",
            "givenName": "Ashim",
            "familyName": "Jyoti Gogoi",
            "email": "ashim@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0489.jpg",
            "priority": 17
        },
        {
            "faculty_id": "KU0490",
            "title": "Mr",
            "givenName": "Koustuvmi",
            "familyName": "Bharadwaj",
            "email": "koustuvmoni@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0490.jpg",
            "priority": 36
        },
        {
            "faculty_id": "KU0491",
            "title": "Ms",
            "givenName": "Pinky",
            "familyName": "Roy",
            "email": "pinky@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0491.jpg",
            "priority": 24
        },
        {
            "faculty_id": "KU0494",
            "title": "Dr",
            "givenName": "Deepjyoti",
            "familyName": "Borgohain",
            "email": "deepjyoti@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0494.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KU0502",
            "title": "Dr",
            "givenName": "P G",
            "familyName": "Ramesh",
            "email": "pgramesh@kazirangaunversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0502.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KU0508",
            "title": "Mr",
            "givenName": "Deepjyoti",
            "familyName": "Talukdar",
            "email": "deepjyoti.talukdar@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0508.jpg",
            "priority": 40
        },
        {
            "faculty_id": "KU0509",
            "title": "Ms",
            "givenName": "Nilakshi",
            "familyName": "Gogoi",
            "email": "nilakshi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0509.jpg",
            "priority": 34
        },
        {
            "faculty_id": "KU0512",
            "title": "Ms",
            "givenName": "Sagarika",
            "familyName": "Khound",
            "email": "sagarika@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0512.jpg",
            "priority": 21
        },
        {
            "faculty_id": "KU0517",
            "title": "Dr",
            "givenName": "Golak",
            "familyName": "Bihari Patra",
            "email": "gbpatra@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0517.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KU0521",
            "title": "Mr",
            "givenName": "Pranav",
            "familyName": "Kumar",
            "email": "pranav@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0521.jpg",
            "priority": 33
        },
        {
            "faculty_id": "KU0522",
            "title": "Dr",
            "givenName": "Monoj",
            "familyName": "Kumar Muchahari",
            "email": "m.muchahari@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0522.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KU0523",
            "title": "Dr",
            "givenName": "Dibya",
            "familyName": "Jyoti Bora",
            "email": "dibyajyotibora@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0523.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KU0524",
            "title": "Dr",
            "givenName": "Braja",
            "familyName": "Sundra Mishra",
            "email": "bsmishra@kazirangauniversty.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0524.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KU0525",
            "title": "Mr",
            "givenName": "N",
            "familyName": "Rana Singha",
            "email": "n.rana@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0525.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KU0526",
            "title": "Dr",
            "givenName": "Akshay",
            "familyName": "Ch. Deka",
            "email": "akshay@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0526.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KU0527",
            "title": "Dr",
            "givenName": "Vidhya",
            "familyName": "S",
            "email": "vidhya@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0527.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KU0540",
            "title": "Dr",
            "givenName": "Ashok",
            "familyName": "Kumar Kayal",
            "email": "ashokkayal@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0540.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KU0541",
            "title": "Dr",
            "givenName": "Bikash",
            "familyName": "Gogoi",
            "email": "bikashgogoi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0541.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KU0545",
            "title": "Mr",
            "givenName": "Sneha",
            "familyName": "Sharma",
            "email": "sneha@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0545.jpg",
            "priority": 15
        },
        {
            "faculty_id": "KU0546",
            "title": "Ms",
            "givenName": "Manashee",
            "familyName": "Kalita",
            "email": "manashee@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0546.jpg",
            "priority": 41
        },
        {
            "faculty_id": "KU0549",
            "title": "Ms",
            "givenName": "Eikjyot",
            "familyName": "Kour",
            "email": "eikjyot@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0549.jpg",
            "priority": 25
        },
        {
            "faculty_id": "KU0550",
            "title": "Dr",
            "givenName": "Bhatri Pratim",
            "familyName": "Dowarah",
            "email": "bhatripratim@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0550.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KU0551",
            "title": "Mr",
            "givenName": "Jyoutirmoi",
            "familyName": "Sarma",
            "email": "jyoutirmoi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0551.jpg",
            "priority": 21
        },
        {
            "faculty_id": "KU0554",
            "title": "Mr",
            "givenName": "Hadi Mustafizur",
            "familyName": "Rohman Borah",
            "email": "hadimborah@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0554.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KU0555",
            "title": "Dr",
            "givenName": "Pallab",
            "familyName": "Kalita",
            "email": "pallab@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0555.jpg",
            "priority": 10
        },
        {
            "faculty_id": "KU0556",
            "title": "Mr",
            "givenName": "Diganta",
            "familyName": "Munshi",
            "email": "digantamunshi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0556.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KU0557",
            "title": "Mr",
            "givenName": "Hrisab",
            "familyName": "Deb",
            "email": "hrisab@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0557.jpg",
            "priority": 11
        },
        {
            "faculty_id": "KU0559",
            "title": "Mr",
            "givenName": "Dipak Kumar",
            "familyName": "Das",
            "email": "dipak@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0559.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KU0560",
            "title": "Dr",
            "givenName": "Rupak",
            "familyName": "Gupta",
            "email": "rupak@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0560.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KU0561",
            "title": "Dr",
            "givenName": "Pranami",
            "familyName": "Sharma",
            "email": "pranami@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0561.jpg",
            "priority": 3
        },
        {
            "faculty_id": "KU0566",
            "title": "Mr",
            "givenName": "Priyatosh",
            "familyName": "Nath",
            "email": "priyatosh@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0566.jpg",
            "priority": 3
        },
        {
            "faculty_id": "KU0567",
            "title": "Mr",
            "givenName": "Dulal",
            "familyName": "Goswami",
            "email": "dulal@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0567.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KU0570",
            "title": "Dr",
            "givenName": "Chinumani",
            "familyName": "Choudhury",
            "email": "chinumani@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0570.jpg",
            "priority": 15
        },
        {
            "faculty_id": "KU0571",
            "title": "Dr",
            "givenName": "AnalJyoti",
            "familyName": "Basu",
            "email": "analjyoti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0571.jpg",
            "priority": 13
        },
        {
            "faculty_id": "KU0572",
            "title": "Mr",
            "givenName": "Pritam",
            "familyName": "Choudhury",
            "email": "pritam.choudhury@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0572.jpg",
            "priority": 19
        },
        {
            "faculty_id": "KU0575",
            "title": "Ms",
            "givenName": "Rajashree",
            "familyName": "Saharia",
            "email": "rajashree.saharia@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0575.jpg",
            "priority": 3
        },
        {
            "faculty_id": "KU0576",
            "title": "Mr",
            "givenName": "Tshering",
            "familyName": "Lepcha",
            "email": "tshering@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0576.jpg",
            "priority": 13
        },
        {
            "faculty_id": "KU0581",
            "title": "Ms",
            "givenName": "Baishali",
            "familyName": "Pathak",
            "email": "baishali@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0581.jpg",
            "priority": 26
        },
        {
            "faculty_id": "KU0584",
            "title": "Dr",
            "givenName": "Ram Murat",
            "familyName": "Singh",
            "email": "ram.murat@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0584.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KU0585",
            "title": "Mr",
            "givenName": "Nitesh",
            "familyName": "Kumar",
            "email": "nitesh@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0585.jpg",
            "priority": 23
        },
        {
            "faculty_id": "KU0586",
            "title": "Mr",
            "givenName": "Rama Kant",
            "familyName": "Mishra",
            "email": "ramakant@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0586.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KU0588",
            "title": "Dr",
            "givenName": "Saurabhi",
            "familyName": "Sarmah",
            "email": "saurabhi@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0588.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KU0596",
            "title": "Dr",
            "givenName": "Anil Kumar",
            "familyName": "Singh",
            "email": "anilkumar@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KU0596.jpg",
            "priority": 15
        },
        {
            "faculty_id": "KUG001",
            "title": "Dr",
            "givenName": "Jyoti Rama",
            "familyName": "Das",
            "email": "jyotirama.das@integra-ventures.com",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG001.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KUG002",
            "title": "Dr",
            "givenName": "Ronit",
            "familyName": "Bora",
            "email": "ronit.bora@integra-ventures.com",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG002.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KUG003",
            "title": "Ms",
            "givenName": "Sanghmitra S",
            "familyName": "Acharya",
            "email": "sanghmitra.acharya@gmail.com",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG003.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KUG004",
            "title": "Ms",
            "givenName": "Sunita",
            "familyName": "Reddy",
            "email": "sunitareddyjnu@gmail.com",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG004.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KUG005",
            "title": "Dr",
            "givenName": "Nemthianngai",
            "familyName": "Guite",
            "email": "guitemahal@gmail.com",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG005.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KUG006",
            "title": "Mr",
            "givenName": "Ritupon",
            "familyName": "Gogoi",
            "email": "ed@fstindia.org",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG006.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KUG007",
            "title": "Dr",
            "givenName": "Abhjit",
            "familyName": "Sharma",
            "email": "a.sharma.g@gmail.com",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG007.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KUG008",
            "title": "Mr",
            "givenName": "Amiya K.",
            "familyName": "Sharma",
            "email": "rgvnho@gmail.com",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG008.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KUG009",
            "title": "Mr",
            "givenName": "Viqaruddin",
            "familyName": "Surki",
            "email": ".@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG009.jpg",
            "priority": 5
        },
        {
            "faculty_id": "KUG010",
            "title": "Ms",
            "givenName": "Bhawna",
            "familyName": "Sharma",
            "email": "..@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG010.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KUG011",
            "title": "Mr",
            "givenName": "Ashwin",
            "familyName": "Patil",
            "email": "...@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG011.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KUG012",
            "title": "Mr",
            "givenName": "Uddhav",
            "familyName": "Bharali",
            "email": "@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG012.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KUG013",
            "title": "Mr",
            "givenName": "ER. J.N.",
            "familyName": "Khataniar",
            "email": "....@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG013.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KUG014",
            "title": "Mr",
            "givenName": "Prof. Zi-Hang",
            "familyName": "Dai",
            "email": ".....@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG014.jpg",
            "priority": 10
        },
        {
            "faculty_id": "KUG015",
            "title": "Mr",
            "givenName": "Prof. U. Johnson",
            "familyName": "Alengaram",
            "email": "......@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG015.jpg",
            "priority": 11
        },
        {
            "faculty_id": "KUG016",
            "title": "Mr",
            "givenName": "Qideng",
            "familyName": "Sun",
            "email": ".......@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG016.jpg",
            "priority": 3
        },
        {
            "faculty_id": "KUG017",
            "title": "Dr",
            "givenName": "Kaushal Kumar",
            "familyName": "Bhagat",
            "email": "........@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG017.jpg",
            "priority": 13
        },
        {
            "faculty_id": "KUG018",
            "title": "Dr",
            "givenName": "Aryabrata",
            "familyName": "Basu",
            "email": ".........@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG018.jpg",
            "priority": 14
        },
        {
            "faculty_id": "KUG019",
            "title": "Mr",
            "givenName": "Prof. Cher Ming",
            "familyName": "Tan",
            "email": "...........@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG019.jpg",
            "priority": 15
        },
        {
            "faculty_id": "KUG020",
            "title": "Mr",
            "givenName": "Manjit",
            "familyName": "Singh",
            "email": "..........@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG020.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KUG021",
            "title": "Dr",
            "givenName": "Anindita",
            "familyName": "Kundu",
            "email": "...............@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "guest",
            "image": "http:\/\/localhost\/storage\/faculty\/KUG021.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KUV01",
            "title": "Dr",
            "givenName": "Ashok",
            "familyName": "Ullal",
            "email": "ashokullal@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV01.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KUV02",
            "title": "Mr",
            "givenName": "Preeti",
            "familyName": "Sarmah",
            "email": "preeti@kazirangauniversity.in",
            "website": null,
            "visible": 0,
            "status": "oncampus",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV02.jpg",
            "priority": 14
        },
        {
            "faculty_id": "KUV03",
            "title": "Mr",
            "givenName": "Rajesh",
            "familyName": "Menon",
            "email": "rajeshmenon@impactmarketingservice.com",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV03.jpg",
            "priority": 6
        },
        {
            "faculty_id": "KUV04",
            "title": "Mr",
            "givenName": "Govindrajan",
            "familyName": "Srinivas",
            "email": "govindrajan.srinivas@gmail.com",
            "website": "https:\/\/www.linkedin.com\/in\/gosrinivas\/",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV04.jpg",
            "priority": 7
        },
        {
            "faculty_id": "KUV05",
            "title": "Dr",
            "givenName": "Virendra",
            "familyName": "P Singh",
            "email": "virenpsingh@gmail.com",
            "website": "https:\/\/www.linkedin.com\/in\/dr-virendra-p-singh-17b3145\/",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV05.jpg",
            "priority": 8
        },
        {
            "faculty_id": "KUV06",
            "title": "Dr",
            "givenName": "Jeet",
            "familyName": "Patwari",
            "email": "drjeetp@gmail.com",
            "website": "https:\/\/www.linkedin.com\/in\/dr-jeet-patwari-65ab8a6",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV06.jpg",
            "priority": 9
        },
        {
            "faculty_id": "KUV07",
            "title": "Dr",
            "givenName": "Arunava",
            "familyName": "Narayan Mukherjee",
            "email": "arumuk@gmail.com",
            "website": "https:\/\/www.linkedin.com\/in\/dr-arunava-narayan-mukherjee-95bbb83b\/",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV07.jpg",
            "priority": 10
        },
        {
            "faculty_id": "KUV08",
            "title": "Dr",
            "givenName": "Milind",
            "familyName": "Dalvi",
            "email": "milind.dalvi@timesgroup.com",
            "website": "https:\/\/www.linkedin.com\/in\/dr-milind-dalvi-b805b2b\/",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV08.jpg",
            "priority": 11
        },
        {
            "faculty_id": "KUV09",
            "title": "Dr",
            "givenName": "Alok",
            "familyName": "Chhajer",
            "email": "c-alok.chhajer@timesgroup.com",
            "website": "https:\/\/www.linkedin.com\/in\/alokchhajer\/",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV09.jpg",
            "priority": 3
        },
        {
            "faculty_id": "KUV10",
            "title": "Mr",
            "givenName": "Sanjan",
            "familyName": "Kumar Baruah",
            "email": "sanjan.baruah@safeducate.com",
            "website": "https:\/\/www.linkedin.com\/in\/sanjan-kumar-baruah-47602481\/",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV10.jpg",
            "priority": 13
        },
        {
            "faculty_id": "KUV11",
            "title": "Mr",
            "givenName": "Sashi",
            "familyName": "Dash",
            "email": "sashidash@hotmail.com",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV11.jpg",
            "priority": 14
        },
        {
            "faculty_id": "KUV12",
            "title": "Dr",
            "givenName": "Saibal",
            "familyName": "Kanti Bhattacharjee",
            "email": "",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV12.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KUV13",
            "title": "Dr",
            "givenName": "Prabal K.",
            "familyName": "Sen",
            "email": "prabal.sen0951@gmail.com",
            "website": "https:\/\/www.linkedin.com\/in\/prabalksen",
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV13.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KUV14",
            "title": "Dr",
            "givenName": "Pratim",
            "familyName": "Barua",
            "email": "pratim@dibru.ac.in",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV14.jpg",
            "priority": 15
        },
        {
            "faculty_id": "KUV15",
            "title": "Mr",
            "givenName": "Neeraj",
            "familyName": "Verma",
            "email": "tuvaale@gmail.com",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV15.jpg",
            "priority": 16
        },
        {
            "faculty_id": "KUV16",
            "title": "Dr",
            "givenName": "Prabal K.",
            "familyName": "Sen",
            "email": "prabal.sen@gmail.com",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV16.jpg",
            "priority": 1
        },
        {
            "faculty_id": "KUV17",
            "title": "Mr",
            "givenName": "Shantikam",
            "familyName": "Hazarika",
            "email": "shanti@kazirangauniversity.in",
            "website": null,
            "visible": 1,
            "status": "visiting",
            "image": "http:\/\/localhost\/storage\/faculty\/KUV17.jpg",
            "priority": 5
        }
    ]
}
```

### HTTP Request
`GET api/faculty`


<!-- END_4fc88e9d8a051f7877c05e4213b22765 -->

<!-- START_3697832cc6f4e2b01443999a0ded424f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/faculty/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/faculty/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Not Found!",
    "status": 404
}
```

### HTTP Request
`GET api/faculty/{id}`


<!-- END_3697832cc6f4e2b01443999a0ded424f -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_d31bd86158f6a5a775c92ea5b5554af9 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/logout`


<!-- END_d31bd86158f6a5a775c92ea5b5554af9 -->

<!-- START_2e5219bcb27fe97708e6f9907b7c9770 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/register`


<!-- END_2e5219bcb27fe97708e6f9907b7c9770 -->

<!-- START_1832f7098e04604e04a2186b694f4df8 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/register`


<!-- END_1832f7098e04604e04a2186b694f4df8 -->

<!-- START_583a6990174e55a2eb91791ae4776c83 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/password/reset`


<!-- END_583a6990174e55a2eb91791ae4776c83 -->

<!-- START_f611ae8378c7426b163ac3d140ded37c -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/email`


<!-- END_f611ae8378c7426b163ac3d140ded37c -->

<!-- START_968312b0cceac43f210857c19898f766 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/password/reset/{token}`


<!-- END_968312b0cceac43f210857c19898f766 -->

<!-- START_d155055b87508acb9e934bcf9407b028 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/reset`


<!-- END_d155055b87508acb9e934bcf9407b028 -->

<!-- START_5dad7527f20d3550163a55f39745e423 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/password/confirm`


<!-- END_5dad7527f20d3550163a55f39745e423 -->

<!-- START_76996af78566566f76351ba5c6ed25d6 -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/confirm`


<!-- END_76996af78566566f76351ba5c6ed25d6 -->

<!-- START_43c7fa0d7f8cc01d6312fb968c91fb86 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/faculty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/faculty`


<!-- END_43c7fa0d7f8cc01d6312fb968c91fb86 -->

<!-- START_431f1538ab4683b4abbddebbe8ab108d -->
## admin/faculty/priority
> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/faculty/priority" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/priority"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/faculty/priority`


<!-- END_431f1538ab4683b4abbddebbe8ab108d -->

<!-- START_e0f685b011e0ae655d4d4ab541c41eb1 -->
## admin/faculty/priority/set
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/faculty/priority/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/priority/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/faculty/priority/set`


<!-- END_e0f685b011e0ae655d4d4ab541c41eb1 -->

<!-- START_60b7aed1030de39a4e9ace7c564abbbf -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/faculty/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/faculty/create`


<!-- END_60b7aed1030de39a4e9ace7c564abbbf -->

<!-- START_0bf7447cdf7f81f8b99f8ba98a8ebac2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/faculty/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/faculty/create`


<!-- END_0bf7447cdf7f81f8b99f8ba98a8ebac2 -->

<!-- START_b6fc19d8fac4ad9c06fbe06a5414f7f4 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/faculty/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/faculty/{fid}/edit`


<!-- END_b6fc19d8fac4ad9c06fbe06a5414f7f4 -->

<!-- START_1924dbfe968dd9f2b4c696091e4b103b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/faculty/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/faculty/{fid}/edit`


<!-- END_1924dbfe968dd9f2b4c696091e4b103b -->

<!-- START_656ec14aca1750b833a1cff5d2445dc6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/faculty/1/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/1/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/faculty/{fid}/delete`


<!-- END_656ec14aca1750b833a1cff5d2445dc6 -->

<!-- START_7a0bc0fb5361da429f410934f3cda118 -->
## admin/faculty/{fid}/restore
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/faculty/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/faculty/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/faculty/{fid}/restore`


<!-- END_7a0bc0fb5361da429f410934f3cda118 -->

<!-- START_f1ecc1493c1ae57c8261b42e445bca0c -->
## admin/dean/set
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/dean/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/dean/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/dean/set`


<!-- END_f1ecc1493c1ae57c8261b42e445bca0c -->

<!-- START_94d7b92774aaf0ab0ae78356559df215 -->
## admin/hod/set
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/hod/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/hod/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/hod/set`


<!-- END_94d7b92774aaf0ab0ae78356559df215 -->

<!-- START_c0f8ac64e2edc44b61f5a6145ef36d15 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/school" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/school"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/school`


<!-- END_c0f8ac64e2edc44b61f5a6145ef36d15 -->

<!-- START_160c926140a08e0d0a840cf469880451 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/school/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/school/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/school/create`


<!-- END_160c926140a08e0d0a840cf469880451 -->

<!-- START_adac5f8940118a422fafb075d7b75f8e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/school/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/school/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/school/create`


<!-- END_adac5f8940118a422fafb075d7b75f8e -->

<!-- START_730b99bbb1baf7b5fd8fbb887b17826d -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/school/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/school/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/school/{sid}/edit`


<!-- END_730b99bbb1baf7b5fd8fbb887b17826d -->

<!-- START_9d7840c15cf86cdcf753166da6633355 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/school/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/school/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/school/{sid}/edit`


<!-- END_9d7840c15cf86cdcf753166da6633355 -->

<!-- START_94cabcb39164b07470341339ab9f34c5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/school/1/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/school/1/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/school/{sid}/delete`


<!-- END_94cabcb39164b07470341339ab9f34c5 -->

<!-- START_d38ba964abc690bdfac5baf7923c5a9c -->
## admin/school/priority/set
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/school/priority/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/school/priority/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/school/priority/set`


<!-- END_d38ba964abc690bdfac5baf7923c5a9c -->

<!-- START_36327c684033f5d303bf4c9eec93490e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/department" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/department"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/department`


<!-- END_36327c684033f5d303bf4c9eec93490e -->

<!-- START_83acb4afd78c2d71200209d449815801 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/department/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/department/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/department/create`


<!-- END_83acb4afd78c2d71200209d449815801 -->

<!-- START_31a12945545146f623bc4f3f39069c1f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/department/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/department/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/department/create`


<!-- END_31a12945545146f623bc4f3f39069c1f -->

<!-- START_f514abfa7ca4e576354d5db64b920d2b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/department/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/department/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/department/{did}/edit`


<!-- END_f514abfa7ca4e576354d5db64b920d2b -->

<!-- START_5887f945275d9b4e8f0e352e3412e543 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/department/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/department/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/department/{did}/edit`


<!-- END_5887f945275d9b4e8f0e352e3412e543 -->

<!-- START_feb54a9f69586ed243c6eb67221bddbb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/department/1/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/department/1/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/department/{did}/delete`


<!-- END_feb54a9f69586ed243c6eb67221bddbb -->

<!-- START_cd4d402d72292d90b7c8a00ad06d8c23 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/designation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/designation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/designation`


<!-- END_cd4d402d72292d90b7c8a00ad06d8c23 -->

<!-- START_6515da8b181acf0f26977e07e8ab38bb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/admin/designation/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/designation/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/designation/create`


<!-- END_6515da8b181acf0f26977e07e8ab38bb -->

<!-- START_ba8733b842fa8edc4f18008a64978e49 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/designation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/designation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET admin/designation/{des}/edit`


<!-- END_ba8733b842fa8edc4f18008a64978e49 -->

<!-- START_55bea7611c6088aeab32943da1ba8838 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/designation/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/designation/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/designation/{des}/edit`


<!-- END_55bea7611c6088aeab32943da1ba8838 -->

<!-- START_b29159b90f65f710e32b35b10c350d9c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/admin/designation/1/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/designation/1/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/designation/{des}/delete`


<!-- END_b29159b90f65f710e32b35b10c350d9c -->

<!-- START_dfe6a89977a87e0ed21940f2356994d8 -->
## admin/designation/priority/set
> Example request:

```bash
curl -X PUT \
    "http://localhost/admin/designation/priority/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/designation/priority/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/designation/priority/set`


<!-- END_dfe6a89977a87e0ed21940f2356994d8 -->

<!-- START_680ad66610a30294586f640d19c38c42 -->
## admin/profilepic/{fid}/upload
> Example request:

```bash
curl -X POST \
    "http://localhost/admin/profilepic/1/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/profilepic/1/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/profilepic/{fid}/upload`


<!-- END_680ad66610a30294586f640d19c38c42 -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


