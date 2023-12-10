# Resultado de loterías en Colombia

---

- [Resultados](#section-1)
- - [Obtener Resultados para una Fecha Específica](#section-2)

<a name="section-1"></a>
## Recurso: `/api/results`

**Descripción:**
Este endpoint proporciona resultados de loterías para la fecha actual o para una fecha específica, dependiendo de la forma de utilización.

**Método HTTP:** `GET`

### Formas de Utilización:

#### 1. Obtener Resultados para la Fecha Actual

**Endpoint:** `/api/results`

**Ejemplo de Respuesta Exitosa:**
```json
{
    "status": "success",
    "data": [
        {
            "lottery": "CARIBEÑA DIA",
            "slug": "caribena-dia",
            "date": "2023-02-01",
            "result": "4185",
            "series": "002"
        },
        {
            "lottery": "CHONTICO NOCHE",
            "slug": "chontico-noche",
            "date": "2023-02-01",
            "result": "9637",
            "series": "000"
        }
        // Otros resultados...
    ]
}
```

**Campos:**
- `lottery` (string): El nombre de la lotería.
- `slug` (string): El identificador único de la lotería.
- `date` (string): La fecha para la que se obtuvieron los resultados.
- `result` (string): El número ganador.
- `series` (string): La serie asociada al número ganador.

**Códigos de Estado:**

- `200 OK`: La solicitud fue exitosa, y se devolvieron los resultados de todas las loterías para la fecha actual.
- `404 Not Found`: No se encontraron resultados para la fecha actual.

**Uso:**
Realiza una solicitud GET a este endpoint para obtener los resultados de todas las loterías para la fecha actual.

```bash
curl -X GET https://tu-api.com/api/results
```

<a name="section-2"></a>
## Recurso: `/api/results/{date}`

**Ejemplo de Respuesta Exitosa:**
```json
{
    "status": "success",
    "data": [
        {
            "lottery": "CARIBEÑA DIA",
            "slug": "caribena-dia",
            "date": "2023-02-01",
            "result": "4185",
            "series": "002"
        },
        {
            "lottery": "CHONTICO NOCHE",
            "slug": "chontico-noche",
            "date": "2023-02-01",
            "result": "9637",
            "series": "000"
        }
        // Otros resultados...
    ]
}
```

**Uso:**
Realiza una solicitud GET a este endpoint con una fecha específica para obtener los resultados de todas las loterías para esa fecha.

```bash
curl -X GET https://tu-api.com/api/results/2023-02-01
```
